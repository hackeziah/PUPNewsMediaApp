
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

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">

            <a href="javascript:void(0);"><b>Forgot</b>Password</a>
           <small>PUP News and Social Media App</small>
        </div>
                    <div class="card">
                        <div class="body">
                            <form id="forgot_password" method="POST">
                                <div class="msg">
                                    Enter your email address that you used to register. We'll send you an email with your username and a
                                    link to reset your password.
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                    </div>
                                </div>

                                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET MY PASSWORD</button>

                                <div class="row m-t-20 m-b--5 align-center">
                                    <a href="<?= $this->url->get('index') ?>">Sign In!</a>
                                </div>
                            </form>
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


</html>