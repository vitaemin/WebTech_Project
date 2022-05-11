<html>
  <head>
    <title>Update data</title>
  </head>
  <body>
    <form action="./4_1_5.php" method="post">
      <p>Select product we just sold</p>
      Hammer<input type="radio" name="product" value="Hammer"/>
      Screwdriver<input type="radio" name="product" value="Screwdriver"/>
      Wrench<input type="radio" name="product" value="Wrench"/>
      <button type="submit">Click to submit</button>
      <button onclick="handleClick();">Reset</button>
    </form>
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
        if (isset($_REQUEST['product'])) {
          $sql = "UPDATE $table_name SET Numb=Numb-1 WHERE 'Product_desc=$_REQUEST[product]'";
          $sql2 = "SELECT * FROM $table_name WHERE Product_desc='$_REQUEST[product]'";
          mysqli_select_db($connect, $my_db);
          mysqli_query($connect, $sql);
          $result = mysqli_query($connect, $sql2);
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
        }
        mysqli_close($connect);
      }
    ?>

    <script>
      const handleClick = () => {
        const inputs = document.getElementsByTagName('input');
        const len = inputs.length;
        for (let i = 0; i < len; i++) {
          inputs[i].checked = none;
        }
      }
    </script>
  </body>
</html>