<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Day 3 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }
        table{
            background-color: skyblue;
            border-color: white;
        }
    </style>
</head>

<body>
<center>
            <p></p>
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $age = $_POST['age'];
            $occ = $_POST['occ'];
            $num = $_POST['num'];
            ?>

            <table border="3px" id="output" align="center" style="width: 100%;">
                <tr>
                    <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;width: fit-content;">Full
                        Name</td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $name; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">E-mail
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $email; ?>
                    </td>
                </tr>
                <tr>
                <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">address
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $address; ?>
                    </td>
                </tr>
                <tr>
                <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">Telephone Number
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $tel; ?>
                    </td>
                </tr>
                <tr>
                <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">Age
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $age; ?>
                    </td>
                </tr>
                <tr>
                <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">Occupation
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $occ; ?>
                    </td>
                </tr>
                <tr>
                <td align="center" style="border: 2;border-color:aliceblue; color: white;padding: 10pt;">BAnk Account Number
                    </td>
                    <td align="center" style="border: 2;border-color:aliceblue;color:white">
                        <?php echo $num?>
                    </td>
                </tr>

            </table>
        </div>
    </center>
</body>
</html>