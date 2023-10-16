let programmeertalen = ["PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"];

programmeertalen.push("Python", "Swift");

programmeertalen.sort();

for (let taal of programmeertalen) {
  console.log(taal);
}

let aantalItems = programmeertalen.length;
console.log("Aantal items in de array: " + aantalItems);