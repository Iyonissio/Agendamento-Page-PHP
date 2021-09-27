<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bem vindo</title>
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/areas.css" />
  <link rel="stylesheet" href="css/areas_descricao.css" />
  <link rel="stylesheet" href="css/tour.css" />
  <link rel="stylesheet" href="css/navuser.css" />

  <!-- Fonte -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel="stylesheet">

  <!-- Font Awesome Icones-->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>

</head>
<style>
  .dropbtn {
    background-color: white;;
    color: white;
    padding: 1px;
    font-size: 1px;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: white;;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: white;;
  }
</style>

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
      </li>

      <li class="iten button"><a href="empresa.php">Empresa</a></li>
      <li class="iten"><a href="#">
          <div class="dropdown" style="float:right;"> 
            <button class="dropbtn">
              <img class="logo-user" src="image/usuário foto.svg" />
            </button>
            <div class="dropdown-content">
              <a href="#">Nome do Usuario</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
        </a>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>

    </ul>
  </nav>



  <script>
    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");
    const items = document.querySelectorAll(".item");

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

    /* Activate Submenu */
    function toggleItem() {
      if (this.classList.contains("submenu-active")) {
        this.classList.remove("submenu-active");
      } else if (menu.querySelector(".submenu-active")) {
        menu.querySelector(".submenu-active").classList.remove("submenu-active");
        this.classList.add("submenu-active");
      } else {
        this.classList.add("submenu-active");
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
    for (let item of items) {
      if (item.querySelector(".submenu")) {
        item.addEventListener("click", toggleItem, false);
      }
      item.addEventListener("keypress", toggleItem, false);
    }
    document.addEventListener("click", closeSubmenu, false);


    /*Modal Login */
  </script>