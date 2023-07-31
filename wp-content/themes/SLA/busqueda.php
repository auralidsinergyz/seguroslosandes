<?php
	session_start();
	$_SESSION['data'];
	$_SESSION['prov'];
	$_SESSION['cat'];
	include("controller.php");
	$link=conectar();
	$idcategoria = get_query_var('cat');
	$_SESSION['cat'] = $idcategoria;
	$result_edo = buscar_estado($idcategoria,$link);
	//$result_city = buscar_ciudad($link);
	
	if($cat == 5)
		$tipo_prov="Clínicas";
	if($cat == 6)
		$tipo_prov="Talleres";
	if($cat == 7)
		$tipo_prov="Laboratorios";
	
	$_SESSION['prov'] = $tipo_prov;
	$datos = array(); 
	$i=0;
?>
<script>
function load(str)
{
	var xmlhttp,c;
	c = document.getElementById("ciudad").value;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("city").innerHTML=xmlhttp.responseText;
		}	
	}
	xmlhttp.open("POST","http://www.seguroslosandes.com/wp-content/themes/SLA/controller2.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("q="+str);
}

function Mostrar_info(edo,city,prov,telf,direc){
	alert("Estado: "+edo+"\nCiudad: "+city+"\nProveedor: "+prov+"\nTel\u00e9fono: "+telf+"\nDirecci\u00f3n: "+direc);
}

</script>

<div class="row">
	<div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-offset-4 col-md-4 col-lg-4 col-lg-offset-4">
		<form class="form-horizontal" action="" method="POST">
			<div class="form-group">
				<label for="titleEdo" class="col-sm-4 control-label">Estado</label>
				<div class="col-sm-8">
					<select class="form-control" id="edo" name="edo" onChange="load(this.value)">
						<option selected='selected' value='000'>SELECCIONE</option>
						<?php
							if($row_edo = mysql_fetch_array($result_edo)){ 
								do{
									echo "<option value='".$row_edo[0]."'>".$row_edo[1]."</option>";
								}while($row_edo = mysql_fetch_array($result_edo));
							}else{
								echo "<script>alert('No se encontraron Estados')</script>";
							}							
							mysql_free_result($result_edo);
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="titleCity" class="col-sm-4 control-label">Ciudad</label>
				<div class="col-sm-8" id="city">
					<select class="form-control" id="ciudad" name="ciudad">				
						<option selected="selected" value="000">SELECCIONE</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="titleName" class="col-sm-4 control-label">Proveedor</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nameProv" name="nameProv" placeholder="Proveedor" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-3 col-sm-offset-4 col-sm-2 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3">
					<button type="submit" id="buscar" name="buscar" class="btn btn-default">Buscar</button>
				</div>
				<div class="col-xs-3 col-sm-2 col-md-3 col-lg-3">
					<button type="reset" class="btn btn-default">Limpiar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
				if(isset($_POST['buscar']))
				{
					//echo $_POST["edo"]."<br>".$_POST["ciudad"]."<br>".$_POST["nameProv"];
					if($_POST["edo"]=="000" && $_POST["ciudad"]=="000" && $_POST["nameProv"]==""){
						echo "<script> alert('Debe seleccionar al menos un parametro de busqueda') </script>";
					}else{
						$result_prov = buscar_proveedor($link,$_POST["edo"],$_POST["ciudad"],$_POST["nameProv"],$idcategoria);
						if($row_prov = mysql_fetch_array($result_prov)){ 
							echo "<table class='table table-bordered'>
							        <tr class='titulo'>
										<th class='text-center'>ESTADO</th>
										<th class='text-center'>CIUDAD</th>
										<th class='text-center'>PROVEEDOR</th>
										<th class='text-center'>TEL&Eacute;FONO</th>
										<th class='text-center'>DIRECCI&Oacute;N</th>
										<!--<th class='text-center'>CONVENIDA</th>-->
								    </tr>";
							do{
								
								if($row_prov[5]=='SI'){
								        echo "<tr class='success fila'>
								        	    <td>".$row_prov[0]."</td>
								        		<td>".$row_prov[1]."</td>
								        		<td>".$row_prov[2]."</td>
								        		<td>".$row_prov[3]."</td>
								        		<td>".$row_prov[4]."</td>
								        		
								        	 </tr>";
											 #convenida <td>".$row_prov[5]."</td>
                                 }
								 else{
								        echo "<tr class='fila'>
								        		<td>".$row_prov[0]."</td>
								        		<td>".$row_prov[1]."</td>
								        		<td>".$row_prov[2]."</td>
								        		<td>".$row_prov[3]."</td>
								        		<td>".$row_prov[4]."</td>
								        		
								        	 </tr>";
											 #convenida <td>".$row_prov[5]."</td>
								 }  
								 $datos[] = $row_prov;
								 //echo $datos[$i][0];
								 //$i++;
							}while($row_prov = mysql_fetch_array($result_prov));
							$_SESSION['data'] = $datos;
							//echo "<a href='http://www.seguroslosandes.com/wp-content/themes/SLA/generarPDF.php' target='_blank'>Imprimir</a>";
							mysql_free_result($result_prov);
							echo "</table>";
						}else{
							echo "<script>alert('No se encontraron registros')</script>";
						}						
						
					}
				}
			?>
<?php
	$_POST["edo"] = "000";
	mysql_close($link); 
?>