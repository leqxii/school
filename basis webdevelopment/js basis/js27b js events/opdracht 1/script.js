const inputNaam = document.getElementById("naam");
const inputLeeftijd = document.getElementById("leeftijd");
const outputDiv = document.getElementById("output");

inputNaam.addEventListener("blur", function () {
  const inputText = inputNaam.value;
  if (inputText.length >= 2 && inputText.length <= 10) {
    inputNaam.style.backgroundColor = "#355e3b";
    span.textContent = "voldoet aan eisen: tekst langer dan 1 teken en leiner dan 10";
    span.style.color = "#355e3b";
  } else {
    inputNaam.style.backgroundColor = "#e3242b";
    if (inputText.length <2) {
      span.textContent = "de tekst moet minimaal 2 karkaters bevatten";
    } else {
      span.textContent = "de tekst mag maximaal 10 karakters bevatten";
    }
    span.style.color = "#e3242b";
  }
  outputDiv.textContent = "onBlur-event geactiveerd.";
});

inputLeeftijd.addEventListener("keyup", function (e) {
  outputDiv.textContent += ` ${e.code} ${inputLeeftijd.value.length}`;
});
