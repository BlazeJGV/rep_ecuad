<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="css/reg_a_style.css">
    <!--Boostrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <title>Registro Alumnos</title>
</head>
<body>

    <header>
        <ul class="nav_reg">
            <li><a href="../dashboard.php">Inicio</a></li>
            <ul>
                <li><a href="../dashboard.php" >Volver</a></li>
            </ul>
            <h2>Inscripcion de Estudiantes</h2>
        </ul>
    </header>


    <!--formulario-->
    <div class="container">
        <section class="cont_form">
            
            <h3 class="text-uppercase text-center">Datos del estudiante</h3>
            <!--Opcional pegar en form: class="form-inline d-flex justify-content-center flex-colum flex-md-row" -->
            <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row" >
                <div class="my-2 mx-4">
                    <label for="" class="">Primer Apellido:</label>
                    <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control ">
                </div>
                <div class=" my-2 mx-4">
                    <label for="" class="">Segundo Apellido:</label>
                    <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control ">
                </div>
                <div class=" my-2 mx-4">
                    <label for="" class="">Primer Nombre:</label>
                    <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                </div>
                <div class=" my-2 mx-4">
                    <label for="" class="mx-2">Segundo Nombre:</label>
                    <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                </div >
                <!--CEDULA -->
                <div class=" my-4 mx-4">
                        
                    <label for="">Cedula:</label>    
                    <select name="cedula" id="cedula" class="">
                        <option value="0">--- Seleccione ---</option>
                        <option value="V">V - Venezolano </option>
                        <option value="E">E - Extranjero</option>
                    </select>
                    <input type="text" maxlength="8" placeholder="C.I">                </div>

                <div class=" my-2 mx-4">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class=" my-4 mx-4 form-group">
                        <label for="" class="mx-2">Sexo:</label>
                        <label for="" class="mx-1">Niño</label>
                        <input type="radio" name="sexo" value="niño" id="">
                        <label for="sexo" class="mx-1">Niña</label>
                        <input type="radio" name="sexo" value="niña" id="">
                    </div>
                <div class=" my2 mx-4 ">
                    <label for="">Lugar de Nacimiento</label>
                    <input type="text" name="" id="" placeholder="Ingrese el lugar" class="form-control">
                </div>
                <div class=" my-2 mx-4 ">
                    <label for="">Direccion de Habitacion</label>
                    <input type="text" name="" id="" placeholder="Ingrese la direccion" class="form-control">
                </div>
                <!--TELEFONO-->
                <div class=" my-2 mx-4 ">
                    <label for="">Telefonos</label>
                    <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                </div>
                <div class=" my-2 mx-4 form-group">
                    <label for="" class="mx-2">Posee Canaima:</label>
                    <label for="" class="radio-inline mx-1">Si:</label>
                    <input type="radio" name="seleccion" value="si" id="">
                    <label for="" class="radio-inline mx-1">No:</label>
                    <input type="radio" name="seleccion" value="no" id="">
                    <label for="" class="radio-inline mx-1">Contrato:</label>
                    <input type="radio" name="seleccion" value="contrato" id="">
                </div>
                <div class=" my-2 mx-2 form-group">
                    <label for="" class="mx-2">Posee coleccion bicentenaria:</label>
                    <label for="" class="radio-inline mx-1">Si:</label>
                    <input type="radio" name="seleccion2" value="si" id="">
                    <label for="" class="radio-inline mx-1">No:</label>
                    <input type="radio" name="seleccion2" value="si" id="">
                </div>
            </form>
        </section>

        <section class="cont_form">
                <h3 class="text-uppercase text-center">Datos de la Madre</h3>
                <!--Opcional pegar en form: class="form-inline d-flex justify-content-center flex-colum flex-md-row" -->
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class=" my-2 mx-4">
                        <label for="" class="">Primer Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Segundo Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Primer Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Segundo Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div >
                    <!--CEDULA -->
                    <!--Nota: No se si hay que agregar opciones de Extranjero en cedula Madre, Padre, Representante (POR FAVOR REVISAR ESTE APARTADO PARA LAS VALIDACIONES y el maxlength)-->
                    <div class=" my-4 mx-4">
                        <label for="">Cedula:</label>    
                        <select name="cedula" id="cedula" class="">
                            <option value="0">-- Seleccione --</option>
                            <option value="V">V - Venezolano </option>
                            <option value="E">E - Extranjero</option>
                        </select>
                        <input type="text" maxlength="9" placeholder="C.I">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Ocupacion:</label>
                        <input type="text" name="" id="" placeholder="Ingresar Ocupacion" class="form-control">
                    </div>        
                    <div class=" my-2 mx-4">
                        <label for="">Fecha de Nacimiento:</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class=" my4 mx-4">
                        <label for="">Lugar de Nacimiento:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el lugar " class="form-control">
                    </div>
                    <!--ESTADO CIVIL (nota: no se puede colocar el estado civil por seleccion o que lo escriban elijan...)-->
                    <div class="my-2 mx-4">
                        <label for="">Estado civil:</label>
                        <input type="text" name="" id="" placeholder="Ingresar estado civil" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Direccion de Habitacion:</label>
                        <input type="text" name="" id="" placeholder="Ingrese la direccion" class="form-control">
                    </div>
                    <!--TELEFONO-->
                    <div class=" my-2 mx-4">
                        <label for="">Telefono local:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                    </div>
                    <div class=" my-4 mx-4">
                        <label for="">Telefono Celular:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Correo Electronico:</label>
                        <input type="email" name="" id="" placeholder="Ingrese el correo " class="form-control">    
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Profesion u Oficio:</label>
                        <input type="text" name="" id="" placeholder="Ingresar su Prof u Ofic" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Lugar de trabajo:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el lugar " class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                            <label for="">Direccion de trabajo:</label>
                            <input type="text" name="" id="" placeholder="Ingrese la direccion " class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Telefono de oficina:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono " class="form-control">
                    </div>

                </form>
    
    
        </section>

        <section class="cont_form">
                <h3 class="text-uppercase text-center">Datos del Padre</h3>
                <!--Opcional pegar en form: class="form-inline d-flex justify-content-center flex-colum flex-md-row" -->
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class="my-2 mx-4">
                        <label for="" class="">Primer Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Segundo Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Primer Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Segundo Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div >
                    <!--CEDULA -->
                    <!--Nota: No se si hay que agregar opciones de Extranjero en cedula Madre, Padre, Representante (POR FAVOR REVISAR ESTE APARTADO PARA LAS VALIDACIONES y el maxlength)-->
                    <div class="my-4 mx-4">
                        <label for="">Cedula:</label>    
                        <select name="cedula" id="cedula" class="">
                            <option value="0">-- Seleccione --</option>
                            <option value="V">V - Venezolano </option>
                            <option value="E">E - Extranjero</option>
                        </select>
                        <input type="text" maxlength="9" placeholder="C.I">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Ocupacion:</label>
                        <input type="text" name="" id="" placeholder="Ingresar Ocupacion" class="form-control">
                    </div>        
                    <div class="my-2 mx-4">
                        <label for="" class="">Fecha de Nacimiento:</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Lugar de Nacimiento:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el lugar" class="form-control">
                    </div>
                    <!--ESTADO CIVIL (nota: no se puede colocar el estado civil por seleccion o que lo escriban elijan...)-->
                    <div class="my-2 mx-4">
                        <label for="">Estado civil:</label>
                        <input type="text" name="" id="" placeholder="Ingresar estado civil" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Direccion de Habitacion:</label>
                        <input type="text" name="" id="" placeholder="Ingrese la direccion" class="form-control">
                    </div>
                    <!--TELEFONO-->
                    <div class="my-2 mx-4">
                        <label for="">Telefono local:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                    </div>
                    <div class="my-4 mx-4">
                        <label for="">Telefono Celular:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono " class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Correo Electronico:</label>
                        <input type="email" name="" id="" placeholder="Ingrese el correo" class="form-control">    
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Profesion u Oficio:</label>
                        <input type="text" name="" id="" placeholder="Ingresar su Prof u Ofic" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Lugar de trabajo:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el lugar " class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                            <label for="">Direccion de trabajo:</label>
                            <input type="text" name="" id="" placeholder="Ingrese la direccion" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Telefono de oficina:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                    </div>

                </form>
    
        </section>

        <section class="cont_form">
                <h3 class="text-uppercase text-center">Representante Legal</h3>
                <!--Opcional pegar en form: class="form-inline d-flex justify-content-center flex-colum flex-md-row" -->
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class="my-2 mx-4">
                        <label for="" class="">Primer Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Segundo Apellido:</label>
                        <input type="text" name="" id="" placeholder="Ingresar apellido" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Primer Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Segundo Nombre:</label>
                        <input type="text" name="" id="" placeholder="Ingresar nombre" class="form-control">
                    </div >
                    <!--CEDULA -->
                    <!--Nota: No se si hay que agregar opciones de Extranjero en cedula Madre, Padre, Representante (POR FAVOR REVISAR ESTE APARTADO PARA LAS VALIDACIONES y el maxlength)-->
                    <div class="my-4 mx-4">
                        <label for="">Cedula:</label>    
                        <select name="cedula" id="cedula" class="">
                            <option value="0">-- Seleccione --</option>
                            <option value="V">V - Venezolano </option>
                            <option value="E">E - Extranjero</option>
                        </select>
                        <input type="text" maxlength="9" placeholder="C.I">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Ocupacion:</label>
                        <input type="text" name="" id="" placeholder="Ingresar Ocupacion" class="form-control">
                    </div>        
                    <div class="my-2 mx-4">
                        <label for="">Fecha de Nacimiento:</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="my2 mx-4">
                        <label for="">Lugar de Nacimiento:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el lugar" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Parentesco:</label>
                        <input type="text" name="" id="" placeholder="Ingrese el parentesco" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="">Direccion de Habitacion o trabajo:</label>
                        <input type="text" name="" id="" placeholder="Ingrese la Direccion" class="form-control">
                    </div>
                    <!--TELEFONO-->
                    <div class="my-2 mx-4">
                        <label for="">Telefono local:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingresar telefono" class="form-control">
                    </div>
                    <div class="my-4 mx-4 form-inline">
                        <label for="" class="">Vive con el Estudiante:</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" value="si" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" value="si" id="">
                    </div>
                    

                </form>
        </section>
        <!--otros datos y especificacion del estudiante-->
        <section class="cont_form">
                <h3 class="text-uppercase text-center">Otros datos del estudiante</h3>
                <form action="" class="">
                    <div class="my-2 mx-4">
                        <label for="">¿Cuantas personas viven con el estudiante?</label>
                        <input type="number" name="numero" id="" placeholder="N°">
                    </div>
                    
                        <p class="text-uppercase text-center">Estado de salud del estudiante</p>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Tiene hermanos estudiando en el plantel?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2 ">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Padece o ha padecido de alguna enfermedad cronica?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Presenta problemas visuales?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Presenta problemas auditivos?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Es alergico?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Presenta alguna conndicion especifica?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                    <div class="my-5 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿Cuales vacunas ha recibido?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="Especifique"></textarea>
                    </div>
                </form>
        </section>
        <!--El niño recibe atencion por-->
        <section class="cont_form">
                <h3 class="text-uppercase text-center">El niño recibe actualmente atencion por</h3>
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class="my-2 mx-4 ">
                        <label for="" class="">Psicopedagogia:</label>
                        <input type="text" name="psicopedagogia" id="" placeholder="psicopedagogia" class="form-control mx-2">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Terapia de lenguaje:</label>
                        <input type="text" name="terapia_lenguaje" id="" placeholder="Terapia de lenguaje" class="form-control mx-2">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Psicologo:</label>
                        <input type="text" name="psicologo" id="" placeholder="Psicologo" class="form-control mx-2">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Otras:</label>
                        <input type="text" name="otras" id="" placeholder="Otras" class="form-control mx-2">
                    </div>
                    <div class="my-4 mx-4">
                        <label for="" class="">Especificar:</label>
                        <textarea name="especifice_atencion" id="" placeholder="Especifique" class="form-control mx-2"></textarea>
                    </div>
                    <div class="my-2 mx-4 form-inline">
                        <label for="" class="">Tiene medicacion:</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-2">¿Cual?</label>
                        <input type="text" name="tiene_medicacion" id="" placeholder="¿Cual?" class="form-control">
                    </div>
                    <div class="my-2 mx-4 form-inline">
                        <label for="" class="">Anexa informe:</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id="">
                    </div>    
                </form>
        </section>
        <!--Acceso y restiro de la Institucion-->
        <section class="cont_form">
                <h3 class="text-uppercase text-center">Acceso y restiro de la institucion</h3>
                
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                        <h4 class="text-uppercase text-center">Acceso al retiro del estudiante</h4>
                    <div class="my-2 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿El estudiante llega y se retira de la escuela solo?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique:</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="¿Acompañado por?"></textarea>
                    </div>
                    <div class="my-4 mx-4 form-inline">
                        <label for="" class="radio mx-2">¿El estudiante llega y se retira de la escuela en transporte escolar?</label>
                        <label for="" class="radio-inline mx-1">Si:</label>
                        <input type="radio" name="seleccion" id="">
                        <label for="" class="radio-inline mx-1">No:</label>
                        <input type="radio" name="seleccion" id=""><br>
                        <label for="" class="radio-inline mx-2">Especifique</label>
                        <textarea name="descripcion" id="" class="form-control" placeholder="¿Cual?"></textarea>
                    </div>
                </form>
        </section>
        <!--Persona utorizada a retirar el estudiante de la institucion-->
        <section class="cont_form">
                <h3 class="text-uppercase text-center">Personas autorizada a retirar el estudiante de la institucion</h3>    
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class="my-2 mx-4">
                        <label for="" class="">Nombres y apellidos:</label>
                        <input type="text" name="autorizacion_retiro" id="" placeholder="Nombre y Apellido" class="form-control">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Cedula de identidad:</label>
                        <input type="text" name="autorizacion_retiro" id="" placeholder="C.I" class="form-control" maxlength="8">
                    </div>
                    <div class="my-2 mx-4">
                        <label for="" class="">Parentesco:</label>
                        <input type="text" name="autorizacion_retiro" id="" placeholder="Parentesco" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Telefono local:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingrese el telefono" class="form-control">
                    </div>
                    <div class=" my-4 mx-4">
                        <label for="">Telefono Celular:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingrese el telefono" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Telefono de Emergencia:</label>
                        <input type="tel" name="telefono" id="" placeholder="Ingrese el telefono" class="form-control">
                    </div>
                </form>
        </section>
        <!--Otros datos de inscripcion y escolaridad-->
        <section class="cont_form">
                <h3 class="text-uppercase text-center">Otros datos de inscripcion y escolaridad</h3>    
                <form action="" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
                    <div class=" my-2 mx-4">
                        <label for="" class="">Cedula escolar:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" class="form-control" maxlength="8" placeholder="Ingrese la Cedula escolar">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Plantel de procedencia:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Plantel de procedencia" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="" class="">Localidad:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Ingrese la localidad" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Año escolar:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Ingrese el año escolar" class="form-control">
                    </div>
                    <div class=" my-4 mx-4">
                        <label for="">Grado y seccion:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Ingrese grado y seccion" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Calificacion definitiva:</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Ingrese la calificacion" class="form-control">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Repitiente:</label>
                        <input type="text" name="inscripcion_escolaridad" id=""   class="form-control" placeholder="Ingresar dato">
                    </div>
                    <div class=" my-2 mx-4">
                        <label for="">Observaciones</label>
                        <input type="text" name="inscripcion_escolaridad" id="" placeholder="Ingrese la observacion" class="form-control">
                    </div>

                </form>
        </section>

        <!--Actualizacion de datos y Datos del funcionario-->
        <!--
        <section>
                <form action="">
                    
                </form>
        </section>
        -->

        <!-- Boton -->
        <section class="cont_form" class="form-inline d-flex justify-content-center flex-colum flex-md-row">
    
            <div class="">
                 <input type="submit" value="Registrar" class="btn btn-primary">
            </div>
                
        </section>

    <a href="../estudiantes.php">Volver</a>

    </div>

    <!--jquery, boostrap.min.js, bundle.min.js-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>