<?php

function delete($params = false) {
    if($params) {
        return 'Usuarios eliminados';        
    } else {
        return 'Olvidaste seleccionar usuarios a eliminar';
    }
}

function enable($params = false) {
    if($params) {
        return 'Usuarios habilitados';
    } else {
        return 'Olvidaste seleccionar usuarios a habilitar';
    }
}

function disable($params = false) {
    if($params) {
        return 'Usuarios inhabilitados';
    } else {
        return 'Olvidaste seleccionar usuarios a inhabilitar';
    }
}

?>


<?php include('header.php') ?>
<main>
    <div class="container">
        <div class="card text-center my-5">
            <div class="card-body">
                <?php echo $mje ?>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php') ?>