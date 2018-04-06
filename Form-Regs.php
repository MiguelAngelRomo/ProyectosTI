 <!-- Page Content -->
    <div class="container">
        <br />
        <br />
      <!-- Registro -->
    <form action="Registro_proc.php">
  <div class="form-group">
    <!-- Nombre -->
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" placeholder="Nombre" name="Nombre" id="Nombre" required/>
    <!-- Apellido Paterno -->
    <label for="ApellidoP">Apellido Paterno:</label>
    <input type="text" class="form-control" placeholder="Apellido Paterno" name="ApellidoP" id="ApellidoP" required/>
    <!-- Apellido Materno -->
    <label for="ApellidoM">Apellido Materno:</label>
    <input type="text" class="form-control" placeholder="Apellido Materno" name="ApellidoM" id="ApellidoM" required/>
    <!-- Edad -->
    <label for="Edad">Edad:</label>
    <input type="text" class="form-control" placeholder="Edad" name="Edad" id="Edad" required/>
    <!-- Calle -->
    <label for="Calle">Calle:</label>
    <input type="text" class="form-control" placeholder="Calle" name="Calle" id="Calle" required/>
    <!-- Colonias -->
    <label for="Colonia">Colonia:</label>
    <input type="text" class="form-control" placeholder="Colonia" name="Colonia" id="Colonia" required/>
    <!-- Codigo Postal -->
    <label for="Cp">Codigo Postal:</label>
    <input type="text" class="form-control" placeholder="Codigo Postal" name="Cp" id="Cp" required/>
    <!-- Correo -->
    <label for="Cp">Correo Electronico:</label>
    <input type="email" class="form-control" placeholder="Correo Electronico" name="email" id="email" required/>
  </div>
  <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control"  placeholder="Contraseña" name="Contraseña" id="Cont" required>
    </div>
    <br/>
    <button type="submit" class="btn btn-primary">Registrarme</button>
    <br /><br />
  </form>
  <!-- Registro -->

      <!--    -->
      </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>