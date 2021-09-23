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
          <img class="logo-user" src="image/usuário foto.svg" id="myBtn"/></a>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
  </nav>

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Modal Header</h2>
      </div>
      <div class="modal-body">
        <p>Some text in the Modal Body</p>
        <p>Some other text...</p>
      </div>
      <div class="modal-footer">
        <h3>Modal Footer</h3>
      </div>
    </div>

  </div>

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

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>