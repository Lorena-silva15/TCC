<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Canvas com Slide</title>

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
      padding: 50px 0;
    }

    #toggleCanvas {
      background-color: #0077b6;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      padding: 15px 25px;
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
      opacity: 1;
      transform: translateX(0);
    }

    .canvas-card.hide {
      opacity: 0;
      transform: translateX(100%);
    }

    .overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.1);
      z-index: 1050;
    }

    .overlay.active {
      display: block;
    }
  </style>
</head>
<body>

  <div class="pai">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient’s username" aria-label="Recipient’s username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
    </section>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  

</body>
</html>
