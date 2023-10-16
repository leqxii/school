function genereerOutput() {
  let voornaam = document.getElementById("voornaam").value;
  let achternaam = document.getElementById("achternaam").value;
  let leeftijd = document.getElementById("leeftijd").value;
  let jaartal = document.getElementById("jaartal").value;

  let nieuweLeeftijd = parseInt(leeftijd) + parseInt(jaartal);
  let outputdiv =
    "Hallo ik ben " +
    voornaam +
    " " +
    achternaam +
    ". Over " +
    jaartal +
    " jaar ben ik " +
    nieuweLeeftijd +
    " jaar!";
  document.getElementById("output").innerHTML = outputdiv;
}
