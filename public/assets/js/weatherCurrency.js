
 /*=========start currency coverter==========*/
window.onload=function(){
  currencies = [
    ['AED',	'UAE Dirham',	'United Arab Emirates']
    ,['AFN',	'Afghan Afghani',	'Afghanistan'] 
    ,['ALL',	'Albanian Lek'	,'Albania'] 
    ,['AMD',	'Armenian Dram',	'Armenia']  
    ,['ANG'	,'Netherlands Antillian Guilder',	'Netherlands Antilles']  
    ,['AOA'	,'Angolan Kwanza',	'Angola']  
    ,['ARS'	,'Argentine Peso',	'Argentina']   
    ,['AUD'	,'Australian Dollar'	,'Australia']    
    ,['AWG',	'Aruban Florin',	'Aruba']    
    ,[ 'AZN',	'Azerbaijani Manat',	'Azerbaijan']    
    ,['BAM',	'Bosnia and Herzegovina Mark',	'Bosnia and Herzegovina']     
    ,['BBD',	'Barbados Dollar'	,'Barbados']     
    ,['BDT'	,'Bangladeshi Taka'	,'Bangladesh']      
    ,['BGN',	'Bulgarian Lev',	'Bulgaria']     
    ,['BHD'	,'Bahraini Dinar'	,'Bahrain']    
    ,['BIF',	'Burundian Franc',	'Burundi']   
    ,['BMD',	'Bermudian Dollar'	,'Bermuda']    
    ,['BND',	'Brunei Dollar'	,'Brunei']    
    ,['BOB',	'Bolivian Boliviano',	'Bolivia']    
    ,['BRL',	'Brazilian Real'	,'Brazil']   
    ,['BSD',	'Bahamian Dollar',	'Bahamas']   
    ,['BTN'	,'Bhutanese Ngultrum',	'Bhutan']    
    ,[ 'BWP',	'Botswana Pula',	'Botswana']   
    ,['BYN',	'Belarusian Ruble'	,'Belarus']   
    ,['BZD'	,'Belize Dollar',	'Belize']   
    ,['CAD',	'Canadian Dollar'	,'Canada']    
    ,['CDF'	,'Congolese Franc'	,'Democratic Republic of the Congo']    
    ,['CHF'	,'Swiss Franc'	,'Switzerland']    
    ,['CLP'	,'Chilean Peso',	'Chile']    
    ,['CNY',	'Chinese Renminbi'	,'China']    
    ,['COP'	,'Colombian Peso',	'Colombia']    
    ,['CRC'	,'Costa Rican Colon',	'Costa Rica']    
    ,['CUP'	,'Cuban Peso'	,'Cuba']    
    ,['CVE'	,'Cape Verdean Escudo',	'Cape Verde']    
    ,['CZK'	,'Czech Koruna'	,'Czech Republic'] 
    ,['DJF'	,'Djiboutian Franc',	'Djibouti'] 
    ,['DKK'	,'Danish Krone',	'Denmark'] 
    ,['DOP'	,'Dominican Peso',	'Dominican Republic'] 
    ,['DZD'	,'Algerian Dinar',	'Algeria'] 
    ,['EGP'	,'Egyptian Pound',	'Egypt'] 
    ,['ERN'	,'Eritrean Nakfa',	'Eritrea'] 
    ,['ETB'	,'Ethiopian Birr',	'Ethiopia'] 
    ,['EUR'	,'Euro',	'European Union'] 
    ,['FJD'	,'Fiji Dollar',	'Fiji'] 
    ,['FKP'	,'Falkland Islands Pound'	,'Falkland Islands'] 
    ,['FOK'	,'Faroese Króna'	,'Faroe Islands'] 
    ,['GBP',	'Pound Sterling',	'United Kingdom'] 
    ,['GEL'	,'Georgian Lari'	,'Georgia'] 
    ,['GGP'	,'Guernsey Pound',	'Guernsey'] 
    ,['GHS'	,'Ghanaian Cedi'	,'Ghana'] 
    ,['GIP'	,'Gibraltar Pound'	,'Gibraltar'] 
    ,['GMD',	'Gambian Dalasi' ,'Gambia'] 
    ,['GNF',	'Guinean Franc',	'Guinea'] 
    ,['GTQ'	,'Guatemalan Quetzal',	'Guatemala'] 
    ,['GYD'	,'Guyanese Dollar'	,'Guyana'] 
    ,['HKD'	,'Hong Kong Dollar',	'Hong Kong'] 
    ,['HNL'	,'Honduran Lempira'	,'Honduras'] 
    ,['HRK'	,'Croatian Kuna'	,'Croatia'] 
    ,['HTG'	,'Haitian Gourde',	'Haiti'] 
    ,['HUF'	,'Hungarian Forint',	'Hungary'] 
    ,['IDR'	,'Indonesian Rupiah',	'Indonesia'] 
    ,['ILS',	'Israeli New Shekel',	'Israel'] 
    ,['IMP',	'Manx Pound'	,'Isle of Man'] 
    ,['INR',	'Indian Rupee'	,'India'] 
    ,['IQD',	'Iraqi Dinar'	,'Iraq'] 
    ,['IRR',	'Iranian Rial'	,'Iran'] 
    ,['ISK',	'Icelandic Króna',	'Iceland'] 
    ,['JEP',	'Jersey Pound'	,'Jersey'] 
    ,['JMD',	'Jamaican Dollar',	'Jamaica'] 
    ,['JOD',	'Jordanian Dinar',	'Jordan'] 
    ,['JPY',	'Japanese Yen'	,'Japan'] 
    ,['KES',	'Kenyan Shilling',	'Kenya'] 
    ,['KGS',	'Kyrgyzstani Som',	'Kyrgyzstan'] 
    ,['KHR',	'Cambodian Riel',	'Cambodia'] 
    ,['KID',	'Kiribati Dollar',	'Kiribati'] 
    ,['KMF',	'Comorian Franc',	'Comoros'] 
    ,['KRW',	'South Korean Won',	'South Korea'] 
    ,['KWD',	'Kuwaiti Dinar'	,'Kuwait']
    ,['KYD',	'Cayman Islands Dollar',	'Cayman Islands'] 
    ,['KZT',	'Kazakhstani Tenge'	,'Kazakhstan'] 
    ,['LAK',	'Lao Kip'	,'Laos'] 
    ,['LBP',	'Lebanese Pound'	,'Lebanon'] 
    ,['LKR',	'Sri Lanka Rupee'	,'Sri Lanka'] 
    ,['LRD',	'Liberian Dollar'	,'Liberia'] 
    ,['LSL',	'Lesotho Loti'	,'Lesotho'] 
    ,['LYD',	'Libyan Dinar'	,'Libya'] 
    ,['MAD'	,'Moroccan Dirham'	,'Morocco'] 
    ,[ 'MDL',	'Moldovan Leu',	'Moldova']
    ,['MGA',	'Malagasy Ariary',	'Madagascar'] 
    ,['MKD',	'Macedonian Denar',	'North Macedonia'] 
    ,['MMK',	'Burmese Kyat'	,'Myanmar'] 
    ,['MNT',	'Mongolian Tögrög',	'Mongolia'] 
    ,['MOP',	'Macanese Pataca'	,'Macau'] 
    ,['MRU',	'Mauritanian Ouguiya',	'Mauritania'] 
    ,['MUR',	'Mauritian Rupee'	,'Mauritius'] 
    ,['MVR',	'Maldivian Rufiyaa'	,'Maldives'] 
    ,['MWK',	'Malawian Kwacha'	,'Malawi'] 
    ,['MXN',	'Mexican Peso'	,'Mexico'] 
    ,['MYR',	'Malaysian Ringgit',	'Malaysia'] 
    ,['MZN',	'Mozambican Metical',	'Mozambique'] 
    ,['NAD',	'Namibian Dollar'	,'Namibia'] 
    ,['NGN',	'Nigerian Naira'	,'Nigeria'] 
    ,['NIO',	'Nicaraguan Córdoba',	'Nicaragua'] 
    ,['NOK',	'Norwegian Krone'	,'Norway'] 
    ,['NPR',	'Nepalese Rupee'	,'Nepal'] 
    ,['NZD',	'New Zealand Dollar',	'New Zealand'] 
    ,['OMR',	'Omani Rial'	,'Oman'] 
    ,['PAB',	'Panamanian Balboa',	'Panama'] 
    ,['PEN',	'Peruvian Sol'	,'Peru'] 
    ,['PGK',	'Papua New Guinean Kina'	,'Papua New Guinea'] 
    ,['PHP',	'Philippine Peso'	,'Philippines'] 
    ,['PKR',	'Pakistani Rupee'	,'Pakistan'] 
    ,['PLN',	'Polish Złoty'	,'Poland'] 
    ,['PYG',	'Paraguayan Guaraní'	,'Paraguay'] 
    ,['QAR',	'Qatari Riyal'	,'Qatar'] 
    ,['RON',	'Romanian Leu'	,'Romania'] 
    ,['RSD',	'Serbian Dinar'	,'Serbia'] 
    ,['RUB',	'Russian Ruble'	,'Russia'] 
    ,['RWF',	'Rwandan Franc'	,'Rwanda'] 
    ,[ 'SAR',	'Saudi Riyal'	,'Saudi Arabia']
    ,['SBD',	'Solomon Islands Dollar'	,'Solomon Islands'] 
    ,['SCR',	'Seychellois Rupee'	,'Seychelles'] 
    ,['SDG',	'Sudanese Pound'	,'Sudan'] 
    ,['SEK',	'Swedish Krona'	,'Sweden'] 
    ,['SGD',	'Singapore Dollar'	,'Singapore'] 
    ,['SHP',	'Saint Helena Pound'	,'Saint Helena'] 
    ,['SLE',	'Sierra Leonean Leone'	,'Sierra Leone'] 
    ,['SOS',	'Somali Shilling'	,'Somalia'] 
    ,['SRD',	'Surinamese Dollar'	,'Suriname'] 
    ,['SSP',	'South Sudanese Pound',	'South Sudan'] 
    ,['STN'	,'São Tomé and Príncipe Dobra',	'São Tomé and Príncipe'] 
    ,['SYP'	,'Syrian Pound'	,'Syria'] 
    ,['SZL'	,'Eswatini Lilangeni',	'Eswatini'] 
    ,['THB'	,'Thai Baht'	,'Thailand'] 
    ,['TJS'	,'Tajikistani Somoni'	,'Tajikistan'] 
    ,['TMT'	,'Turkmenistan Manat'	,'Turkmenistan'] 
    ,['TND'	,'Tunisian Dinar'	,'Tunisia'] 
    ,['TOP'	,'Tongan Paʻanga'	,'Tonga'] 
    ,['TRY'	,'Turkish Lira'	,'Turkey'] 
    ,['TTD'	,'Trinidad and Tobago Dollar'	,'Trinidad and Tobago'] 
    ,['TVD'	,'Tuvaluan Dollar'	,'Tuvalu'] 
    ,['TWD'	,'New Taiwan Dollar'	,'Taiwan'] 
    ,['TZS'	,'Tanzanian Shilling'	,'Tanzania'] 
    ,['UAH'	,'Ukrainian Hryvnia'	,'Ukraine'] 
    ,['UGX',	'Ugandan Shilling',	'Uganda'] 
    ,['USD',	'United States Dollar',	'United States'] 
    ,['UYU'	,'Uruguayan Peso'	,'Uruguay'] 
    ,['UZS',	'Uzbekistani So\'m'	,'Uzbekistan'] 
    ,['VES'	,'Venezuelan Bolívar Soberano',	'Venezuela'] 
    ,['VND'	,'Vietnamese Đồng'	,'Vietnam'] 
    ,['VUV',	'Vanuatu Vatu',	'Vanuatu'] 
    ,['WST'	,'Samoan Tālā',	'Samoa'] 
    ,['XAF',	'Central African CFA Franc',	'CEMAC'] 
    ,['XCD'	,'East Caribbean Dollar'	,'Organisation of Eastern Caribbean States'] 
    ,['XDR',	'Special Drawing Rights',	'International Monetary Fund'] 
    ,['XOF'	,'West African CFA franc',	'CFA'] 
    ,['XPF',	'CFP Franc',	'Collectivités d\'Outre-Mer'] 
    ,['YER',	'Yemeni Rial',	'Yemen'] 
    ,['ZAR',	'South African Rand'	,'South Africa'] 
    ,['ZMW',	'Zambian Kwacha',	'Zambia'] 
    ,['ZWL'	,'Zimbabwean Dollar'	,'Zimbabwe'] 
  ];

  const fromCurrency = document.getElementById('exchange-rate-from');

  currencies.forEach((currency)=>{
      const option = document.createElement('option');
      option.text = currency[2]+' : '+currency[1];
      option.value = currency[0];
      fromCurrency.add(option);
  });

  fromCurrency.value = currencies[145][0];

  let convertCurrency = ()=>{
    const amount = 1;
    const fromCur = fromCurrency.value;
    const toCurr = 'CDF';
    
    if(amount !== 1 && toCurr !== 'CDF'){
       alert('error wrong value currency');
    }else{
    //    fetch(api)
    //             .then((resp)=>resp.json)
    //             .then((data)=>console.log(data))
    }
  }
  fromCurrency.addEventListener('change', ()=>{
     convertCurrency();
  });
  
/*=========end currency converter===========*/
const APIKeyTemp = "0ae2d23ce77179a2a953f190c21f0689";
    const city = ['kinshasa','lubumbashi'];
    const image =[],
          temperature = [],
          description = [],
          humidity =  [],
          wind = [];

    let assignWeatherData = (city, image, temperature, description, humidity, wind)=>{
        switch (city) {
            case 'kinshasa':
                const img_header = document.querySelector('.weather__panel-1 .header-nav__weather-image');
                const temp_header = document.querySelector('.header-nav__weather-temperature');
                img_header.src = image;
                temp_header.innerHTML = temperature;

                const desc_weather_panel = document.querySelector('.weather__kinshasa .weather-panel__desc-title');
                const humidity_weather_panel = document.querySelector('.weather__kinshasa .weather__humidity');
                const wind_weather_panel = document.querySelector('.weather__kinshasa .weather__wind');
                const image_weather_panel = document.querySelector('.weather__kinshasa .weather__img-image');
                const temp_weather_panel = document.querySelector('.weather__kinshasa .temperature');

                desc_weather_panel.innerHTML = description;
                humidity_weather_panel.innerHTML = humidity;
                wind_weather_panel.innerHTML = wind;
                image_weather_panel.src = image;
                temp_weather_panel.innerHTML = temperature;

                break;
            case 'lubumbashi':
                
            const desc_weather_panel_l = document.querySelector('.weather__lubumbashi .weather-panel__desc-title');
            const humidity_weather_panel_l = document.querySelector('.weather__lubumbashi .weather__humidity');
            const wind_weather_panel_l = document.querySelector('.weather__lubumbashi .weather__wind');
            const image_weather_panel_l = document.querySelector('.weather__lubumbashi .weather__img-image');
            const temp_weather_panel_l = document.querySelector('.weather__lubumbashi .temperature');

            desc_weather_panel_l.innerHTML = description;
            humidity_weather_panel_l.innerHTML = humidity;
            wind_weather_panel_l.innerHTML = wind;
            image_weather_panel_l.src = image;
            temp_weather_panel_l.innerHTML = temperature;


                break;
            case 'kongo centr':
                
                break;
        
            default:
                break;
        }
    }

    let temper = ()=>{
        let i =0;
city.forEach(n=>{
     fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city[i]}&units=metric&appid=${APIKeyTemp}`)
            .then(response =>response.json()).then(json=>{

                if(json.cod === '404')
                {
                    alert('fail no answer')
        
                    return;
        
                }
        
                image[i] = document.querySelector(".header__nav-temperature .header-nav__weather-image");
                temperature[i] = document.querySelector(".header__nav-temperature .header-nav__weather-temperature");
                description[i] = document.querySelector(".header__nav-temperature .header-nav__weather-description");
                humidity[i] = document.querySelector(".header__nav-temperature .header-nav__weather-humidity");
                wind[i] = document.querySelector(".header__nav-temperature .header-nav__weather-wind");
        
                switch(json.weather[0].main){
                    case 'Clear':
                    image[i] ='assets/images/clear.jpg';
                    break;
                    case 'Rain':
                        image[i] = 'assets/images/rain.png';
                        break;
                    case 'Snow':
                        image[i] = 'assets/images/snow.png';
                        break;
                    case 'Clouds':
                        image[i] = 'assets/images/cloud.png';
                        break;
                    case 'Haze':
                        image[i] ='assets/images/haze.png';
                        break;
                    default:
                        image[i] = 'assets/images/rain.png';
                }
                
                temperature[i] = `${parseInt(json.main.temp)}<span>&#176C</span>`;
                description[i] =`${json.weather[0].description}`;
                humidity[i] = `${json.main.humidity}%`;
                wind[i] = `${parseInt(json.wind.speed)} km/h`;
                // console.log(json);
                // console.log(i+' '+n+' '+image[i]+' '+temperature[i]+' '+description[i]+' '+ 
                // humidity[i]+' '+wind[i]);
                assignWeatherData(n,image[i], temperature[i], description[i], 
                                   humidity[i], wind[i]);
            });
        
i++;

});
           
        
}
/*==========start weather=============*/
const weatherTop = document.querySelectorAll('.weather-1');

weatherTop.forEach(n => {
    n.addEventListener('click', ()=>{
    //    console.log('clicked');
       const weatherActive = document.querySelectorAll('.weather-dynamic__1');
       weatherActive.forEach((c)=>{
        if(c.classList.contains('buggy')){
            c.classList.remove('buggy');
            n.nextElementSibling.classList.add('buggy');
        }
       })
    });
});
};
