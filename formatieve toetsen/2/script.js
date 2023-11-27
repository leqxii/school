document.addEventListener('DOMContentLoaded', function () {
  var form = document.querySelector('form');

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    displayMessage();
    clearForm();
  });

  function displayMessage() {
    var firstName = document.getElementById('first-name').value;
    alert('Dankjewel ' + firstName + ' voor je aanmelding!');
  }

  function clearForm() {
    document.getElementById('first-name').value = '';
    document.getElementById('last-name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('text').value = '';
  }

});
