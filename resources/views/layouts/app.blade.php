<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{config('app.name')}} | Official Homepage</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    #slider
    {
      background-image:url({{asset('img/welcome-bg.png')}});
      background-size:cover;
      height:90vh;
      background-attachment:fixed;
    }

    #header-after 
    {
      height:15vh;
      width:100%;
      background-image:url({{asset('img/welcome-bg.png')}});
    }


    #end-footer 
    {
      background-image:url({{asset('img/footer.png')}});
      padding-top:130px;
      padding-bottom:70px;
      margin-top:0px;
      color:#fff;
      background-size:cover;
      font-size:18px;
    }
    .search-box{
      width: 300px;
      background: #aeaeae00;
      border-top: 0;
      border-left: 0;
      border-right: 0;
      border-bottom: 1px solid #ffffff78;
      border-radius: 0;
      display: block;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #fff;
    }
    .search-box:focus{
      background:#f5f5f538;
      border-top: 0;
      border-left: 0;
      border-right: 0;
      border-bottom: 1px solid #ffffff78;
    }
    .search-box::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #fff;
      opacity: 1; /* Firefox */
    }
    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
      background-color: #8e19e7cf;
    }
    .navbar-dropdown{
      background: #8e19e7cf;
      padding: 10px;
    }
    .navbar-dropdown a{
      width: 100%;
      font-size: 14px !important;
      display: block;
      padding: 4px 0px;
    }
    #cover-page-school 
    {
      height:150px;
      background-image:url({{asset('img/welcome-bg.png')}});
      background-size:cover;
      background-attachment:fixed;
      display:inline-block;
      width:100%;
    }
  </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	

  @yield('content')
	
	
@include('includes.footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/aos.js')}}"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
      $('.search-box').keypress(function (e) {
      if (e.which == 13) {
        $('form#search').submit();
        return false;    //<---- Add this line
      }
      });
    </script>
  </body>
</html>