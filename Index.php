<?php
include 'configure.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=2"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Simple CV</title>
</head>

<body class="p-3">
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"></a>
        <a class="navbar-brand" href="admin.php">EDIT DATA</a>
        <a class="nav-link disabled" aria-disabled="true"></a>
      </div>
    </div>
  </div>
</nav> -->
<!-- navbar start -->
<nav class="navbar">
      <a href="#" class="navbar-logo">nur <span>rohmah</span>.</a>

      <div class="navbar-nav">
        <a href="admin.php">EDIT DATA</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->
<br> <br> <br>
    <section class="hero" id="home">
      <main class="content">
      <div class="container-fluid bg-body tertiary">
      <h1>Hello! Welcome To My Curriculum Vitae</h1>
    </div>
  <div class="card">
    <div class="p-3">
    <img src="img/pas foto.jpeg ?php echo $data['foto_path']; ?>">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <p class="card-text"><?php echo $data['pendidikan_sma']; ?></p>
        <h2>Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h2>Prestasi</h2>
        <p class="card-text"><?php echo $data['prestasi']; ?></p>
        <p class="card-text"><?php echo $data['prestasi_lagi']; ?></p>

      </div>
    </div>
    </div>
      </main>
    </section>

<!-- Tampilkan komentar -->
 <!-- Tampilkan komentar -->
 <!-- <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Komentar</h1>
    </div>
  </nav> -->
  <section class="komen" id="komen">
  <div class="card">
    <div class="p-3">
      <div id="comments">
        <?php
        include 'configure.php';

        $cvId = 1; 
        $query = "SELECT * FROM comments WHERE cv_id = $cvId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($comment = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">' . $comment['comment_text'] . '</div>';
          }
        } else {
          echo 'Belum ada komentar.';
        }

        mysqli_close($conn);
        ?>
      </div>
      <label for="commentInput" class="form-label">Tambahkan Komentar</label>
      <textarea class="form-control" id="commentInput" name="comment" rows="3" placeholder="Tambahkan komentar..."></textarea>
      <button class="btn btn-primary" onclick="addComment()">Tambah Komentar</button>
    </div>
  </div>
  </section>
  </table>
</body>

</html>
