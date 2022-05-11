<html>
  <head>
    <title>Display data</title>
  </head>
  <body>
    <?php
      $server = 'localhost';
      $user = 'root';
      $password = '';
      $my_db = 'mydatabase';
      $table_name = 'Products';
      $connect = mysqli_connect($server, $user, $password);
      if (!$connect) {
        die('could not connect to database');
      } else {
        $sql = "SELECT * FROM $table_name";
        mysqli_select_db($connect, $my_db);
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          echo "<h1>Products data</h1>";
          echo "<table>";
          echo "<tr>";
          echo "<th>Num</th>";
          echo "<th>Product</th>";
          echo "<th>Cost</th>";
          echo "<th>Weight</th>";
          echo "<th>Count</th>";
          echo "</tr>";
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['ProductID']."</td>";
            echo "<td>".$row['Product_desc']."</td>";
            echo "<td>".$row['Cost']."</td>";
            echo "<td>".$row['Weight']."</td>";
            echo "<td>".$row['Numb']."</td>";
            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
        echo "</table>";
        mysqli_close($connect);
      }
    ?>
  </body>
</html>