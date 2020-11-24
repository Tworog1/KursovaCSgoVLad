const getClassAll = (className) => document.querySelectorAll(className);
/* приколямба фото*/
function Pricol() {
    document.querySelector('.style_loga_img').innerHTML = '<img src="images/Vlados.png" class="loga_img" alt="loga">';
}
/* приколямба фото*/

document.addEventListener("DOMContentLoaded", function() {
	for (let i = 0; i < 5; i++) {
		getClass(`.c_${i+1}`).style.display = "none";
		}
});

let getClass = (className) => document.querySelector(className);

function home() {
    window.location = 'index.php';
}

function viewDiv(child) {
	if (getClass(`._${child}`).classList.contains("activ")) {
		getClass(`._${child}`).classList.remove("activ");
		getClass(`.c_${child}`).style.display = "none";
		getClass(`.s_${child}`).innerHTML = "+";
	} else {
		getClass(`._${child}`).classList.add("activ");
		getClass(`.c_${child}`).style.display = "flex";
		getClass(`.s_${child}`).innerHTML = "-";
	}
}


function showAlert() {
    getClass('.alert__wrapper').classList.add('active');
}

function hideAlert() {
    getClass('.alert__wrapper').classList.remove('active');
}

function getGamePage(id) {
    location.href = `index.php?skin=${id}`;
}


function xhrRequests() {
    const genresChoosenList = getCheckedCheckBoxes();
    const request = new XMLHttpRequest();
    const url = `basa.php?genres=${genresChoosenList}`;
    request.open('GET', url);
    request.setRequestHeader('Content-Type', 'application/x-www-form-url');

    request.addEventListener("readystatechange", () => {
        if (request.readyState === 4 && request.status === 200) {
            getClass('.main__rightside .items').innerHTML = request.response;
        }
    });

    request.send();
}

function getCheckedCheckBoxes() {
    const genresList = getClassAll('.orushka');
    let genresChoosenList = "";

  for (let i = 0; i < genresList.length; i++) {
         if (genresList[i].checked) genresChoosenList += `${genresList[i].dataset.name} empty `;
    }

  return genresChoosenList.replace(/ empty /g, ', ').slice(0, -2);
}
