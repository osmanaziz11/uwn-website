function getFlag(country) {
  let countryFlag = document.getElementById('country-flag');
  var flagImg = new Image();
  flagImg.src = `https://countryflagsapi.com/png/${country}`;
  countryFlag.appendChild(flagImg);
}
let tempBox = document.getElementById('temp');
let cityBox = document.getElementById('location');
// let descBox = document.getElementById('tempDesc');
let iconCont = document.getElementById('weather-icon');

let wIcon = iconCont.firstElementChild;

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

// fetch user location
fetch('https://ipinfo.io/json?token=ffdb5ee6f68f63')
  .then((response) => response.json())
  .then((response) => {
    getFlag(response.country);
    //   fetch weather of user location
    fetch(
      `https://api.openweathermap.org/data/2.5/weather?q=${response.city}&appid=17fc6ce84824013715f7763269d0286d&units=metric`
    )
      .then((weaRes) => weaRes.json())
      .then((res) => {
        tempBox.innerText = `${Math.floor(res.main.temp)}\xB0C`;
        // descBox.innerHTML = capitalizeFirstLetter(res.weather[0].description);
        cityBox.innerText = response.city;
        var wIcon = new Image();
        wIcon.src = `http://openweathermap.org/img/wn/${res.weather[0].icon}@4x.png`;
        iconCont.appendChild(wIcon);
      })
      .catch((err) => {});
  })
  .catch((error) => {
    console.log('Server Error');
  });
