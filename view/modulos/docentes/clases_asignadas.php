<?php 

require '../../includes/head.php';
    session_start();
 valid_inicio_sesion('3');

if (!empty($_POST['sus_clases'])) {

$_SESSION['id_doc'] = $_POST['sus_clases']; 
}

$id_doc = $_SESSION['id_doc'];
?>

	    <title>Clases Asignadas</title>
		
		<?php require '../../includes/header.php' ?>

<?php

$orden_grado = 'ORDER BY cl.grado';

$orden_seccion = 'ORDER BY cl.seccion
';
$orden_estado_contrato = 'ORDER BY ca.id_estado';

$orden_turno = 'ORDER BY tr.id_turno';

$orden_anio="ORDER BY cl.anio_escolar1 AND cl.anio_escolar2;";
?>

		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		<select name="orden">
				
				<option value="<?php echo $orden_estado_contrato; ?>">Estado del Contrato</option>

				<option value="<?php echo $orden_anio; ?>">Año Escolar</option>

				<option value="<?php echo $orden_grado; ?>">Grado</option>

				<option value="<?php echo $orden_seccion; ?>">Seccion</option>

				<option value="<?php echo $orden_turno ?>">Turno</option>

			</select>
		
		<button id=button class="icon-search" type="submit" name='ordenar' value="<?php echo $id_doc; ?>">Ordenar</button>
		</form>

<?php  
$orden = $orden_anio;

if (!empty($_POST['ordenar'])) {
	$orden = htmlentities(addslashes($_POST["orden"]));
	//$id_doc = htmlentities(addslashes($_POST["ordenar"]));
}

?>

<?php

if (!is_exist_clases_asignadas($id_doc)){

	$errors[] = 'El Docente no tiene clases asignadas';

}else{
 

$sql="SELECT doc.id_doc_docent,cl.grado,cl.seccion,cl.no_aula,tr.descripcion turno, cl.anio_escolar1,cl.anio_escolar2,tp.descripcion cargo, est.descripcion estado FROM docentes doc INNER JOIN clases_asignadas ca ON doc.id_doc_docent = ca.id_doc_docent INNER JOIN clases cl ON ca.id_clase = cl.id_clase INNER JOIN estado est ON ca.id_estado = est.id_estado INNER JOIN turnos tr ON cl.id_turno = tr.id_turno INNER JOIN tipos_docentes tp ON ca.id_tipo_docent = tp.id_tipo_docent

			WHERE doc.id_doc_docent = :id_doc ".$orden;
					 
			$result=$db->prepare($sql);
									
			$result->bindValue("id_doc",$id_doc);
			
			$result->execute();	

	        echo "<div>";
 	          echo "<table class='tabla'>
 	          <caption> Clases 	del docente: ".$id_doc."</caption>
 		            <thead>";
 			            echo"<tr>";
						echo"<th>Grado </th> 
						 <th>Seccion </th> 
						 <th>Numero de Aula </th> 
						 <th>Turno </th> 
						 <th>Año Escolar </th> 
						 <th>Cargo</th> 
						 <th>Estado del Contrato</th>";
 			            
 			           echo "</tr>
 		            </thead>";

 		            while($registro=$result->fetch(PDO::FETCH_ASSOC)){

 		            	echo "<tr>
 			            <td>".$registro['grado']."</td>
					    <td>".$registro['seccion']."</td>
					    <td>".$registro['no_aula']."</td>
					    <td>".$registro['turno']."</td>
					    <td>".$registro['anio_escolar1']."-".$registro['anio_escolar2']."</td>
					    <td>".$registro['cargo']."</td>
					    <td>".$registro['estado']."</td>
 		            </tr>";

 		          		} 

 	            echo "</table>
            </div>";
            }
?>

                 <a href="docentes.php">Volver</a>


            

<?php

    if(!empty($errors)){
        foreach ($errors as $msjs) {
            echo "<p>$msjs<p>";
        }
    }

 require '../../includes/footer.php' ?>