<?php require_once('header_logado.php') ?>

<style>
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  button {
    background-color: #04AA6D;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }

  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #04AA6D;
  }



  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 150;
    /* Sit on top */
    padding-top: 100px;
    padding-bottom: 50px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }


  @media (min-width: 100px) {
    .modal {
      padding-left: 10px;
      padding-right: 10px;
    }
  }

  /* Modal Content */
  .modal-content {
    /*  background-color: #fefefe; 
   border: 1px solid #888; */
    margin: auto;
    padding: 20px;
    width: 100%;
  }

  /* The Close Button */
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

  /* Buttoes servicos*/
  .buttonn {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
    border-radius: 8px;
    text-decoration: none;
  }

  .button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
  }

  /*Select Multi page 2*/

  .select {
    max-width: 300px;
    gap: 5px;
  }

  .select__item {
    padding: 10px;
    cursor: pointer;
    text-align: center;
    border-radius: 3px;
    background: #eeeeee;
    transition: 0.1s;
  }

  .select__item--selected {
    background: #009578;
    color: #ffffff;
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
      <span><i class="fab fa-linkedin"></i></span>
    </div>
    <div class="button_agendar">
      <button id="myBtn">agendar</button>
    </div>

  </div>
  <div class="descricao_imagem">
    <img src="image/salao.jpg" alt="foto" />
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <form id="regForm" action="/">
      <span class="close">&times;</span>
      <h1>Escolha o servico que deseja agendar:</h1>
      <!-- Lista de Categorias e Servicos: -->
      <div class="tab">
        <span>Ortopedia:</span>
        <p>
          <button class="buttonn button1">
            <li style="text-decoration: none;">Raio-X</li>
            <li>500 MT</li>
          </button>
        </p>
        <p>
          <button class="buttonn button1">
            <li style="text-decoration: none;">Raio-X</li>
            <li>500 MT</li>
          </button>
        </p>
        <span>Radiologia:</span>
        <p>
          <button class="buttonn button1">
            <li style="text-decoration: none;">Raio-X</li>
            <li>500 MT</li>
          </button>
        </p>
      </div>

      <div class="tab">Contact Info:
        <select name="language" class="custom-select" multiple>
          <option class="">HTML</option>
          <option value="css">CSS</option>
          <option value="javascript">JavaScript</option>
          <option value="python">Python</option>
          <option value="sql">SQL</option>
          <option value="kotlin">Kotlin</option>
        </select>
      </div>

      <div class="tab">Birthday:
        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
      </div>
      <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </form>
  </div>
</div>


<script>
  class CustomSelect {
    constructor(originalSelect) {
      this.originalSelect = originalSelect;
      this.customSelect = document.createElement("div");
      this.customSelect.classList.add("select");

      this.originalSelect.querySelectorAll("option").forEach((optionElement) => {
        const itemElement = document.createElement("div");

        itemElement.classList.add("select__item");
        itemElement.textContent = optionElement.textContent;
        this.customSelect.appendChild(itemElement);

        if (optionElement.selected) {
          this._select(itemElement);
        }

        itemElement.addEventListener("click", () => {
          if (
            this.originalSelect.multiple &&
            itemElement.classList.contains("select__item--selected")
          ) {
            this._deselect(itemElement);
          } else {
            this._select(itemElement);
          }
        });
      });

      this.originalSelect.insertAdjacentElement("afterend", this.customSelect);
      this.originalSelect.style.display = "none";
    }

    _select(itemElement) {
      const index = Array.from(this.customSelect.children).indexOf(itemElement);

      if (!this.originalSelect.multiple) {
        this.customSelect.querySelectorAll(".select__item").forEach((el) => {
          el.classList.remove("select__item--selected");
        });
      }

      this.originalSelect.querySelectorAll("option")[index].selected = true;
      itemElement.classList.add("select__item--selected");
    }

    _deselect(itemElement) {
      const index = Array.from(this.customSelect.children).indexOf(itemElement);

      this.originalSelect.querySelectorAll("option")[index].selected = false;
      itemElement.classList.remove("select__item--selected");
    }
  }

  document.querySelectorAll(".custom-select").forEach((selectElement) => {
    new CustomSelect(selectElement);
  });



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


  //


  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>
<?php require_once('footer.php') ?>