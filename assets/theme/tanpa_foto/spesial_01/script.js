const rootElement = document.querySelector(":root");
const audioIconWrapper = document.querySelector(".audio-icon-wrapper");
const audioIcon = document.querySelector(".audio-icon-wrapper i");
const song = document.querySelector("#song");
let isPlaying = false;

function disableScroll() {
	scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

	window.onscroll = function () {
		window.scrollTo(scrollTop, scrollLeft);
	};

	rootElement.style.scrollBehavior = "auto";
}

function enableScroll() {
	const fadeElements = document.getElementById("fade-in-slide-satu");
	fadeElements.style.opacity = 1;

	// Remove the custom scroll lock
	window.onscroll = function () {};

	// Enable smooth scrolling globally
	rootElement.style.scrollBehavior = "smooth";

	// Hide the 'slide-pembuka' section
	const slidePembuka = document.getElementById("slide-pembuka");
	if (slidePembuka) {
		slidePembuka.style.display = "none"; // Hide the opening section
	}

	// Optionally, scroll to 'slide-satu' after hiding the 'slide-pembuka'
	const slideSatu = document.getElementById("slide-satu");
	if (slideSatu) {
		slideSatu.scrollIntoView({ behavior: "smooth", block: "start" }); // Smooth scroll to 'slide-satu'
	}

	playAudio();
}

function playAudio() {
	song.volume = 0.5;
	song.play();
	audioIconWrapper.style.display = "flex";
	isPlaying = true;
}

audioIconWrapper.onclick = function () {
	if (isPlaying) {
		song.pause();
		audioIcon.classList.remove("bi-disc");
		audioIcon.classList.add("bi-pause-circle");
	} else {
		song.play();
		audioIcon.classList.remove("bi-pause-circle");
		audioIcon.classList.add("bi-disc");
	}

	isPlaying = !isPlaying;
};

audioIconWrapper.onclick = function () {
	if (isPlaying) {
		song.pause();
		audioIcon.classList.remove("bi-disc");
		audioIcon.classList.add("bi-pause-circle");
	} else {
		song.play();
		audioIcon.classList.remove("bi-pause-circle");
		audioIcon.classList.add("bi-disc");
	}

	isPlaying = !isPlaying;
};

disableScroll();

// animasi fade in on scroll
// const titleTest = document.querySelector('.slide-satu .title');

// document.addEventListener("scroll", function(){
//   titleTest.classList.add("")
// })

window.onload = function () {
	const paragraph = document.getElementById("fade-in");
	paragraph.style.opacity = 1; // Mengubah opacity menjadi 1 untuk menampilkan paragraf
};

window.addEventListener("scroll", function () {
	const fadeElements = document.querySelectorAll(".fade-in");
	fadeElements.forEach((element) => {
		const elementTop = element.getBoundingClientRect().top;
		const windowHeight = window.innerHeight;

		if (elementTop < windowHeight - 100) {
			// 100px sebelum elemen masuk tampilan
			element.classList.add("visible");
		}
	});
});
