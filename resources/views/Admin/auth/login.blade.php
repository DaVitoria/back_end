<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>3 Grupo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>3 Grupo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
        <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <!-- educate icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/educate-custon-icon.css') }}">
        <!-- morrisjs CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
  <body>
    <div class="error-pagewrap">
      <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
          <h3>Gestão de Cursos Online</h3>

        </div>
        <div class="content-error">
          <div class="hpanel">
                      <div class="panel-body">
                          <form action="{{ route('postLogin') }}" method="post">
                            @csrf

                              <div class="form-group">
                                <label class="mb-1"><strong>Email</strong></label>
                                  @if (session('error'))
                                  <div class="text-danger">{{ session('error') }}</div>
                              @endif
                              <input name="email" type="email" class="form-control"  placeholder="Email">

                              </div>
                              @error('email')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror

                              <div class="form-group">
                                <label class="mb-1"><strong>Senha</strong></label>
                                  @if (session('error'))
                                  <div class="text-danger">{{ session('error') }}</div>
                              @endif
                              <input name="password" type="password" class="form-control" placeholder="Password">
                                  @error('password')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror


                              </div>
                              <div class="checkbox login-checkbox">
                                  <label>


                              </div>
                              <div>
                              <button class="btn btn-custon-four btn-primary">Autenticar</button>
                            </div>
                            <br><br>
                            <div>
                              <button class="btn btn-custon-four btn-default">Esqueci senha</button>
                            </div>
                          </form>
                      </div>
                  </div>
        </div>
        <div class="text-center login-footer">
          <p>© <?php echo date("Y"); ?> Sistema de Cursos Online. Todos os direitos reservados.</p>
        </div>
      </div>
      </div>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/icheck/icheck-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('assets/js/tawk-chat.js') }}"></script>
</body>

</html>
