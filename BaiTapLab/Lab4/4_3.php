<html>
  <head>
    <title>Category Administration Page</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      th {
        background-color: #777;
      }

      input {
        display: inline-block;
        width: 250px;
        margin-top: 10px;
      }

      input:first-of-type {
        width: 100px;
      }

      button {
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Category Administration</h1>
    <?php
      $server = 'localhost';
      $user = 'root';
      $password = '';
      $my_db = 'business_service';
      $table_name = 'categories';
      $connect = mysqli_connect($server, $user, $password);

      if (isset($_REQUEST['CatID'])) {
        $CatID = $_REQUEST['CatID'];
        $Title = $_REQUEST['Title'];
        $Description = $_REQUEST['Description'];
        $sqlAdd = "INSERT INTO $table_name VALUES('$CatID', '$Title', '$Description')";
        mysqli_select_db($connect, $my_db);
        if (!mysqli_query($connect, $sqlAdd)) {
          die ("Error adding category");
        }
      }

      if (!$connect) {
        die("Could not connect to database");
      } else {
        $sql = "SELECT * FROM $table_name";
        mysqli_select_db($connect, $my_db);
        $result = mysqli_query($connect, $sql);
        echo "<table>";
          echo "<tr>";
          echo "<th width='100px'>CatID</th>";
          echo "<th width='250px'>Title</th>";
          echo "<th width='250px'>Description</th>";
          echo "</tr>";
        if (mysqli_num_rows($result) > 0) {
          // output data of each row         
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td width='100px'>".$row['CategoryID']."</td>";
            echo "<td width='250px'>".$row['Title']."</td>";
            echo "<td width='250px'>".$row['Description']."</td>";
            echo "</tr>";
          }
        } else {
          echo "0 results <br/>";
        }    
        echo "</table>";    
      }
      mysqli_close($connect);
    ?>

    <form action="./4_3.php" method="post">
      <input type="text" name="CatID"/>
      <input type="text" name="Title"/>
      <input type="text" name="Description"/>
      <br/>
      <button type="submit" onclick="handleClick();">Add Category</button>
    </form>

    <script>
      const handleClick = () => {
        const inputs = document.querySelector('input');
        const len = inputs.length;
        for (let i = 0; i < len; i++) {
          inputs[i].value = '';
        }
      }
    </script>
  </body>
</html>