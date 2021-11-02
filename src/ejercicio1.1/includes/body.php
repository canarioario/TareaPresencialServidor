<div class="encabezado text-center">	
        <h1><img class="alineadoTextoImagen" />Practica Presencial Tema 1 </h1>
    </div>    

    <div class="centrar">	
        <div class="container cuerpo text-center">	
          <h2> Introduzca los coeficientes del polinomio de segundo grado</h2>
        </div>
        <div class="container">
            <form  action="polinomio.php" method="POST" enctype="multipart/form-data">

              <label for="num1">Ingrese el coeficiente de la variable cuadrática:
                     <input type="number" name="num1" class="form-control" /> 
              </label>
              <br/>
              <label for="num2">Ingrese el coeficiente de la variable lineal:
                     <input type="number" name="num2" class="form-control" /> 
              </label>
              <br/>
              <label for="num3">Ingrese el término independiente:
                     <input type="number" name="num3" class="form-control" /> 
              </label>
              <br/>

              <br/>           
              <input type="submit" value="Enviar" name="submit" class="btn btn-success" />
            </form>
          </div>
    </div>  <!-- Container Cuerpo --> 	