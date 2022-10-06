<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Individu 2</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div class="container">
    <h1 class="title">Hasil Review Skincare</h1>
    <form action="details.php" method="get">
      <table>
        <tr>
          <th>Nama Skincare</th>
          <th>Merk Skincare</th>
          <th>Deskripsi Skincare</th>
        </tr>
        <tr>
          <td><?php echo $_GET["name"]; ?></td>
          <td><?php echo $_GET["merk"]; ?></td>
          <td><?php echo $_GET["desc"]; ?></td>
        </tr>
      </table>
    </form>
  </div>

</body>

</html>