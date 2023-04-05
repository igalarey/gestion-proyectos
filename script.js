const btn_login = document.getElementById("btn_login");
const btn_registro = document.getElementById("btn_registro");
const fondo_opaco = document.getElementById("fondo_opaco");
const form_login = document.getElementById("form_login");
const form_registro = document.getElementById("form_registro");
const form_login_btn_regis = document.getElementById("form_login_btn_regis");
const form_regis_btn_login = document.getElementById("form_regis_btn_login");
const header = document.querySelector("header");

function cambiar_header() {
  header.classList.toggle("activo", window.scrollY > 0);
}

function mostrar_form_login() {
  fondo_opaco.style.display = "block";
  form_login.style.display = "block";
}

function mostrar_form_registro() {
  fondo_opaco.style.display = "block";
  form_registro.style.display = "block";
}

function ocultar_forms() {
  fondo_opaco.style.display = 'none';
  form_login.style.display = "none";
  form_registro.style.display = "none";
}

function cambiar_a_registro() {
  form_login.style.display = "none";
  form_registro.style.display = "block";
}

function cambiar_a_login() {
  form_login.style.display = "block";
  form_registro.style.display = "none";
}

window.addEventListener("scroll", cambiar_header);

btn_login.addEventListener("click", function(event) {
  event.preventDefault();
  mostrar_form_login();
});

btn_registro.addEventListener("click", function(event) {
  event.preventDefault();
  mostrar_form_registro();
});

window.addEventListener('click', function(event) {
  if (event.target === fondo_opaco) {
    ocultar_forms();
  }
});

form_login_btn_regis.addEventListener("click", function(event) {
  event.preventDefault();
  cambiar_a_registro();
});

form_regis_btn_login.addEventListener("click", function(event) {
  event.preventDefault();
  cambiar_a_login();
});
