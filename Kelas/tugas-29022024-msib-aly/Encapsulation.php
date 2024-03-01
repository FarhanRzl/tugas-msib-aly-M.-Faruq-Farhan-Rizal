<?php
class User {
    // Atribut yang akan di-encapsulate
    private $username;
    private $email;

    // Konstruktor
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // Metod publik untuk mengambil nilai dari atribut private
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    // Metod publik untuk mengubah nilai dari atribut private
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

// Membuat objek dari kelas User
$user = new User("User_1", "user_1@mail.com");

// Mengakses atribut private melalui metode publik
echo "Username: " . $user->getUsername() . "<br>"; // Output: User_1
echo "Email: " . $user->getEmail() . "<br>"; // Output: user_1@mail.com

// Mengubah nilai atribut private melalui metode publik
$user->setUsername("User");
$user->setEmail("User@mail.com");

// Menampilkan kembali nilai atribut setelah diubah
echo "Username: " . $user->getUsername() . "<br>"; // Output: User
echo "Email: " . $user->getEmail(); // Output: User@mail.com
?>
