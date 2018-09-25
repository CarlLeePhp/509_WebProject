/*
* 1. Price data stored in places;
*
*
*
*/

let places = {
	Invercargill: {Wellington: 400, Auckland: 600, Sydney: 1200, Canberra: 1400, Perth: 1600, Melbourne: 1200},
	Wellington: {Invercargill: 200, Auckland: 200, Sydney: 200, Canberra: 200, Perth: 200, Melbourne: 200},
	Auckland: {Invercargill: 200, Wellington: 200, Sydney: 200, Canberra: 200, Perth: 200, Melbourne: 200},
	Sydney: {Invercargill: 200, Wellington: 200, Auckland: 200, Canberra: 200, Perth: 200, Melbourne: 200},
	Canberra: {Invercargill: 200, Wellington: 200, Auckland: 200, Sydney: 200, Perth: 200, Melbourne: 200},
	Perth: {Invercargill: 200, Wellington: 200, Auckland: 200, Sydney: 200, Canberra: 200, Melbourne: 200},
	Melbourne: {Invercargill: 200, Wellington: 200, Auckland: 200, Sydney: 200, Canberra: 200, Perth: 200}
	
};



document.getElementById("btn").onclick = function() {
    var fromPlace = document.getElementById("from").value;
    var toPlace = document.getElementById("to").value;
    if (fromPlace.length == 0) {
        alert("Start place cannot be empty!");
    } else if (toPlace.length == 0) {
        alert("To place cannot be empty!");
    } else if (fromPlace == toPlace) {
		alert("Same place");
	} else {
        document.getElementById("result").value = places[fromPlace][toPlace];
    }
}