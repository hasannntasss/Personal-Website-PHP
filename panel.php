<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

:root {
    --bg-color: #1f242d;
    --second-bg-color: #323946;
    --text-color: #E7DECC;
    --main-color: #8f00ff;
}

h1{
    text-align: center;
    color: var(--text-color);
}

body{
    background-color: var(--bg-color);
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: var(--second-bg-color);
  color: var(--text-color);
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--main-color);
  color: white;
}

a{
  color: var(--text-color);
}
</style>
</head>
<body>

<h1>Admin Paneli</h1>

<table id="customers">
  <tr>
    <th>Ad-Soyad</th>
    <th>E-Mail</th>
    <th>Telefon</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>


  <?php

  session_start();

  if($_SESSION["hasantas"]=="")
  {
    echo "<script>window.location.href='cikis.php'</script>";
  }

  else
  {
    echo "Kullanıcı : ".$_SESSION['']." ";  /* Giriş PHP 95.satır */
    echo "<a href='cikis.php'>Çıkış Yap</a>";
    include("baglanti.php");

    $sec="Select * From iletisim";
    $sonuc=$baglan->query($sec);

    if($sonuc->num_rows>0)
    {
      while($cek=$sonuc->fetch_assoc())
      {
        echo "
        <tr>
          <td>".$cek['adsoyad']."</td>
          <td>".$cek['email']."</td>
          <td>".$cek['telefon']."</td>
          <td>".$cek['konu']."</td>
          <td>".$cek['mesaj']."</td>
        </tr>
        ";
      }
    }

  }

  

?>


  
</table>

</body>
</html>


