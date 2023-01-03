import requests
import json
from bs4 import BeautifulSoup
#61498

def scrapping(x):
    films = []
    for i in range(x, x+2000):
        test = True
        url = f"https://www.allocine.fr/film/fichefilm_gen_cfilm={i}.html"
        res = requests.get(url)
        soup = BeautifulSoup(res.text, "html.parser")
        
        film = {}
        film["id"] = i

        try:
            film["title"] = soup.find("div", class_="titlebar-title titlebar-title-lg").text
        except:
            test = False
            film["title"] = ""

        try:
            film["url_img"] = soup.find("img", class_="thumbnail-img")["src"]
        except:
            test = False
            film["url_img"] = ""

        try:
            film["date_sortie"] = soup.find("div", class_="meta-body-item meta-body-info").text.split("\n")[2]
        except:
            test = False
            film["date_sortie"] = ""

        try:
            film["duree"] = soup.find("div", class_="meta-body-item meta-body-info").text.split("\n")[8]
        except:
            test = False
            film["duree"] = ""

        try:
            film["genre_1"] = soup.find("div", class_="meta-body-item meta-body-info").text.split("\n")[10]
        except:
            test = False
            film["genre_1"] = ""
        try:
            film["genre_2"] = soup.find("div", class_="meta-body-item meta-body-info").text.split("\n")[11]
        except:
            #test = False
            film["genre_2"] = ""
        try:
            film["genre_3"] = soup.find("div", class_="meta-body-item meta-body-info").text.split("\n")[12]
        except:
            #test = False
            film["genre_3"] = ""

        try:
            film["realisateur"] = soup.find("div", class_="meta-body-item meta-body-direction").text.split("\n")[2]
        except:
            test = False
            film["realisateur"] = ""

        try:
            film["acteur_1"] = soup.find("div", class_="meta-body-item meta-body-actor").text.split("\n")[2]
        except:
            test = False
            film["acteur_1"] = ""
        try:
            film["acteur_2"] = soup.find("div", class_="meta-body-item meta-body-actor").text.split("\n")[3]
        except:
            #test = False
            film["acteur_2"] = ""
        try:
            film["acteur_3"] = soup.find("div", class_="meta-body-item meta-body-actor").text.split("\n")[4]
        except:
            #test = False
            film["acteur_3"] = ""
        
        try:
            film["synopsis"] = soup.find("div", class_="content-txt").text
        except:
            test = False
            film["synopsis"] = ""

        try:
            film["note_spectateurs"] = soup.find("span", class_="stareval-note").text
        except:
            test = False
            film["note_spectateurs"] = ""

        if (test):
            films.append(film)

    #with open("./films.json", "w") as fic:
    jsonString = json.dumps(films)
    jsonFile = open(f"./films{x//2000}.json", "w")
    jsonFile.write(jsonString)
    jsonFile.close()
    print(x//2000)

for i in range(0,150):
    print("debut :", i)
    scrapping(i*2000)