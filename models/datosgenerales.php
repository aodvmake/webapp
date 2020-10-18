<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $conht = new callTo();
       $cnx = $conht->callme();
       $correo=$_SESSION["email"];
       $con=mysqli_query($cnx,"SELECT* FROM `usuario` WHERE email='$correo' ");
       $row=mysqli_fetch_array($con);
       $cons=mysqli_query($cnx,"SELECT* FROM `datosgenerales` WHERE IDusuario='".$row['IDusuario']."' ");
       $rows=mysqli_fetch_array($cons);

       echo '
      <form method="POST" action="../models/guardarcambios.php">
      <div class="container">
      <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>Actualizar datos generales</h2>
       
        
            <label for="name_e">Nombre de la empresa</label>
            <input type="text" class="form-control" name="name_e" id="name_e" maxlength="50" value="'.$rows['name_e'].'">


            <label for="name_p">Nombre del la persona encargada</label>
            <input type="text" class="form-control" name="name_p" id="name_p" maxlength="50"  value="'.$rows['name_p'].'">

            <label for="telefono">Telefono de la empresa</label>
            <input type="text" class="form-control" name="telefono" id="telefono" onkeypress="return soloNumeros(event);" maxlength="10"  value="'.$rows['telefono'].'">


            <label for="domicilio">Domicilio</label>
            <input type="text" class="form-control" name="domicilio" id="domicilio" maxlength="50" value="'.$rows['name_p'].'">


            <label for="colonia">Colonia</label>
            <input type="text" class="form-control" name="colonia" id="colonia" maxlength="50" value="'.$rows['colonia'].'">
        
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" maxlength="30" value="'.$rows['estado'].'"> 
      
            <label for="muncipio">Municipio</label>
            <input type="text" class="form-control" name="muncipio" id="muncipio" maxlength="30" value="'.$rows['municipio'].'">

            <label for="num">Numero</label>
            <input type="text" class="form-control" name="num" id="num" maxlength="3" onkeypress="return soloNumeros(event);" value="'.$rows['numero'].'">
       

            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" maxlength="25">
                 
            <br>

            <div class="row">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="enviar" id="enviar" value="'.$rows['IDusuario'].'">Actualizar</button>
              </div>
            </div>
      </div>    
    </div>
  </div>
  </form>
';
    }
}
?>
