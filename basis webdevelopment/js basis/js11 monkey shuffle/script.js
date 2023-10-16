var shuffleButton = document.getElementById("shuffleButton");

shuffleButton.addEventListener("click", function () {
  var images = document.getElementsByTagName("img");
  var random = 0;
  var randomNumbers = [];

  while (randomNumbers.length < 9) {
    random = Math.floor(Math.random() * 9) + 1;
    if (randomNumbers.indexOf(random) == -1) {
      randomNumbers.push(random);
    }
  }

  random = 0;
  for (var i = 0; i < images.length; i++) {
    images[i].src = "img/image" + randomNumbers[random] + ".png";
    random++;
  }
});
