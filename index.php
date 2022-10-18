<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Day 3 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        img{
            align-items: center;
        }
        h2,b,table{
            font-family: 'Roboto', sans-serif;
        }

        td,tr{
            padding-right: 20px;
            padding-bottom: 3px;
        }
        .socials{
            margin-left: auto;
            margin-right: auto;
            padding-top: 10px;
            
        }
        .forms{
            background-color: skyblue;
            position: center;
            height: 500px;
            width:650px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 30px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        }
    </style>
</head>

<body>
<center>
<div class="forms">
    <table align="center">
        <form method="POST" action="index_output.php">
           <tr>
            <th colspan="2" style="padding-bottom: 10px;"><b>Fill The Form Below</b></th>
           </tr>
           <tr>
            <td>
                Full Name :
            </td>
            <td>
                <input id="name" name="name" type="text" placeholder="Full name" required autofocus>
            </td>
           </tr>
           <tr>
            <td>
                Email :
            </td>
            <td>
                <input id="email" name="email" type="email" placeholder="example@domain.com" required>
            </td>
           </tr>
           <tr>
            <tr>
                <td>
                    Address :
                </td>
                <td>
                    <textarea id="address" name="address" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Telephone :
                </td>
                <td>
                    <input id="tel" name="tel" type="tel">
                </td>
            </tr>
            <tr>
                <td>
                    Age:
                </td>
                <td>
                    <input id="age" name="age" type="number">
                </td>
            </tr>
            <tr>
                <td>
                    Gender :
                </td>
                <td>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                </td>
            </tr>
            <td>
                Occupation :
            </td>
            <td>
                <input id="occ" name="occ" type="text" required>
            </td>
           </tr>
           <tr>
            <td>
                Account Number :
            </td>
            <td>
            <input id="num" name="num" type="num" required>
            </td>
           </tr>
           <tr>
            <td>
                Upload Evidence of Transfer :
            </td>
            <td>
            <input class="form-control" type="file" id="formFile" onchange="preview()">
                <script>
                    function preview() {
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                    function clearImage() {
                        document.getElementById('formFile').value = null;
                        frame.src = "";
                    }
                </script>
            </td>
           </tr>
           <tr>
           <td>I Accept The User Agreements</td>
            <td><input type="checkbox"></td><br>
            </tr>
            <td><button type="submit">Submit</button><br></td>
            <tr>
        </form>
    </table>
    <table class="socials">
            <tr>
            
            <td><a href="https://www.instagram.com/vitoanandq/"><img src="https://cdn-icons-png.flaticon.com/512/87/87390.png" alt="ig logo"  width="20" height="20"></a></td>
            <td><a href="https://github.com/vitoananda"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="github logo"  width="20" height="20"></a></td>
           </tr>
    </table>
</div>
</center>
</body>
</html>