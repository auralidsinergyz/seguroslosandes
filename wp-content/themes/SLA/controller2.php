<?php
	session_start();
	include ('controller.php');
	$cat = $_SESSION['cat'];
	if($cat == 5)
		$tipo_prov="001";
	if($cat == 6)
		$tipo_prov="002";
	if($cat == 7)
		$tipo_prov="003";
		
	$q=$_POST['q'];
	//echo $seleccion = $_POST['ciudad'];
	$con=conectar();

	$res=mysql_query("select distinct(c.codestado), c.codciudad, c.descciudad
					  from prov_ciudad c, prov_proveedores p
					  where c.codestado=".$q."
					  and c.codciudad = p.codciudad
					  and c.codestado = p.codestado
					  and p.tipoproveedor = ".$tipo_prov,$con);
	if($q=='000')
	{
?>
		<select class="form-control" id="ciudad" name="ciudad">
			<option selected="selected" value="000">SELECCIONE</option>
		</select>
<?php 
	}else{ 
?>
		<select class="form-control" id="ciudad" name="ciudad">
			<option selected="selected" value="000">SELECCIONE</option>
<?php
			while($fila=mysql_fetch_array($res)){
?>
				<option value="<?php echo $fila[1]; ?>"><?php echo $fila[2]; ?></option>
<?php
				
			}
	}
?>
		</select>
