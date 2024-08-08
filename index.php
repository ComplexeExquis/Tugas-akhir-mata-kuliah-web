<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>NomNom</title>
</head>
<body>
    <div id="navigation" style="margin-top: 48px; display: flex; justify-content: space-between; margin-left: 2rem; margin-right: 2rem; align-items: center;">
        <h3><a href="index.php">NomNom</a></h3>
        
        <div style="display: flex; gap: 24px; align-items: center;">
            <p><a href="">Beranda</a></p>
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
         <header style="margin-top: 96px; display: flex; flex-direction: column; align-items: center; gap: 24px;">
            <h1 style="font-size: 56px;">Selamat Datang di NomNom</h1>
            <p style="font-size: 24px; color: #828282;">Temukan dan Bagikan Resep Lezat Setiap Hari</p>
            <p style="background-color: black; color: white; padding: 14px 24px; border-radius: 8px;"><a href="cari_resep.php">Cari Resep</a></p> <!-- cari resep.php  -->
         </header>

         <img src="assets/homepage-photo.png" alt="foto makanan" style="margin-top: 96px;">

         <div id="testimonial-container" style="margin-top: 96px; margin-bottom: 120px;">
            <h3 style="font-size: 40px;">Kenapa Pilih NomNom?</h3>
            <p style="margin-top: 8px; font-size: 24px; color: #828282;">Testimonial dari orang-orang</p>
            
            <div id="review-orang-container" style="margin-top: 32px; display: flex; gap: 12px;">
                <div class="card" style="max-width: 32%; flex: 1; display: flex; flex-direction: column; justify-content: space-between; min-height: 240px;">
                    <p class="review">
                        “Sebagai seseorang yang baru mulai bereksperimen di dapur, NomNom telah menjadi penyelamat! Platform ini intuitif, ramah pengguna, dan penuh dengan resep-resep yang menggugah selera, bahkan pemula seperti saya pun bisa menguasainya.”
                    </p>
                    <div class="info-seseorang" style="display: flex; gap: 8px;">
                        <img width="40px" height="40px" src="assets/david.png" alt="" style="border-radius: 50px;">
                        <div style="display: flex; flex-direction: column;">
                            <p class="nama">David</p>
                            <p class="grey">Amateur Foodie Enthusiast</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="max-width: 32%; flex: 1; display: flex; flex-direction: column; justify-content: space-between; min-height: 240px;">
                    <p class="review">
                        “NomNom telah merevolusi cara saya menjelajahi resep! Website ini adalah sumber utama saya untuk inspirasi kuliner, dengan berbagai hidangan lezat yang tak ada habisnya untuk dicoba.”
                    </p>
                    <div class="info-seseorang" style="display: flex; gap: 8px;">
                        <img width="40px" height="40px" src="assets/Sarah.png" alt="" style="border-radius: 50px;">
                        <div style="display: flex; flex-direction: column;">
                            <p class="nama">Sarah</p>
                            <p class="grey">Home Chef Extraordinaire</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="max-width: 32%; flex: 1; display: flex; flex-direction: column; justify-content: space-between; min-height: 240px;">
                    <p class="review">
                        “NomNom telah menyederhanakan perencanaan makanan bagi keluarga sibuk kami! Dengan koleksi resep cepat dan mudah yang luas, saya bisa membuat hidangan lezat dalam waktu singkat, menjaga semua orang tetap bahagia dan puas.”
                    </p>
                    <div class="info-seseorang" style="display: flex; gap: 8px;">
                        <img width="40px" height="40px" src="assets/Emily.png" alt="" style="border-radius: 50px;">
                        <div style="display: flex; flex-direction: column;">
                            <p class="nama">Emily</p>
                            <p class="grey">Busy Working Mom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>
</body>
</html>