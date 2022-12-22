console.log("JS");

function affiche_selon_choix(action){
    console.log("JS2");
    for (let i=1; i<4;i++) {
 	if (document.getElementById('film'+i).checked)
	{

}
}
    if (action == "Film")
    {
        document.getElementById('duree').style.display="block";
        document.getElementById('duree_label').style.display="block";

        document.getElementById('nb_ep').style.display="none";
        document.getElementById('nb_ep_label').style.display="none";

        document.getElementById('duree_ep').style.display="none";
        document.getElementById('duree_ep_label').style.display="none";

        document.getElementById('nb_tome').style.display="none";
        document.getElementById('nb_tome_label').style.display="none";
    }
    if (action == "Série")
    {
        document.getElementById('duree').style.display="none";
        document.getElementById('duree_label').style.display="none";

        document.getElementById('nb_ep').style.display="block";
        document.getElementById('nb_ep_label').style.display="block";

        document.getElementById('duree_ep').style.display="block";
        document.getElementById('duree_ep_label').style.display="block";

        document.getElementById('nb_tome').style.display="none";
        document.getElementById('nb_tome_label').style.display="none";
    }
    if (action == "Livre") {
        document.getElementById('duree').style.display="none";
        document.getElementById('duree_label').style.display="none";

        document.getElementById('nb_ep').style.display="none";
        document.getElementById('nb_ep_label').style.display="none";

        document.getElementById('duree_ep').style.display="none";
        document.getElementById('duree_ep_label').style.display="none";

        document.getElementById('nb_tome').style.display="block";
        document.getElementById('nb_tome_label').style.display="block";
    }
}