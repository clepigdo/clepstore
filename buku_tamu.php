<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Website Katalog</title>
</head>
<body>

<header>
        <div class="container-logo">
            <img src="image/logo.png" alt="">
            <h1>CLEPSTORE</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="product.html">Layanan</li>
                    <li><a href="buku_tamu.php">Book</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
    <div class="sidebar">
            <button class="toggle-btn" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="about.html"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="product.html"><i class="fas fa-cube"></i> Product</a></li>
                <li><a href="buku_tamu.php"><i class="fas fa-book"></i> Buku Tamu</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="row">
                <div class="column">
                    <h1>BUKU TAMU</h1>
            <div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Anda...">
                    <br>
                    <label>User ID</label>
                    <input type="text" name="id" placeholder="Masukkan ID Anda...">
                    <br>
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username Anda...">
                    <br>
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Masukkan Email Anda...">
                    <br>
                    <label>Pesan</label>
                    <textarea name="pesan" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <?php
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $id = $_POST['id'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pesan = $_POST['pesan'];

                
                echo "<p><b>Daftar Tamu</b></p>";
                echo "<table id='tamu'>";
                echo "<tr><th>No</th><th>Nama</th><th>User ID</th><th>Username</th><th>Email</th><th>Pesan</th></tr>";
                echo "<tr><td>1.</td><td>$nama</td><td>$id</td><td>$username</td><td>$email</td><td>$pesan</td></tr>";
                echo "</table>";
            }
            ?>
        </div>
    </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Tentang Kami</h3>
                <p>CLEPSTORE adalah toko online yang menyediakan produk berkualitas tinggi untuk kebutuhan Anda. Kami berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami.</p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="product.html">Layanan</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Hubungi Kami</h3>
                <p>Instagram : @heyy.itsmeclevv</p>
                <p>Telepon: +62-812-5675-6962</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 CLEPSTORE | Dibuat dengan ❤️ oleh CLEPSTORE
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
