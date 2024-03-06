<?php
  $buah = array(
    array('id' => 1, 'nama' => 'Apel', 'warna' => 'Merah', 'stok' => 50, 'harga' => 5000, 'deskripsi' => 'Buah merupakan jenis buah-buahan, atau buah yang dihasilkan dari pohon apel. Buah apel biasanya berwarna merah kulitnya jika masak dan siap dimakan, tetapi bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek dan daging buahnya keras. Buah apel memiliki beberapa biji di dalamnya.'),
    array('id' => 2, 'nama' => 'Manggis', 'warna' => 'Ungu', 'stok' => 30, 'harga' => 7000, 'deskripsi' => 'Buah manggis berfungsi sebagai anti radang, turut mengurangi rasa sakit akibat peradangan dalam tubuh, misalnya nyeri akibat radang sendi. Selain itu, kandungan vitamin C pada buah manggis juga diyakini mendukung penyembuhan radang sendi.'),
    array('id' => 3, 'nama' => 'Pisang', 'warna' => 'Kuning', 'stok' => 40, 'harga' => 3000, 'deskripsi' => 'Buah pisang kaya akan vitamin dan serat. Jika dibanding dengan apel, pisang memiliki lebih dari dua kali lipat karbohidrat, dan lima kali lipat vitamin A. Selain itu pisang juga kaya magnesium dan kalium yang penting bagi tubuh untuk tetap bugar.'),
    array('id' => 4, 'nama' => 'Mangga', 'warna' => 'Hijau', 'stok' => 20, 'harga' => 6000, 'deskripsi' => 'Buah umumnya agak lonjong, menyerupai bentuk ginjal atau kacang. Namun, sebagian spesies juga yang berbentuk bulat. Ukurannya bervariasi, antara 5 cm sampai 25 cm dengan berat sekitar 140 gram hingga 2 kg per buahnya. Kulit buah mangga lembut, halus dan harum.'),
    array('id' => 5, 'nama' => 'Durian', 'warna' => 'Kuning', 'stok' => 34, 'harga' => 9000, 'deskripsi' => 'Buah Durian adalah nama tumbuhan tropis Asia Tenggara, sekaligus nama buahnya yang bisa dimakan. Nama ini diambil dari ciri khas kulit buahnya yang keras dan tajam sehingga menyerupai duri. Nama populernya adalah “raja buah”(King of Fruit).'),
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          // Task 2: Tampilkan data array tersebut dalam bentuk tabel
          foreach ($buah as $data) {
            echo "<tr>";
            echo "<td>{$data['id']}</td>";
            echo "<td>{$data['nama']}</td>";
            echo "<td>{$data['warna']}</td>";
            echo "<td>{$data['stok']}</td>";
            echo "<td>{$data['harga']}</td>";
            echo "<td>{$data['deskripsi']}</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
