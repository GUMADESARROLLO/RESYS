        <section id="content">
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Clientes Registrados</h5>
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
                                <a class="waves-effect waves-light btn modal-trigger  light-blue darken-4" href="#modal2"><i class="mdi-social-person-add"></i> </a>
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
                                                <th>Dirección</th>
                                                <th>Telefono</th>
                                                <th>Cedula</th>
                                                <th>Email</th>
                                                <th>Fecha</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            for($i=0;$i<1000;$i++){
                                                echo '
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td><a class="modal-trigger" href="#modal1" onclick="Vender()">Adan Espinoza</a> </td>
                                                    <td>Carazo</td>
                                                    <td>82449100</td>
                                                    <td>041-XXXXXX-0000C</td>
                                                    <td>marangelo@live.com</td>
                                                    <td>25/08/2017</td>
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
<div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12">
                <input id="NombreCompleto" type="text">
                <label for="NombreCompleto">Nombre Completo</label>
            </div>
            <div class="input-field col s12">
                <input id="Direccion" type="text">
                <label for="Direccion">Dirección</label>
            </div>
            <div class="input-field col s12">
                <input id="Cedula" type="text">
                <label for="Cedula">Cedula</label>
            </div>
            <div class="input-field col s12">
                <input id="Telefono" type="text">
                <label for="Telefono">Telefono</label>
            </div>
            <div class="input-field col s12">
                <input id="Email" type="text">
                <label for="Email">Email</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">OK</a>
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">CANCELAR</a>
    </div>
</div>

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">

        <div class="row">
            <div class="input-field col s12">
                <select class="browser-default">
                    <option>Seleccion el Articulo</option>
                    <option>1.-</option>
                    <option>2.-</option>
                    <option>3.-</option>
                </select>
            </div>
            <div class="input-field col s12">
                <input id="Lote" type="text">
                <label for="Lote">Lote</label>
            </div>
            <div class="input-field col s12">
                <input id="Cantidad" type="text">
                <label for="Cantidad">Cantidad</label>
            </div>
            <div class="input-field col s12">
                <textarea id="observacion" class="materialize-textarea"></textarea>
                <label for="observacion">Observación</label>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">OK</a>
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">CANCELAR</a>
    </div>
</div>

