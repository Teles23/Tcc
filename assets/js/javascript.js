// const background = document.getElementById("background");

// const getRandomNumber = (limit) => {
//   return Math.floor(Math.random() * limit);
// };

// const getRandomColor = () => {
//   const h = getRandomNumber(139);
//   const s = getRandomNumber(50);
//   const l = getRandomNumber(50);

//   return `hsl(${h}deg, ${s}%, ${l}%)`;
// };

// const setBackgroundColor = () => {
//   const randomColor = getRandomColor();
//   background.style.backgroundColor = randomColor;
//   background.style.color = randomColor;
// };

// setBackgroundColor();

// setInterval(() => {
//   setBackgroundColor();
// }, 1500);

// Buscar cep

function buscaCep() {
  let cep = document.getElementById('txtCep').value;
  if (cep !== "") {
    let url = "https://brasilapi.com.br/api/cep/v1/"+cep;
    let req = new XMLHttpRequest();
    req.open("GET", url);
    req.send();

    req.onload = function () {
      if (req.status === 200) {
        let endereco = JSON.parse(req.response);
        document.getElementById("txtRua").value = endereco.street;
        document.getElementById("txtBairro").value = endereco.neighborhood;
        document.getElementById("txtCidade").value = endereco.city;
        document.getElementById("txtEstado").value = endereco.state;
      } else if (req.status = 404) {
        alert("CEP inválido");
      } else {
        alert("Erro ao fazer a requisição")
      }
    }
  }
}

window.onload = function () {
  let txtCep = document.getElementById("txtCep");
  txtCep.addEventListener("blur", buscaCep);
}