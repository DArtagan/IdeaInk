<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>IdeaInk</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <?php require_once('my_alert/my_alert.php'); // This is the location where the file is stored.
  my_alert_head(); ?>
</head>
<body>
  <div id="header">
    <h1>IdeaInk</h1>
  </div>
  <div id="wrapper">
    <div id="left-sidebar">
      <h3>Thoughts</h3>
      <?php require("list.php"); ?>
    </div>
    <div id="content">
      <div class="edit">
        <?php require("edit.php"); ?>
      </div>
      <?php my_alert('Hello', 'This is a message!'); ?>
    </div>
    <div id="footer">
      <div class="validator">
        <a href="http://validator.w3.org/check?uri=referer">
          <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
        </a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
          <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
        </a>
      </div>
    </div>
  </div>
</body>
</html>