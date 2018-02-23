var mobileWidth = 767;
var hamburgerBtn = document.getElementById("hamburger-btn");
var header = document.getElementById("header");
	if (window.innerWidth > mobileWidth) {
		hamburgerBtn.style.display = 'none';
		header.style.display = "block";
	} else {
		hamburgerBtn.style.display = 'block';
		header.style.display = "none";
	}
	

document.body.onresize = function () {
	"use strict";
	if (window.innerWidth > mobileWidth) {
		hamburgerBtn.style.display = 'none';
		header.style.display = "block";
	} else {
		hamburgerBtn.style.display = 'block';
		header.style.display = "none";
	}
};

function showMenu() {
	"use strict";
	if (header.style.display === "none") {
		header.style.display = "block";
	} else {
		header.style.display = "none";
	}
			hamburgerBtn.style.display = 'block';

}

hamburgerBtn.onclick = showMenu;
