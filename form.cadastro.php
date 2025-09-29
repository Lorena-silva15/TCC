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
      width: 55%;
      text-align: center;
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
      margin-top:6%
    }

    body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 50px 0;
      
      
    }
    a{
        text-decoration:none
    }
  
  </style>
</head>
<body>

  <div class="pai">

    <form action="cadastro.php" method="get">
            <div class="input-group mb-3">
            
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                
            </div>  

                
            <div class="input-group mb-3">   

                <input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon1" required>
                
            </div>


            <div class="input-group mb-3">   
                <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1" required min='8'>
                
            
            </div>  

            <div class="input-group ">
                <input type="submit" class="form-control" placeholder="Confrmar" aria-label="submit" aria-describedby="basic-addon1">
                
                <button><a href="#">ja tem uma conta? Faça login</a></button>
            </div>
    </form>
           


           
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  

</body>
</html>
