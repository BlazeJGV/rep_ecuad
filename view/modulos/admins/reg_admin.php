<?php
require '../../includes/head.php';
    session_start();

 valid_inicio_sesion('2');
        
$errors = array();

if (!empty($_POST['registrar'])) {


    $nacionalidad = htmlentities(addslashes($_POST["nacionalidad"]));
    $id_doc = htmlentities(addslashes($_POST["id_doc"]));
    $nombres = htmlentities(addslashes($_POST["nombre"]));
    $apellido_p = htmlentities(addslashes($_POST["apellido_p"]));
    $apellido_m = htmlentities(addslashes($_POST["apellido_m"]));
    $sexo = htmlentities(addslashes($_POST["sexo"]));    

    $area = htmlentities(addslashes($_POST["id_area"]));    
    
    $fecha_nac = htmlentities(addslashes($_POST["fecha_nac"]));    
     $fecha_ingreso = htmlentities(addslashes($_POST["fecha_ingreso"]));    
    $lugar_nac = htmlentities(addslashes($_POST["lugar_nac"]));    
    $direcc_hab = htmlentities(addslashes($_POST["direcc_hab"]));    
    $tlf_cel = htmlentities(addslashes($_POST["tlf_cel"]));    
    $tlf_local = htmlentities(addslashes($_POST["tlf_local"]));    
    $correo = htmlentities(addslashes($_POST["correo"])); 
    $estado_civil = htmlentities(addslashes($_POST["estado_civil"])); 
    $turno = htmlentities(addslashes($_POST["turno"])); 
    

$lugar_nac=trim($lugar_nac);
$direcc_hab=trim($direcc_hab);

if(validar_datos_vacios_sin_espacios($nacionalidad,$id_doc,$sexo,$tlf_cel,$tlf_local,$correo,$estado_civil,$turno,$fecha_ingreso) || validar_datos_vacios($nombres,$area,$apellido_p,$lugar_nac,$direcc_hab,$turno)){
    $errors[]= "Se deben evitar campos vacios
    <p>Los Siguientes campos no Pueden poseer espacios:</p>
    <p><ul>

    <li>Nacionalidad</li>
    <li>Documento de Identidad</li>
    <li>Sexo</li>
    <li>Telefono Celular</li>
    <li>Telefono Local</li>
    <li>Correo</li>
    <li>Estado Civil</li>
    </ul></p>";

}else{

$errors[] = valid_ci($id_doc);

if (!is_exist_admin($id_doc)){
    $errors[]= "Un Administrativo con esta cedula ya esta registrado";
}

if (is_exist_ci($id_doc)) {
       $errors[]='La cedula ya esta registrada en el sistema';
        }

if (!is_valid_email($correo)) { $errors[]='El Correo electronico ingresado es invalido';}

if (!is_valid_num_tlf($tlf_local,$tlf_cel)) { $errors[]='El numero de telefono ingresado es invalido';}

$errors[]= validar_fecha_registro($fecha_ingreso);

$errors[]=validar_nombres_apellidos($nombres,$apellido_p);

if(!empty($apellido_m)){
$errors[]=validar_nombres_apellidos($apellido_m);
}



if (!comprobar_msjs_array($errors)) {    
 
$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

$nombres=filtrar_nombres_apellidos($nombres);

$apellido_p=filtrar_nombres_apellidos($apellido_p);

$apellido_m=filtrar_nombres_apellidos($apellido_m);

registrar_persona($nacionalidad ,$id_doc,$nombres,$apellido_p,$apellido_m,$sexo,$fecha_nac,$estado_civil,$lugar_nac,$direcc_hab,$tlf_cel,$tlf_local,$correo);

regist_admins($id_doc,$area,$turno,'1',$fecha_ingreso,'0000-00-00');

    $errors[] = 'Administrativo registrado con exito';

}

}
}

?>
    <title>Registro de Administrativos</title>


