<html>
<head>
<title>My Home Network</title>
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

<style>
body {
  background: #333;
  color: #000;
  margin: 0px;
  font-family: 'Yanone Kaffeesatz', sans-serif;
  font-size: 16px;
}

.square {
  width: 175px;
  height: 175px;
  border: 0px;
  display: inline-block;
  margin-right: 10px;
  margin-top: 10px;
}

h1 {
  font-family: 'Yanone Kaffeesatz', sans-serif;
  font-size: 45px;
  color: #FAFAFA;
  padding: 15px;
  background: #000;
  width: 400px;
}

a:link {
  color: #222;
  text-decoration: underline;
}

a:visited {
  color: #222;
  text-decoration: underline;
}

a:hover {
  color: #222;
  text-decoration: none;
}

a:active {
  color: #222;
  text-decoration: underline;
}

.online {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: green;
  color: white;
}

.offline {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: darkred;
  color: white;
}

.header {
  background: #444;
  width: 100%;
  height: 30px;
  min-height: 30px;
  margin-left: 0px;
  margin-right: 0px;
  padding-top: 5px;
  color: #888;
  border-bottom: 1px solid #666;
}

.header a:link {
  color: #CCC;
  text-decoration: underline;
}

.header a:visited {
  color: #ccc;
  text-decoration: underline;
}

.header a:hover {
  color: #fff;
  text-decoration: none;
}

.header a:active {
  color: #ccc;
  text-decoration: underline;
}
</style>
</head>
<body>

<!-- A PORT MUST BE OPEN FOR THIS TO WORK -->
<!-- MOST COMMON PORTS ARE 22 & 80 -->

<?php
 function GetServerStatus($site, $port)
 {
 $status = array("<div class='online'>Online</div>", "<div class='offline'>Offline</div>");
 $fp = @fsockopen($site, $port, $errno, $errstr, 2);
 if (!$fp) {
    return $status[1];
  } else  { return $status[0];}
 }
?>


<!-- BEGIN BOOKMARK HEADER -->
<!-- REMOVE IF YOU DO NOT WANT ACTIVE -->
<div class="header" align="center">
 <div style="width: 855px;" align="center">
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a> | 
  <a href="#" target="_newtop1">Bookmark</a>
 </div>
</div>
<!-- END BOOKMARK HEADER -->
<!-- REMOVE IF YOU DO NOT WANT ACTIVE -->

<center>
<div align="center" style="width: 855px;">

<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT -->

<h1>My Home Network</h1>

<div class="square" style="background: aqua;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #BE81F7;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #D8D8D8;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #A9F5A9;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #FA58F4;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #FE2E2E;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #F4FA58;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #FFFFFF;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #8181F7;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<div class="square" style="background: #FE642E;">
 <div style="float: left; margin: 15px; text-align: left; line-height: 25px;">
  <strong>Name:</strong> Device Name<br />
  <strong>IP:</strong> 192.168.0.0<br />
  <strong>Status:</strong> <?php echo GetServerStatus('192.168.0.0',80); ?><br />
  <strong>Access:</strong> <a href="http://192.168.0.0" target="_new">Admin</a>
 </div>
</div>

<!-- END CONTENT -->
<!-- END CONTENT -->

<!-- CLEAR FLOATS -->
<div style="clear: both; min-height: 10px;"></div>
<!-- CLEAR FLOATS -->

</div>

</center>

</body>
</html>