<?php require_once('header_logado.php') ?>

<style>
  .modal {
    display: none;
    position: fixed;
    z-index: 100;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>


<div class="descricao_areas">
  <div class="descricao_informacao">
    <div class="descricao_titulo">
      <h1>Nome da Clinica</h1>
    </div>
    <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
      nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
      volutpat.
    </p>
    <h1>Localização</h1>
    <p> Av. Kenneth Kaunda n. 111 Maputo - Moçambique </p>
    <h1>Horário Comercial</h1>
    <ul>
      <li> Segunda à Sexta - 08h00 às 17h00</li>
      <li> Sábados - 09h00 às 16h00</li>
      <li> Domingos e Feriados - Encerrado</li>
    </ul>
    <h1>Contactos</h1>
    <p> T: +258 21 2345 678 | 82 1264 567</p>
    <p>Website: </p>
    <div class="paginas_estabelecmentos">
      <span><i class="fab fa-facebook-f"></i></span>
      <span><i class="fab fa-instagram"></i></span>
    </div>
    <div class="button_agendar">
      <button id="myBtn">agendar</button>
    </div>

  </div>
  <div class="descricao_imagem">
    <img src="image/salao.jpg" alt="foto" />
  </div>
</div>


<!-- Conteudo do Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
    <p>Conteudo do Modal ..</p>
  </div>
</div>



<script>
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
<?php require_once('footer.php') ?>