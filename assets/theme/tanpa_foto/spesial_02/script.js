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

disableScroll();

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

// countdown time
function getNextDay() {
	const today = new Date();
	today.setDate(today.getDate() + 2); // Add 1 day

	const year = today.getFullYear();
	const month = String(today.getMonth() + 1).padStart(2, "0"); // Months are 0-based, so add 1
	const day = String(today.getDate()).padStart(2, "0");

	return `${year}-${month}-${day}`;
}

let dateString = getNextDay();
let dayH = new Date(dateString);

let $days = document.getElementById("days");
let $hours = document.getElementById("hours");
let $minutes = document.getElementById("minutes");
let $seconds = document.getElementById("seconds");

setInterval(function () {
	var now = new Date();
	var timeLeft = (dayH - now) / 1000;
	// console.log("timeleft : "+timeLeft);
	updateclock(timeLeft);
}, 1000);

function updateclock(remainingTime) {
	let days = Math.floor(remainingTime / 86400);
	remainingTime -= days * 86400;

	let hours = Math.floor(remainingTime / 3600) % 24;
	remainingTime -= hours * 3600;

	let minutes = Math.floor(remainingTime / 60) % 60;
	remainingTime -= minutes * 60;

	let seconds = Math.floor(remainingTime % 60);

	$days.innerHTML = Angka(days);
	$hours.innerHTML = Angka(hours);
	$minutes.innerHTML = Angka(minutes);
	$seconds.innerHTML = Angka(seconds);
}

function Angka(number) {
	return number < 10 ? "0" + number : number;
}

// save comment
function saveComment() {
	const url_couple = $('input[name="url_couple"]').val();
	const name = $('input[name="name"]').val();
	const comment = $("#comment").val();
	const attend = $("#attend").val();

	console.log(comment);

	$.ajax({
		url: base_url + "comment/save",
		data: { name, comment, attend, url_couple },
		type: "POST",
		dataType: "JSON",
		success: function (res) {
			if (res.status == "success") {
				Swal.fire({
					title: "Berhasil!",
					icon: "success",
					text: res.message,
					draggable: true,
				});

				$('input[name="name"]').val("");
				$("#comment").val("");
				$("#attend")[0].selectedIndex = 0;

				updateComment();
				updateAttend();
			} else {
				Swal.fire({
					title: "Gagal!",
					icon: "error",
					text: res.message,
					draggable: true,
				});
			}
		},
	});
}

// update commment
function updateComment() {
	const url_couple = $('input[name="url_couple"]').val();
	let HTML = "";
	$.ajax({
		url: base_url + "comment/getComment",
		data: { url_couple },
		type: "POST",
		dataType: "JSON",
		success: function (res) {
			$("#box-komentar").html("");
			$.each(res.comments, function (index, item) {
				const dateFormat = formatDate(item.date);

				HTML += `
                    <div class="komentar">
                        <div class="nama">${item.name}</div>
                        <div class="text">${item.comment}</div>
						<small>${dateFormat}</small>
                    </div>
                `;
			});
			$("#box-komentar").html(HTML);
		},
	});
}

// update attend
function updateAttend() {
	const url_couple = $('input[name="url_couple"]').val();
	let HTML = "";
	$.ajax({
		url: base_url + "theme/attend",
		data: { url_couple },
		type: "POST",
		dataType: "JSON",
		success: function (res) {
			$("#hadir").html(res.attend[0]["hadir"]);
			$("#tidak-hadir").html(res.attend[0]["tidak_hadir"]);
		},
	});
}

function formatDate(dateString) {
	var indonesianDays = [
		"Minggu",
		"Senin",
		"Selasa",
		"Rabu",
		"Kamis",
		"Jumat",
		"Sabtu",
	];
	var indonesianMonths = [
		"Januari",
		"Februari",
		"Maret",
		"April",
		"Mei",
		"Juni",
		"Juli",
		"Agustus",
		"September",
		"Oktober",
		"November",
		"Desember",
	];

	// Parse the string into a JavaScript Date object
	var date = new Date(dateString);

	// Get the day of the week (0-6) and month (0-11) and day (1-31)
	var dayOfWeek = indonesianDays[date.getDay()]; // Get the day name (e.g. "Senin")
	var day = date.getDate(); // Get the day (e.g. 15)
	var month = indonesianMonths[date.getMonth()]; // Get the month name (e.g. "Maret")
	var year = date.getFullYear(); // Get the year (e.g. 2025)
	var hours = date.getHours(); // Get the hours (e.g. 22)
	var minutes = date.getMinutes(); // Get the minutes (e.g. 16)

	// Add leading zero to minutes if needed
	var formattedMinutes = minutes < 10 ? "0" + minutes : minutes;

	// Create the formatted string
	var formattedDate =
		dayOfWeek +
		", " +
		day +
		" " +
		month +
		" " +
		year +
		" - " +
		hours +
		":" +
		formattedMinutes;

	return formattedDate;
}

function clipboard(id) {
	// Get the input field
	var copyText = document.getElementById(id);
	const noRek = copyText.innerText;

	// Copy the text inside the text field
	navigator.clipboard
		.writeText(noRek)
		.then(function () {
			Swal.fire({
				text: "Nomor rekening : " + noRek + " telah di copy",
				customClass: {
					title: "swal2-title", // Custom class for title
					htmlContainer: "swal2-html-container", // Custom class for text
				},
			});
		})
		.catch(function (err) {
			alert("Failed to copy text: " + err);
		});
}

$(document).ready(function () {
	updateComment();
});
