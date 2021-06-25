<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  </head>
  <body>
      <!-- NAVEGACIÓN -->
      <nav class="navbar is-black" role="navigation" aria-label="main navigation">
        <div class="container">
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-brand">
                  <a class="navbar-item" href="https://www.definicionabc.com/negocios/agenda.php">
                      Agenda
                  </a> 
                </div>
                <div class="navbar-end">
                    <a href="./index.php" class="navbar-item">
                      Regresar
                    </a>

                   <!-- <a href="./docker.html" class="navbar-item">
                      Docker
                    </a>-->
                </div>
            </div>
        </div>
    </nav><!-- NAVEGACIÓN -->
  <!-- HERO -->
  <?php
    $mysql = new SQLite3('agenda.db');
    if (!isset($_GET["id"])){
      exit("no hay id");
    }
    $id = $_GET['id'];
    $select = "SELECT * FROM personas WHERE id = '$id';";
    $resultado = $mysql->query($select);
    //$persona = $resultado-> fetch_all(MYSQLI_ASSOC);
    while($up = $resultado->fetchArray(SQLITE3_ASSOC)){
  ?>
  <div class="has-background-grey-lighter">
    <div class="container my-5 px-3">
        <section class="columns">
           
            <div class="column is-two-thirds is-flex is-flex-direction-column is-justify-content-space-between">
                <div>
                    <h3 class="is-size-3 has-text-black-bis has-text-weight-bold line-height-3 mb-4">
                      Editar Contacto
                    </h3>
                    
                </div>
              <form action="Cambios.php" method="POST">
              <?php //while($filas= $resultado->fetch_assoc()){ ?>
                <div class="field">
                  <input type="hidden" name="id" id="id" value="<?php echo $up['id'] ?>">
                </div>
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <input class="input" type="text" name="nombre" id="nombre" placeholder="Text input" value="<?php echo $up['nombre'] ?>" required>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Email</label>
                  <div class="control">
                    <input class="input" type="text" name="email" id="email"  placeholder="hola@" value="<?php echo $up['email'] ?>" required>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Teléfono</label>
                  <div class="control">
                    <input class="input" type="number" name="telefono" id="telefono" placeholder="numero" value="<?php echo $up['telefono'] ?>" required> 
                  </div>
                </div>

                <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-link">Guardar</button>
                  </div>
                </div>
                
              </form>
              <?php  }?>
            </div>
           
        </section>
    </div>
</div><!-- HERO -->

</body>
</html>