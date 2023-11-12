<?php
class DatabaseConnection{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect(){
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function disconnect(){
        $this->connection = null;
    }

    public function query($sql){
        $result = $this->connection->query($sql);
        return $result;
    }
}
?>

<?php


//Class : DatabaseConnection

//Variabel:
//$host: Ini adalah variabel yang menyimpan nama host database.
//$username: Ini adalah variabel yang menyimpan nama pengguna database.
//$password: Ini adalah variabel yang menyimpan kata sandi database.
//$database: Ini adalah variabel yang menyimpan nama database.

//Objek:
//$conn: Ini adalah objek yang dibuat dari kelas DatabaseConnection. Objek ini digunakan untuk mengelola koneksi database dan menjalankan query.

//Metode:
//connect(): Metode ini digunakan untuk membuat koneksi ke database menggunakan PDO.
//disconnect(): Metode ini digunakan untuk menutup koneksi database.
//query($sql): Metode ini digunakan untuk menjalankan query SQL pada database.

?>
