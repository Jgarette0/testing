const classrooms = document.querySelectorAll(".green");
const dialog = document.getElementById("dialog");
const timerDialog = document.getElementById("timer-dialog");
const close = document.querySelector(".close-button");
const submits = document.querySelector(".submits");
const inputField = document.querySelector('input[type="tel"]');
const form = document.querySelector(".form");
const submittedSvg = document.querySelector(".submits-svg");
const closedSvg = document.querySelector(".close-svg");
const send = document.querySelector(".send");
const show = document.getElementById("show");
const dialog2 = document.querySelector(".timer-dialog");

classrooms.forEach((classroom) => {
  classroom.addEventListener("click", () => {
    dialog.showModal();
  });
});

close.addEventListener("click", () => {
  dialog.close();
});

submits.addEventListener("click", () => {
  setTimeout(() => {
    dialog2.showModal();
  }, 500);
});

form.addEventListener("submit", function (event) {
  event.preventDefault();
  document.querySelector('input[type="tel"]').value = "";
});

send.addEventListener("click", () => {
  dialog.close();
  dialog2.close();
});
show.addEventListener("click", () => {
  dialog2.showModal();
});
