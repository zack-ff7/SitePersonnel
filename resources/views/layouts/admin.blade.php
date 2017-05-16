<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Admin CV- @yield('title') </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style media="all" type="text/css">
</style>
<link href="{{asset('css/all.css')}}" rel="stylesheet">
</head>
<body>
<div id="main">
  <div id="header"> <a href="#" class="logo"><img src="{{asset('img/logo.gif')}}" width="101" height="29" alt="" /></a>
    <ul id="top-navigation">
      <li><span><span><a href="#">Dashboard</a></span></span></li>
      <li><span><span><a href="#">Experience</a></span></span></li>
      <li><span><span><a href="#">Formation</a></span></span></li>
      <li><span><span><a href="#">Projets</a></span></span></li>
      <li><span><span><a href="#">Skills</a></span></span></li>
    </ul>
  </div>
@yield('content')
  <div id="footer"></div>
</div>
</body>
</html>