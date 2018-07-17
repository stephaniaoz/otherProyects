
<head>
  <title><?php echo $nombre_pagina;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="http://".$nom_dominio."/view/default/images_pagina/favicon.ico" />

  <!--- Evitar retroceder la página --->
  <script type='text/javascript'>
					function deshabilitaRetroceso(){
					    window.location.hash='no-back-button';
					    window.location.hash='Again-No-back-button' //chrome
					    window.onhashchange=function(){window.location.hash='no-back-button';}
					}
	</script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="http://".$nom_dominio."/style.css" /> -->
  <link rel="stylesheet" type='text/css' href='view/default/css/shadowbox.css' media='screen'/>
  <script language='javascript' src="view/default/js/shadowbox.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Mapas -->

  <!-- Fin Mapas -->


  <!-- Plugin Fullscreen  -->
  <script type="text/javascript" src="view/mapa/leaflet_files/dist/Leaflet.fullscreen.min.js"></script>
  <link  rel="stylesheet" href="view/mapa/leaflet_files/dist/leaflet.fullscreen.css"/>

  <script type='text/javascript' src='view/util/script.js'></script>
  <link rel="stylesheet" media="screen" href="view/util/styles.css">
  <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body onload='deshabilitaRetroceso()'>
