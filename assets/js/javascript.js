function mostrarsenha() {
  var tipo = document.getElementById("senha");
  if (tipo.type == "password") {
    tipo.type = "text";
  } else {
    tipo.type = "password"
  }
  var tipo1 = document.getElementById("confirme_senha");
  if (tipo1.type == "password") {
    tipo1.type = "text";
  } else {
    tipo1.type = "password"
  }
}

// Buscar cep

function buscaCep() {
  let cep = document.getElementById('txtCep').value;
  if (cep !== "") {
    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
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

const cadUsuario = document.getElementById("form_cadastro");

if (cadUsuario) {
  cadUsuario.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dadosForm = new FormData(cadUsuario);

    const dados = await fetch("../admin/cad_userOk.php", {
      method: "POST",
      body: dadosForm
    });

    const resposta = await dados.json();

    if (resposta['status']) {
      window.location.href = "../pages/login.php";
      // Swal.fire({
      //   text: resposta['msg'],
      //   icon: 'success',
      //   showCancelButton: false,
      //   confirmButtonColor: '#3085d6',
      //   confirmButtonText: 'Fechar'

      // });
    } else {
      Swal.fire({
        text: resposta['msg'],
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Fechar'
      });
    }
  });


}
const logUsuario = document.getElementById("form_login");

if (logUsuario) {
  logUsuario.addEventListener("submit", async (e) => {
    e.preventDefault();
    const dadosForm = new FormData(logUsuario);

    const dados = await fetch("../admin/logar.php", {
      method: "POST",
      body: dadosForm
    });

    const resposta = await dados.json();

    if (resposta['status'] == false) {
      Swal.fire({
        text: resposta['msg'],
        icon: 'error',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Fechar'
      });
    } else if (resposta['status']) {
      window.location.href = "../pages/index-musico.php?id=" + resposta['id'];
    }
  });


}