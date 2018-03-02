
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
                                    <a href="{{ url("index")}}">Sign In!</a>
                                </div>
                            </form>
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


</html>