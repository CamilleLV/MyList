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