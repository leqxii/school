const autos = ["Saab", "Volvo", "BMW"];
const prijzen = [17000, 22000, 21000];

function toevoegenAuto() {
  const autoInput = document.getElementById("auto").value;
  const prijsInput = parseFloat(document.getElementById("prijs").value);

  autos.push(autoInput);
  prijzen.push(prijsInput);

  vernieuwAutoLijst();
}

function vernieuwAutoLijst() {
  const autoLijstDiv = document.getElementById("autoLijst");
  const totaalPrijsDiv = document.getElementById("totaalPrijs");
  let totaalPrijs = 0;

  let autoLijstHTML = "";
  for (let i = 0; i < autos.length; i++) {
    autoLijstHTML += `De ${autos[i]} kost €${prijzen[i]} <br>`;
    totaalPrijs += prijzen[i];
  }

  autoLijstDiv.innerHTML = autoLijstHTML;
  totaalPrijsDiv.innerHTML = `De totaal prijs van de ${autos.length} auto's is: €${totaalPrijs}`;
}

vernieuwAutoLijst();
