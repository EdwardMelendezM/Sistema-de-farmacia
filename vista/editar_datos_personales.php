<?php
session_start();
if($_SESSION['us_tipo']==1)
{
    include_once 'layouts/header.php';
?>
    <title>Adm  | Editar Datos Personales</title>
<?php
include_once 'layouts/nav.php';
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Datos Personales</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
                <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                                </div>
                                <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']?>">
                                <h3 id="nombre_us" class="profile-username text-center text-success">Nombre</h3>
                                <p id="apellidos_us" class="text-muted text-center">Apellidos</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b style="color: #0B7300;">Edad</b><a id="edad" class="float-right">12</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b style="color: #0B7300;">Dni</b><a id="dni_us" class="float-right">12</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b style="color: #0B7300">Tipo Usuario</b>
                                        <span id="us_tipo" class="float-right badge badge-primary">Administrador</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Sobre mi</h3>
                        </div>
                        <div class="card-body">
                            
                            <strong style="color: #0B7300">>
                                <i class="fa-phone fas mr-1"></i>Telefono
                            </strong>
                            <p id="telefono_us" class="text-muted">4234234</p>

                            <strong style="color: #0B7300">>
                                <i class="fa-map-marker-alt fas mr-1"></i>Residencia
                            </strong>
                            <p id="residencia_us" class="text-muted">Cusco</p>

                            <strong style="color: #0B7300">>
                                <i class="fa-at fas mr-1"></i>Correo
                            </strong>
                            <p id="correo_us" class="text-muted">4234234</p>

                            <strong style="color: #0B7300">>
                                <i class="fa-smile-wink fas mr-1"></i>Sexo
                            </strong>
                            <p id="sexo_us" class="text-muted">4234234</p>

                            <strong style="color: #0B7300">>
                                <i class="fa-pencil-alt fas mr-1"></i>Informacion adicional
                            </strong>
                            <p id="adicional_us" class="text-muted">4234234</p>

                            <button class="btn btn-block bg-gradient-danger">Editar</button>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">Click en boton si desea editar</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-success">

                            <div class="card-header">
                                <h3 class="card-title">
                                    Editar Datos Personales
                                </h3>

                            </div>

                            <div class="card-body">
                                <form action="" class="form-horizontal">

                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">
                                            Telefono
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="number" id="telefono" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="residencia" class="col-sm-2 col-form-label">
                                            Residencia
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="telefono" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="correo" class="col-sm-2 col-form-label">
                                            Correo
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="telefono" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="sexo" class="col-sm-2 col-form-label">
                                            Sexo
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="sexo" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="adicional" class="col-sm-2 col-form-label">
                                            Informacion Adicional
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea id="adicional" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10 float-right">
                                            <button class="btn btn-block btn-outline-success">Guardar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="card-footer">
                                <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Main content -->


<?php
include_once 'layouts/footer.php';
}
else{
    header('Location: ../index.php');
}


?>
<script src="../js/Usuario.js"> </script>