<?php 

// Definir as variáveis session
if(!isset($_SESSION['email']))   { $_SESSION['emil']  = null; }
if(!isset($_SESSION['senha']))   { $_SESSION['senha']  = null; }
if(!isset($_SESSION['nome']))   { $_SESSION['nome']  = null; }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tryling</title>
   <!-- <link href="css/bootstrap.min.css" media="all" rel="stylesheet"></head> -->
<body>
  <header>
    <nav style="background-color: #6050E3 !important;" class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          Tryling
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cursos.html">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="salvos.html">Salvos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cadastro.html">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <br>
<main>
  <div class="container"> 

    <h1>Cadastro</h1>

    <form action="#" method="POST">

    <div class="form-floating mb-3">
    
    <input 
      name = "email"
      type = "text" 
      class = "form-control" 
      id = "floatingInput" 
      autocomplete = "off"
      placeholder = "email@gmail.com">
       <label for="floatingInput">Endereço de email </label>
    </div>
    
    <div class="form-floating">
      <input 
      name = "senha"
      type =  "password"  
      class = "form-control" 
      id  = "floatingPassword" 
      placeholder = "Password"
      >
      <label for="floatingPassword">Password </label>
    </div>

    <p></p>

    <div class="form-floating"> 
      <input 
      name = "nome"
      type  = "text" 
      class = "form-control" 
      id  = "floatingInput" 
      autocomplete = "off"
      placeholder = "name"
      >
      <label for="floatingInput">Nome</label>
    </div>
    </form>
  </div>
</main>
<br>


<footer>
  <nav style="background-color: #232AB3 !important;" class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <p class="nav-link active" aria-current="page" href="index.html">&copy; 2023 TRYLING</p>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
</footer>

</body>
</html>