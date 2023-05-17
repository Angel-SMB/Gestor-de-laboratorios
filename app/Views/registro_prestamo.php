<?php
$user = session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <?php
                        
                        if($user->get('nombre_usuario')==""){
                            echo '<title>No se ha iniciado sesión</title>';
                        }else{
                            if($user->get('rol')==0 || $user->get('rol')==2 || $user->get('rol')==3){
                                    echo '<title>Registrar préstamo</title>';
                                }
                            }
                        ?>
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
</head>
<?php
if($user->get('nombre_usuario') != "" ):
?>
<body style= "height: auto; width: 100%; background-color:#001D36;  ">

<style>
            #registrar {
            border-radius: 20px;
            color:white;
            background-color: #0063c2  ;
            width: 75px; 
            height: 40px;
            font-size: 13px;
            font-weight:bold;
        }
        #registrar:hover{
            border: 2px solid blue; 
            color: blue; 
            background-color:white;
            border-radius: 20px;
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
            background-color:white;
            color: #ff0000;
            text-decoration: underline; 
            border-radius:20px;
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
    </style>
  <div >
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

  <div class="login-box">
      
      <div class="login-logo">
      <b style="color:white; font-weight: bold;">Registrar nuevo préstamo</b>
      </div>
      <div id="alerta_hrs" style="display: flex; flex-direction: column; align-items: center; font-weight:bold; margin-top: 20px; background-color:red; color: white;">

</div>
      <?php if (session()->has('success')): ?>
  <div class="alert alert-success"><?= session('success') ?></div>
