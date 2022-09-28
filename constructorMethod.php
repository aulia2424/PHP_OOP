<?php

echo "-Constructor-";
echo "<br>";

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    
    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}
$produk1 = new Produk("Home Alone", "Aulia Martha Brielliant", "Shawn Mendes", 1000.000);
$produk2 = new Produk("Alice In The Wonder Land", "Aulia Martha Brielliant", "Shawn Mendes", 1000.000);

echo "Film : " . $produk1->getLabel();
echo "<br>";

echo "Film : " . $produk2->getLabel();

echo "<br>";
echo "<br>";


/* Object Type
*/
echo "-Object Type-";
echo "<br>";
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()}  ";
        return $str;
    }
}


$produk1 = new Produk("Home Alone", "Aulia Martha Brielliant", "Shawn Mendes", 1000.000);
$produk2 = new Produk("Alice In The Wonder Land", "Aulia Martha Brielliant", "Shawn Mendes", 1000.000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


echo "<br>";
echo "<br>";
echo "-Constructor-";
echo "<br>";

class Person {
    //property
    public $name;
    public $eyeColor;
    public $age;

    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor; 
        $this->age = $age;
    }
    

    //methods
    public function setName($name) {
        $this->name = $name;
    }

    public function __destruct(){
         echo "object ini telah di hancurkan";
    }
}

$person1 = new Person("Aulia", "Grey", "16"); // ini buat masukin nilai / value.
echo "Nama : " . $person1->name;
echo "<br>";

echo "Warna Mata : " . $person1->eyeColor;
echo "<br>";

echo "Umur : " . $person1->age;
echo "<br>";
echo "<br>";

echo "-Destructor-";
echo "<br>";


/*
Constructor di PHP
Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object), pada bagian constructor kita dapat melakukan apapun yang bisa dilakukan dalam method / function kecuali mengembalikan nilai / return value.

Destructor di PHP
Destructor adalah sebuah method khusus di PHP, sama seperti method constructor, tetapi method destructor ini adalah kebalikan method constructor, jika method constructor akan dijalankan saat class diinstansiasi, maka method destructor akan dijalankan saat object dihancurkan atau dihapus dari memory.

Destructor ini berbeda dengan constructor yang dapat memiliki parameter, destructor tidak dapat memiliki parameter, anda hanya dapat menuliskan logic saja dibagian destructor.

public function __destruct(), perintah itu digunakan untuk membuat method destructor, dimana dalam contoh ini method destructor akan menampilkan tulisan “Object telah dihapus dari memory”
*/