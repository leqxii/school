let studenten = [
  { "voornaam": "Jan", "tv": "", "achternaam": "Jansen", "klas": 1 },
  { "voornaam": "Piet", "tv": "de", "achternaam": "Grote", "klas": 2 },
  { "voornaam": "Kees", "tv": "van", "achternaam": "Klein", "klas": 1 },
  { "voornaam": "Annie", "tv": "", "achternaam": "De Vries", "klas": 3 },
  { "voornaam": "Henk", "tv": "", "achternaam": "Pietersen", "klas": 2 }
];

let aGroups = {
  1: "SD1A",
  2: "SD1B",
  3: "SD2A"
};

let outputDiv = document.getElementById('output');

let table = '<table><tr><th>Voornaam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Klas</th></tr>';
for (let i = 0; i < studenten.length; i++) {
  let student = studenten[i];
  let klas = aGroups[student.klas];
  table += '<tr><td>' + student.voornaam + '</td><td>' + student.tv + '</td><td>' + student.achternaam + '</td><td>' + klas + '</td></tr>';
}

table += '</table>';

outputDiv.innerHTML = table;
