<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahmad Farhan | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
@include('partials.navbar')
<div class="container mt-4 justify-content:center">
    @yield('container')
</div>
        <div class="p-4">
          <h4 class="fst-italic" style="color: white">Contact</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.linkedin.com/in/ahmad-farhan-b854b323b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">Linkedin</a></li>
            <li><a href="https://www.instagram.com/ahmdfrhn21">Instagram</a></li>
            <li><a href="https://m.facebook.com/farhanfrozen.curz?mibextid=LQQJ4d">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>Ahmad Farhan</p>
  <p class="mb-0">
    <a href="/">Back to Home</a>
  </p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>