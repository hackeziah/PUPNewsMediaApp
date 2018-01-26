
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
            <a href="javascript:void(0);">PUP<b>NewsMediaApp</b></a>
            <small>PUP News and Social Media App</small>
        </div>
        <div class="card">
            <div class="body">
                {{form ('login/authenticate', 'method' : 'post' )}}
                    <div class="msg">Sign in to start your session</div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                             {{ loginForm.render('username') }}
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            {{ loginForm.render('password') }}
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
                             <a href="{{ url("index\registration")}}">Register Now!</a>
                        </div>
                    </div>

                     <div class="row m-t-15 m-b- -20">
                    <div class="col-xs-6">                  
                      </div>
                          <div class="col-xs-6 align-right">
                                 <a href="{{ url("index\forgotpass")}}">Fogot Password</a>
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