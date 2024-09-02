
const meteoInsertCity = document.querySelector('.meteo-insert_city');
const meteoInsertForm = document.querySelector('.meteo-insert-form');
console.log(meteoInsertForm);
const meteoBodyTopContenair = document.querySelector('.meteo-body-top-contenair');

// editable data
const meteoTopTitle = document.querySelector('.meteo_top-title span');
const meteoBtTitle = document.querySelector('.meteo-bt-title-content span');//city name in meteo body

const meteoTopVisibleIcon = document.querySelector('.meteo_top-img img');//top visible part meteo icon
const meteoTopTemp = document.querySelector('.meteo_top-temp span'); //meteo top temp visible part
const meteoBodyWeatherDesc = document.querySelector('.meteo-body-title-desc'); //meteo weather desc
const meteoBodyWeatherIcon = document.querySelector('.meteo-middle-icon-content img');
const meteoBodyTemp = document.querySelector('.meteo-middle-temp span');
const meteoBodyTempMax = document.querySelector('.meteo-middle-right-max span');
const meteoBodyTempMin = document.querySelector('.meteo-middle-right-min span');
const meteoBodyHumidity = document.querySelector('.meteo-middle-last-top-humidity span:last-of-type');
const meteoBodyWind = document.querySelector('.meteo-middle-last-top-wind span:last-of-type');
const meteoBodyhumidity2 = document.querySelector('.meteo-middle-last-top-humidity-2 span:last-of-type');


//editable data

meteoInsertCity.addEventListener('click', function (){
   
   meteoBodyTopContenair.classList.toggle('input-insert');
});

/*=========end currency converter===========*/
const APIKeyTemp = "0ae2d23ce77179a2a953f190c21f0689";
const meteoCity = document.querySelector('.meteo-insert-form-input');

    const image =[],
          temperature = [],
          description = [],
          humidity =  [],
          wind = [];


 function editData(json){
      

   meteoTopTemp.innerHTML = parseInt(json.main.temp);
   meteoTopVisibleIcon.src = "http://openweathermap.org/img/w/" + json.weather[0].icon + ".png";
   meteoBodyWeatherDesc.innerHTML = json.weather[0].description;
   meteoBodyWeatherIcon.innerHTML = "http://openweathermap.org/img/w/" + json.weather[0].icon + ".png";
   meteoBodyTemp.innerHTML = parseInt(json.main.temp);
   meteoBodyTempMax.innerHTML = parseInt(json.main.temp_max);
   meteoBodyTempMin.innerHTML =parseInt(json.main.temp_min);
   meteoBodyHumidity.innerHTML = parseInt(json.main.humidity);
   meteoBodyWind.innerHTML = json.wind.speed;
   meteoBodyhumidity2.innerHTML = json.wind.deg;

   console.log('ok working');

 }    
 
 fetch(`https://api.openweathermap.org/data/2.5/weather?q=kinshasa&units=metric&appid=${APIKeyTemp}`)
 .then(response =>response.json()).then(json=>{

       editData(json);
  });



meteoCity.addEventListener('keydown', (event) => {
   if (event.key === 'Enter') {
      console.log(meteoBtTitle.innerHTML );
         meteoBtTitle.innerHTML = meteoCity.value;
         meteoTopTitle.innerHTML = meteoCity.value;
         meteoBodyTopContenair.classList.toggle('input-insert');
         
         

         fetch(`https://api.openweathermap.org/data/2.5/weather?q=${meteoCity.value}&units=metric&appid=${APIKeyTemp}`)
            .then(response =>response.json()).then(json=>{
         console.log(json)
                  editData(json);
             });
             meteoCity.value = "";
         event.preventDefault()
       }
   })

