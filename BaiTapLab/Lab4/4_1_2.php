<html>
  <head>
    <title>Insert data</title>
    <style>
      p {
        position: relative;
      }
      input {
        position: absolute;
        top: 0;
        left: 150px;
      }
    </style>
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
        die('Could not connect to database');
      } else {
        if (isset($_REQUEST['description'])) {
          $description = $_REQUEST['description'];
          $weight = $_REQUEST['weight'];
          $cost = $_REQUEST['cost'];
          $number = $_REQUEST['number'];

          $sql = "INSERT INTO $table_name VALUES ('0', '$description', '$cost', '$weight', '$number')";
          mysqli_select_db($connect, $my_db);
          if(mysqli_query($connect, $sql)){
              echo "Insert successfully.";
          } else{
              echo "ERROR: Could not able to execute $sql. ".mysqli_error($connect);
          }
        }
        mysqli_close($connect);
      }
    ?>

    <form action="./4_1_2.php" method="post">
      <p>Item Description: <input type='text' name='description'/></p>
      <p>Weight: <input type='text' name='weight'/></p>
      <p>Cost: <input type='text' name='cost'/></p>
      <p>Number Available: <input type='text' name='number'/></p>
      <button type="submit">Click to submit</button>
      <button onclick="handleClick();">Reset</button>
    </form>
    
    <script type="text/javascript">
      const handleClick = () => {
        const inputs = document.getElementsByTagName('input');
        const len = inputs.length;
        for (let i = 0; i < len; i++) {
          inputs[i].value = '';
        }
      }
    </script>
  </body>
</html>