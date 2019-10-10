<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>dv</title>
  <base href="{{asset('')}}">
  <!-- Bootstrap Core CSS -->
  <link href="source/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
<!--     <link href="source/css/shop-homepage.css" rel="stylesheet">
  <link href="source/css/my.css" rel="stylesheet" /> -->
  <link href="source/css/home.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="source/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="source/css/owl.carousel.min.css"/>
  <link rel="stylesheet" type="text/css" href="source/css/owl.theme.default.min.css"/>
  <link href="source/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


  <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

    <body>

      @include('layouts.header')

      @yield('content')

      @include('layouts.footer')
      <!-- jQuery -->
      <script src="source/js/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="source/js/bootstrap.min.js"></script>
      <script src="source/js/owl.carousel.js"></script>
      <script src="source/js/owl.carousel.min.js"></script>
      <script src="source/js/my.js"></script>
      <script type="text/javascript" src="source/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="source/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


      <script>
        $(document).ready(function() {

          $("#owl-demo").owlCarousel({

      navigation : true, // Show next and prev buttons

      slideSpeed : 300,
      paginationSpeed : 400,

      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false

    });

        });
      </script>
      <script type="text/javascript">
        $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
      });
        $('.form_date').datetimepicker({
          language:  'fr',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
        });
        $('.form_time').datetimepicker({
          language:  'fr',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 1,
          minView: 0,
          maxView: 1,
          forceParse: 0
        });
      </script>
    </body>

    </html>
