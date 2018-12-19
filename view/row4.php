<div class="container"> <!--CONTAINER-->
  <div class="row row4"> <!--ROW-->
    <div class="proyectos_row4">
      TRABAJOS
    </div>

          <div id="filters" class="button-group">
            <button class="button boton-filtro is-checked" data-filter="*">Todos</button>
            <button class="button boton-filtro" data-filter=".tipo1">Proyectos</button>
            <button class="button boton-filtro" data-filter=".tipo2">Coordinación de seguridad y salud</button>
            <button class="button boton-filtro" data-filter=".tipo3">Colaboraciones</button>
            <button class="button boton-filtro" data-filter=".tipo4">Informes y certificados</button>
            <button class="button boton-filtro" data-filter=".tipo5">Levantamiento topográfico de parcelas y medición</button>
            <button class="button boton-filtro" data-filter=".tipo6">Dirección de ejecución de obras</button>
          </div>

          <div class="grid">
            <?php

            TODO: Aquí tengo que cambiar 
            while($row = $result->fetch_array())
            {
              echo"<div class='element-item ".$row['tipoDato']." col-lg-3 col-md-4 col-sm-6 col-xs-12' data-category=\"".$row['tipoDato']."\">";
              echo"<div class='proyecto_row4 '>";
                echo"<img src='images/".$row['imagen']."' class='img-responsive imagen_proyectos' alt='".$row['descripcion']."' />";
                echo"<div class='subfoto_row4'>";
                  echo $row['descripcion'];
                echo"</div>";
              echo"</div>";
              echo"</div>";
            }
             mysqli_close($link);
             ?>
         </div>
  </div>
</div>
