@extends('Layouts.main')

@section('container')
<body>
      <header>
        <div class="nav-toggle">
          <p>Menu</p><span></span>
        </div>
        <ul class="nav">
          <li><a href="#about">About</a></li>
          <li><a href="#full-slide">Work</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </header>
      <div class="wrapper">
        <div class="welcome">
          <h1><strong>Apollo</strong> Jade Template</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        </div>
        <div class="photographer"><img src="assets/img/hero.png" alt="Photographer">Photo</div>
      </div>
      <div class="wrapper">
        <div class="blurb">
          <h2>My name is <strong>Apollo</strong></h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.<br><br>Ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
          <div class="social"><a href="#"><i class="icon-facebook"></i></a><a href="#"><i class="icon-instagram"></i></a><a href="#"><i class="icon-twitter"></i></a><a href="#"><i class="icon-pinterest-p"></i></a></div>
        </div>
      </div>
      <ul class="banner">
        <li class="active"></li>
        <li></li>
        <li></li>
      </ul><i class="icon-chevron-thin-left prev"></i><i class="icon-chevron-thin-right next"></i>
      <div class="wrapper">
        <div class="blurb">
          <h2><strong>Ut enim</strong> ad minim</h2>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
      <p class="copyright">&copy; Ahmad Farhan 2024</p>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="assets/js/functions-min.js"></script>
  </body>
    <h1>Latar Belakang</h1>
@endsection