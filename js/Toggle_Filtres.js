var Toggle_on = true;

function Toggle_Filtres()
{
    
    if (Toggle_on == false) {
        MenuF.style = "display: list-item";
        Toggle_on = true;
    }

    else {
        MenuF.style = "display: none";
        Toggle_on = false;
    }
    //MenuF.style = "display: none"
    console.log("bouton cliqué");
    console.log(Toggle_on);

}