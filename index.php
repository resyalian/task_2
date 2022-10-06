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
    <h1 class="title">Review Produk Skincare</h1>
    <form action="details.php" method="get">
      <table>
        <tr>
          <td>
            Nama Skincare
          </td>
          <td>
            : <input class="input" type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            Merk Skincare
          </td>
          <td>
            : <input class="input" type="text" name="merk">
          </td>
        </tr>
        <tr>
          <td>
            Deskripsi Skincare
          </td>
          <td>
            : <input class="input" type="text" name="desc">
          </td>
        </tr>
      </table>
      <input class="submit" type="submit">
    </form>
  </div>

</body>

</html>