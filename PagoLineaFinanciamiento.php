<?php
// Comienzo del Llamado a la API
$url = 'https://api.instapago.com/payment';
$correo = urldecode($_POST['p_t08']);
$titulo = 'Voucher - Pago en Linea';

$fields = array("KeyID" => "3DED99F1-2C8B-43CA-BDD5-62E9593D4554",
				"PublicKeyId" => "66096616de278dcbbeece38919c6b3e7",
				"Amount" => urlencode($_POST['p_t07']), 
				"Description" => "Pago de Poliza", 
				"CardHolder"=> urlencode($_POST['p_t05']), 
				"CardHolderId"=> urlencode($_POST['p_t06']), 
				"CardNumber" => urlencode($_POST['p_t01']), 
				"CVC" => urlencode($_POST['p_t02']), 
				"ExpirationDate" => urlencode($_POST['p_t03'])."/".urlencode($_POST['p_t04']), 
				"StatusId" => "2", 
				"Address" => " ", 
				"City" => " ", 
				"ZipCode" => " ", 
				"State" => " ");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
//echo $server_output ;

$vector = json_decode($server_output,true); //--> Lo convierto en un array

$exito = $vector["success"];
$mensaje = $vector["message"];
$id = $vector["id"];
$codigo = $vector["code"];
$identificador = $vector["reference"];
$contenido = $vector["voucher"];
$numeroorden = $vector["ordernumber"];
$secuencia = $vector["sequence"];
$aprobacion = $vector["approval"];
$lote = $vector["lote"];
$codigorespuesta = $vector["responsecode"];
$diferido = $vector["deferred"];
$fecha = $vector["datetime"];
$monto = str_replace(",", "", $vector["amount"]);
$authid = $vector["authid"];
$url = $identificador.'.html';

// Convierte entidades HTML especiales de nuevo en caracteres
$htmllimpio = htmlspecialchars_decode($contenido);

file_put_contents($url, $htmllimpio);

$voucher = html_entity_decode($contenido); //--> HTML del vocher limpio
//echo $voucher; //--> Voucher visualizado en el navegador
echo "<p style='margin-left:500px'>$voucher</p>";
echo '</br>';
echo "<p style='text-align:center; font: 15px arial, sans-serif; text-decoration:underline; font-weight:bold;' >Estimado Cliente, se le ha enviado una copia del Voucher, al correo electrónico registrado en la empresa. Gracias por su Pago</p>";
// Fin del Llamado a la API

// HTML Correo
$html =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        table {border-collapse: collapse !important;}
    </style>
    <![endif]-->
    <style type="text/css">
        /*Media Queries*/
        @media screen and (max-width: 400px) {
            .two-column .column{
                max-width: 100% !important;
            }
        }
        @media screen and (min-width: 401px) and (max-width: 620px) {
            .two-column .column {
                max-width: 50% !important;
            }
        }
        @media print {
            body .full-width-image {
                display: none !important;
            }
            body .one-column {
                display: none !important;
            }
            body .left-sidebar {
                display: none !important;
            }
            body .middle-sidebar {
                display: none !important;
            }
            body .right-sidebar {
                display: none !important;
            }
        }
    </style>
</head>

<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f6f8f1;" >
    <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;" >
        <div class="webkit" style="max-width:600px;" >
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" style="border-spacing:0;font-family:sans-serif;" >
                <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                    <![endif]-->
                        <table class="outer" align="center" style="border-spacing:0;font-family:sans-serif;Margin:0 auto;width:100%;max-width:600px;" >
                            <!-- Head -->
                            <tr>
                                <td class="full-width-image" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                    <!--<img src="https://www.seguroslosandes.com/Imagenes/pagoenlinea/Header.png" alt="" style="border-width:0;width:100%;height:auto;border-radius:0 0 15px 15px;border-bottom-width:2px;border-bottom-style:solid;border-bottom-color:#AFBD21;" />-->
                                </td>
                            </tr>
                            <tr>
                                <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                    <table width="100%" style="font-family:sans-serif;" >
                                        <tr>
                                            <td class="inner contents" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;width:100%;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#f2eeed;color:#00583c;text-align:justify;" >
                                                <p class="h1" style="Margin:0;color:#00583c;font-size:24px;font-weight:bold;text-align:center;Margin-bottom:10px;" >Portal de Clientes</p>
                                                <p class="h3" style="Margin:0;font-style:italic;text-align:center;Margin-bottom:10px;" >Voucher Digital - Pago en Linea</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Body -->
                            <tr>
                                <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;" >
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table width="100%" style="font-family:sans-serif;" >
                                        <tr>
                                            <td width="50%" valign="top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                            <![endif]-->
                                                <div class="column" style="width:100%;max-width:300px;display:inline-block;vertical-align:top;" >
                                                    <table width="100%" style="font-family:sans-serif;" >
                                                        <tr>
                                                            <td class="inner" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#f2eeed;" >
                                                                <table class="contents" style="font-family:sans-serif;width:100%;font-size:14px;text-align:justify;" >
                                                                    <tr>
                                                                        <td class="resp" align="center" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:10px;" >
                                                                            <!-- Voucher -->
                                                                            	'.$voucher.'
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <tr>
                                <td class="left-sidebar" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;" >
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table width="100%" style="font-family:sans-serif;" >
                                        <tr>
                                            <td width="600" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                            <![endif]-->
                                            <table class="column right" style="font-family:sans-serif;width:100%;display:all;vertical-align:middle;max-width:600px;" >
                                                <tr>
                                                    <td class="inner contents" style="padding-right:10px;padding-left:10px;width:100%;padding-top:20px;padding-bottom:15px;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#f2eeed;color:#00583c;font-size:16px;text-align:center;" >
                                                        Pago Efectuado Exitosamente!</br>
                                                        Gracias por usar nuestro servicio de Pago en Linea</br>
                                                        <span style="text-align:center;font-style:italic;font-weight:bold;color:#00583c;" ></br></span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <tr>
                                <td class="middle-sidebar" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;" >
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table width="100%" style="font-family:sans-serif;" >
                                        <tr>
                                            <td width="600" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                            <![endif]-->
                                            <table class="column right" style="font-family:sans-serif;width:100%;display:all;vertical-align:middle;max-width:600px;" >
                                                <tr>
                                                    <td class="inner contents" style="padding-right:10px;padding-left:10px;width:100%;padding-top:20px;padding-bottom:15px;color:#00583c;font-size:14px;text-align:left;" >
                                                        <small><b>IMPORTANTE:</b> Este es un correo informativo. Por favor, no responda o reenvíe mensajes a esta dirección.</small></br></br>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td class="right-sidebar" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-radius:15px 15px 0 0;background-color:#AFBD21;text-align:center;font-size:0;" >
                                    <!--[if (gte mso 9)|(IE)]>
                                    <table width="100%" style="font-family:sans-serif;" >
                                        <tr>
                                            <td width="600" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                            <![endif]-->
                                            <table class="column right" style="font-family:sans-serif;width:100%;display:inline-block;vertical-align:middle;max-width:600px;" >
                                                <tr>
                                                    <!--<td class="inner contents" style="width:100%;padding-top:20px;padding-bottom:15px;padding-right:45px;padding-left:45px;color:#00583c;font-size:13px;text-align:center;" >
                                                        &reg; Seguros Los Andes C.A. Inscrita en la Superintendencia de la Actividad Aseguradora </br> 
                                                        Ministerio del Poder Popular para la Banca y Finanzas, bajo el Número 44 </br>
                                                        Miembro de la Cámara de Aseguradores de Venezuela</br> 
                                                        RIF: J-07001737-6
                                                    </td>-->
                                                </tr>
                                            </table>
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </table>
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                </tr>
            </table>
            <![endif]-->
        </div>
    </center>
