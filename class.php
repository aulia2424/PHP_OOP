 <!-- Apa Itu OOP Pada PHP ?. OOP (Object Oriented Programming) atau yang dalam bahasa Indonesia berarti Pemrograman Berbasis Objek (PBO) adalah konsep dimana Property / Variable dan juga Method / Fungsi di bungkus dalam sebuah Class, yang kemudian akan di terapkan pada Objek – objek yang di deklarasikan.

 Object Oriented Programming
 - Menyusun semua kode program dan struktur data sebagai Object
 - Objek adalah unit dasar dari program
 - objek menyimpan data dan perilaku
 - Objek bisa saling berinteraksi
 - Java, Ruby, Python, C++, Js, PHP5.

 Kelebihan OOP
 - lebih mudah saat merepresentasikan di dunia nyata
 - Enkapsulasi (memungkinkan data yang kita buat aman ) & Abstraksi Data (mudah untuk menyembunyikan kerumitan data)
 - Reusability (untuk digunakan ulang)
 - Skalabilitas & Eksensibilitas(memudahkan programmer ketika programnya lebih besar)
 - kemudahan pengelolaan 
 - Kolaborasi (misal ngerjainnya per tim)
 - Digunakan oleh framework

 Konsep OOP Pada PHP
 1. Basic
    - class & object
    - property & method
    - constructor
    - object type
    - inheritance (pewarisan)
    - visibility / Access Modifier
    - Setter & Getter
    - Static Method
 2. Advanced
    - Abstract & interface
    - interceptor
    - object cloning (menduplikasi object sehingga memiliki perilaku yg berbeda)
    - callbacks & closures
    - Namespaces & Autoloading
    - ...

 Class
 Class adalah template yang mewakili entitas dunia nyata, dan mendefinisikan properti dan method entitas.
 - class mendefinisikan object
 - menyimpan data dan perilaku yang di sebut dengan property dan method. 

 Membuat Class
 1. Diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {} untuk menyimpan property dan method.
 2. Aturan penamaan class sama seperti variable.
-->

<?php 
class Coba {
    public $a; // property

    //method
    public function b(){

    }
}

/* Object
 - instace yang di definidikan oleh class
 - banyak object dapat dibuat menggunakan satu class
 - object dibuat dengan menggunakan keyword new.
*/ 
echo "-Object-";
echo "<br>";
class Nyoba {

}
// membuat object instance dari class
$a = new Nyoba();
$b = new Nyoba();
var_dump($a);
echo "<br>";
var_dump($b);

echo "<br>";
echo "<br>";


/* Property
 - sesuatu yang merepresentasikan data / keadaan dari sebuah object.
 - variable yang ada di dalam object (member variable).
 - sama seperti variable di dalam php, ditambah dengan visibility di depannya.

 Method
 - method adalah function yang ada di dalam object.
 - merepresentasikan periaku dari sebuah object.
 - sama seperti function di dalam php, ditambah dengan visibility di depannya.
*/
echo "-Property & Method-";
echo "<br>";

// class mobil
class Mobil {
    public $nama,
           $merk,
           $warna,
           $kecepatanMaksimal,
           $jumlahPenumpang;

    public function tambahKecepatan(){
        
    }
    public function kurangiKecepatan(){
        
    }
    public function gantiTransmisi(){
        
    }

}

// Jualan Produk
//  Komik, Game
class Produk1 {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
}
$produk1 = new Produk1();
// -> (itu fungsinya untuk mengganti nama property)
$produk1->judul = "Naruto";
var_dump(($produk1));

echo "<br>";

// misal kita bikin lagi variable produk 2 kemudian kita ingin memunculkan judul nah outputnya bukan naruto tetapi tetap seperti class.
$produk2 = new Produk1();
$produk2->judul = "Uncharted";
var_dump(($produk2->judul));
echo "<br>";
echo "<br>";


//Menuliskan Property
echo "-Menuliskan Property-";
echo "<br>";

$produk3 = new Produk1();
$produk3->judul = "One Piece";
$produk3->penulis = "Soekarno";
$produk3->penerbit = "Paijo";
$produk3->harga = "2000";

echo "Komik : $produk3->penulis, $produk3->penerbit";

echo "<br>";
echo "<br>";

// mengembalikan nilai
echo "-Return-";
echo "<br>";

class Buku {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    public function sayHello() {
        return "Hello Aulia!"; // mengembalikan nilai, jika kita memanggil function sayHello(), maka yang akan keluar "Hello Aulia!".
    }
}
$buku1 = new Buku();
echo $buku1->sayHello();

echo "<br>";
echo "<br>";


echo "-This-";
echo "<br>";

class Bacaan {
    public $judul = "judul",
           $penulis = "Aulia Martha Briellint",
           $penerbit = "Shawn Mendes",
           $harga = 0;

    // public function getLabel(){
    //     return "$this->penulis, $this->penerbit"; //this fungsinya untuk untuk mengambil property di luar scope.
    // }
}
$bacaan1 = new Bacaan();
echo "Penulis : $bacaan1->penulis, Penerbit $bacaan1->penerbit";

echo "<br>";
echo "<br>";

echo "-Instace-";
echo "<br>";

$produk4 = new Produk1();
$produk4->judul = "Matrix";
$produk4->penulis = "Lil Pump";
$produk4->penerbit = "Lik Xan";
$produk4->harga = "$10.000";

echo "Penulis & Penerbit : " . $produk4->getLabel();