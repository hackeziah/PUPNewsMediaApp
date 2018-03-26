
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    {{ stylesheet_link("fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext") }}
    {{ stylesheet_link("https://fonts.googleapis.com/icon?family=Material+Icons") }}
    {{ stylesheet_link("plugins/bootstrap/css/bootstrap.css" ) }}
    {{ stylesheet_link("plugins/node-waves/waves.css") }}
    {{ stylesheet_link("plugins/animate-css/animate.css") }}
    {{ stylesheet_link("css/style.css") }}

</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"> <b>Sign</b> Up</a>
            <small>PUP News and Social Media App</small>
        </div>
        <div class="card">
            <div class="body">
                {{form ('login/registration', 'method' : 'post' )}}
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <!-- <input type="text" class="form-control" name="namesurname"  required autofocus> -->
                             {{ registerForm.render('firstname') }}

                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <!-- <input type="email" class="form-control" name="email" placeholder="Email Address" required> -->
                             {{ registerForm.render('lastname') }}

                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                         <!-- <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required> -->
                             {{ registerForm.render('middlename') }}

                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                             {{ registerForm.render('studentno') }}
                    </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            {{ registerForm.render('email') }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Register</button>
                        </div>
                    </div>           

                     {{ content() }}
                  {{ end_form() }}
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    {{ javascript_include ("plugins/jquery/jquery.min.js")}}

    <!-- Bootstrap Core Js -->
    {{ javascript_include ("plugins/bootstrap/js/bootstrap.js")}}

    <!-- Waves Effect Plugin Js -->
    {{ javascript_include ("plugins/node-waves/waves.js")}}

    <!-- Validation Plugin Js -->
    {{ javascript_include ("plugins/jquery-validation/jquery.validate.js")}}

    <!-- Custom Js -->
    {{ javascript_include ("js/admin.js")}}
    {{ javascript_include ("js/pages/examples/sign-in.js")}}


</body>

</html>