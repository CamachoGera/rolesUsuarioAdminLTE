<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Administrador de roles
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        <li><a href="#">Usuarios</a></li>
        <li class="active">Administrar roles</li>
    </ol>
</section>

<!-- Contenido de la página -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal">
                            Crear nuevo rol
                        </button>
                    </div>
                    </br>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dt-responsive tablaperfil" width="100%">
                            <!-- Cabecera de la tabla -->
                            <thead>
                                <tr>
                                    <th style="width: 10px;">#</th>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Foto</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cuerpo de la tabla -->
                                <tr>
                                    <td>1</td>
                                    <td>Hotel Portobelo</td>
                                    <td>Portobelo</td>
                                    <td></td>
                                    <td>Administrador</td>
                                    <td>
                                        <buton class="btn btn-info btn-sm">Activo</buton>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <buton class="btn btn-danger btn-sm">Inhabilitar</buton>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registrar nuevo usuario</h4>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre de Usuario</label>
                            <input type="text" class="form-control input-sm" id="exampleInputPassword1"
                                placeholder="Nombre de Usuario">
                        </div>
                        <div class="form-group">
                            <label>Disabled Result</label>
                            <select class="form-control select2 input-sm" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-sm btn-primary">Registrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->