</body>
</html>';

// Correo electrónico
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= "From: SLA - Pago en Linea <pago.enlinea@seguroslosandes.com>\r\n";

//mail($correo, $titulo, utf8_decode($html), $cabeceras) --> Envio de correo sin verificar si envio o no
if(@mail($correo, $titulo, utf8_decode($html), $cabeceras)) {
    //echo 'Mensaje enviado';
}
else{
    echo 'Mensaje no enviado';
}
echo '</br>';
echo '</br>'; 

// Comienzo de Conexión de BD
// Comienzo de Conexión de BD
//echo 'Estableciendo Conexión con BD...';
$db_test = '(DESCRIPTION= (ADDRESS_LIST= (ADDRESS= (PROTOCOL=TCP) (HOST=10.2.20.30) (PORT=1521)))(CONNECT_DATA= (SID=XE)))';
$conn = oci_connect('PORTAL', 'BDWebDES12Y', $db_test);
if (!$conn) {
    $e = oci_error();
    print'oracle connect error: ' .$e['message'];
}
else {
    //echo 'Conexión Establecida'."\n";
}
echo '</br>';
echo '</br>';

// Inserción de respuesta en la BD
$query = oci_parse($conn, "INSERT INTO PL_POLIZAS_PROC ( SUCCESS,
                                                        MESSAGE,
                                                        ID,
                                                        CODE,
                                                        REFERENCE,
                                                        VOUCHER,
                                                        ORDERNUMBER,
                                                        SEQUENCE,
                                                        APPROVAL,
                                                        LOTE,
                                                        RESPONSECODE,
                                                        DEFERRED,
                                                        DATETIME,
                                                        AMOUNT,
                                                        AUTHID) 
                          VALUES (  :exito,
                                    :mensaje,
                                    :id,
                                    :codigo,
                                    :identificador,
                                    :contenido,
                                    :numeroorden,
                                    :secuencia,
                                    :aprobacion,
                                    :lote,
                                    :codigorespuesta,
                                    :diferido,
                                    :fecha,
                                    :monto,
                                    :authid)");

    oci_bind_by_name($query, ":exito", $exito); //Ligar los parámetros oracle con variables de PHP 
    oci_bind_by_name($query, ":mensaje", $mensaje);
    oci_bind_by_name($query, ":id", $id);
    oci_bind_by_name($query, ":codigo", $codigo);
    oci_bind_by_name($query, ":identificador", $identificador);
    oci_bind_by_name($query, ":contenido", $contenido);
    oci_bind_by_name($query, ":numeroorden", $numeroorden);
    oci_bind_by_name($query, ":secuencia", $secuencia);
    oci_bind_by_name($query, ":aprobacion", $aprobacion);
    oci_bind_by_name($query, ":lote", $lote);
    oci_bind_by_name($query, ":codigorespuesta", $codigorespuesta);
    oci_bind_by_name($query, ":diferido", $diferido);
    oci_bind_by_name($query, ":fecha", $fecha);
    oci_bind_by_name($query, ":monto", $monto);
    oci_bind_by_name($query, ":authid", $authid);

//Ejecutar la sentencia para insertar    
$e=oci_execute($query);

//echo $e;

if ($e) {
    
    //print "Una fila insertada";
}
else{
    $e = oci_error($query);
    print'oracle ínsert error: ' .$e['message'];
}

oci_free_statement($query);
oci_close($conn);
// Fin de Conexión de BD

// Cierre del PHP
//echo "<script type='text/javascript'>";
//echo "window.close()";
//echo "</script>";
//exit();

?>