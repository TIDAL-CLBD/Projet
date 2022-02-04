window.onload = function gridcss(){
    let Maladies = document.getElementsByClassName("M");
    let Symptomes = document.getElementsByClassName("S");

    let n = Maladies.length;
    let k = 0;
    while(k<n){
        Maladies[k].style.gridRow = 4+k;
        Symptomes[k].style.gridRow = 4+k;
        k++;
    }
    console.log("js ok");
}

function fetch_db(){
    fetch('../php/fetch.php', {method: 'get',})
        .then(function(res) {
            return res.text();
        })
        .then(function(text){
            document.getElementById("resultat").innerHTML=text;
        })
        .catch(function(error){
            console.log('erreur fetch');
        });
}