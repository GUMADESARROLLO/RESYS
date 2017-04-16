<link href="<?PHP echo base_url();?>assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
<body class="indigo">
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="<?PHP echo base_url();?>/assets/images/logo.png" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">PLataforma de Afiliación UNIMARKSA</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text">
                    <label for="username" class="center-align">Usuario</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12 ">
                    <i class="mdi-action-lock-outline prefix "></i>
                    <input id="password" type="password">
                    <label for="password">Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="index.php/Clientes" class="btn waves-effect indigo col s12">Acceder</a>
                </div>
            </div>
            <div class="row center">
                <div class="input-field col s12">
                    Copyright © <?php echo date('Y')?> Todos los Derechos Reservados - UNIMARK S.A
                </div>
            </div>

        </form>
    </div>
</div>
