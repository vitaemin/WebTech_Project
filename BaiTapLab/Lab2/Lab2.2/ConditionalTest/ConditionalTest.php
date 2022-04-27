<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Test</title>

</head>
<body>
    <?php 
        $first = $_GET["firstName"];
        $middle = $_GET["middleName"];
        $last = $_GET["lastName"];

        print "Hi, $last, your full name is " . $last . " " . $middle . " " . $first ."<br />";
		// if($first == $last){
		// 	print "$first and $last are equal <br />";
		// }
		// if($first < $last){
		// 	print "$first is less than $last <br />";
		// }
		// if($first > $last){
		// 	print "$first is greater than $last <br />";
		// }
        print ("<br><br>");

        $grade1 = number_format($_GET["grade1"]);
        $grade2 = number_format($_GET["grade2"]);
        $final = (2 * $grade1 + 3 * $grade2) / 5;

        $rate = "A";

		if($final > 89){
			print "Your final grade is <b>$final</b>. You got <b>A</b>. Congratulation!";
			$rate = "A";
		} elseif ($final > 79) {
			print "Your final grade is <b>$final</b>. You got <b>B</b>";
			$rate = "B";
		} elseif ($final > 69) {
			print "Your final grade is <b>$final</b>. You got <b>C</b>";
			$rate = "C";
		} elseif ($final > 59) {
			print "Your final grade is <b>$final</b>. You got <b>D</b>";
			$rate = "D";
		} elseif ($final >= 0) {
			print "Your grade final is <b>$final</b>. You got <b>F</b>";
			$rate = "F";
		} else {
			print "Iillegal grade less than 0. Final grade = <b>$final</b>";
			$rate = "Iillegal";
		}
		
		print "<br /><br />";

		switch ($rate) {
			case "A":
				print "Excellent! <br />";
				break;
			case "B":
				print "Good! <br />";
				break;
			case "C":
				print "Not bad! <br />";
				break;
			case "D":
				print "Normal! <br />";
				break;
			case "F":
				print "You have a try again! <br />";
				break;

			default:
				print "Iillegal grage! <br />";
            }
    ?>
</body>
</html>