const inputNaam = document.getElementById("naam");
const inputLeeftijd = document.getElementById("leeftijd");
const outputDiv = document.getElementById("output");

inputNaam.addEventListener("blur", function () {
  outputDiv.textContent = "onBlur-event geactiveerd.";
});

inputLeeftijd.addEventListener("keyup", function (e) {
  outputDiv.textContent += ` ${e.code} ${inputLeeftijd.value.length}`;
});
