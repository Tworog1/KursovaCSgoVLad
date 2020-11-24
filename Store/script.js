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
