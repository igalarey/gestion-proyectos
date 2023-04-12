const header = document.querySelector("header");
const body = document.querySelector("body");

const hamburguesa = document.querySelector("#hamburguesa");
const op_nav = document.querySelector(".op_nav");

const btn_login = document.getElementById("btn_login");
const btn_registro = document.getElementById("btn_registro");
const empezar = document.getElementById("empezar");

const form_login = document.getElementById("form_login");
const form_registro = document.getElementById("form_registro");
const form_login_btn_regis = document.getElementById("form_login_btn_regis");
const form_regis_btn_login = document.getElementById("form_regis_btn_login");
const fondo_opaco = document.getElementById("fondo_opaco");

const funciones = document.querySelector('a[href="#panel2"]');
const panel2 = document.querySelector("#panel2");
const sobre_nosotros = document.querySelector('a[href="#nosotros"]');
const nosotros = document.querySelector("#nosotros");

function cambiar_header() {
  header.classList.toggle("activo", window.scrollY > 0);
}

function mostrar_form(form) {
  fondo_opaco.style.display = "block";
  form_login.style.display = form === "login" ? "block" : "none";
  form_registro.style.display = form === "registro" ? "block" : "none";
  body.style.overflow = "hidden";
}

function ocultar_forms() {
  fondo_opaco.style.display = 'none';
  form_login.style.display = "none";
  form_registro.style.display = "none";
  body.style.overflow = "auto";
}

function cambiar_a_formulario(formulario) {
  form_login.style.display = formulario === "registro" ? "none" : "block";
  form_registro.style.display = formulario === "registro" ? "block" : "none";
}

window.addEventListener("scroll", cambiar_header);

btn_login.addEventListener("click", (event) => {
  event.preventDefault();
  mostrar_form("login");
});

btn_registro.addEventListener("click", (event) => {
  event.preventDefault();
  mostrar_form("registro");
});

empezar.addEventListener("click", (event) => {
  event.preventDefault();
  mostrar_form("registro");
});

window.addEventListener('click', (event) => {
  if (event.target === fondo_opaco) {
    ocultar_forms();
  }
});

form_login_btn_regis.addEventListener("click", (event) => {
  event.preventDefault();
  cambiar_a_formulario("registro");
});

form_regis_btn_login.addEventListener("click", (event) => {
  event.preventDefault();
  cambiar_a_formulario("login");
});

hamburguesa.addEventListener("click", () => {
  op_nav.classList.toggle("abierto")  
});

funciones.addEventListener('click', () => {
  panel2.scrollIntoView({ behavior: "smooth" });
});

sobre_nosotros.addEventListener("click", () => {
  nosotros.scrollIntoView({ behavior: "smooth" });
});