//(SPHARM) by Salaudeen Hammad (07032750559)

// Selecing elements
const drugName = document.getElementById("drugname");
const searchBtn = document.getElementById("searchbtn");
const searchResult = document.querySelector("#searchresult");
const searchDosage = document.querySelector("#searchdosage");
const searchRelated = document.querySelector("#searchrelated");


// Show drug ingredients
function fetchDrugDetails() {
    let url = `https://iterar-mapi-us.p.rapidapi.com/api/${drugName.value}/substances.json`

    fetch(url, {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "iterar-mapi-us.p.rapidapi.com",
            "x-rapidapi-key": "086484eaf3mshc6b774b3a785c64p16ed86jsn6ecd85ad7d77"
        }
    })
        .then(response => response.json())
        .then(drugIng => {
            let output = `<h2>Search Results on ${drugName.value}:</h2>`
            output += `<h3>Active Ingredients:</h3>`;
            output += `<p style = "text-align: center; font-size: 16px;">- ${drugName.value} contains the following active ingredients: <b>${drugIng}</b></p>`;
            output += '<hr>';
            searchResult.innerHTML = output;
        });
};

// Show drug dosage
function fetchDrugDosage() {
    let urldos = `https://iterar-mapi-us.p.rapidapi.com/api/${drugName.value}/doses.json`;
    fetch(urldos, {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "iterar-mapi-us.p.rapidapi.com",
            "x-rapidapi-key": "086484eaf3mshc6b774b3a785c64p16ed86jsn6ecd85ad7d77"
        }
    })
        .then(response => response.json())
        .then(drugDos => {
            let outputDos = `<h3>Available Dosages:</h3>`
            outputDos += `<p style = "text-align: center; font-size: 16px;">- ${drugName.value} has the following available dosages: <b>${drugDos}</b></p>`;
            outputDos += '<br><br>';
            searchDosage.innerHTML = outputDos;
        });
};

// Show drug related words
/*
function fetchDrugRelated (){
    let urldos = `https://iterar-mapi-us.p.rapidapi.com/api/autocomplete?query=${drugName.value}`;
    fetch(urldos, {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "iterar-mapi-us.p.rapidapi.com",
		"x-rapidapi-key": "086484eaf3mshc6b774b3a785c64p16ed86jsn6ecd85ad7d77"
	}
})
    .then(response => response.json())
    .then(drugRel => {
                    let outputRel = `<h3>Related to ${drugName.value}:</h3>`
                    outputRel += `<p style = "text-align: center; font-size: 16px;">- ${drugName.value}'s related searches: <b>${drugRel}</b></p>`;
                    outputRel += '<br>';
                    searchRelated.innerHTML = outputRel;
                } );
                console.log(drugRel)
             };
*/

//(SPHARM) by Salaudeen Hammad (07032750559)