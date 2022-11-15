import requests
import json
from bs4 import BeautifulSoup

films = []

for i in range(1, 31):
    url = f"https://www.allocine.fr/film/meilleurs/?page={i}"
    res = requests.get(url)
    soup = BeautifulSoup(res.text, "html.parser")
    
    htmlFilms = soup.find_all("li", class_="mdl")
    for htmlFilm in htmlFilms:
        film = {}
        film["title"] = htmlFilm.find("a", class_="meta-title-link").text
        print(film["title"])
        film["url"] = htmlFilm.find("a", class_="meta-title-link")["href"]
        film["duree"] = htmlFilm.find("div", class_="meta-body-info").text[0].strip()

        try:
            film["date"] = htmlFilm.find("span", class_="date").text
        except:
            pass

        film["genres"] = [x.text for x in htmlFilm.find_all("a", class_="xXx")]
        try:
            film["realisateur"] = htmlFilm.find("div", class_="meta-body-direction").find("a").text
        except:
            pass
        
        film["cast"] = [x.text for x in htmlFilm.find("div", class_="meta-body-actor").find_all("a")]
        film["synopsis"] = htmlFilm.find("div", class_="synopsis").text.strip()
        for rate in htmlFilm.find_all("div", class_="rating-item"):
            try :
                if rate.find("a", class_="rating-title").text.strip() == "Presse":
                    film["note-presse"] = rate.find("span", class_="stareval-note").text
                elif rate.find("a", class_="rating-title").text.strip() == "Spectateurs":
                    film["note-spectateurs"] = rate.find("span", class_="stareval-note").text
            except:
                pass
    
        films.append(film)

print(len(films))

#with open("./films.json", "w") as fic:
jsonString = json.dumps(films)
jsonFile = open("./films.json", "w")
jsonFile.write(jsonString)
jsonFile.close()