<?php session_start();
if (isset($_SESSION["xusername"])) {
     header("Location: index.php");
} else {

     $host = "localhost";
     $username = "root";
     $password = "";
     $database = "pel_ujikom1";
     $message = "";
     try {
          $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
          $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          if (isset($_POST['password'])) {
               $pw = $_POST["password"];
          }
          if (isset($pw)) {
               // $pass=substr_replace( substr_replace( substr_replace( substr_replace( sha1(md5($pw)), "$", 2, 0 ), ".", -2, 0 ), "*$", -20, 0 ), "c", 10, 0 );
               $pass = $pw;
          }

          if (isset($_POST["login"])) {
               if (empty($_POST["username"]) || empty($pass)) {
                    $message = '<label>All fields are required</label>';
               } else {
                    $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
                    $statement = $connect->prepare($query);
                    $statement->execute(
                         array(
                              'username' => $_POST["username"],
                              'password' => $pass
                         )
                    );
                    $count = $statement->rowCount();
                    if ($count > 0) {
                         $_SESSION["xusername"] = $_POST["username"];
                         $username = $_SESSION["xusername"];
                         ?>
                         <meta http-equiv="refresh" content="0;url=index.php" />
                         <?php
                    } else {
                         $query = "SELECT * FROM ab_manager WHERE username = :username AND password = :password";
                         $statement = $connect->prepare($query);
                         $statement->execute(
                              array(
                                   'username' => $_POST["username"],
                                   'password' => $pass
                              )
                         );
                         $count = $statement->rowCount();
                         if ($count > 0) {
                              $_SESSION["xusername"] = $_POST["username"];
                              $username = $_SESSION["xusername"];
                              ?>
                              <meta http-equiv="refresh" content="0;url=index.php" />
                              <?php
                         } else {
                              $ps = "<font color='red'><b>User/Password yang anda mnasukan salah !</b></font>";

                         }

                    }
               }
          }
     } catch (PDOException $error) {
          $message = $error->getMessage();
     }

     ?>


     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Aplikasi penilaian siswa</title>
          <link rel="stylesheet" href="assets/css/login.css">
     </head>

     <body>
          <section>

               <div class="login-box">

                    <form action="" method="POST">
                         <h2>LOGIN</h2>
                         <?php
                         if (!empty($ps)) {
                              echo $ps;
                         }
                         ?>
                         <div class="input-box">
                              <input type="text" name="username" required>
                              <label for="email">Username</label>
                         </div>
                         <div class="input-box">
                              <input type="password" name="password" required>
                              <label for="password">password</label>
                         </div>
                         <button name="login" type="submit">Login</button>

                    </form>
               </div>
          </section>
     </body>

     </html>

<?php } ?>