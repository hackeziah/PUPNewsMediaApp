
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <?= $this->tag->stylesheetLink('fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext') ?>
    <?= $this->tag->stylesheetLink('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->tag->stylesheetLink('plugins/bootstrap/css/bootstrap.css') ?>
    <?= $this->tag->stylesheetLink('plugins/node-waves/waves.css') ?>
    <?= $this->tag->stylesheetLink('plugins/animate-css/animate.css') ?>
    <?= $this->tag->stylesheetLink('css/style.css') ?>

</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">
            <?= $this->tag->image(['images/logo3.png']) ?>
        </a>
            <small>PUP News and Social Media App</small>

        </div>
        <div class="card">
            <div class="body">
                <?= $this->tag->form(['login/authenticate', 'method' => 'post']) ?>
                    <div class="msg">Sign in to start your session</div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             <?= $loginForm->render('username') ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <?= $loginForm->render('password') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">LOGIN</button>
                        </div>
                    </div>
                 <div class="row m-t-15 m-b- -20">
                    <div class="col-xs-6">                  
                      </div>
                          <div class="col-xs-6 align-right">
                             <a href="<?= $this->url->get('index\registration') ?>">Register Now!</a>
                        </div>
                    </div>

                     <div class="row m-t-15 m-b- -20">
                    <div class="col-xs-6">                  
                      </div>
                          <div class="col-xs-6 align-right">
                                 <a href="<?= $this->url->get('index\forgotpass') ?>">Fogot Password</a>
                            </div>
                    </div>

                     <?= $this->getContent() ?>
                  <?= $this->tag->endForm() ?>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <?= $this->tag->javascriptInclude('plugins/jquery/jquery.min.js') ?>

    <!-- Bootstrap Core Js -->
    <?= $this->tag->javascriptInclude('plugins/bootstrap/js/bootstrap.js') ?>

    <!-- Waves Effect Plugin Js -->
    <?= $this->tag->javascriptInclude('plugins/node-waves/waves.js') ?>

    <!-- Validation Plugin Js -->
    <?= $this->tag->javascriptInclude('plugins/jquery-validation/jquery.validate.js') ?>

    <!-- Custom Js -->
    <?= $this->tag->javascriptInclude('js/admin.js') ?>
    <?= $this->tag->javascriptInclude('js/pages/examples/sign-in.js') ?>


</body>

</html>