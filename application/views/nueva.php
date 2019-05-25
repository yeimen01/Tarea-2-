<?php 

if($_POST){

    $persona = $_POST;
    core_persona::guardar($persona);
    redirect('main/lista');
}


include('componentes.php'); 
plantilla::aplicar(); ?>

<h3>Editar persona</h3>
<form method="post" action="">
    <div class='row'>
        <div class='col-md-6'>
            <div>
            <?= asgInput('cedula', 'cedula',['type'=>'number', 'placeholder'=>'Escribe tu cedula. Ej: 05500315030','required'=>'required']); ?>
            <?= asgInput('nombre', 'nombre', ['placeholder'=>'Escribe tu nombre. Ej: Amadis','required'=>'required']); ?>
            <?= asgInput('apellido', 'apellido', ['placeholder'=>'Escribe tu apellido. Ej: Suarez','required'=>'required']); ?>
            </br>   
        <form>
            <h5>Selecciona el sexo:</h5>
            <label><input type="radio" name="sexo" value="masculino", required>Masculino</label>
            </br>
            <label><input type="radio" name="sexo" value="femenino">Femenino</label>
        </form>
        </br></br>

        <h5>Tipo de sangre</h5>
        <label><select name="tipificacion">
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>

        </select>
        </label>
        </br></br>

        <?= asgTextArea('comentario', 'Comentario',['placeholder'=>'Escribe un comentario', 'required'=>'required']); ?>
        </br></br>
        <div class='text-center'>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-save'></i>
                Guardar</button>
        </div>







            </div>
        </div>
    </div>







</form>