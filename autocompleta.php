<script language="JavaScript" src="js/jquery-1.5.1.min.js"></script>
<script language="JavaScript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />

<?php
include("conexion.php");//se incluyen los datos para realizar la conexion a su base de datos

$conC = "select * from contactos where activo = 1";//consulta para seleccionar las palabras a buscar, esto va a depender de su base de datos
$queryC = mysql_query($conC);

	?>
    
    <script>
	$(function() {
		
		<?php
		
		while($row= mysql_fetch_array($queryC)) {//se reciben los valores y se almacenan en un arreglo
      $elementosC[]= '"'.$row['nombre'].'"';
	  
}
$arregloC= implode(", ", $elementosC);//junta los valores del array en una sola cadena de texto
		?>	
		
		var availableTags=new Array(<?php echo $arregloC; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#tagsC" ).autocomplete({
			source: availableTags
		});
	});
	</script>

	<?php

$conA = "select * from articulos where activo = 1";//consulta para seleccionar las palabras a buscar, esto va a depender de su base de datos
$queryA = mysql_query($conA);

	?>
    
    <script>
	$(function() {
		
		<?php
		
		while($row= mysql_fetch_array($queryA)) {//se reciben los valores y se almacenan en un arreglo
      $elementosA[]= '"'.$row['nombre'].'"';
	  
}
$arregloA= implode(", ", $elementosA);//junta los valores del array en una sola cadena de texto
		?>	
		
		var availableTags=new Array(<?php echo $arregloA; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#tagsA" ).autocomplete({
			source: availableTags
		});
	});
	</script>
	
	
	
<?php

$conC2 = "select * from contactos where activo = 1";//consulta para seleccionar las palabras a buscar, esto va a depender de su base de datos
$queryC2 = mysql_query($conC2);

	?>
    
    <script>
	$(function() {
		
		<?php
		
		while($row= mysql_fetch_array($queryC2)) {//se reciben los valores y se almacenan en un arreglo
      $elementosC2[]= '"'.$row['nombre'].'"';
	  
}
$arregloC2= implode(", ", $elementosC2);//junta los valores del array en una sola cadena de texto
		?>	
		
		var availableTags=new Array(<?php echo $arregloC2; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#tagsC2" ).autocomplete({
			source: availableTags
		});
	});
	</script>

	<?php

$conA2 = "select * from articulos where activo = 1";//consulta para seleccionar las palabras a buscar, esto va a depender de su base de datos
$queryA2 = mysql_query($conA2);

	?>
    
    <script>
	$(function() {
		
		<?php
		
		while($row= mysql_fetch_array($queryA2)) {//se reciben los valores y se almacenan en un arreglo
      $elementosA2[]= '"'.$row['nombre'].'"';
	  
}
$arregloA2= implode(", ", $elementosA2);//junta los valores del array en una sola cadena de texto
		?>	
		
		var availableTags=new Array(<?php echo $arregloA2; ?>);//imprime el arreglo dentro de un array de javascript
				
		$( "#tagsA2" ).autocomplete({
			source: availableTags
		});
	});
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	