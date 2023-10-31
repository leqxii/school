const inputElement = document.querySelector('input[type="text"]');
const buttonElement = document.querySelector('input[type="button"]');
const outputElement = document.getElementById('output');

function toonTafels() {
  const number = inputElement.value;

  if (!isNaN(number)) {
    outputElement.innerHTML = '';

    for (let i = 1; i <= 10; i++) {
      const result = number * i;
      const tableRow = document.createElement('p');
      tableRow.textContent = `${i} x ${number} = ${result}`;
      outputElement.appendChild(tableRow);
    }
  } else {
    outputElement.innerHTML = 'Voer een geldig getal in.';
  }
}

buttonElement.addEventListener('click', toonTafels);
