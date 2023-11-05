var apiKey;

var xhr = new XMLHttpRequest();
xhr.open("GET", "docs/config.json", true);
xhr.onload = function () {
  if (xhr.status === 200) {
    var config = JSON.parse(xhr.responseText);
    apiKey = config.apiKey;

    if (apiKey) {
      const latitude = 52.520899;
      const longitude = 6.081883;
      const url = `https://api.openweathermap.org/data/2.5/forecast?lat=${latitude}&lon=${longitude}&appid=${apiKey}`;

      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          console.log(data);

          const table = document.querySelector("table");

          data.list.forEach((weatherEntry, index) => {
            const timestamp = new Date(
              data.list[0].dt * 1000 + index * 3 * 60 * 60 * 1000
            );
            const date = timestamp.toISOString().split("T")[0];
            const hours = timestamp.getUTCHours().toString().padStart(2, "0");
            const minutes = timestamp
              .getUTCMinutes()
              .toString()
              .padStart(2, "0");
            const time = `${hours}:${minutes}`;
            const temperature =
              (weatherEntry.main.temp - 273.15).toFixed(2) + " °C";
            const humidity = weatherEntry.main.humidity + " %";
            const pressure = weatherEntry.main.pressure + " hPa";
            const description = weatherEntry.weather[0].description;
            const icon = weatherEntry.weather[0].icon;
            const windSpeed = weatherEntry.wind.speed + " km/h";
            const windDirection = weatherEntry.wind.deg;

            const row = document.createElement("tr");

            row.innerHTML = `
              <td>${date}</td>
              <td>${time}</td>
              <td>${temperature}</td>
              <td>${humidity}</td>
              <td>${pressure}</td>
              <td>${description}</td>
              <td class="icon"><img src="img/${icon}.png"></td>
              <td>${windSpeed}</td>
              <td class="wind-direction">
                <img src="img/arrow.png" style="transform: rotate(${windDirection}deg);">
              </td>
            `;

            table.appendChild(row);
          });
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      console.error("API key is empty or not available.");
    }
  }
};
xhr.send();
