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
       .login-input {
        background-color: white;
        border: 1px solid black;
        color: black;
        border-radius: 32px;
        padding: 16px 32px;
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
        <div id="inner-container" >
            <h1 style="text-align: center;">Log In</h1>
            <form action="login_handler.php" method="post" style="margin-top: 40px; margin-bottom: 56px; display: flex; flex-direction: column; justify-content: center; gap: 24px;">
                <input type="text" name="username-input" id="username-input" placeholder="Username" class="login-input">
                <input type="password" name="password-input" id="password-input" placeholder="Password" class="login-input">
                <input type="submit" value="Log In" style="margin-top: 16px; background-color: black; color: white; padding: 12px 12px; border-radius: 8px;">
            </form>

        </div>
    </div>
 
    <footer>
        © All right Reserved <b>NomNom</b>
    </footer>
</body>
</html>

