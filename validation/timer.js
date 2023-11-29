const startButtons = document.querySelectorAll(".send");
const stopButtons = document.querySelectorAll(".stopCountdown");
const timerDisplays = document.querySelectorAll(".timer");
const countdownDivs = document.querySelectorAll(".countdown");
const timeSelects = document.querySelectorAll(".timeSelect");

const startCountdown = (index) => {
  let selectedTime = parseInt(timeSelects[index].value);
  countdownDivs[index].style.display = "block";

  const stopButton = stopButtons[index];
  stopButton.style.display = "block";

  const countdownInterval = setInterval(function () {
    selectedTime--;
    timerDisplays[index].innerText = selectedTime + " minutes";

    if (selectedTime <= 0) {
      clearInterval(countdownInterval);
      countdownDivs[index].style.backgroundColor = "red";
      timerDisplays[index].innerHTML = "";
      stopButton.style.display = "none";
    }
  }, 1000);
};

startButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    startCountdown(index);
  });
});

stopButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const index = [...stopButtons].indexOf(this);
    countdownDivs[index].style.display = "none";
    clearInterval(countdownInterval);
  });
});
