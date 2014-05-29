<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="apple.css" rel="stylesheet"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apple</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

  $result = mysql_query("SELECT * FROM user");

 	$login_flag = false;
	while($row = mysql_fetch_array($result))
  	{
		if ($row['username'] == $_POST["user"]  &&   $row['password'] == $_POST["pas"])
			$login_flag = true;
			$username = $_POST["user"];
  	}
	
	if ($login_flag==true)
	{
		
		?>
<script type="text/javascript" src="jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="bootstrap.js"></script>
<div class="btn-group" style="margin-left:200px">
  <button class="btn"> Apple </button>
  <button class="btn" onclick="document.location=('http://store.apple.com/cn')"><i class="icon-shopping-cart"></i> 在线商店 </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/mac/')"> Mac </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/ipod/')"> ipod </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/iphone/')"> iphone </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/ipad/')">ipad</button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/itunes/')">iTunes</button>
  <button class="btn" > welcome </button>
  
  <!-- <button class="btn" onclick="document.location=('http://www.apple.com/cn/support/')">技术支持</button>
  
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    登陆<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#login" data-toggle="modal">注册ID</a></li>
    <li><a href="#register" data-toggle="modal">Apple ID登陆</a></li>
    
  </ul>
</div>

<div class="modal hide" id="login">
  <div class="madal-header"> <a href="#" class="close" data-dismiss="modal">x</a>
    <h4>用户注册</h4>
  </div>
  <div class="modal-body">
    <form action="register.php" method="post" class="form-horizontal">
      <div class="control-group">
        <label class="control-label">username</label>
        <div class="controls">
          <input type="text" name="newuser"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">password</label>
        <div class="controls">
          <input type="text" name="newpas" />
        </div>
      </div>
      <input type="submit" class="btn btn-primary">
      login
      </input>
    </form>
    <div class="modal-footer"> </div>
  </div>
</div>

<div class="modal hide" id="register">
  <div class="madal-header"> <a href="#" class="close" data-dismiss="modal">x</a>
    <h4>用户登陆</h4>
  </div>
  <div class="modal-body">
    <form action="login.php" method="post" class="form-horizontal">
      <div class="control-group">
        <label class="control-label">Apple ID</label>
        <div class="controls">
          <input type="text" name="user"/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">密码</label>
        <div class="controls">
          <input type="text" name="pas" />
        </div>
      </div>
      <input type="submit" class="btn btn-primary">
      login
      </input>
    </form>
    <div class="modal-footer"> </div>
  </div>
</div>--> 
</div>
<div class="word">
  <p>你比想象中的更强大 </p>
</div>
<div class="logo"> <img src="pic7.jpg" width="320" height="150" /> </div>
<div class="pic"> <img src="pic1.jpg" width="320" height="150" /> <img src="pic2.jpg" width="320" height="150" /> <img src="pic3.jpg" width="320" height="150" /> <img src="pic4.jpg" width="320" height="150" /> </div>
<div class="end">
  <p>访问 Apple Store<a class="read" href="#"> 在线商店</a> (400-666-8800)，Apple Store 零售店，或查找在你附近的 Apple 经销商。 </p>
  <p> &copy;2014 Apple Inc. 保留所有权利。<a class="read" href="#">使用条款</a> 京公安网安备 11010500896 </p>
</div>
<?php
		
		
	}
	else
	{
		?>
<script type="text/javascript" src="jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="bootstrap.js"></script>
<div class="btn-group" style="margin-left:200px">
  <button class="btn"> Apple </button>
  <button class="btn" onclick="document.location=('http://store.apple.com/cn')"><i class="icon-shopping-cart"></i> 在线商店 </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/mac/')"> Mac </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/ipod/')"> ipod </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/iphone/')"> iphone </button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/ipad/')">ipad</button>
  <button class="btn" onclick="document.location=('http://www.apple.com/cn/itunes/')">iTunes</button>
  
  <!-- <button class="btn" onclick="document.location=('http://www.apple.com/cn/support/')">技术支持</button>
  -->
  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">登陆错误 重新登陆<span class="caret"></span> </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#login" data-toggle="modal">注册ID</a></li>
      <li><a href="#register" data-toggle="modal">Apple ID登陆</a></li>
    </ul>
  </div>
  <!--<button href="#login" data-toggle="modal" class="btn">点击登录</button>
-->
  <div class="modal hide" id="login">
    <div class="madal-header"> <a href="#" class="close" data-dismiss="modal">x</a>
      <h4>用户注册</h4>
    </div>
    <div class="modal-body">
      <form action="register.php" method="post" class="form-horizontal">
        <div class="control-group">
          <label class="control-label">username</label>
          <div class="controls">
            <input type="text" name="newuser"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">password</label>
          <div class="controls">
            <input type="text" name="newpas" />
          </div>
        </div>
        <input type="submit" class="btn btn-primary">
        login
        </input>
      </form>
      <div class="modal-footer"> </div>
    </div>
  </div>
  <div class="modal hide" id="register">
    <div class="madal-header"> <a href="#" class="close" data-dismiss="modal">x</a>
      <h4>用户登陆</h4>
    </div>
    <div class="modal-body">
      <form action="login.php" method="post" class="form-horizontal">
        <div class="control-group">
          <label class="control-label">Apple ID</label>
          <div class="controls">
            <input type="text" name="user"/>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">密码</label>
          <div class="controls">
            <input type="text" name="pas" />
          </div>
        </div>
        <input type="submit" class="btn btn-primary">
        login
        </input>
      </form>
      <div class="modal-footer"> </div>
    </div>
  </div>
</div>
<div class="word">
  <p>你比想象中的更强大 </p>
</div>
<div class="logo"> <img src="pic7.jpg" width="320" height="150" /> </div>
<div class="pic"> <img src="pic1.jpg" width="320" height="150" /> <img src="pic2.jpg" width="320" height="150" /> <img src="pic3.jpg" width="320" height="150" /> <img src="pic4.jpg" width="320" height="150" /> </div>
<div class="end">
  <p>访问 Apple Store<a class="read" href="#"> 在线商店</a> (400-666-8800)，Apple Store 零售店，或查找在你附近的 Apple 经销商。 </p>
  <p> &copy;2014 Apple Inc. 保留所有权利。<a class="read" href="#">使用条款</a> 京公安网安备 11010500896 </p>
</div>
<?php
	}

	mysql_close($con);
?>
</body>
</html>