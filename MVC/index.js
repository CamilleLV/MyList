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

/* Slider */

var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
    },
  });
  