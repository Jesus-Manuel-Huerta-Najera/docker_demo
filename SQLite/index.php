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

                    <a href="https://github.com/Jesus-Manuel-Huerta-Najera/" class="navbar-item">
                        Jesus Manuel Huerta Najera
                    </a>
                    <a href="./insert.php" class="navbar-item">
                      Agregar datos
                    </a>

                   <!-- <a href="./docker.html" class="navbar-item">
                      Docker
                    </a>-->
                </div>
            </div>
        </div>
    </nav><!-- NAVEGACIÓN -->
    <?php
              $mysql = new SQLite3('agenda.db');
              $select = 'SELECT * from personas;';
              $resultado = $mysql->query('SELECT * from personas;');
              
            ?>
  <!-- HERO -->
  <div class="has-background-grey-lighter">
    <div class="container my-5 px-3">
        <section class="columns">
           
            <div class="column  is-flex is-flex-direction-column is-justify-content-space-between">
                <div>
                    <h3 class="is-size-3 has-text-black-bis has-text-weight-bold line-height-3 mb-4">
                      Contactos
                    </h3>
                    
                </div>
                <div class="table-container">
                  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                    <thead >
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Cambios</th>
                      <th>Eliminar</th>
                    </thead>
                    <tbody>
                      <?php while($filas = $resultado->fetchArray(SQLITE3_ASSOC)){ ?>
                        <tr>
                          <td><?php echo $filas['id'] ?></td>
                          <td><?php echo $filas["nombre"] ?></td>
                          <td><?php echo $filas["email"] ?></td>
                          <td><?php echo $filas["telefono"] ?></td>
                          <td><a class="button is-success is-rounded" href='./update.php?id=<?php echo $filas["id"]?>'>Editar</a></td>
                          <td><a class="button is-danger is-rounded" href='./delete.php?id=<?php echo $filas["id"]?>'>Quitar</a></td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
            </div>
           
        </section>
    </div>
</div><!-- HERO -->

</body>
</html>