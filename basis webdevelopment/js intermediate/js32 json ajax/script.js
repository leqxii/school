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
