console.log("js");

function verif_mdp()
{
var champA = document.getElementById("nouveau_mdp").value;
var champB = document.getElementById("rep_nouveau_mdp").value;
 
if(champA == champB)
    {
        document.form.submit();
        return true;
    }
    else
    {
        alert("Les mots de passe ne sont pas identiques");
        return false;
    }
}