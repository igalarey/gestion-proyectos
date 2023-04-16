<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de proyectos</title>
  <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>

<body class="index_html">


  <!-- Cabecera -->
  
  <header>
    <h1 class="logo">Gespro</h1>
    <ul class="op_nav">
      <li><a href="#">Inicio</a></li>
      <li><a href="#panel2">Funciones</a></li>
      <li><a href="#nosotros">Sobre nosotros</a></li>
      <li><a href="soporte.html">Soporte</a></li>
    </ul>
    <nav class="op_ses">
      <a href="#" id="btn_login">Iniciar sesión</a>
      <button class="btn_registro" id="btn_registro">Registrarse</button>
    </nav>
    <ion-icon name="menu-outline" size="large" id="hamburguesa"></ion-icon>
  </header>

  <img src="/public/assets/img/izquierda.jpg" alt="" class="izquierda">

  <div class="fondo_opaco" id="fondo_opaco">


    <!-- Formulario de inicio de sesión -->
    
    <div class="form_login" id="form_login">
      <form action="#">
        <h1>¡Hola de nuevo!</h1>
        <div class="input">
          <input type="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="input">
          <input type="password" placeholder="Introduce tu contraseña" required>
        </div>
        <a href="#" class="olv_cont">¿Has olvidado tu contraseña?</a>
        <button class="btn_sesion">Iniciar sesión</button>
        <div class="form_btn">
          ¿No tienes una cuenta? <a href="#" id="form_login_btn_regis">Registrate.</a>
        </div>
      </form>
    </div>


    <!-- Formulario de registro -->

    <div class="form_registro" id="form_registro">
      <form action="#">
        <h1>Registrarse</h1>
        <div class="input">
          <input type="email" placeholder="Introduce tu correo electrónico" required>
        </div>
        <div class="input">
          <input type="password" placeholder="Introduce tu contraseña" required>
        </div>
        <div class="input">
          <input type="password" placeholder="Repite tu contraseña" required>
        </div>
        <button class="btn_sesion">Comencemos</button>
        <div class="form_btn">
          ¿Ya tienes una cuenta? <a href="#" id="form_regis_btn_login">Inicia sesión.</a>
        </div>
      </form>
    </div>
  </div>

  
  <!-- Panel 1 -->

  <div class="panel1">
    <h1>Crea, administra y colabora en proyectos</h1>
    <p>Crea tus propios proyectos, invita a otros usuarios y asigna tareas.<br>La forma más rápida de organizarte.</p>
    <button class="empezar" id="empezar">Empieza ahora</button>
  </div> 
 
  
  <!-- Panel 2 -->
  
  <div class="panel2" id="panel2">
    <div class="panel2texto">
      <h1>Planifica tus proyectos</h1>
      <p>Planifica y programa de manera eficiente, definiendo objetivos, fechas de inicio y finalización, y asignando tareas a los
      miembros del equipo.
      </p>
    </div>
    <div class="panel2foto">
      <img src="/public/assets/img/panel2.jpg" alt="">
    </div>
  </div>


  <!-- Panel 3 -->

  <div class="panel3">
    <div class="panel3texto">
      <h1>Seguimiento y gestión</h1>
      <p>
      Haz un seguimiento del progreso de las tareas asignadas, mira si se están cumpliendo los plazos
      y realiza ajustes en tiempo real. Gestiona los recursos necesarios para llevar a cabo
      el proyecto, incluyendo el tiempo de los miembros del equipo, los materiales, etc.
      </p>
    </div>
    <div class="panel3foto">
      <img src="/public/assets/img/panel3.jpg" alt="">
    </div>
  </div>


<!-- Panel 4 -->
  
  <div class="panel4">
    <div class="panel4texto">
      <h1>Comunicación y colaboración</h1>
      <p>Comunicate y colabora con tus compañeros de manera efectiva,
      para aseguraros de que que todos estéis trabajando en la misma dirección y sepais
      en todo momento cuáles son las prioridades y los objetivos.
      </p>
    </div>
    <div class="panel4foto">
      <img src="/public/assets/img/panel4.png" alt="">
    </div>
  </div>


  <!-- Sobre nosotros -->

  <div class="nosotros" id="nosotros">
    <div class="nosotros_texto">
      <h1>Sobre nosotros</h1>
      <p>Hemos desarrollado esta aplicación porque creemos que hoy en día que pasan tantas cosas en tan poco tiempo,
        es importante tener una buena gestión a la hora de realizar cualquier actividad, en nuestro caso
        proyectos que pueda tener una empresa o persona. Creemos que podemos ayudar a mejorar la eficiencia, 
        la organización, la colaboración y la productividad en un equipo, lo que puede ser beneficioso para cualquier tipo de proyecto, 
        desde pequeñas tareas hasta proyectos complejos y de gran envergadura.<br><br>
        Ayudamos a automatizar tareas repetitivas, como la generación de informes y la consulta de información, 
        lo que te permite ahorrar tiempo y recursos. Al organizar y gestionar los proyectos de manera eficiente, 
        se puede mejorar la productividad del equipo, lo que a su vez puede llevar a una mayor satisfacción del cliente 
        y al éxito del proyecto.<br><br>
        Nuestra misión final es que el usuario goce de un buena experiencia al usar nuestra aplicación y que sienta que tiene todo
        bajo control en todo momento. Además, queremos que sienta que para realizar los cambios que crea oportunos no tenga que
        realizar muchos clicks sino que de una manera rápida y efectiva pueda llevar a cabo las ideas que tenga en mente.
      </p>
      <h1 class="pie">© 2023 Gespro</h1>
    </div>
  </div>


  <!-- JavaScript -->

  <script src="/public/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>