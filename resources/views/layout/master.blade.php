<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">
<title>Ebook CREMESP</title>
</head>

<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="/produtos"> Ebook </a> </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{action('EbookController@lista')}}">Lista</a></li>
      </ul>
    </div>
  </nav>
  @yield('conteudo')
  <footer class="footer">
    <p>Conselho Regional de Medicina do Estado de São Paulo</p>
  </footer>
</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

