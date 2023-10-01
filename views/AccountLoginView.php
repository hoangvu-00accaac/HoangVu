<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="assets/frontend/css/dangnhap.css" />
</head>
<body>
<div class="container" style="margin-top: 200px;">
  <section id="content">
    <form method="post" action="index.php?controller=account&action=loginPost">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" name="email" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" required="" name="password" id="password" />
      </div>
      <div>
        <input type="submit" value="Log in" />
        <a href="#">Lost your password?</a>
        <a href="index.php?controller=account&action=register">Register</a>
      </div>

    </form><!-- form -->
    <div class="button">
      <a href="#">Download source file</a>
    </div><!-- button -->
  </section><!-- content -->
</div><!-- container -->
</body>
</html>
