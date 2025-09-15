<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Laundry smkmaarif-ponjong</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- 3 baris di atas adalah cara menghubungkan file web kita dengan CSS untuk mempercantik tampilan -->
</head>
<body style="background: #f0f0f0;">
    <br/>
    <br/>
    <div class="text-center">
        <img src="logo2.png" class="img-responsive center-block" style="max-width:120px; margin-bottom: 10px;">
            <h3><strong>SISTEM INFORMASI LAUNDRY</strong></h3>
            <h4>Firsthanoventia</h4>
        </div>
    <br/>
    <br/>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger text-center'>Login gagal! username dan password salah!</div>";
                } else if($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-info text-center'>Anda telah berhasil logout</div>";
                } else if($_GET['pesan'] == "belum_login"){
                    echo "<div class='alert alert-danger text-center'>Anda harus login untuk mengakses halaman admin</div>";
                }
            }
            ?>

            <form action="login.php" method="post">
                <div class="panel ">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Log In">
                    </div>
                    <br/>
                    <div class="panel-footer text-center">
                    <small>&copy; SMK Ma'arif Ponjong</small>
                </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
