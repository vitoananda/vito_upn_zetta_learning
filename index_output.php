<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Day 3 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        table{
            font-family: 'Roboto', sans-serif;
            font-size: smaller;
        }
    </style>
</head>

<body>
<center style="background-color: rgb(134, 215, 199);">
        <div class="container">
            <p>&nbsp;</p>
            <div class="row justify-content-md-center">
                <div class="col col-lg-9">
                    <div class="card h-20" style="padding: 10pt; border-radius: 20px; background-color: red;">
                        <h2 style="color: white;">BELUM SELESAI</h2>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <div class="row justify-content-md-center">
                <div class="col col-lg-9">
                    <div class="card h-20" style="padding: 10pt; border-radius: 20px;">
                        <h2>Multimedia</h2>
                        <p>Music, Video & Document</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center" style="padding-top: 10px;">
                <div class="col col-lg-9">
                    <div class="card h-20" style="padding: 10pt; border-radius: 20px;">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#form">Input Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p></p>
            <div class="row justify-content-md-center" style="padding-top: 10px;">
                <div class="col col-lg-9">
                    <div class="card h-20" style="padding: 10pt; border-radius: 20px;">
                        <div class="row justify-content-md-center" style="height: max-content">
                            <form id="form" style="width: 100%; border-radius: 20px;" method="post" action="Adyatma_day5_output.php">
                                <center>
                                    <fieldset>
                                        <legend>Input Form</legend>
                                        <ol>
                                            <li>
                                                <label for="name">Full Name</label>
                                                <input id="name" name="name" type="text" placeholder="Full name" required autofocus>
                                            </li>
                                            <li>
                                                <label for="email">Email"</label>
                                                <input id="email" name="email" type="email" placeholder="example@domain.com" required>
                                            </li>
                                        </ol>


                                        <ol>
                                            <li>
                                                <label for="address">Address</label>
                                                <textarea id="address" name="address" rows="5" required></textarea>
                                            </li>
                                        </ol>

                                        <ol>
                                            <li>
                                                <label>Card Type</label>
                                                <center>
                                                <ol style="width: 20%;">
                                                    <input type="radio" name="cardtype" value="Visa">Visa

                                                </ol>
                                                <ol style="width: 20%;">
                                                    <input type="radio" name="cardtype" value="Radio 3">MasterCard
                                                </ol>
                                                </center>
                                            </li>
                                            <li>
                                                <label for="cardnumber">Card number</label>
                                                <input id="cardnumber" name="cardnumber" type="text" required>
                                            </li>
                                            <li>
                                                <label for="secure">Security code</label>
                                                <input id="secure" name="secure" type="text" required>
                                            </li>
                                            <li>
                                                <label for="namecard">Name on card</label>
                                                <input id="namecard" name="namecard" type="text" placeholder="Exact name as on the card" required>
                                            </li>
                                        </ol>
                                        <ol>
                                            <li>

                                                <label for="Image" class="form-label">Upload Image</label>
                                                <input class="form-control" type="file" id="formFile" onchange="preview()">

                                                <img id="frame" src="" class="img-fluid" />

                                                <script>
                                                    function preview() {
                                                        frame.src = URL.createObjectURL(event.target.files[0]);
                                                    }

                                                    function clearImage() {
                                                        document.getElementById('formFile').value = null;
                                                        frame.src = "";
                                                    }
                                                </script>
                                            </li>
                                        </ol>
                                        <!-- Adyatma Arkaan Pradipa -->
                                        <ol>
                                            <li>
                                                <div class="form-check">
                                                    <center style="padding-right: 25px;">
                                                        <input type="checkbox" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            I am accept the "User Agreement"
                                                        </label>
                                                    </center>
                                                </div>
                                            </li>
                                        </ol>
                                    </fieldset>
                                    <fieldset>
                                        <button type="submit">Submit</button>
                                    </fieldset>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $cardnumber = $_POST['cardnumber'];
            $cardtype = $_POST['cardtype'];
            $secure = $_POST['secure'];
            $namecard = $_POST['namecard'];
            ?>

            <table border="4px" id="output" bordercolor="green" align="center" style="width: 100%; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: smaller;">
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;width: fit-content;">Full
                        Name</td>
                    <td align="center" style="border: 0;">
                        <?php echo $name; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">E-mail
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $email; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">Address
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $address; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">Card Type
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $cardtype; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">Card
                        Number
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $cardnumber; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">Security
                        Code
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $secure; ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="border: 0; background-color: green; color: white;padding: 10pt;">Name on
                        card
                    </td>
                    <td align="center" style="border: 0;">
                        <?php echo $namecard ?>
                    </td>
                </tr>

            </table>
        </div>
    </center>
</body>
</html>