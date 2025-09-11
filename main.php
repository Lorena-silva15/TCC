<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



<style>
  .col-8 {
    background-color: purple;
    width: 85%;
    padding: 2.3%
  }

  .col-4 {
    background-color: dark;
    width: 15%;
    padding: 2, 3%
  }

  .pai {
    width: 95%;
    text-align: center;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    position: relative;
  }

  .btn-collapse-wrapper {
    position: relative;
    display: inline-block;
  }

  #collapseWidthExample {
    position: absolute;
    top: 100%;
    right: 0;
    width: 0;
    overflow: hidden;
    transition: width 0.35s ease;
    z-index: 10;
  }

  #collapseWidthExample.show {
    width: 300px;
  }
  #overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    display: none;
    z-index: 5; /* menor que 10 dos collapses */
    pointer-events: auto; /* para permitir clique */
  }
</style>

<div class="pai">
  <div id="overlay"></div>

  <nav class="row">
    <div class="col-8">col-8</div>
    <div class="col-4">
      <div class="btn-collapse-wrapper">
        <button class="btn btn-primary collapsed" id="toggleButton" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          Toggle width collapse
        </button>
        <ul id="collapseWidthExample" class="collapse">
          <li>
            <button>
              <a class="card card-body" style="width: 300px;" href='index.php'>
                primeiro botao
              </a>
            </button>
          </li>
          <li>
            <button>
              <a class="card card-body" style="width: 300px;" href='#'>
                primeiro botao
              </a>
            </button>
          </li>
          <li>
            <button>
              <a class="card card-body" style="width: 300px;" href='#'>
                primeiro botao
              </a>
            </button>
          </li>

          <li>
            <button>
              <a class="card card-body" style="width: 300px;" href='#'>
                primeiro botao
              </a>
            </button>
          </li>


        </ul>




  </nav>

  <section class="container text-center">

    <div class="row">
      <div class="col-sm-8">col-sm-8</div>
      <div class="col-sm-4">col-sm-4</div>
    </div>
    <div class="row">
      <div class="col-sm">col-sm</div>
      <div class="col-sm">col-sm</div>
      <div class="col-sm">col-sm</div>


  </section>
</div>
<script>
  const pai = document.querySelector('.pai');
  pai.style.position = 'relative'; // garante que o overlay posicione relativo à pai
  const overlay = document.getElementById('overlay');

  function updateOverlay() {
    const anyOpen = [collapse1, collapse2, collapse3, collapse4]
      .some(c => c._element.classList.contains('show'));
    if (anyOpen) {
      overlay.style.display = 'block';
    } else {
      overlay.style.display = 'none';
    }
  }
  document.addEventListener("click", function (event) {
    const wrapper = document.querySelector(".btn-collapse-wrapper");
    const collapse = document.getElementById("collapseWidthExample");
    const bsCollapse = bootstrap.Collapse.getInstance(collapse);
    const button = document.getElementById("toggleButton");

    if (collapse.classList.contains("show")) {
      if (!wrapper.contains(event.target)) {
        bsCollapse.hide();
      }
    }
  });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>