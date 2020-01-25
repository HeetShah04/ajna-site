<html>
<head>
<title>Prject-Ajna</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{margin:0;padding:0;}
body{
  margin-top:150px;
}
.container{
  width: 300px;
  height: 300px;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top, #eee,#f8f8f8, #eee);
  margin: 20px auto;
  border-radius: 10px;
  border: 1px solid #566d7f;
  box-shadow: inset 0px 0px 0px 1px #fff, 0px 20px 15px -10px rgba(0,0,0,0.5);
  position: relative;
  overflow: hidden;
}
.container>label{
  position: absolute;
  top: 0;
  left:0;
  width: 0px;
  height: 0px;
}
.top, .bottom{
  width: 300px;
  height: 149px;
  display: block;
  background:#333;
  position: absolute;
  -webkit-transition: all 600ms;
  position: relative;
  box-shadow: inset 0px 0px 40px rgba(0,0,0,0.4);
}
.top{
  top: 0;
  border-bottom: 1px solid #222;
}
.top:before{
  content: '';
  width: 170px;
  height: 30px;
  display:block;
  background: #222;
  position: absolute;
  left: 150px;
  bottom: -30px;
  z-index:100;
  -webkit-transform: skew(45deg);
  border-radius: 0px 0px 5px 5px;
  box-shadow: -1px 1px #111, 1px -1px #111, -2px 2px #444, 2px -2px #333;
} 
.bottom{
  bottom:0;
  border-top: 1px solid #222;
}
.bottom:before{
  content: '';
  width: 170px;
  height: 30px;
  display:block;
  background: #222;
  position: absolute;
  right: 160px;
  top: -30px;
  z-index:100;
  -webkit-transform: skew(45deg);
  border-radius: 5px 5px 0px 0px;
  box-shadow: 1px -1px #111, 2px -2px #333;
}
input[type=checkbox]{display: none;}
.container input[type=checkbox]:checked + label b.top{
  top: -140px;
}
.container input[type=checkbox]:checked + label b.bottom{
  bottom: -140px;
}
.login h1{
  padding: 10px 0px 5px 10px;
  border-bottom: 1px solid #ddd;
  box-shadow: 0px 1px #fff;
}
.login form{
  margin-top: 10px;
}
.login form p{
  padding: 10px 0px;
}
.login form label{
  display: block;
  width: 70px;
  margin-left: 20px;
  background: #ccc;
  padding: 0px 3px;
  border-radius: 0 30px 0 0;
  color: #111;
  text-shadow: 0px 1px 0px #eee;
  border-top: 1px solid #f8f8f8;
  border-right: 1px solid #fff;
}
.login form input{
  border: 1px solid #ccc;
  padding: 10px 0;
  border-radius: 0 5px 5px 0;
  width: 259px;
  margin-left: 20px;
  box-shadow: 1px 1px #fff;
}
.login form input[type=submit]{
  margin: 15px 0px 0px 160px;
  width: 130px;
  background: #62a1d1;
  border: 1px solid #446f8e;
  border-radius: 3px;
  box-shadow: inset 0px 20px 0px rgba(255,255,255,0.1);
  font-size: 14px;
  font-weight: 900;
  color: #fff;
  text-shadow: 0px 1px 0px rgba(0,0,0,0.5);
}
.login form input[type=submit]:hover{
  box-shadow: inset 0px -20px 0px rgba(255,255,255,0.1);
}
</style>
</head>
<body>

<div class="container">
    <input type="checkbox" id="switch">
    <label for="switch">
      <b class="top"></b>
      <b class="bottom"></b>
    </label>
  <div class="login">
    <h1>Login</h1>
    <form action="php/login.php" method="POST">
      <p>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username" required>
      </p>
      <p>
        <label for="pass">Password</label>
        <input type="password" placeholder="Enter password" name="password" required>
      </p>
      <p>
        <input type="submit" value="login">
      </p>
    
    </form>
  </div>

</div>


</body>
</html>