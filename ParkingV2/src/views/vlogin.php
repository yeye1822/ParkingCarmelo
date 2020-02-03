<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ParkingCarmelo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Conceptos<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="src/controllers/cLogin.php">
      <input class="form-control mr-sm-2 inputTxt" type="text" placeholder="Usuario" aria-label="Usuario" name="txtUsername" required onkeyup="validNumber(this)" />
      <input class="form-control mr-sm-2 inputTxt" type="text" placeholder="Contraseña" aria-label="Contraseña" name="txtPassword" required />
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ingresar</button>
    </form>
  </div> 
</nav>