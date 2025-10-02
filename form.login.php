<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Canvas com Slide</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    .divs{
      margin-top:30%;
    }
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
      max-width:200px;
      text-align: center;
      height:5000px;
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
      margin-top:6%
    }

    body {  
      background-color: #de89ffff;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 50px 0;
      
      
    }
    a{
        text-decoration:none
    }
 

    .stackedForm {
      --form-btn-color-3: #f5d8f7ff;
      --form-btn-color-2: #f3c2f3ff;
      --form-btn-color-1: #eb98e7ff;
      --form-btn-color: #ac51acff;
      --form-btn-active-color: #7c0b3aff;
      --form-rotation: rotate3d(0, 1, 0, 180deg);
      --form-text-padding-left: 10px;
    }

    .stackedForm {
      transform: var(--form-rotation);
    }

    .stackedForm .input,
    .stackedForm button {
      width: 100%;
      height: 40px;
      position: relative;
      padding: 10px;
      border: 0.1px solid var(--form-btn-active-color);
    }

    .stackedForm button {
      background: var(--form-btn-color);
      border: none;
    }

    .stackedForm button span {
      display: block;
      transform: var(--form-rotation);
    }

    .stackedForm .wrapper {
      position: relative;
      transform: skewY(-14deg);
    }

    .stackedForm .wrapper li,
    .stackedForm button {
      position: relative;
      list-style: none;
      width: 200px;
      z-index: var(--i);
      transition: 0.3s;
      color: white;
    }

    .stackedForm .wrapper li::before,
    .stackedForm button::before {
      position: absolute;
      content: "";
      background: var(--form-btn-color);
      top: 0;
      left: -40px;
      width: 40px;
      height: 40px;
      transform-origin: right;
      transform: skewY(45deg);
      transition: 0.3s;
    }

    .stackedForm .wrapper li::after,
    .stackedForm button::after {
      position: absolute;
      content: "";
      background: var(--form-btn-color);
      width: 200px;
      height: 40px;
      top: -40px;
      left: 0;
      transform-origin: bottom;
      transform: skewX(45deg);
      transition: 0.3s;
    }

    .stackedForm .wrapper li:nth-child(1)::after,
    .stackedForm .wrapper li:nth-child(1)::before {
      background-color: var(--form-btn-color-3);
    }

    .stackedForm .wrapper li:nth-child(2)::after,
    .stackedForm .wrapper li:nth-child(2)::before {
      background-color: var(--form-btn-color-2);
    }

    .stackedForm .wrapper li:nth-child(3)::after,
    .stackedForm .wrapper li:nth-child(3)::before {
      background-color: var(--form-btn-color-1);
    }
     .stackedForm .wrapper li:nth-child(4)::after,
    .stackedForm .wrapper li:nth-child(5)::before {
      background-color:white
    }
    .stackedForm li .input {
      outline: none;
      border: none;
      padding: 0;
      padding-left: var(--form-text-padding-left);
      width: calc(100%);
      color: black;
      transform: var(--form-rotation);
    }

    .stackedForm li .input::placeholder {
      color: black;
    }

    .stackedForm li:nth-child(1) .input {
      background: var(--form-btn-color-3);
    }

    .stackedForm li:nth-child(2) .input {
      background: var(--form-btn-color-2);
    }

    .stackedForm li:nth-child(3) .input {
      background: var(--form-btn-color-1);
    }

    .stackedForm li:nth-child(1) .input:focus {
      outline: none;
      border: 0px solid var(--form-btn-color-3);
    }

    .stackedForm li:nth-child(2) .input:focus {
      outline: none;
      border: 0px solid var(--form-btn-color-2);
    }

    li:nth-child(3) .input:focus {
      outline: none;
      border: 0px solid var(--form-btn-color-1);
    }

    .stackedForm .wrapper li:hover,
    .stackedForm button:hover,
    .stackedForm .wrapper li:has(input:focus),
    .stackedForm button:focus {
      transform: translateX(-20px);
    }

    .stackedForm button:hover,
    .stackedForm button:hover::before,
    .stackedForm button:hover::after,
    .stackedForm button:focus,
    .stackedForm button:focus::before,
    .stackedForm button:focus::after {
      background: var(--form-btn-active-color);
    }
  
    .stackedForm button:active {
      transform: translateX(0px);
    }

    .google {
  background-color: white !important;
  color: black !important;
}
.google::before,
.google::after {
  background-color: #f8f9fa !important;
}

  .face {
  background-color: #3b5998 !important;
  color: black ;
}
.face::before,
.face::after {
  background-color: #3b5998 !important;
}

img{
  width: 16%;
  transform: scaleX(-1);
}

   
  </style>
</head>
<body>

  <div class="pai">

      <form class="stackedForm">
        <ul class="wrapper">
          <li style="--i:4;">
            <input required="" placeholder="Nome" type="text" class="input" />
          </li>
       
          <li style="--i:3;">
            <input
              name="email"
              required=""
              placeholder="E-mail"
              type="email"
              class="input"
            />
          </li>
             <li style="--i:2;">
            <input
              name="senha"
              required=""
              placeholder="senha  "
              class="input"
            />
          </li>
          
          <button style="--i:1;"><span>Submit</span></button>
        </ul>
      </form>
    <div class='divs'>
       <form class="stackedForm">
            <ul class="wrapper">
              
              
               <button style="--i:2; "  class='google'><img src="img/google.png" alt="" ></button> <br>
              <button style="--i:1;"  class='face' ><img src="img/face.png" alt="" ></button>
            </ul>
          </form>
    </div>
      


           


           
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  

</body>
</html>
