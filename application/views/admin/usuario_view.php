<?php
$user = $this->session->userdata("user");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestiona| </title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="<?php echo base_url(); ?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- PNotify -->
        <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>build/css/custom.min.css" rel="stylesheet">
        <style type="text/css">
            .table > tbody > tr > td {
                vertical-align: middle;
            }
        </style>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-database"></i> <span>Gestiona!</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?php echo base_url(); ?>build/images/user_1.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido,</span>
                                <h2><?= $user[0]->nombre ?> <?= $user[0]->apellido ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo site_url(); ?>/administrador"><i class="fa fa-line-chart"></i>Dashboard </a></li>
                                    <li><a><i class="fa fa-user"></i> Usuario <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo site_url(); ?>/cargaUsuario">Gestión Usuario</a></li>
                                            <li><a href="<?php echo site_url(); ?>/cargaRol">Gestión Roles</a></li>
                                            <li><a href="<?php echo site_url(); ?>/cargaPrivilegio">Gestión Privilegios</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">General Form</a></li>
                                            <li><a href="form_advanced.html">Advanced Components</a></li>
                                            <li><a href="form_validation.html">Form Validation</a></li>
                                            <li><a href="form_wizards.html">Form Wizard</a></li>
                                            <li><a href="form_upload.html">Form Upload</a></li>
                                            <li><a href="form_buttons.html">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="general_elements.html">General Elements</a></li>
                                            <li><a href="media_gallery.html">Media Gallery</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="glyphicons.html">Glyphicons</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="calendar.html">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="tables.html">Tables</a></li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="chartjs.html">Chart JS</a></li>
                                            <li><a href="chartjs2.html">Chart JS2</a></li>
                                            <li><a href="morisjs.html">Moris JS</a></li>
                                            <li><a href="echarts.html">ECharts</a></li>
                                            <li><a href="other_charts.html">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="e_commerce.html">E-commerce</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project_detail.html">Project Detail</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                            <li><a href="profile.html">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="page_403.html">403 Error</a></li>
                                            <li><a href="page_404.html">404 Error</a></li>
                                            <li><a href="page_500.html">500 Error</a></li>
                                            <li><a href="plain_page.html">Plain Page</a></li>
                                            <li><a href="login.html">Login Page</a></li>
                                            <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#level1_1">Level One</a>
                                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_1">Level Two</a>
                                                    </li>
                                                    <li><a href="#level2_2">Level Two</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#level1_2">Level One</a>
                                            </li>
                                        </ul>
                                    </li>                  
                                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>build/images/user_1.png" alt="">


                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="<?php echo site_url() ?>/salir"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>build/images/user_1.png" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>build/images/user_1.png" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>build/images/user_1.png" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>build/images/user_1.png" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    Gestion Usuario
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Crear Usuario <small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <div class="col-md-12 ">
                                        <form class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label>Rut</label>
                                                <input id="rut" type="text" class="form-control" placeholder="Rut">
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input id="nombre" type="text" class="form-control" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido</label>
                                                <input id="apellido" type="text" class="form-control" placeholder="Apellido">
                                            </div>
                                            <div class="form-group">
                                                <label>Especialidad</label>
                                                <input id="especialidad" type="text" class="form-control" placeholder="Especialidad">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input id="telefono" type="text" class="form-control" placeholder="Telefono">
                                            </div>
                                            <div class="form-group">
                                                <label>Rol</label>
                                                <select id="rol" class="select2-selection--single form-control">
                                                    <?php
                                                    foreach ($roles as $value) {
                                                        echo "<option value='" . $value->codigo . "'>" . $value->nombre . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <button id="btcrear" class="btn btn-primary btn alignright">
                                                <i class="fa fa-save"></i>  &nbsp; Crear
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Lista de Usuarios <small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <table class="table table-bordered table-responsive ">
                                        <thead>
                                            <tr>
                                                <td>Rut</td>
                                                <td>Nombre</td>
                                                <td>Apellido</td>
                                                <td>Especialidad</td>
                                                <td>Telefono</td>
                                                <td>Rol</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right ">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> <div id="mtitulo"></div></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Rut</label>
                            <input readonly="true" id="mrut" type="text" class="form-control" placeholder="rut">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input id="mtelefono" type="text" class="form-control" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <label>Rol</label>
                            <select id="mrol" class="select2-selection--single form-control">
                                
                            </select>
                        </div>
                        <div class="">
                            <label>
                                <div id="restado">Estado: Activo</div>
                                <input id="mestado" type="checkbox" class="js-switch" checked="true" /> 
                            </label>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?php echo base_url(); ?>vendors/skycons/skycons.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>build/js/custom.min.js"></script>
        <!-- PNotify -->
        <script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.js"></script>
        <script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.nonblock.js"></script>
        <!-- PNotify -->
        <!-- Switchery -->
        <script src="<?php echo base_url(); ?>vendors/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript">
            $(function () {

                cargarUsuarios();

                $("#btcrear").click(function (e) {
                    e.preventDefault();

                    var rut = $("#rut").val();
                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    var especialidad = $("#especialidad").val();
                    var telefono = $("#telefono").val();
                    var rol = parseInt($("#rol").val());

                    $.ajax({
                        url: "<?php echo site_url(); ?>/crearUsuario",
                        type: 'POST',
                        dataType: 'json',
                        data: {"rut": rut, "nombre": nombre, "apellido": apellido, "especialidad": especialidad,
                            "telefono": telefono, "rol": rol}
                    }).success(function (o) {
                        var title = "Error";
                        var tipo = "error";
                        var message = "Hubo un probelma al crear el usuario";
                        if (o.msg === "ok") {
                            title = "Aviso";
                            tipo = "success";
                            message = "Usuario creado con éxito";
                        }

                        new PNotify({
                            title: title,
                            text: message,
                            type: tipo,
                            styling: 'bootstrap3'
                        });
                        cargarUsuarios();
                    });


                });
                //_____________CARGA MODAL_________________________
                $("body").on("click", "#btnedit", function (e) {
                    
                    e.preventDefault();
                    
                    $('#myModal').modal();
                    var datos = $(this).val();
                    var fila = datos.split(",");
                    
                    $("#mrut").val(fila[0]);
                    $("#mtelefono").val(fila[1]);
                    var rol = fila[2];
                    $("#mtitulo").html("Editar a "+fila[3]);
                    var url = "<?php echo site_url(); ?>/roles";
                    $("#mrol").empty();
                    var s = "";
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            s = (rol === o.nombre)?"selected=true":"";
                            var fila = "<option value='"+o.codigo+"' "+s+">"+o.nombre+"</option>";
                            
                            $("#mrol").append(fila);
                        });
                    });
                });


                //______________ESTADO USUARIO____________________
                $("#mestado").on("click", function (e) {
                    // e.preventDefault();
                    if ($(this).is(':checked')) {
                        $("#restado").html("Estado: Activo");
                    } else {
                        $("#restado").html("Estado: Inactivo");
                    }
                });


                function cargarUsuarios() {
                    var url = "<?php echo site_url(); ?>/usuarios";
                    $("#tbody").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr class='vertical-align-mid'><td>" + o.rut + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td>" + o.apellido + "</td>";
                            fila += "<td>" + o.especialidad + "</td>";
                            fila += "<td>" + o.telefono + "</td>";
                            fila += "<td>" + o.rol + "</td>";
                            fila += '<td> <button id="btnedit" value="' + o.rut + "," + o.telefono +","+o.rol+ ","+o.nombre+'" class="btn btn-info"><i class="fa fa-edit"></i></button>';

                            $("#tbody").append(fila);
                        });
                    });
                }





            });
        </script>
        <div class="ta" ></div>
    </body>
</html>
