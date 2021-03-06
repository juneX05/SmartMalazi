
<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1">
    <title>SmartMalazi</title>

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- References: https://github.com/fancyapps/fancyBox -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background: transparent url("{{env('APP_URL')}}/images/y.jpg");
            }
            .logout{
                color:#F5F5F5;
                margin-right:6px;
                margin-top:14px;
            }
    #brand{
        color:#F5F5F5;
        margin-top:2px;
    }
            #bar{
                background-color: #315B69;
            }
    #hello{
        margin-right:25px;
        color:#F5F5F5;
        margin-top:14px;
        margin-top:16px;
    }
    #admin_menu{
        margin-top:6px;
    }
    .log{
        margin-top:14px;
    }
    .main-footer {
        height: 30px;
        color:#F5F5F5;
        background-color: #315B69;
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
      }
      .gallery

          {

              display: inline-block;

              margin-top: 20px;

          }

          .close-icon{

              border-radius: 50%;

              position: absolute;

              right: 5px;

              top: -10px;

              padding: 5px 8px;

          }
      #sm{
          color:#5CB85C;
      }
      #view_lodges{
          color:#F8F8F6;
      }
      #form{
        background:#414C5F;
      }
      #admin_menu:hover {
        background-color: #315B69;
     }
     #modal{
        background:#414C5F;
        width: 450px;
        margin: auto;
      }

        </style>
</head>

<body>
@include('layouts.top-menu')
<div class="container">

    @yield('content')
    @yield('contentregister')
    @include('layouts.footer')
</div> <!-- /container -->
</body>

<script type="text/javascript">

        $(document).ready(function(){

            $(".fancybox").fancybox({

                openEffect: "none",

                closeEffect: "none"

            });

        });

    </script>

</html>
