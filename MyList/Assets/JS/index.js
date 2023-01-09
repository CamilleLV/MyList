var sens = 0;  //Pour affichage : 0 = horizontal ; 1 = vertical



/**
 * Mise en place du JavaScript : affichage de la galerie d'oeuvres.
 *
//Tableau des images
var mesImages = new Array();
mesImages[0] = "Assets/Images/i0.jpg";
mesImages[1] = "Assets/Images/i0.jpg";
mesImages[2] = "Assets/Images/i0.jpg";
mesImages[3] = "Assets/Images/i0.jpg";
mesImages[4] = "Assets/Images/i0.jpg";
mesImages[5] = "Assets/Images/i0.jpg";
mesImages[6] = "../Assets/Images/i6.jpg";
mesImages[7] = "../Assets/Images/i7.jpg";
mesImages[8] = "../Assets/Images/i8.jpg";
mesImages[9] = "../Assets/Images/i9.jpg";
mesImages[10] = "../Assets/Images/i10.jpg";

function diaporama() {
    var i, elmt, c, d;

    c = document.getElementById("classiques");
    d = document.getElementById("recommandations");

    if (sens == 1) {
        c.className = "conteneurV";
        d.className = "conteneurV";
    }

    else {
        c.className = "conteneurH";
        elmt = document.createElement("div");
        c.appendChild(elmt);
        c = elmt;
        d.className = "conteneurH";
        elmt = document.createElement("div");
        d.appendChild(elmt);
        d = elmt;
    }


    for (let i = 0; i < mesImages.length; i++) {

        numOeuvre = i.toString();


        elmt = document.createElement("img");
        elmt.id = "idImage" + numOeuvre;
        elmt.src = mesImages[i];
        elmt.width = "200px";
        elmt.height = "100px";
        //elmt.alt = "osef";

        elmt.onclick = function () { alert("coucou " + i.toString()) };

        if (sens == 1)
            elmt.className = "vertical";
        else
            elmt.className = "horizontal";

        c.appendChild(elmt);
    }


    for (let j = 0; j < mesImages.length; j++) {

        numOeuvre = j.toString();


        elmt = document.createElement("img");
        elmt.id = "idImage" + numOeuvre;
        elmt.src = mesImages[j];
        elmt.height = "150px";
        //elmt.margin = "0 -100px";
        //elmt.alt = "osef";

        elmt.onclick = function () { alert("coucou " + j.toString()) };

        if (sens == 1)
            elmt.className = "vertical";
        else
            elmt.className = "horizontal";

        d.appendChild(elmt);
    }

}*/

    /**
    * Test d'Implémentation d'event listener
    */
films_tableau = document.getElementsByClassName("films_titres_et_oeuvres");
for (let i = 0; i < films_tableau.length; i++) {
    console.log(films_tableau[i]);
    films_tableau[i].onclick = function () { 
        films_tableau[i]
        alert("coucou " + i) };
    //films_tableau[i][1].onclick = function () { alert("ALED " + i) };
}


let button = document.getElementById("ajouterFilm");

var urlcourante = document.location.href; 
var id_film = urlcourante.substring (urlcourante.lastIndexOf( "id" )+3 );
button.addEventListener("click", function() {requestToBDD(id_film)});

async function requestToBDD(id_film) {
    if(button.textContent == "Ajouter à ma Liste"){
            let formData = new FormData();
            formData.append('id_film', id_film);
            let request = await fetch(
              "Model/addToList.php",
              { body: formData,
                method: "post" }
            );
            //console.log(request.text);
        
            button.textContent = "Supprimer de ma Liste";
        
            return await request;
    }
    if(button.textContent == "Supprimer de ma Liste"){
            let formData = new FormData();
            formData.append('id_film', id_film);
            let request = await fetch(
              "Model/supprToList.php",
              { body: formData,
                method: "post" }
            );
            //console.log(request.text);
        
            button.textContent = "Ajouter à ma Liste";
        
            return await request;
    }
}


console.log(id_film);
