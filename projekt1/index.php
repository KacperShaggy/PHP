<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <span class="napis">WITAJ W KSIĘGARNI INTERNETOWEJ!</span>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $haslo = mysqli_real_escape_string($con,$_POST['haslo']);

                $result = mysqli_query($con,"SELECT * FROM klienci WHERE email='$email' AND haslo='$haslo' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['imie'] = $row['imie'];
                    $_SESSION['nazwisko'] = $row['nazwisko'];
                    $_SESSION['kod_pocztowy'] = $row['kod_pocztowy'];
                    $_SESSION['pesel'] = $row['pesel'];
                    $_SESSION['telefon'] = $row['telefon'];
                    $_SESSION['haslo'] = $row['haslo'];
                    $_SESSION['adres'] = $row['adres'];
                }else{
                    echo "<div class='message'>
                      <p>Nieprawidłowy email lub hasło</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Wróć!</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{

            
            ?>
            <header>Zaloguj się, aby przejść dalej!</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Hasło</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Zaloguj sie" required>
                </div>
                <div class="links">
                    Nie masz jeszcze konta? <a href="register.php">Zarejestruj sie!</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>