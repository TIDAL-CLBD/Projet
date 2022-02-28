window.onload = function init(){
    fetch_db();
}

function fetch_db(){
    fetch('../php/fetch.php', {method: 'get',})
        .then(function(res) {
            return res.text();
        })
        .then(function(text){
            gridcss(JSON.parse(text));
            return 0;
        })
        .catch(function(error){
            return 1;
        });
}

function fetch_db_filtres(){
    console.log(M1.checked)
    fetch('../php/fetch.php', {method: 'get',})
        .then(function(res) {
            if (M1.checked == true) {
                console.log(2);
                
                //console.log(res.text());
                console.log(res.bodyUsed);
                //console.log(res.text().includes(zang));
                if (res.text().includes(zang) == true) {
                    console.log(3);
                    return res.text();
                }
                else{
                    console.log(4);
                }
                console.log(res.bodyUsed);

                
            }
            console.log(5);
            
        })
        .then(function(text){
            gridcss(JSON.parse(text));
            return 0;
        })
        .catch(function(error){
            return 1;
        });
}

function gridcss(jobj){
    //document.getElementById("table").innerHTML = "";
    //Ajouter les titres dans le JS et pas dans le HTMl pour pouvoir clear à chaque fois
    for (const x of jobj){
        let desc = x[3]; //Desc objet
        console.log(desc);

        let row = document.createElement("tr");

        let patho = document.createElement("td");
        patho.innerHTML = desc;

        let sympt = document.createElement("td");
        sympt.innerHTML = "(placeholder)";

        document.getElementById("table").appendChild(row);
        row.appendChild(patho);
        row.appendChild(sympt);
    }
}