<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square and Cube</title>
</head>
<body>
    <div style="font-size: 20px; color:blue">
        Generate Square and Values
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <?php 
            if (array_key_exists("start", $_GET)) {
                $start = $_GET["start"];
                $end = $_GET["end"];
            }
            else {
                $start = 0;
                $end = 0;
            }
        ?>
        <table>
            <tr>
                <td>Select Start Number</td>
                <td>
                    <select name="start">
                        <?php
                            for ($i = 0; $i < 10; $i++) {
                                print "<option>$i</option>";
                            } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Select End Number</td>
                <td>
                    <select name="end">
                        <?php
                            for ($i = 0; $i < 20; $i++) {
                                print "<option>$i</option>";
                            } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td align="right"><input type="submit" value="Submit"></td>
                <td align="left"><input type="reset" value="Reset"></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Number</th>
                <th>Square</th>
                <th>Cube</th>
            </tr>
            <?php 
                
                $i = $start;
                while ($i <= $end) {
                    $sqr = $i * $i;
                    $cubed = $i * $i * $i;
                    print ("
                    <tr>
                        <td>$i</td>
                        <td>$sqr</td>
                        <td>$cubed</td>
                    </tr>");
                    $i++;
                }
                
            ?>
        </table>
    </form>
</body>
</html>