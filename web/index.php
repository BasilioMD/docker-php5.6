<html>
 <head>
  <title>Bienvenido</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    	<div class="container">
    	<?php 
	echo '<h1><u>Datos</u></h1>'; 
	
	// Conectando, seleccionando la base de datos
	$link = mysql_connect( 'bbdd5' , 'root' , 'root' )
	    	or die( 'No se pudo conectar: ' . mysql_error() );
	mysql_select_db( 'bbdd' ) or die( 'No se pudo seleccionar la base de datos' );

	// Realizar una consulta MySQL
	$query = 'SELECT * FROM Personas';
	$result = mysql_query( $query ) or die( 'Consulta fallida: ' . mysql_error() );

	// Imprimir los resultados en HTML
	echo '<table class="table table-striped">';
	echo '<thead><tr><th></th><th>Id</th><th>Nombre</th></tr></thead>';
	while ( $line = mysql_fetch_array( $result , MYSQL_ASSOC ) ){
		echo '<tr>';
		echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
	    foreach ( $line as $col_value ) {
		echo '<td>' . $col_value . '</td>';
	    }
	    echo '</tr>';
	}
	echo '</table>';

	// Liberar resultados
	mysql_free_result( $result );

	// Cerrar la conexión
	mysql_close( $link );
	?>
    </div>
</body>
</html>
