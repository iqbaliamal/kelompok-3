<?php

include "database.php";
$query = $koneksi->prepare("SELECT * FROM user WHERE id='$_GET[id]'");
$query->execute();

$data = $query->fetch(PDO::FETCH_LAZY);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>

  <form action="fungsi.php" method="POST">

    <input type="text" name="id" id="id" value="<?= $data->id; ?>" hidden>
    <div>
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" value="<?= $data->nama; ?>">
    </div>

    <div>
      <label for="email">email</label>
      <input type="email" name="email" id="email" value=" <?= $data->email; ?>">
    </div>

    <div>
      <label for="nomor_hp">nomor_hp</label>
      <input type="text" name="nomor_hp" id="nomor_hp" value=" <?= $data->no_hp; ?>">
    </div>

    <input type="submit" name="update_data">

  </form>

</body>

</html>