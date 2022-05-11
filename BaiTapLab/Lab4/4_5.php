<html>
  <head>
    <title>Business Listings</title>
    <style>
      .wrap {
        display: flex;
      }
      .box-option {
        width: 35%;
      }
      button {
        display: block;
        width: 200px;
      }
      .result {
        width: 45%;
      }
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="box-option">
        <?php
          $server = 'localhost';
          $user = 'root';
          $password = '';
          $my_db = 'business_service';
          $table_name = 'categories';
          $connect = mysqli_connect($server, $user, $password);
          $sql = "SELECT * FROM $table_name";
          mysqli_select_db($connect, $my_db);
          $result = mysqli_query($connect, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            echo "<h4>Click on a category to find business listing:</h4>";
            echo "<form method='post' action='./4_5.php'>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<button type='submit' name='".$row['CategoryID']."' value='".$row['CategoryID']."'>".$row['Title']."</button>";
            }
          } else {
            echo "0 results";
          }
          echo "</form>";
          mysqli_close($connect);
        ?>
      </div>

      <div class="result">
        <?php
          if (count($_REQUEST) > 0) {
            foreach ($_REQUEST as $CatID) {
              getResult($CatID);
            }
          }

          function getResult($CatID) {
            $server = 'localhost';
            $user = 'root';
            $password = '';
            $my_db = 'business_service';
            $table_name1 = 'businesses';
            $table_name2 = 'biz_categories';
            $connect = mysqli_connect($server, $user, $password);
            $sql = "SELECT * FROM $table_name1
                    WHERE BusinessID IN (SELECT BusinessID FROM $table_name2
                                         WHERE CategoryID='$CatID')";
            mysqli_select_db($connect, $my_db);
            $result = mysqli_query($connect, $sql);
            echo "<table>";
            if (mysqli_num_rows($result) > 0) {
              // output data of each row         
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td width='100px'>".$row['Name']."</td>";
                echo "<td width='250px'>".$row['Address']."</td>";
                echo "<td width='250px'>".$row['City']."</td>";
                echo "<td width='250px'>".$row['Telephone']."</td>";
                echo "<td width='250px'>".$row['URL']."</td>";
                echo "</tr>";
              }
            } else {
              echo "0 results <br/>";
            }    
            echo "</table>";    
            mysqli_close($connect);
          }
        ?>
      </div>
    </div>
  </body>
</html>