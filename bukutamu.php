<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Buku Tamu</title>
  </head>
  <body>
    <?php
    include("navbar4.php");
    ?>
    <div class = "container">
    <b><h1></h1></b>
    <h6></h6>
    <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="no">No</label>
        <input type="text" class="form-control" min="1" id="no" name="no" placeholder="">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
    </div>
    <div class="form-group">
        <label for="sekolah">Sekolah</label>
        <input type="text" class="form-control" min="1" id="sekolah" name="sekolah" placeholder="">
    </div>
    <div class="form-group">
        <label for="domisil">Domisil</label>
        <input type="text" class="form-control" min="1" id="domisil" name="domisil" placeholder="">
    </div>
    <div class="form-group">
        <label for="nomor">Nomor HP</label>
        <input type="text" class="form-control" min="1" id="nomor" name="nomor" placeholder="">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" min="1" id="email" name="email" placeholder="">
    </div>

    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <h1><hr></h1>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['submit'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $domisil = $_POST['domisil'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
   
   


   
}



    
    
    
    echo "<div class = 'container'>";
    echo "<table class='table table-bordere'>";
  echo "<thead>
    <tr>
      <th scope='col'>NO</th>
      <th scope='col'>Nama</th>
      <th scope='col'>Sekolah</th>
      <th scope='col'>Domisil</th>
      <th scope='col'>Nomor HP</th>
      <th scope='col'>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>$no</th>
      <td>$nama</td>
      <td>$sekolah</td>
      <td>$domisil</td>
      <td>$nomor</td>
      <td>$email</td>
    </tr>
  </tbody>
</table>";
?>