
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

  {{ get_title() }}
  {% include "layouts/link.volt" %}
  <style type="text/css">

  </style>
</head>   
 <!-- {% if session.has('auth') %}      -->
          <!-- Content Header (Page header) -->
<body class="theme-red">
      <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->

            {% include "layouts/header.volt" %}
            {% include "layouts/sidebar.volt" %}

      

<!-- jQuery 3 -->

<!-- {% endif %} -->

    
             <!--  -->
      

            <!-- /.content-wrapper -->  
</div>
<!-- jQuery 3 -->
   {{ javascript_include("plugins/jquery/jquery.min.js") }}

    <!-- Bootstrap Core Js -->
    {{ javascript_include("plugins/bootstrap/js/bootstrap.js") }}

    <!-- Select Plugin Js -->
   {{ javascript_include("plugins/bootstrap-select/js/bootstrap-select.js") }}

    <!-- Slimscroll Plugin Js -->
   {{ javascript_include("plugins/jquery-slimscroll/jquery.slimscroll.js") }}

    <!-- Waves Effect Plugin Js -->
   {{ javascript_include("plugins/node-waves/waves.js") }}

    <!-- Autosize Plugin Js -->
   {{ javascript_include("plugins/autosize/autosize.js") }}

    <!-- Moment Plugin Js -->
   {{ javascript_include("plugins/momentjs/moment.js") }}
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
   {{ javascript_include("plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js") }}

    <!-- Custom Js -->
   {{ javascript_include("js/admin.js") }}
   {{ javascript_include("js/pages/forms/basic-form-elements.js") }}

    <!-- Demo Js -->
   {{ javascript_include("js/demo.js") }}


    
  <!-- Google Font -->



</body>
</html>