<?php require '../../includes/header.php' ?>


    <h2>Registro de personal Administrativo</h2>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <br>

        Documento de Identidad

        <select name="nacionalidad" id="" autocomplete="on">
            <option value=""></option>
            <option <?php if(isset($nacionalidad)) if($nacionalidad == '1') echo 'selected';?> value="1">V</option>
            <option <?php if(isset($nacionalidad)) if($nacionalidad == '2') echo 'selected'; ?> value="2">E</option>
        </select>


         <input type="number" name="id_doc" id="" value="<?php if(isset($id_doc)) echo $id_doc; ?>">

        <br>
        Nombres:
        <input type="text" name="nombre" id="" value="<?php if(isset($nombres)) echo $nombres; ?>" >
        
        <br>
        Apellido Paterno:
        <input type="text" name="apellido_p" id="" value="<?php if(isset($apellido_p)) echo $apellido_p; ?>">
        

        <br>
        Apellido Materno:
        <input type="text" name="apellido_m" id="" value="<?php if(isset($apellido_m)) echo $apellido_m; ?>">
       
        <br>
        Sexo:
    
        <select name="sexo" id="">
            <option value=""></option>
            <option <?php if(isset($sexo)) if($sexo == '1') echo 'selected'; ?> value="1">Masculino</option>
            <option <?php if(isset($sexo)) if($sexo == '2') echo 'selected'; ?> value="2">Femenino</option>
        </select>

        <br>

        Area: 
        <select name="id_area" id="">
            <option value=""></option>
            <option <?php if(isset($area)) if($area == '1') echo 'selected';?> value="1">Directiva</option>

            <option <?php if(isset($area)) if($area == '2') echo 'selected'; ?>  value="2">Estadistica</option>

            <option <?php if(isset($area)) if($area == '3') echo 'selected';?> value="3">Pedagogica</option>

        </select>
        <br>

        Fecha de Nacimiento:
        <input type="date" name="fecha_nac" id="" value="<?php if(isset($fecha_nac)) echo $fecha_nac; ?>">
        <br>

        Fecha de Ingreso:
        <input type="date" name="fecha_ingreso" id="" value="<?php if(isset($fecha_ingreso)) echo $fecha_ingreso; ?>">

            <br>
            
        Lugar de Nacimiento
        <br>
        <textarea rows="3" cols="40" name="lugar_nac" id=""><?php if(isset($lugar_nac)) echo $lugar_nac;?></textarea>

        <br>
        Direccion de Habitacion
        <br>

        <textarea rows="3" cols="40" name="direcc_hab" id=""><?php if(isset($direcc_hab)) echo $direcc_hab; ?></textarea>        

        <br>
        Telefono Celular:
        <input type="number" name="tlf_cel" id="" value="<?php if(isset($tlf_cel)) echo $tlf_cel; ?>">

        <br>
        Telefono Local:
        <input type="number" name="tlf_local" id="" value="<?php if(isset($tlf_local)) echo $tlf_local; ?>">
        <br>
        Correo:
        <input type="email" name="correo" id="" value="<?php if(isset($correo)) echo $correo; ?>">
        
        <br>
        Estado Civil:

        <select name="estado_civil" id="">
            <option value=""></option>            
            <option <?php if(isset($estado_civil)) if($estado_civil == '1') echo 'selected';?> value="1">Soltero/a</option>
            <option <?php if(isset($estado_civil)) if($estado_civil == '2') echo 'selected';?> value="2">Casado/a</option>
            <option <?php if(isset($estado_civil)) if($estado_civil == '3') echo 'selected';?> value="3">Divorciado/a</option>
            <option <?php if(isset($estado_civil)) if($estado_civil == '4') echo 'selected';?> value="4">Viudo/a</option>
        </select>
        
        <br>
        Turno:
        <select name="turno" id="">
            <option value=""></option>
            <option <?php if(isset($turno)) if($turno == '1') echo 'selected';?> value="1">Mañana</option>
            <option <?php if(isset($turno)) if($turno == '2') echo 'selected';?> value="2">Tarde</option>
        </select> 

        <br>
        <input type="submit" value="Registrar" name="registrar">
    </form>

    <br>
    <a href="reg_docent_admin.php">Registrar Administrativo desde docente</a>

    <br>
    <a href="admins.php">volver</a>
    <br>
    <br>

    <?php
    if(!empty($errors)){
        foreach ($errors as $msjs) {
            echo "<p>$msjs<p>";
        }
    }

    ?>

<?php 

require'../../includes/footer.php';

 ?>