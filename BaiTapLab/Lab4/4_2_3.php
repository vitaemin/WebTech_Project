<html>
  <head>
    <title>Create Table</title>
  </head>
  <body> 
    <?php 
      $server = 'localhost'; 
      $user = 'root'; 
      $pass = ''; 
      $my_db = 'business_service'; 
      $table_name1 = 'businesses';
      $table_name2 = 'biz_Categories';
      $table_name3 = 'categories';
      $connect = mysqli_connect($server, $user, $pass); 
      $SQLCreateDb = "CREATE DATABASE IF NOT EXISTS $my_db";
      mysqli_query($connect, $SQLCreateDb);
      if (!$connect) {      
        die ("Cannot connect to $server using $user"); 
      } else {      
        $SQLcmd1 = "CREATE TABLE IF NOT EXISTS $table_name1(BusinessID VARCHAR(50) NOT NULL PRIMARY KEY,
        Name VARCHAR(50),
        Address VARCHAR(50), 
        City VARCHAR(20), 
        Telephone VARCHAR(20), 
        URL VARCHAR(100))"; 

        $SQLcmd2 = "CREATE TABLE IF NOT EXISTS $table_name3(CategoryID VARCHAR(50) NOT NULL PRIMARY KEY,
        Title VARCHAR(20),
        Description VARCHAR(1000))";

        $SQLcmd3 =  "CREATE TABLE IF NOT EXISTS $table_name2(BusinessID VARCHAR(50) NOT NULL,
        CategoryID VARCHAR(50) NOT NULL,
        FOREIGN KEY (BusinessID) REFERENCES $table_name1(BusinessID),
        FOREIGN KEY (CategoryID) REFERENCES $table_name3(CategoryID))";

        mysqli_select_db($connect, $my_db);  
        if (mysqli_query($connect, $SQLcmd1) && mysqli_query($connect, $SQLcmd2) && mysqli_query($connect, $SQLcmd3)){    
          print 'Create tables successfully'; 
        } else {    
          die ("Table Create Creation Failed SQLcmd=$SQLcmd");  
        }   
        mysqli_close($connect); 
      } 
    ?>
  </body>
</html> 