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
            //return res.text();
            let text = res.text();
            var jobj = JSON.parse(text)
            for (const x in jobj){
                let desc = x[3] //Desc objet
                console.log(desc)
            }

        })
        .then(function(text){

        })
        .catch(function(error){
            console.log('erreur fetch');
        });
}