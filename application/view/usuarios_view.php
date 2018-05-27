<h2 class="text-center">Listado de usuarios</h2>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	
<?php

foreach ($data as $element){
    echo "	<tr>
				<td>$element[id]</td>
				<td>$element[nombre]</td>
				<td>
    				<button class='btn'><span class='glyphicon glyphicon-pencil'></span></button>
    				<button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button>
    			</td>
			</tr>";
}

?>
</table>
<button class="btn">Crear nuevo usuario</button>
<br/>
<br/>