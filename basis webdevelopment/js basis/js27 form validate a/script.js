const voornaamInput = document.getElementById("voornaam");
const achternaamInput = document.getElementById("achternaam");
const adresInput = document.getElementById("adres");
const postcodeInput = document.getElementById("postcode");
const plaatsInput = document.getElementById("plaats");
const outputDiv = document.getElementById("output");

voornaamInput.addEventListener("blur", checkInhoud);
achternaamInput.addEventListener("blur", checkInhoud);
adresInput.addEventListener("blur", checkInhoud);
postcodeInput.addEventListener("blur", checkInhoud);
plaatsInput.addEventListener("blur", checkInhoud);

function checkInhoud() {
  const voornaamWaarde = voornaamInput.value;
  const achternaamWaarde = achternaamInput.value;
  const adresWaarde = adresInput.value;
  const postcodeWaarde = postcodeInput.value;
  const plaatsWaarde = plaatsInput.value;

  if (voornaamWaarde === "") {
    voornaamInput.style.backgroundColor = "red";
  } else {
    voornaamInput.style.backgroundColor = "green";
  }

  if (achternaamWaarde === "") {
    achternaamInput.style.backgroundColor = "red";
  } else {
    achternaamInput.style.backgroundColor = "green";
  }

  if (adresWaarde === "") {
    adresInput.style.backgroundColor = "red";
  } else {
    adresInput.style.backgroundColor = "green";
  }

  if (postcodeWaarde === "") {
    postcodeInput.style.backgroundColor = "red";
  } else {
    postcodeInput.style.backgroundColor = "green";
  }

  if (plaatsWaarde === "") {
    plaatsInput.style.backgroundColor = "red";
  } else {
    plaatsInput.style.backgroundColor = "green";
  }

  if (
    voornaamWaarde === "" ||
    achternaamWaarde === "" ||
    adresWaarde === "" ||
    postcodeWaarde === "" ||
    plaatsWaarde === ""
  ) {
    outputDiv.innerHTML = "<h2>Foutmeldingen:</h2>";
    if (voornaamWaarde === "") {
      outputDiv.innerHTML += "Voornaam mag niet leeg zijn.<br>";
    }
    if (achternaamWaarde === "") {
      outputDiv.innerHTML += "Achternaam mag niet leeg zijn.<br>";
    }
    if (adresWaarde === "") {
      outputDiv.innerHTML += "Adres mag niet leeg zijn.<br>";
    }
    if (postcodeWaarde === "") {
      outputDiv.innerHTML += "Postcode mag niet leeg zijn.<br>";
    }
    if (plaatsWaarde === "") {
      outputDiv.innerHTML += "Plaats mag niet leeg zijn.<br>";
    }
  } else {
    outputDiv.innerHTML = "";
  }
}
