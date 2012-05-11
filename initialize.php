<html>
<head>
</head>
<body>
<?php
  // Connect to database
  require_once "inc/database.php";
  
  // Create Table
  $q="DROP table if exists thoughts";
  mysql_query($q);
  $sql = "CREATE TABLE thoughts
    (    
    ideaID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ideaID),
    Title varchar(25),
    Tag varchar(50),
    Content text
    )";
  
  // Execute query
  mysql_query($sql);
  
  mysql_close($con);
?>
</body>
</html>
