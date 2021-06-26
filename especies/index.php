<?php
$add=(isset($_POST['add']))?$_POST['add']:"";
echo $_POST['Nombre'];
include("../conexion/conexion.php");
switch($add){
    case "Guardar datos":
        
         $sentencia =$pdo->prepare("INSERT INTO especie(nombrecomun,ecorregion,grupo,orden,observaciones) Values(:Nombre,:Ecorregion,:Grupo,:Orden,:Observaciones)");
         $sentencia->bindParam(':nombrecomun',$Nombre);
         $sentencia->bindParam(':ecorregion',$Ecorregion);
         $sentencia->bindParam(':grupo',$Grupo);
         $sentencia->bindParam(':orden',$Orden);
         $sentencia->bindParam(':observaciones',$Observaciones);
        
         $sentencia->execute();
    break;
    
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>VideoManolo</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
  
 </head>
<body>
<div class="container">
    <form action="" method="post" ectype="multipart/form-data">
    
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-2">
						<input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ecorregion</label>
					<div class="col-sm-4">
						<input type="text" name="Ecorregion" class="form-control" placeholder="Ecorregion" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Grupo</label>
					<div class="col-sm-4">
						<input type="text" name="Grupo" class="form-control" placeholder="Grupo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Orden</label>
					<div class="col-sm-4">
                    <input type="text" name="Orden" class="form-control" placeholder="Orden" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Observaciones</label>
					<div class="col-sm-3">
						<textarea name="Observaciones" class="form-control" placeholder="Observaciones"></textarea>
					</div>
				</div>
				
                <div class="form-group">
					<label class="col-sm-3 control-label">numero</label>
					<div class="col-sm-3">
						<textarea name="numero" class="form-control" placeholder="numero"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" action="index.php" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>
  </div>
  
</body>
</html>

