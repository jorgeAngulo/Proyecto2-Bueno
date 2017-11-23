<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/mystile.css">
<title>Panaderia pandora</title>
<meta charset="UTF-8">
  <meta name="description" content="Probando bordes">
  <meta name="keywords" content="HTML, CSS, bordes">
  <meta name="author" content="root" >
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>

<body bgcolor="#E2D0A8">
<h1 align="center"><strong><a href="Inicio.html"><img src="imagenes/Logopanaderia.jpg" width="265" height="161" /></a></strong></h1>

<div align="center">

<span id="liveclock"></span><script language="JavaScript" type="text/javascript">
 <!--

function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return

 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()

var dn="AM"
if (hours<24)
dn="PM"
if (hours>24)
hours=hours-24
if (hours==0)
hours=24

 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock="<font size='5' face='Arial' ><b><font size='1'>Hora actual:</font></br>"+hours+":"+minutes+":"
 +seconds+" "+dn+"</b></font>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
 }


window.onload=show5
 //-->
 </script>

</div>
<br />
<div class="topnav">
  <a href="index.html">Inicio</a>
  
      <div class="dropdown">
    <button class="dropbtn">Tipos de Panes</button>
    <div class="dropdown-content">
      <a href="enoferta.html">OFERTA</a>
      <a href="panesvariados.html">Panes variados</a>
      <a href="casero.html">Panes Caseros</a>
    </div>
  </div> 
    <a href="Conocenos.html">Conocenos</a>
    <a href="Contactanos.html">Contactanos</a>
    <a class="active" href="Clientes.php">Clientes</a>
    <a href="Registro.php">Registro</a>
      </div>
      
      <br />
      <center>
      <h2> Registrados </h2>
 		<br />     
<?php
$username = root;
$password = admin1234;
$servername = localhost;
$database = pandora;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Conexión con la base de datos $database del servidor $servername reali.<br/>";
    $sql = "SELECT * FROM registrados";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result_array = $stmt->fetchAll();
    print "<table border='1px solid grey'>";
    print "<tr>";
    print "<th>";print "Nombre";print "</th>";
    print "<th>";print "Apellido";print "</th>";
    print "<th>";print "Poblacion";print "</th>";
    print "<th>";print "CodigoPostal";print "</th>";
    print "<th>";print "Provincia";print "</th>";
    print "<th>";print "Telefono";print "</th>";
    print "<th>";print "CorreoElectronico";print "</th>";
    print "</tr>";
    foreach ( $result_array as $linea ) {
        print "<tr>";
        print "<td>";print $linea['Nombre'];print "</td>";
        print "<td>";print $linea['Apellido'];print "</td>";
        print "<td>";print $linea['Poblacion'];print "</td>";
        print "<td>";print $linea['CodigoPostal'];print "</td>";
        print "<td>";print $linea['Provincia'];print "</td>";
        print "<td>";print $linea['Telefono'];print "</td>";
        print "<td>";print $linea['CorreoElectronico'];print "</td>";
        print "</tr>";
    }
    print "</table>";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>

</center>

  <div class="footer">
No se admiten devoluciones y precios sin I.V.A.
Telefono de contacto: 943 65 32 13
Correo electronico: panaderiapandora@gmail.com
</div>
</body>
</html>
