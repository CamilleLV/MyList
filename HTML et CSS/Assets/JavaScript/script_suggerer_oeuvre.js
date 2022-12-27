const film = document.getElementById('film');
const serie = document.getElementById('serie');
const livre = document.getElementById('livre');
const duree = document.getElementById('duree');
const duree_label = document.getElementById('duree_label');
const nb_ep = document.getElementById('nb_ep');
const nb_ep_label = document.getElementById('nb_ep_label');
const duree_ep = document.getElementById('duree_ep');
const duree_ep_label = document.getElementById('duree_ep_label');
const nb_tome = document.getElementById('nb_tome');
const nb_tome_label = document.getElementById('nb_tome_label');

function affiche_selon_choix(action){
    for (let i=1; i<4;i++) {
        if (action == "Film")
            {
            duree.style.display="block";
            duree_label.style.display="block";

            nb_ep.style.display="none";
            nb_ep_label.style.display="none";

            duree_ep.style.display="none";
            duree_ep_label.style.display="none";

            nb_tome.style.display="none";
            nb_tome_label.style.display="none";

            duree.required=true;
            nb_ep.style.required=false;
            duree_ep.required=false;
            nb_tome.required=false;

            film.checked=true;
            serie.checked=false;
            livre.checked=false;
        }
    if (action == "Série")
        {
            duree.style.display="none";
            duree_label.style.display="none";

            nb_ep.style.display="block";
            nb_ep_label.style.display="block";

            duree_ep.style.display="block";
            duree_ep_label.style.display="block";

            nb_tome.style.display="none";
            nb_tome_label.style.display="none";

            duree.required=false;
            nb_ep.style.required=true;
            duree_ep.required=true;
            nb_tome.required=false;

            film.checked=false;
            serie.checked=true;
            livre.checked=false;
        }
    if (action == "Livre") {
            duree.style.display="none";
            duree_label.style.display="none";

            nb_ep.style.display="none";
            nb_ep_label.style.display="none";

            duree_ep.style.display="none";
            duree_ep_label.style.display="none";

            nb_tome.style.display="block";
            nb_tome_label.style.display="block";

            duree.required=false;
            nb_ep.style.required=false;
            duree_ep.required=false;
            nb_tome.required=true;
            
            film.checked=false;
            serie.checked=false;
            livre.checked=true;
        }
    }   
}