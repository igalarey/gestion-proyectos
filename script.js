var BtnLogin = document.getElementById("BtnLogin");
var BtnRegis = document.getElementById("BtnRegis");
var formularios = document.getElementById("formularios");
var login_form = document.getElementById("login_form");
var registro_form = document.getElementById("registro_form")

BtnLogin.addEventListener("click", function() {
    formularios.style.display = "block";
    login_form.style.display = "block";
});

BtnRegis.addEventListener("click", function() {
    formularios.style.display = "block";
    registro_form.style.display = "block";
})

window.addEventListener('click', function(event) {
    if (event.target == formularios) {
      formularios.style.display = 'none';
      login_form.style.display = "none";
      registro_form.style.display = "none";
    }
  });