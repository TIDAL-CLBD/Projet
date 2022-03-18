window.onload = function init(){
    fetch_db();
}

function fetch_db(keywordSearch=false){

    let values;
    if(!keywordSearch){
        //recherche par filtres
        values = getSelection();
        values[0] = 0;
    }else{
        //recherche par mot-clef
        values = [1, document.getElementById("searchbar").value];
    }
    console.log(values);
    var valuesStr = JSON.stringify(values);

    fetch('../php/fetch.php', {
            method: 'POST',
            headers: {
                'Content-type': 'application/json; charset=UTF-8'
            },
            body: valuesStr
        })
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

function getSelection(){
    var values = []

    var selection = document.getElementsByClassName("filter");
    for (var i = 0; i < selection.length; i++) {
        value = selection[i].value;
        values.push(value);
    }
    return values
}

function gridcss(jobj){
    document.getElementById("table").innerHTML = "";
    // Ajouter les titres dans le JS et pas dans le HTMl pour pouvoir clear à chaque fois
    console.log(jobj);


    let headRow = document.createElement("tr");
    let head1 = document.createElement("th");
    let head2 = document.createElement("th");
    head1.innerHTML = "Pathologie";
    head2.innerHTML = "Symptômes";
    document.getElementById("table").appendChild(headRow);
    headRow.appendChild(head1);
    headRow.appendChild(head2);

    let i = 1;
    for (const x of jobj){
        let desc = x[1]; //Desc patho

        let row = document.createElement("tr");

        let descEntry = document.createElement("td");
        descEntry.innerHTML = desc;

        let symptEntry = document.createElement("td");
        symptomes = "";
        for (const sympt of x[2]) { 
            symptomes += sympt + ", ";
        }
        symptomes = symptomes.slice(0,-2);
        symptEntry.innerHTML = symptomes;

        document.getElementById("table").appendChild(row);
        row.appendChild(descEntry);
        row.appendChild(symptEntry);

        i++;
    }
    if(i == 1){
        let row = document.createElement("tr");
        let err = document.createElement("td");
        let msg = document.createElement("td");
        err.innerHTML = "Erreur :";
        msg.innerHTML = "Aucun résultat pour ces critères";
        document.getElementById("table").appendChild(row);
        row.appendChild(err);
        row.appendChild(msg);
    }
}

