<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MATI</title>
</head>

<body>
<? 

$ruta = "http://www.seemple.com.ar/mati/";
if (!isset($_POST["enviar"])) {?>
<form id="form1" name="form1" method="post" action="index.php">
    <input type="hidden" name="enviar" value="1" />
    <div align="center">
      Ingresar nombre patron de las imagenes ( Ej: remeras_ ) :
        <input name="nombre" type="text" id="nombre" size="20"  />
      &nbsp;&nbsp;&nbsp;Cantidad de imagenes: 
      <input name="cantidad" type="text" id="cantidad" size="7" />
      &nbsp;&nbsp;&nbsp;
      <input type="submit" name="enviar" id="enviar" value="Generar HTML" />
    </div>
</form>
<? } else { $j=0; ?>


<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td colspan="3" height="50"><div align="center"><strong>ENCABEZADO PARA COLOCAR ALGUN TEXTO INTRODUCTORIO</strong></div></td>
  </tr>
    <? for ($n=1;$n<$_POST["cantidad"];$n++) { 
	
		if ($j==0) { 
	    echo "\n\t<tr>";
    	} 
	?>
    
    <td width="425">
    
    <table width="425" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div style="width:425px;height:425px;overflow:hidden;margin-bottom:30px;margin-top:30px; border:1px solid #DDD;"><img src="http://www.seemple.com.ar/mati/<? echo $_POST["nombre"].$n.".jpg";?>"/></div></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Aca va texto del producto</font></div></td>
      </tr>
    </table>
    
    </td>
    <? 
	if ($j==0) { 
	    echo "<td width='50'>&nbsp;</td>";
    } 

	if ($j==1) { 
		echo "</tr>";
		$j=0;
    } else {
		$j++;
	}
	
	} ?>
  

  
</table>
<? } ?>
</body>
</html>
