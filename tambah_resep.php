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
        input[type='submit']:hover {
            cursor: pointer;
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
            
            <div class="card card-border">
                <h2>Masukan gambar</h2>
                <input type="file" name="gambar-resep-input" id="gambar-resep-input" accept="image/*">
            </div>
            <div class="card card-border">
                <input type="text" name="nama-resep-input" id="nama-resep-input" style="width: 100%; height: 100%; border: none;" placeholder="Tulis nama resep">
            </div>
            <div class="card card-border" style="display: flex; flex-direction: column; gap: 16px;">
                <input type="text" name="lama-memasak-input" id="lama-memasak-input" style="width: 100%; height: 100%; border: none;" placeholder="lama memasak resep">
                <input type="text" name="porsi-input" id="porsi-input" style="width: 100%; height: 100%; border: none;" placeholder="porsi resep">
            
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <h3>Bahan-bahan</h3>
                <textarea id="bahan-input" name="bahan-input" rows="4" cols="50" placeholder="Tulis bahan-bahan..." style="border: none;"></textarea>
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <h3>Langkah-langkah</h3>
                <textarea id="langkah-input" name="langkah-input" rows="4" cols="50" placeholder="Tulis Langkah-langkah..." style="border: none;"></textarea>
            </div>

            <div class="card" style="display: flex; flex-direction: column; gap: 16px;">
                <input type="submit" value="submit" style="padding: 12px 32px; width: min-content; background-color: black; color: white; border-radius: 16px; border: none;">
            </div>

        </div> <!-- inner container -->
    </div> <!-- outer container -->
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>
</body>
</html>