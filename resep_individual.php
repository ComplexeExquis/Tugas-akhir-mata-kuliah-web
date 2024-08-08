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
        #inner-container {
            margin-bottom: 56px; 
            width: 840px;
            gap: 20px;
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
            
            <div class="card card-border" style="padding: 0;">
                <img src="assets/ayam bakar.png" alt="ayam bakar" style="width: 100%; border-radius: 12px;">
            </div>
            <div class="card card-border">
                <h1>Ayam Goreng</h1>
            </div>
            <div class="card card-border" style="display: flex; flex-direction: column; gap: 16px;">
                <div class="info-seseorang" style="display: flex; gap: 8px;">
                    <img width="40px" height="40px" src="assets/Sarah.png" alt="" style="border-radius: 50px;">
                    <div style="display: flex; flex-direction: column;">
                        <p class="nama">Sarah</p>
                        <p class="grey">Home Chef Extraordinaire</p>
                    </div>
                </div>
                <p style="color: #5a5a5a;">
                    "Dalam resep ayam bakar ini, saya kombinasikan rempah-rempah khas Nusantara dengan sentuhan modern untuk menciptakan cita rasa yang memikat. Potongan ayam yang empuk dan beraroma wangi dipadu dengan bumbu marinate yang meresap sempurna, menjadikan hidangan ini sempurna untuk dinikmati bersama keluarga di setiap kesempatan. Disajikan dengan taburan bawang goreng dan potongan daun seledri, ayam bakar ini menggugah selera dan membuat setiap suapan menjadi sebuah petualangan rasa yang tak terlupakan. Selamat menikmati!
                </p>
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <h3>Bahan-bahan</h3>
                <p style="color: #5a5a5a;">
                    1. ayam <br>
                    2. oven (untuk bakar) <br>
                    3. bumbu bumbu (cari tau sendiri) <br>
                    4. margarin kalo ga salah <br>
                    5. keju (yang banyak biar enak) <br>
                    6. piring buat naro ayamnya <br>
                    7. sendok buat makan <br>
                </p>
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <h3>Langkah-langkah</h3>
                <p style="color: #5a5a5a;">
                    1. siapkan ayam <br>
                    2. Bumbui ayam <br>
                    3. siapkan oven <br>
                    4. margarin ke ayamnya <br>
                    5. tambahin keju biar enak <br>
                    6. masukin oven <br>
                    7. masak ampe mateng <br>
                </p>
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: flex; gap: 12px;">
                    <img src="assets/Favorit.svg" alt="icon favorit" width="22px">
                    <h4>Favorit</h4>
                </div>
                
                <p style="color: #5a5a5a;">Favoritkan resep ini agar bisa tersimpan dalam profil pribadi.</p>
            </div>

        </div> <!-- inner container -->
    </div> <!-- outer container -->
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>
</body>
</html>