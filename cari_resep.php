<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>NomNom</title>
    <style>
        .search-container input[type="text"] {
            padding-left: 30px; 
            background-image: url('assets/search.svg'); 
            background-repeat: no-repeat;
            background-position: 16px center; 
            background-size: 20px 20px; 
            border: 1px solid #ccc; 
            border-radius: 32px; 
            height: 30px; 
            padding: 20px 56px;
            width: 640px;
        }
    </style>
</head>
<body>
    <div id="navigation" style="margin-top: 48px; display: flex; justify-content: space-between; margin-left: 2rem; margin-right: 2rem; align-items: center;">
        <h3><a href="index.php">NomNom</a></h3>
        
        <div style="display: flex; gap: 24px; align-items: center;">
            <p><a href="index.php">Beranda</a></p>
            <p><a href="cari_resep.php">Pencarian</a></p>
            <p><a href="profile.php">Profile</a></p>
            
            <!-- fitur login, ganti log in ke log out dan vice versa -->
            <?php 
                session_start();

                if (!isset($_SESSION['username'])) {
                  echo '<p style="background-color: black; color: white; padding: 14px 24px; border-radius: 8px;"><a href="login.php">Log In</a></p> <!-- login.php  -->';
                
                }
                else {
                    echo '<p style="background-color: black; color: white; padding: 14px 24px; border-radius: 8px;"><a href="logout.php">Log Out</a></p> <!-- logout.php  -->';
                }

            ?>
            
        </div>
    </div>

    <div id="outer-container">
        <div id="inner-container">
            
            <div class="search-container" style="display: flex; justify-content: center;">
                <form method="get" action="cari_resep_hasil.php"><!-- ganti file php yang sesuai  -->
                    <input type="text" name="query" placeholder="Enter your search query"> 
                </form>
            </div>

            <div style="margin-top: 96px; margin-bottom: 56px;">
                <h1>Kategori</h1>
                <p class="grey" style="margin-top: 8px;">Resep-resep berdasarkan kategori paling populer</p>
            
                <div style="margin-top: 16px; display: flex; flex-wrap: wrap; gap: 16px;">
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/Roti.png')">
                        <h3 class="nama-kategori">Roti</h3>
                    </div>
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/telur.png')">
                        <h3 class="nama-kategori">Telur</h3>
                    </div>
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/ayam.png')">
                        <h3 class="nama-kategori">Ayam</h3>
                    </div>
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/cumi.png')">
                        <h3 class="nama-kategori">Cumi</h3>
                    </div>
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/mie.png')">
                        <h3 class="nama-kategori">Mie</h3>
                    </div>
                    <div style="flex: 1 calc(33.33% - 16px); display: flex; flex-direction: column; justify-content: end; border-radius: 16px; height: 240px; background-size: cover; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/sayur.png')">
                        <h3 class="nama-kategori">Sayur</h3>
                    </div>
                    <!-- make it so when you click the image, it search with the keyword -->
                    
                    
                    
                    
                </div>
            </div>
        
        </div>
    </div>
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>
</body>
</html>