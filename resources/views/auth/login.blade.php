<!DOCTYPE html>
<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>PARISSIS CMS</title>

   <link href="cms/css/bootstrap.min.css" rel="stylesheet">
   <link href="cms/font-awesome/css/font-awesome.css" rel="stylesheet">

   <link href="cms/css/animate.css" rel="stylesheet">
   <link href="cms/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

   <div class="middle-box text-center loginscreen animated fadeInDown">
       <div>
           <div>
               <h1 class="logo-name"><img width="70%;" src="images/logo1.png"></h1>
           </div>
           <h3>Welcome to PARISSIS CMS</h3>
           <p>This platform that allows you to manage your Projects</p>
           <p>Login in using your credentials.</p>
           <form class="m-t" role="form" method="POST" action="{{ url('/login') }}">
           {{ csrf_field() }}
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                       <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                       </span>
                   @endif
               </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                   @if ($errors->has('password'))
                       <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                       </span>
                   @endif
               </div>
               <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

              <!--  <a href="{{ url('/password/reset') }}"><small>Forgot password?</small></a> -->
           </form>
           <p class="m-t"> <small><a target="_blank" href="https://www.webneoo.com"> Webneoo </a> CMS - All rights reserved &copy; 2018</small> </p>
       </div>
   </div>

   <!-- Mainly scripts -->
   <script src="cms/js/jquery-2.1.1.js"></script>
   <script src="cms/js/bootstrap.min.js"></script>

</body>

</html>