<?php endif ?>
      <form class="w3-container w3-card-4" action="<?= base_url('guardar_prestamo'); ?>" onsubmit="return validateHora()" method="post">
    <div class="login-box-body">
    <div class="form-group">
    <div class="form-group">
            <label class="col-sm-5 col-form-label ">Fecha del préstamo<b style="color:orange;"> *</b></label>
            <input type="date" class="form form-control-user" name="presFecha" id="presFecha" required>
        </div><br>
    <div class="form-group">
            <label class="col-sm-5 col-form-label ">Hora de inicio del préstamo<b style="color:orange;"> *</b></label>
            <input type="time" class="form form-control-user" name="presHoraInicio" id="presHoraInicio" required>
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Hora de fin del préstamo<b style="color:orange;"> *</b></label>
            <input type="time" class="form form-control-user" name="presHoraFin" id="presHoraFin" required>
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Observación en el laboratorio</label>
            <input type="text" class="form form-control-user" name="presObservacion" >
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Laboratorio<b style="color:orange;"> *</b></label>
            <select class="form-control selct2" style="font-size:13px" type="number" name="presIdLaboratorio" required>
                <option></option>
                <?php foreach ($laboratorio as $laboratorios){
                echo '<option value="'.$laboratorios['id_laboratorio'].'">'.$laboratorios['nombre_laboratorio'].'</option>';}; ?>
            </select>
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Usuario<b style="color:orange;"> *</b></label>
            
                <?php 
                if($user->get('rol') == 0||$user->get('rol') == 1){
                    echo '<select class="form-control selct2" type="number" style="font-size:13px" name="presIdUsuario" required>';
                    echo '<option></option>';
                    foreach ($usuario as $usuarios){
                        echo '
                        <option value="'.$usuarios['id_usuario'].'">'.$usuarios['nombre_usuario']." ".$usuarios['apellidos_usuario'].'</option>';}; 
                }else{
                    if($user->get('rol') == 2||$user->get('rol') == 3){
                        echo '<label class="col-sm-7 col-form-label " name="presIdUsuario" style="border: 2px solid black;" value="'.$user->get("id_usuario").'" >'.$user->get("nombre_usuario")." ".$user->get("apellidos_usuario").'</label>';
                    }
                }           
?>
            </select>
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Equipo<b style="color:orange;"> *</b></label>
            <select class="form-control selct2" style="font-size:13px" type="number" name="presIdEquipo" >
                <option></option>
                <?php foreach ($equipo as $equipos){
                echo '<option value="'.$equipos['id_equipo'].'">'.$equipos['nombre_equipo'].'</option>';}; ?>
            </select>
        </div><br>
        
        <input type="submit" id="registrar" value="Registrar">
        
        <?php
            if($user->get('rol') == 0 || $user->get('rol')==1){
                echo '<a href="'. base_url("prestamos").'"class="btn btn-danger" id="atras">Atrás</a>';
            }else{
                if($user->get('rol') == 2||$user->get('rol') == 3){
                    echo '<a href="'. base_url("alumno").'"class="btn btn-danger" id="atras">Atrás</a>';
                }
        }
        ?>
    </form>


        <script>

		function validateHora() {
            
                var inputFecha = document.getElementById('presFecha').value;
                var fecha = new Date(inputFecha);
                var diaSemana = fecha.getDay();

                var horaI = document.getElementById("presHoraInicio").value;

                var fechaI = new Date();
                fechaI.setHours(horaI.substr(0,2), horaI.substr(3,2),0,0);

                var horaMaximaI = new Date();
                horaMaximaI.setHours(14, 0, 0, 0);
                var horaMinimaI = new Date();
                horaMinimaI.setHours(8, 0, 0, 0);

                var horaF = document.getElementById("presHoraFin").value;

                var fechaF = new Date();
                fechaF.setHours(horaF.substr(0, 2), horaF.substr(3, 2), 0, 0);
                
                var horaMaximaF = new Date();
                horaMaximaF.setHours(15, 0, 0, 0);
                var horaMinimaF = new Date();
                horaMinimaF.setHours(9, 0, 0, 0);

    // Llamamos a la función compararHoras para validar las horas de inicio y fin
    if (horaI > horaF || horaI == horaF) {
        var mensaje = "La hora de fin debe ser mayor a la hora de inicio";
        var alerta = document.createElement("div");
        alerta.className = "alerta";
        alerta.innerHTML = mensaje;
        document.getElementById("alerta_hrs").appendChild(alerta);
        return false;
    }

    if (diaSemana == 6 || diaSemana == 5) {
                    var mensaje = "No es posible hacer préstamos en fines de semana";
			            var alerta = document.createElement("div");
			            alerta.className = "alerta";
			            alerta.innerHTML = mensaje;
			            document.getElementById("alerta_hrs").appendChild(alerta);
				    return false;
                }



                if (fechaI > horaMaximaI) {
                    // La hora sobrepasa la hora máxima permitida
                    var mensaje = "La hora máxima para iniciar un préstamo es a las 14:00 hrs";
                        var alerta = document.createElement("div");
                        alerta.className = "alerta";
                        alerta.innerHTML = mensaje;
                        document.getElementById("alerta_hrs").appendChild(alerta);
                    return false;
                } 
                
                if(fechaI < horaMinimaI){
                        // La hora sobrepasa la hora minima permitida
                        var mensaje = "La hora mínima para iniciar un préstamo es a las 8:00 hrs";
                        var alerta = document.createElement("div");
                        alerta.className = "alerta";
                        alerta.innerHTML = mensaje;
                        document.getElementById("alerta_hrs").appendChild(alerta);
                    return false;
                    }else{
                        if (fechaF > horaMaximaF) {
                    // La hora sobrepasa la hora máxima permitida
                    var mensaje = "La hora máxima de fin de préstamo es a las 15:00 hrs";
                        var alerta = document.createElement("div");
                        alerta.className = "alerta";
                        alerta.innerHTML = mensaje;
                        document.getElementById("alerta_hrs").appendChild(alerta);
                    return false;
                } else {
                    if(fechaF < horaMinimaF){
                        // La hora sobrepasa la hora minima permitida
                        var mensaje = "La hora mínima  de fin de préstamo es a las 9:00 hrs";
                        var alerta = document.createElement("div");
                        alerta.className = "alerta";
                        alerta.innerHTML = mensaje;
                        document.getElementById("alerta_hrs").appendChild(alerta);
                    return false;
                    }else{
                        // La hora es válida
                        return true;
                    }

                }
                    }

}

        
	</script>

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
</body>
<?php else:
include_once ("errors/error_vistas.php");
echo '<div style="text-align:center;  overflow-x: auto; ">

        <div class="card" style="width: 40rem; margin-top: 100px; box-shadow: -10px 0px 30px rgba(255, 255, 255, 1.5);  background-color:black; margin:auto;">
        <div class="alert alert-danger" role="alert" style="width: 40rem; margin:auto; box-shadow: -20px 10px 30px rgba(  222, 0, 0 , .9);">
        <b>ERROR :</b> Intento de acceso no permitido, por favor da <a href="' . (($user->get('nombre_usuario') == "") ? "login" : (($user->get('rol') == 2 ||$user->get('rol') == 3) ? "alumno" : "")) . '" class="alert-link" style="color:black;">click aqui</a> para regresar.
</div>
  <img src="../img/danger.png" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 class="card-title" style="color:red; font-weight:bolder;">Datos del usuario:</h2>
          <b style="color:white;">'.$user->get('nombre_usuario'). " ". $user->get('apellidos_usuario').'</b><br> ';
        if($user->get('nombre_usuario') == ""){
            echo '        
            <b style="color:white; font-size:small">NO LOGEADO</b>
            <b style="color:red; font-size:large"> ERROR</b>
            </div>
            </div> ';
        }
        
        ?>
    <?php endif; ?>
</html>