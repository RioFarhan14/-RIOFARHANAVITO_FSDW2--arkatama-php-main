<?php

class animal
{
    public $nama,
        $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    public function getinfo()
    {
        echo "Hewan ini adalah {$this->nama} jenis {$this->jenis}";
    }
}
class cat extends animal
{
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function getinfo()
    {
        echo "Hewan ini adalah {$this->nama} jenis kucing. Kucing adalah hewan yang suka bermain dan bersih.";
    }
}
class dog extends animal
{
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function getinfo()
    {
        echo "Hewan ini adalah {$this->nama} jenis anjing. Anjing adalah hewan yang setia dan cerdas.";
    }
}

$animal = new animal("harimau", "karnivora");
echo $animal->getinfo() . "<br>";
$cat = new cat("kitty");
echo $cat->getinfo() . "<br>";
$dog = new dog("buddy");
echo $dog->getinfo() . "<br>";
