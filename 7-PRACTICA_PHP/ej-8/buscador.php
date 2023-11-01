<?php
include("conexion.php");
$pal=$_POST['Palabra'];
if($pal){
    $resp = mysqli_query("select * from buscador where canciones LIKE '%".$pal."%'") or die(mysqli_error());
    if(mysqli_num_rows($resp) == "0") {
     echo "No hay resultados respecto a la palabra que busca.";
    } else {
        echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";
        while($cat = mysqli_fetch_array($resp)) {
          ?><td><?php 
          echo ($cat['canciones']); ?></td>       
</tr>    
<tr>
<td colspan="5">
  <?php      
  }
}
} else {
echo "<form name='FormBuscador' method='post' action=''><input name='Palabra' type='text'
id='Palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
}
?>
</body>
</html>