const api_url = "https://api.adviceslip.com/advice";

async function getapi(url) {
  const response = await fetch(url);
  var data = await response.json();
  var { id, advice } = data.slip;

  document.getElementById("advice").textContent = '"' + advice + '"'; 
  document.getElementById("adviceNumber").textContent =  "#:"+ id ;
}

getapi(api_url);
