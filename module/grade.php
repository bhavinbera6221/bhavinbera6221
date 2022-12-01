<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <form method="post">

        <center>
            <table border=0>
                <tr>
                    <td>
                        Student Name
                    </td>
                    <td>
                        <input type=text name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Physics
                    </td>
                    <td>
                        <input type=text name="ph">
                    </td>
                </tr>
                <tr>
                    <td>
                        Chemistry
                    </td>
                    <td>
                        <input type=text name="ch">
                    </td>
                </tr>
                <tr>
                    <td>
                        Biology
                    </td>
                    <td>
                        <input type=text name="bi">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mathematics
                    </td>
                    <td>
                        <input type=text name="ma">
                    </td>
                </tr>
                <tr>
                    <td>
                        Computer
                    </td>
                    <td>
                        <input type=text name="co">
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <input type=submit name="result" value="Result">
        </center>

        <?php
        if (isset($_POST['result'])) {
            // accessing value from text field
            $name = $_POST['name'];
            $physics = $_POST['ph'];
            $Chemistry = $_POST['ch'];
            $Biology = $_POST['bi'];
            $Mathematics = $_POST['ma'];
            $Computer = $_POST['co'];

            // total marks
            $sum = $physics + $Chemistry + $Biology + $Mathematics + $Computer;
            $avg = $sum / 5;
            // echo $avg;
            if ($avg >= 0 && $avg <= 33) {
                $grade = "Fail";
            }
            if ($avg >= 33 && $avg <= 50) {
                $grade = "D";
            }
            if ($avg >= 50 && $avg <= 70) {
                $grade = "C";
            }
            if ($avg >= 70 && $avg <= 90) {
                $grade = "B";
            }
            if ($avg >= 90 && $avg <= 99) {
                $grade = "A";
            }
            echo "<br>";
            echo "Student is :".$name."<br>";
            echo "Total Marks :".$sum."<br>";
            echo "Grade is :".$grade."<br>";
        }

        ?>
    </form>

</body>

</html>