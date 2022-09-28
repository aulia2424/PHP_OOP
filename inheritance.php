<?php

/* Inheritance / Pewarisan
 - Inheritance adalah kemempuan untuk menurunkan sebuah class ke class lain.
 - Dalam artian, kita bisa membuat class Prent dan class Child.
 - Class child hanya bisa punya satu Parent, namun satu class parent bisa punya banyak class child.
 - Saat sebuah class diturunkan, maka semua propertis dan function yang ada di class Parent, secara otomatis akan dimiliki oleh class Child.
 - Untuk melakukan pewarisan,di class Child,kita harus menggunakan kata kunci extends lalu diikuti dengan nama class
*/
echo "-Inheritance-";
echo "<br>";
class Manager {
    public $name;
    function sayHello(string $name) {
        echo "Hi $name, my name is $this->name";
    }
}
class VicePresident extends Manager { // class inheritance.
}

$manager = new Manager();
$manager->name = "Aulia Martha Brielliant";
$manager->sayHello("Aulia");
$vp = new VicePresident();
$vp->name = "Shawn Mendes";
echo "<br>";
$vp->sayHello("Shawn");

echo "<br>";
echo "<br>";



/* Abstract Class
 - Saat kita memebuat class, kita bisa menjadikan sebuah class sebaga abstract class.
 - Abstract Class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung hanya bisa diturunkan.
 - Untuk membaut sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract sebelum kata kunci class.
 - Sehingga Abstract Class bisa kita gunakan sebagai kontrak chils class.
*/
// echo "-Abstract Class-";
// echo "<br>";
// abstract class Location {
//     public $name;
//     function City(string $name) {
//         echo "Depok";
//     }
// }

/* Abstract Function
 - Saat kita membuat class yang abstract kita bisa membuat abstract function juga di dalam class abstract tersebut.
 - Saat kita membaut sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut
 - Artinya, abstract function wajib di override di class chiled.
 - Abstract funcyion tidak boleh memiliki acsess modifier private.
*/



/* Static Keyword
 - Kata kunci Static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansi class terlebih dahulu.
 - Namun saat kita buat static prpertes atau function, secara otomatis hal itu tidak akan berhubunganlagi dengan class instance yang kita buat.
 - Cara mengaksesnya kita bisa menggunakan operator::
 - static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instace sedangkan static function tidak. 
*/
echo "-Static Keyword-";
echo "<br>";
class MathHelper {
    static $name = "MathHelper";
}
echo MathHelper::$name;

/* Final Function
 - Kata kuci final juga bisa digunakan di function
 - jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di override lagi di class childnya.
 - Ini sangat cocok jika ingin mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class childnya.
*/