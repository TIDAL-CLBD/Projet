window.onload = function init(){
    fetch_db(true);
}

function fetch_db(onload=false){

    let values = getSelection();
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
    //Ajouter les titres dans le JS et pas dans le HTMl pour pouvoir clear à chaque fois
    console.log(jobj);
    

    let headRow = document.createElement("tr");
    let head1 = document.createElement("th");
    let head2 = document.createElement("th");
    head1.innerHTML = "Index";
    head2.innerHTML = "Description";
    document.getElementById("table").appendChild(headRow);
    headRow.appendChild(head1);
    headRow.appendChild(head2);
    
    patho.innerHTML = i.toString();
    for (const x of jobj){
        let i = 1;
        let desc = x[3]; //Desc objet
        console.log(desc);

        let row = document.createElement("tr");

        let patho = document.createElement("td");
        patho.innerHTML = i.toString();
        console.log(desc);
        i++;

        let sympt = document.createElement("td");
        sympt.innerHTML = desc;

        document.getElementById("table").appendChild(row);
        row.appendChild(patho);
        row.appendChild(sympt);
    }
}

