<?php
	    
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Caracol.php');
	  

	    
	    include ('../layouts/header.php');
?>

<pre>
<?php

	echo "Aqui va el codigo del caracol";

	$carcol = new Caracol();
	$rs = $carcol->consulta_datos();
	$carcol->show_grid('*', ' ','1');
	//print_r($rs);
?>



<?php
  include ('../layouts/footer.php');
?>
