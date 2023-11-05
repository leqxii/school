var url = "https://15euros.nl/api/bier_basic.php";

function fLaadBier_plainJS() {
  console.log("fLaadBier_plainJS() aangeroepen");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      bierJSON = this.responseText;
      json = JSON.parse(bierJSON);
      console.log("Bier, geladen met AJAX in plain Javascript:", json);
      fJson2Html(json, "plain Javascript");
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function fJson2Html(data, method) {
  const tableBody = document.getElementById("table-body");

  data.forEach(function (bier) {
    const row = tableBody.insertRow();
    row.insertCell(0).innerHTML = bier.id;
    row.insertCell(1).innerHTML = bier.naam;
    row.insertCell(2).innerHTML = bier.brouwer;
    row.insertCell(3).innerHTML = (bier.perc * 100).toFixed(1) + "%";
    row.insertCell(4).innerHTML = bier.gisting;
    row.insertCell(5).innerHTML = "€ " + bier.inkoop_prijs;
  });

  console.log("Tabel gevuld met data geladen via " + method);
}

fLaadBier_plainJS();
