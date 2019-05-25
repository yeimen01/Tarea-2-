<?php plantilla::aplicar(); ?>

<h3 class= 'text-center'>Listado personas agregadas</h3>

<table class='table'>
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Tipificacion</th>
            <th>Comentario</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $buscar  = core_persona::mostrar_personas();
        foreach ($buscar  as $persona) {
            $urlBorrar=base_url("main/borrar/{$persona->Id}");
        echo "
            <tr>
            <td>{$persona->cedula}</td>
            <td>{$persona->nombre}</td>
            <td>{$persona->apellido}</td>
            <td>{$persona->sexo}</td>
            <td>{$persona->tipificacion}</td>
            <td>{$persona->comentario}</td>
            <td>
                <a onclick=\"return confirm('¿Seguro que deseas borrarlo? No podras deshacer los cambios.')\" href='{$urlBorrar}' class='btn btn-danger'>X</a>
                
             </tr>";   
}
    ?>

    </tbody>
</table>