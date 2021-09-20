<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bem vindo</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/areas.css" />
    <link rel="stylesheet" href="css/areas_descricao.css" />
    <link rel="stylesheet" href="css/tour.css" />
    <link rel="stylesheet" href="css/carrousel.css" />
    <link rel="stylesheet" href="css/navuser.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Fonte -->

    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel = "stylesheet">


    <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Navbar-->
    <nav>
      <ul class="menu">
        <li class="logo">
          <a href="index.php">
            <img src="image/nav bar logo - reservaja tag blue.svg" />
          </a>
        </a>
        </li>
        <li class="iten"><a href="#funcionamento">Como Funciona</a>
        <li class="iten"><a href="#tour">Fazer Tour</a></li>
        <li class="iten button"><a href="empresa.php">Empresa</a></li>
        <li class="iten button secondary"><a href="#">Usuario</a></li>
        </li>
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
    </nav>



    <script>
      const toggle = document.querySelector(".toggle");
      const menu = document.querySelector(".menu");
      const itens = document.querySelectorAll(".iten");

      /* Toggle mobile menu */
      function toggleMenu() {
        if (menu.classList.contains("active")) {
          menu.classList.remove("active");
          toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
        } else {
          menu.classList.add("active");
          toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
        }
      }

        /* Close Submenu From Anywhere */
        function closeSubmenu(e) {
          let isClickInside = menu.contains(e.target);
          if (!isClickInside && menu.querySelector(".submenu-active")) {
            menu.querySelector(".submenu-active").classList.remove("submenu-active");
          }
        }
        /* Event Listeners */
        toggle.addEventListener("click", toggleMenu, false);
        for (let iten of itens) {
          if (iten.querySelector(".submenu")) {
            iten.addEventListener("click", toggleItem, false);
          }
          iten.addEventListener("keypress", toggleItem, false);
        }
        document.addEventListener("click", closeSubmenu, false);
    </script>