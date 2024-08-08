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

        .left-card {
            display: flex;
            flex-direction: column;
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
            
            <div class="search-container" style="display: flex; justify-content: center;">
                <form method="get" action="search.php"><!-- ganti file php yang sesuai  -->
                    <input type="text" name="query" placeholder="Enter your search query"> 
                </form>
            </div>

            <div style="margin-top: 96px; margin-bottom: 56px;">
                <h1 class="nama-resep">Resep Ayam</h1>
            
                <div style="margin-top: 28px; display: flex; flex-direction: column; flex-wrap: wrap; gap: 16px;">
                    <div class="card" style="border-radius: 12px; display: flex; justify-content: space-between;">
                        <div class="left-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 class="nama-resep">Nama Resep</h4>
                            <p class="bahan-bahan">bahan 1 * bahan 2 * bahan 3</p>
                            <div style="display: flex; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/clock.svg" alt="clock icon" width="16px"
                                     height="16px">
                                    <p style="color: #5a5a5a;">2 jam</p>
                                </div>
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/portion.svg" alt="people icon" width="16px"
                                    height="16px">
                                    <p style="color: #5a5a5a;">15 porsi</p>
                                </div>
                            </div>
                            <div class="info-seseorang" style="display: flex; gap: 8px;">
                                <img width="40px" height="40px" src="assets/Sarah.png" alt="" style="border-radius: 50px;">
                                <div style="display: flex; flex-direction: column;">
                                    <p class="nama">Sarah</p>
                                    <p class="grey">Home Chef Extraordinaire</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="right-card" style="display: flex; align-items: start; gap: 20px;">
                            <img class="bookmark-img" src="assets/bookmarked.svg" alt="bookmarked icon">

                            <img src="assets/ayam bakar.png" alt="gambar ayam" width="194px" height="194px" style="object-fit: cover;">
                        </div>
                    </div> <!--  end of a single card  -->
                    <div class="card" style="border-radius: 12px; display: flex; justify-content: space-between;">
                        <div class="left-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 class="nama-resep">Nama Resep</h4>
                            <p class="bahan-bahan">bahan 1 * bahan 2 * bahan 3</p>
                            <div style="display: flex; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/clock.svg" alt="clock icon" width="16px"
                                     height="16px">
                                    <p style="color: #5a5a5a;">2 jam</p>
                                </div>
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/portion.svg" alt="people icon" width="16px"
                                    height="16px">
                                    <p style="color: #5a5a5a;">15 porsi</p>
                                </div>
                            </div>
                            <div class="info-seseorang" style="display: flex; gap: 8px;">
                                <img width="40px" height="40px" src="assets/Sarah.png" alt="" style="border-radius: 50px;">
                                <div style="display: flex; flex-direction: column;">
                                    <p class="nama">Sarah</p>
                                    <p class="grey">Home Chef Extraordinaire</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="right-card" style="display: flex; align-items: start; gap: 20px;">
                            <img class="bookmark-img" src="assets/bookmark.svg" alt="bookmarked icon">

                            <img src="assets/ayam bakar.png" alt="gambar ayam" width="194px" height="194px" style="object-fit: cover;">
                        </div>
                    </div> <!--  end of a single card  -->
                    <div class="card" style="border-radius: 12px; display: flex; justify-content: space-between;">
                        <div class="left-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                            <h4 class="nama-resep">Nama Resep</h4>
                            <p class="bahan-bahan">bahan 1 * bahan 2 * bahan 3</p>
                            <div style="display: flex; gap: 8px;">
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/clock.svg" alt="clock icon" width="16px"
                                     height="16px">
                                    <p style="color: #5a5a5a;">2 jam</p>
                                </div>
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    <img src="assets/portion.svg" alt="people icon" width="16px"
                                    height="16px">
                                    <p style="color: #5a5a5a;">15 porsi</p>
                                </div>
                            </div>
                            <div class="info-seseorang" style="display: flex; gap: 8px;">
                                <img width="40px" height="40px" src="assets/Sarah.png" alt="" style="border-radius: 50px;">
                                <div style="display: flex; flex-direction: column;">
                                    <p class="nama">Sarah</p>
                                    <p class="grey">Home Chef Extraordinaire</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="right-card" style="display: flex; align-items: start; gap: 20px;">
                            <img class="bookmark-img" src="assets/bookmark.svg" alt="bookmarked icon">

                            <img src="assets/ayam bakar.png" alt="gambar ayam" width="194px" height="194px" style="object-fit: cover;">
                        </div>
                    </div> <!--  end of a single card  -->

                    
                    

                </div>
            </div>
        
        </div>
    </div>
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>

    <script src="assets/bookmark.js"></script>
</body>
</html>