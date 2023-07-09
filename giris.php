<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: var(--bg-color);
}
* {box-sizing: border-box;}

:root {
    --bg-color: #1f242d;
    --second-bg-color: #323946;
    --text-color: #E7DECC;
    --main-color: #8f00ff;
}

h2{
    color: var(--text-color);
    text-align: center;
}

.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  background-color: var(--second-bg-color);
}

.icon {
  padding: 10px;
  background: var(--main-color);
  color: var(--text-color);
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  background-color: var(--second-bg-color);
}

.input-field:focus {
  border: 2px solid var(--main-color);
}

.btn {
  background-color: var(--main-color);
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="giris.php" method="post" style="max-width:500px;margin:auto">
  <h2>Panel Giriş</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifre" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>

<?php

  session_start();

  if(isset($_POST["usrnm"], $_POST["psw"]))
  {
    if($_POST["usrnm"]=="" && $_POST["psw"]=="")  /* Panel için giriş bilgileri */
    {
      $_SESSION[""]=$_POST["usrnm"];   /* Panel PHP 76.satır */
      header("location:panel.php");
    }

    else
      echo "<script>alert('Giriş bilgileri hatalı')</script>";
  }

?>