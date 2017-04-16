<section id="content">
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Usuarios</h5>
                    <ol class="breadcrumb"></ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <p class="caption">
            <div class="col s12 m8 l9">
                <div class="row">
                    <div class="input-field col s10">
                        <i class="mdi-social-person prefix"></i>
                        <input id="searchClientes" type="text" class="validate">
                        <label for="searchClientes" class="">Buscar...</label>
                    </div>
                    <div class="input-field col s2 ">
                        <a class="waves-effect waves-light btn modal-trigger  light-blue darken-4" href="#modal1"><i class="mdi-social-person-add"></i> </a>
                    </div>
                </div>
            </div>
            </p>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">

                        <div class="row">
                            <div class="col s12">
                                <table id="data-table-simple" class="display" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Nombre Completo</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Fecha</th>
                                        <th>Activo</th>
                                    </tr>
                                    </thead>



                                    <tbody>
                                    <?php
                                    for($i=0;$i<100;$i++){
                                        echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td>Adan Espinoza</td>
                                                    <td>Carazo</td>
                                                    <td>82449100</td>
                                                    <td>25/08/2017</td>
                                                    <td>X</td>

                                                </tr>

                                                ';
                                    }

                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">

        <div class="row">
            <div class="input-field col s12">
                <select class="browser-default">
                    <option>Permiso..</option>
                    <option>Clinica.</option>
                    <option>Gerencia</option>
                    <option>Administrador.</option>
                </select>
            </div>
            <div class="input-field col s12">
                <input id="NombreCompleto" type="text">
                <label for="NombreCompleto">Nombre Completo</label>
            </div>
            <div class="input-field col s12">
                <input id="Usuario" type="text">
                <label for="Usuario">Usuario</label>
            </div>
            <div class="input-field col s12">
                <input id="Contra" type="text">
                <label for="Contra">Contraseña</label>
            </div>
            <div class="input-field col s12">
                <textarea id="observacion" class="materialize-textarea"></textarea>
                <label for="observacion">observación</label>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">OK</a>
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">CANCELAR</a>
    </div>
</div>