<?php /*
● Ejercicio 1.2.1. Implemente un formulario HTML con los siguientes campos:
○ NIF
○ Nombre
○ Apellidos
○ Fecha Nacimiento
○ Email
○ Contraseña
*/ ?>
<div class="encabezado text-center">	
        <h1><img class="alineadoTextoImagen" /> Ejercicio 1.2.1 </h1>
    </div>    

    <div class="centrar">	
        <div class="container cuerpo text-center">	
          <h2> Formulario</h2>
        </div>
        <div class="container">
            <form  action="validar.php" method="POST" enctype="multipart/form-data">

            <label for="nif">NIF:
              <input type="text" class="form-control" name="nif" placeholder="Introduzca su NIF" maxlength="9"
               pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra"  />      
              </label>
              <br/>
              <label for="name">Nombre:
                     <input type="text" name="name" placeholder="Introduzca su nombre" class="form-control" /> 
              </label>
              <br/>
              <label for="surname"> Apellidos:
                     <input type="text" name="surname" placeholder="Introduzca sus apellidos" class="form-control" /> 
              </label>
              <br/>
              <label for="fecha">Fecha de nacimiento:
              <input type="date" class="form-control" name="fecha" max="2021-11-02"  />
              </label>
              <br/>
              <label for="email">Correo:
                     <input type="email" name="email" placeholder="Introduzca su correo" class="form-control" /> 
              </label>
              <br/>

              <label for="password">Contraseña:
                      <input type="password" name="password" placeholder="Introduzca su contraseña" class="form-control" />
              </label>
              <br/>

              <br/>           
              <input type="submit" value="Enviar" name="submit" class="btn btn-success" />
            </form>
          </div>
    </div>  <!-- Container Cuerpo --> 	
    