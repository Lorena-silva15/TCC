<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    .col-8 {
      background-color: purple;
      width: 85%;
      padding: 2.3%;
      display: flex;
      justify-content: space-between;
    }

    .col-4 {
      background-color: #222;
      width: 15%;
      padding: 2.3%;
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

    body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
      margin: 0;
      
    }
    nav{
      min-width: 50%;
    }
    #toggleCanvas {
      background-color: #0077b6;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      max-width: 90%;;
      cursor: pointer;
      z-index: 2;
    }

    .canvas-container {
      position: fixed;
      top: 100px;
      right: -300px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 1051; /* acima do overlay */
    }

    .canvas-card {
      background-color: #e4aeea;
      color: black;
      border-radius: 15px;
      padding: 20px 30px;
      min-width: 200px;
      text-align: center;
      font-weight: bold;
      opacity: 0;
      transform: translateX(100%);
      transition: transform 0.5s ease, opacity 0.5s ease;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .canvas-card.show {
      opacity: 3;
      transform: translateX(0);
      margin-top:10%
    }

    .canvas-card.hide {
      opacity: ;
      transform: translateX(100%);
    }

    .overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1050;
      
    }

    .overlay.active {
      display: block;
      
    }
  </style>
</head>
<body>

  <div class="pai">
    <div id="overlay" class="overlay"></div>

    <nav class="row">
      <div class="col-8">
        <a class="navbar-brand text-white">Navbar</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
      <div class="col-4">
        <button id="toggleCanvas">Toggle canvas</button>

        <!-- Navegaçao tipo offcaNvas  -->
        <div class="canvas-container" id="canvasContainer">
          <div class="canvas-card" id="canvas1">1 canvas</div>
          <div class="canvas-card" id="canvas2">2 canvas</div>
          <div class="canvas-card" id="canvas3">3 canvas</div>
        </div>
      </div>
    </nav>

    <section class="container text-center mt-4">
      <div class="row">
        <div class="col-sm-8">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-sm-4">
            <h1>Sobre o Projeto</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi explicabo consectetur totam hic sunt officia molestiae aliquid! Dolores cumque beatae, optio fugiat quis repellendus est eveniet eius debitis, qui magnam.</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-sm">col-sm</div>
        <div class="col-sm">col-sm</div>
        <div class="col-sm">col-sm</div>
      </div>
    </section>

    <section>

    </section>
  </div>

  <!-- Bootstrap Bundle -->
 

</body>
<footer>


</footer>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  <!-- JS para os canvas -->
  <script>
    const toggleBtn = document.getElementById('toggleCanvas');
    const overlay = document.getElementById('overlay');
    const cards = ['canvas1', 'canvas2', 'canvas3'];
    const canvasContainer = document.getElementById('canvasContainer');
    let isOpen = false;

    toggleBtn.addEventListener('click', () => {
      if (isOpen) return;

      isOpen = true;
      overlay.classList.add('active');
      canvasContainer.style.right = '20px';

      let delay = 0;
      cards.forEach((id) => {
        setTimeout(() => {
          const el = document.getElementById(id);
          el.classList.add('show');
          el.classList.remove('hide');
        }, delay);
        delay += 300;
      });
    });

    overlay.addEventListener('click', () => {
      let delay = 0;

      cards.forEach((id) => {
        setTimeout(() => {
          const el = document.getElementById(id);
          el.classList.remove('show');
          el.classList.add('hide');
        }, delay);
        delay += 100;
      });

      setTimeout(() => {
        canvasContainer.style.right = '-300px';
        overlay.classList.remove('active');
        isOpen = false;
      }, delay + 100);
    });
  </script>
</html>
