<!DOCTYPE html>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/daftar.css">
        <style>
        Body{
            background: url(Assets/Background/Background\ Utama.jpg)repeat;
            background-size: cover;
        }
        </style>
    </head>
    <body>
        <a href="/"><img class="kembali" src="Assets/Img/Kembali.png"></img></a>
        <img class="img" src="Assets/Img/Logo Login.png" width="200px">
        <div class="form">
        <p>Daftar</p>
        <form>
            <input type="text" name="Nama Depan" placeholder="Nama Depan"></br></br>
            <input type="text" name="Nama Belakang" placeholder="Nama belakang"></br></br>
            <input type="text" name="Username" placeholder="Username"></br></br>
            <input type="password" name="Password" placeholder="Password"></br></br>
            <input type="Date" name="Tangal lahir" placeholder="DD-MM-YY"></br></br>
            <a href="/login" onclick="daftar()">Daftar</a></br>
        </form>
        </div>
        <div class="daftar">
            <p><i>Sudah Punya Akun?  </i><i><b><a href="Login.html">Login Sekarang!</a></i></b></p>
        </div>
    </body>

</html>

