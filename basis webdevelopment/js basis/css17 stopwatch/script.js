let timerInterval;
let minutes = 0;
let seconds = 0;
let milliseconds = 0;

function fStart() {
	clearInterval(timerInterval);

	timerInterval = setInterval(function () {
		milliseconds++;
		if (milliseconds === 100) {
			seconds++;
			milliseconds = 0;
		}
		if (seconds === 60) {
			minutes++;
			seconds = 0;
		}

		updateTimerDisplay();
	}, 10);

	document.getElementById("startTimer").disabled = true;
}

function fStop() {
	clearInterval(timerInterval);
	document.getElementById("startTimer").disabled = false;
}

function fReset() {
	clearInterval(timerInterval);
	minutes = 0;
	seconds = 0;
	milliseconds = 0;
	updateTimerDisplay();
	document.getElementById("startTimer").disabled = false;
}

function updateTimerDisplay() {
	const formattedMinutes = String(minutes).padStart(2, "0");
	const formattedSeconds = String(seconds).padStart(2, "0");
	const formattedMilliseconds = String(milliseconds).padStart(2, "0");

	const timerDisplay = document.querySelector(".timerDisplay");
	timerDisplay.textContent = `${formattedMinutes}:${formattedSeconds}:${formattedMilliseconds}`;
}
