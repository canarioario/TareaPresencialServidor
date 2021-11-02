<div class="encabezado text-center">	
        <h1><img class="alineadoTextoImagen" />Practica Presencial Tema 1 </h1>
    </div>    

    <div class="centrar">	
        <div class="container cuerpo text-center">	
          <h2> Ejercicio 1</h2>
        </div>
        <div class="container">
            <form  action="valform.php" method="POST" enctype="multipart/form-data">

              <label for="name">Nombre:
                     <input type="text" name="name" class="form-control" /> 
              </label>
              <br/>
              <label for="surname"> Apellidos:
                     <input type="text" name="surname" class="form-control" /> 
              </label>
              <br/>
              <label for="email">Correo:
                     <input type="email" name="email" class="form-control" /> 
              </label>
              <br/>

              <label for="password">Contraseña:
                      <input type="password" name="password" class="form-control" />
              </label>
              <br/>

              <br/>           
              <input type="submit" value="Enviar" name="submit" class="btn btn-success" />
            </form>
          </div>
    </div>  <!-- Container Cuerpo --> 	