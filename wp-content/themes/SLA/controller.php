<?php	
// Conexión a la Base de Datos

function conectar()
{
	if (!($link=mysql_connect("localhost","PROSLAUSR","Pr0v33d0res")))
	{
		echo "Error: No es posible establecer la conexión";
		exit();
	}
	if (!mysql_select_db("SLA",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
// Consulta para Busquedar los Estados a seleccionar por el usuario
function buscar_estado($cat,$link)
{
	if($cat == 5)
		$tipo_prov="001";
	if($cat == 6)
		$tipo_prov="002";
	if($cat == 7)
		$tipo_prov="003";
	$result=mysql_query("select distinct(e.codestado), e.descestado 
						 from prov_estado e, prov_proveedores p
						 where e.codestado = p.codestado
						 and p.tipoproveedor = ".$tipo_prov."
						 and sta_pro=1 
						 order by descestado",$link);
	//while($row = mysql_fetch_array($result))
	if(!$result){
		echo "Error: En la consulta - No se encontraron Estados";
		exit();
	}else{
		return $result;
	}
}

// Consulta para Busquedar las Ciudades a seleccionar por el usuario
/*function buscar_ciudad($link)
{
}
*/

function buscar_proveedor($link,$edo,$city,$nameprov,$cat){
    $prov = strtoupper($nameprov);
	if($cat == 5)
		$tipo_prov="001";
	if($cat == 6)
		$tipo_prov="002";
	if($cat == 7)
		$tipo_prov="003";
	// Si realizan la busqueda SOLO por PROVEEDOR
	if($edo == "000" && $city == "000" && $prov != ""){
		$result=mysql_query("select e.descestado, c.descciudad, p.nomproveedor, p.telef, p.direc, p.convenida
							from prov_proveedores p, prov_estado e, prov_ciudad c 
							where p.tipoproveedor=".$tipo_prov." 
							and p.nomproveedor like '%".$prov."%'
							and e.codestado = p.codestado
							and c.codciudad = p.codciudad
							and e.codestado = c.codestado
							and p.sta_pro=1
							order by p.convenida,c.descciudad,p.nomproveedor",$link);
	}
	// Si realizan la busqueda por ESTADO y PROVEEDOR
	if($edo != "000" && $city == "000" && $prov != ""){
		$result=mysql_query("select e.descestado, c.descciudad, p.nomproveedor, p.telef, p.direc, p.convenida
							from prov_proveedores p, prov_estado e, prov_ciudad c 
							 where p.tipoproveedor=".$tipo_prov."
							 and p.codestado=".$edo."
							 and p.nomproveedor like '%".$prov."%'
							 and e.codestado = p.codestado
							 and c.codciudad = p.codciudad
							 and e.codestado = c.codestado
							 and p.sta_pro=1
							 order by p.convenida,c.descciudad,p.nomproveedor",$link);
	}
	// Si realizan la busqueda SOLO por ESTADO
	if($edo != "000" && $city == "000" && $prov == ""){
		$result=mysql_query("select e.descestado, c.descciudad, p.nomproveedor, p.telef, p.direc, p.convenida
							from prov_proveedores p, prov_estado e, prov_ciudad c 
							 where p.tipoproveedor=".$tipo_prov." 
							 and p.codestado=".$edo."
							 and e.codestado = p.codestado
							 and c.codciudad = p.codciudad
							 and e.codestado = c.codestado
							 and p.sta_pro=1
        					 order by p.convenida,c.descciudad,p.nomproveedor",$link);
	}
	// Si realizan la busqueda por ESTADO y CIUDAD
	if($edo != "000" && $city != "000" && $prov == ""){
		$result=mysql_query("select e.descestado, c.descciudad, p.nomproveedor, p.telef, p.direc, p.convenida
							from prov_proveedores p, prov_estado e, prov_ciudad c 
							 where p.tipoproveedor=".$tipo_prov."
							 and p.codestado=".$edo."
							 and p.codciudad=".$city." 
							 and e.codestado = p.codestado
							 and c.codciudad = p.codciudad
							 and e.codestado = c.codestado
							 and p.sta_pro=1
							 order by p.convenida,c.descciudad,p.nomproveedor",$link);
	}
	// Si realizan la busqueda por TODOS los PARAMETROS
	if($edo != "000" && $city != "000" && $prov != ""){
		$result=mysql_query("select e.descestado, c.descciudad, p.nomproveedor, p.telef, p.direc, p.convenida
							from prov_proveedores p, prov_estado e, prov_ciudad c 
							 where p.tipoproveedor=".$tipo_prov."
							 and p.codestado=".$edo."
							 and p.codciudad=".$city." 
							 and p.nomproveedor like '%".$prov."%' 
							 and e.codestado = p.codestado
							 and c.codciudad = p.codciudad
							 and e.codestado = c.codestado
							 and p.sta_pro=1
							 order by p.convenida,c.descciudad,p.nomproveedor",$link);
	}
	if(!$result){
		echo "Error: En la consulta - No se encontraron Datos";
		exit();
	}else{
		return $result;
	}
}


?>
