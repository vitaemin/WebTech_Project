<html>
  <head>
    <title>Add Business</title>
    <style>
      .wrap {
        display: flex;
      }
      .category {
        width: 35%;
      }
     .other-attribute {
        width: 50%;
      }
      p {
        position: relative;
      }
      input {
        position: absolute;
        top: 0;
        left: 110px;
      }
    </style>
  </head>
  <body>
    <h1>Business Registration</h1>
    <form action="./4_4.php" method="post">
      <div class="wrap">
        <div class="category">
          <p>click on one or control-click on multiple categories</p>
          <select name="categories[]" id="categories" multiple>
            <option value="AUTO">Automotive Parts and Supplies</option>
            <option value="FISH">Seafood Stores and Restaurants</option>
            <option value="HEALTH">Health And Beauty</option>
            <option value="SCHOOL">Schools And Colleges</option>
            <option value="SPORT">Community Sports And Recreation</option>
          </select>
        </div>
        <div class="other-attribute">
          <p>Business Name <input type="text" name="name"/></p>
          <p>Address <input type="text" name="address"/></p>
          <p>City <input type="text" name="city"/></p>
          <p>Telephone <input type="text" name="telephone"/></p>
          <p>URL <input type="text" name="url"/></p>
        </div>
      </div>
      <button type="submit" onclick="handleClick();">Add Business</button>
    </form>

    <?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $my_db = 'business_service';
    $table_name1 = 'businesses';
    $table_name2 = 'biz_categories';
    $connect = mysqli_connect($server, $user, $password);

    if (isset($_REQUEST['name'])) {
      $name = $_REQUEST['name'];
      $address = $_REQUEST['address'];
      $city = $_REQUEST['city'];
      $telephone = $_REQUEST['telephone'];
      $url = $_REQUEST['url'];

      mysqli_select_db($connect, $my_db);
      $sql1 = "INSERT INTO $table_name1 VALUES('$name', '$name', '$address', '$city', '$telephone', '$url')";
      mysqli_query($connect, $sql1);

      foreach ($_REQUEST['categories'] as $selectedOption) {
        $sql2 = "INSERT INTO $table_name2 VALUES('$name', '$selectedOption')";
        mysqli_query($connect, $sql2);
      }

      mysqli_close($connect);
    }
    ?>

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