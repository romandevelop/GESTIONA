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
        <!-- Animate.css -->
        <link href="<?php echo base_url(); ?>vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>build/css/custom.min.css" rel="stylesheet">
    </head>

    <body>
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">

                <section class="login_content bg-white" style="padding: 20px" >
                    <form>
                        <h4>Formulario de Acceso</h4>
                        <p></p>
                        <div>
                            <input id="rut" type="text" class="form-control" placeholder="rut" required="" />
                        </div>
                        <div>
                            <input id="clave" type="password" class="form-control" placeholder="clave" required="" />
                        </div>
                        <div class="alignright">
                            <button class="btn btn-primary submit" id="boton" >entrar</button>

                        </div>
                        <p class="alignleft" id="respuesta"></p>
                        <div class="clearfix"></div>

                        <div class="separator">


                            <div>
                                <h1><i class="fa fa-database"></i> Gestiona!</h1>
                                <p>©2016 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#boton").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rut").val();
                    var clave = $("#clave").val();
                    $.ajax({
                        url: "<?php echo site_url(); ?>/entrar",
                        type: "POST",
                        dataType: "json",
                        data: {"rut": rut, "clave": clave}
                    }).success(function (o) {
                        if (o.x === "1A") {
                            window.location.href = "<?php echo site_url(); ?>/administrador";
                        }else{
                            $("#respuesta").html(o.x);
                        }

                    });
                });
            });

        </script>
    </body>

</html>
