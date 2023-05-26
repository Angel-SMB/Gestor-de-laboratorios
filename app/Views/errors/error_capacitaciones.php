<?php
$user = session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/Escudo_BUAP_Negativo.png">

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <link href="../css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="../css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="../css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../css/lib/barRating/barRating.css" rel="stylesheet">
    <link href="../css/lib/nestable/nestable.css" rel="stylesheet">
    <link href="../css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    

    <link href="../css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/lib/select2/select2.min.css" rel="stylesheet">
    <link href="../css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/blue.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">

    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>ERROR DE CAPACITACIONES</title>
</head>
<style>

        .table-container {
            display: flex;
            justify-content: center;
            position: relative;
            text-align: center;
            border-collapse: collapse;
        }
        #user {
            border-radius: 5px;
            color:white;
        }
        #user:hover{
            color: black; 
        }
        #salir {
            border-radius: 5px;
            color:white;
        }
        #salir:hover{
            color: black; 
        }
        #atras {
            display: inline-grid;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none; 
            width: 60px; 
            height: 35px;
            font-size: 13px;
            font-weight:bold;
            border-radius:20px;
        }
        #atras:hover{
            background-color:#001D36;
            color: #ff0000;
            text-decoration: underline; 
            border-radius:20px;
            border: 2px solid #ff0000; 
        }
        #principal {
            border-radius: 20px;
            color:white;
            background-color: #0063c2  ;
            width: auto; 
            height: 40px;
            font-size: 13px;
            font-weight:bold;
            display: inline-grid;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none; 
        }
        #principal:hover{
            border: 2px solid blue; 
            color:  #00a7eb ; 
            background-color:#001D36;
            border-radius: 20px;
        }
    </style>
<body style= "height: auto; width: 100%; background-color:#001D36;  ">
<nav  style="background-color:#003B5C;" class="hunix-login">
  <div class="container-fluid">
    <div class="navbar-header" style="display: flex; justify-content: center;">
    <div style= "height: 50px; width: 100px;">
            <img src="../img/escudo_azul_claro3-01.png"  width="100%" height="100%" length="100%" >
        </div>
    </div>
    <ul class="nav navbar-nav navbar-right" style="text-align: center">
<li ><a href="salir" id="salir"><span class="fa fa-sign-out"></span> Salir</a></li> 
</ul>
    <?php
    if($user->get('rol')==2 || $user->get('rol')==3){
        echo '    <ul class="nav navbar-nav navbar-right" style="text-align: center">
        <li><a href="alumno" id="user"><span class="fa fa-user"></span> '.$user->get('nombre_usuario').'</a></li> 
        </ul>';
    }
    
    ?>

  </div>
  
</nav>

<div class="login-box" style="width:1000px;  width: 100%; overflow-x: auto;">
      
      <div class="login-logo" style="color: white;">
        <b style="color:white; font-weight: bold;">ERROR: Faltan capacitaciones</b><br>
      </div>

<div class="table-container" >
    
<table class="table fondo table-light table-striped" style="text-align:center; border-radius:20px; width:50%">

            <thead class="fondo-celdas text-center">
            <tr>
                <th style="text-align:center; font-size: 20px" colspan="2">Lista de capacitaciones faltantes</th>
            </tr>
                <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Nombre de la capacitación</th>
                </tr>
            </thead>
                <tbody>
                    <tr  style="text-align:center;">
                    <?php
                    foreach ($nombres as $nombre) {
                                $nombreCapacitacion = $nombre['nombre_capacitacion'];
                                $capacitacionEncontrada = false;
                            
                                foreach ($datos_cap as $caps) {
                                    if ($nombreCapacitacion === $caps["nombre_capacitacion"]) {
                                        $capacitacionEncontrada = true;
                                        break;
                                    }
                                }
                            
                                if (!$capacitacionEncontrada) {
                                    echo"
                                    <tr>
                                    <td style='text-align: center; '>". $nombre['id_capacitacion'] ."</td>
                                    <td style='text-align: center; color:black;'>". $nombre['nombre_capacitacion'] ."</td>   
                                    </tr>
                                ";}
                                }
                    ?>
                    </tr>
                </tbody>
            </table>
            

</div>
<div style="text-align: right; margin-right :25%;">
<?php
    if($user->get('rol') == 0||$user->get('rol') == 1){
       echo '<a href="'. base_url("prestamos").'"class="btn btn-primary" id="principal">Regresar a préstamos</a>' ;
    }else{
        if($user->get('rol') == 2||$user->get('rol') == 3){
            echo '<a href="'. base_url("alumno").'"class="btn btn-primary" id="principal">Página principal</a>';
        }
    }  
?>
 <a href="<?= base_url("registro_prestamo")?>"class="btn btn-danger" id="atras">Atras</a>
 </div>
 </div>
    <div class="container">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../js/bootstrap.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../js/npm.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/usuarios.js"></script>
        <!-- jquery vendor -->
        <script src="../js/lib/jquery.min.js"></script>
    <script src="../js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../js/lib/menubar/sidebar.js"></script>
    <script src="../js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="../js/lib/bootstrap.min.js"></script><script src="vistas/js/scripts.js"></script>
    <!-- scripit init-->


    <script src="../js/lib/bootstrap.min.js"></script><script src="vistas/js/scripts.js"></script>

</body>
</html>