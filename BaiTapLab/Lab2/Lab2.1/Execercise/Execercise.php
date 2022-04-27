<!DOCTYPE html>
<html>
    <head>
        <title>Received Form</title>
    </head>
    <body>
          <?php
              $name = $_POST['name'];
              $university = $_POST['university'];
              $class = $_POST['class'];

              $hobbies = array();
              
              if (isset($_POST['game'])) {
                $game = $_POST['game'];
                array_push($hobbies, $game);
                // echo $game;
              }

              
              if (isset($_POST['language'])) {
                $language = $_POST['language'];
                array_push($hobbies, $language);
                // echo $language;
              }

              if (isset($_POST['math'])) {
                $math = $_POST['math'];
                array_push($hobbies, $math);
                // echo $math;
              }
              
              if (isset($_POST['other'])) {
                $other_hobby = $_POST['other_hobby'];
                array_push($hobbies, $other_hobby);
                // echo $other_hobby;
              }

              //Print
              print "Hello, <b>$name</b> <br />";
              print "You are studing at $class, $university <br />";
              print "Your hobby is :  <br />";
              for ($i = 0; $i < count($hobbies); $i++) {
                print ($i + 1) . ". " . $hobbies[$i] . "<br>";
              }
          ?>


    </body>
</html>