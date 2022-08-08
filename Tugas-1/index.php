<?php

class Hewan 
{
    public $jumlah_kaki, $bisa_terbang;
}

class kambing extends Hewan
{
    function bersuara()
    {
        return "mbeeek";
    }     
}

class kucing extends Hewan
{
    function bersuara()
    {
        return "meong";
    }
}

class angsa extends Hewan
{
    function bersuara()
    {
        return "kwaak";
    }
}

class elang extends Hewan
{
    function bersuara()
    {
        return "miiip";
    }
}

echo "Hewan <br>";
echo "<hr>";

//kambing
$Chip = new kambing;
$Chip-> jumlah_kaki = 4;
$Chip->bisa_terbang = "Tidak bisa terbang";

echo "Chip adalah kambing <br>"; 
echo "Punya kaki sebanyak : ".$Chip->jumlah_kaki."<br>";
echo $Chip->bisa_terbang."<br>";
echo "Suaranya : ".$Chip->bersuara()."<br>";

echo "<hr>";

//kucing
$Cheo = new kucing;
$Cheo-> jumlah_kaki = 4;
$Cheo->bisa_terbang = "Tidak bisa terbang";

echo "Cheo adalah kucing <br>"; 
echo "Punya kaki sebanyak : ".$Cheo->jumlah_kaki."<br>";
echo $Cheo->bisa_terbang."<br>";
echo "Suaranya : ".$Cheo->bersuara()."<br>";

echo "<hr>";

//angsa
$Dush = new angsa;
$Dush-> jumlah_kaki = 2;
$Dush->bisa_terbang = "Bisa terbang";

echo "Dush adalah angsa <br>"; 
echo "Punya kaki sebanyak : ".$Dush->jumlah_kaki."<br>";
echo $Dush->bisa_terbang."<br>";
echo "Suaranya : ".$Dush->bersuara()."<br>";

echo "<hr>";

//elang
$Suny = new elang;
$Suny-> jumlah_kaki = 2;
$Suny->bisa_terbang = "Bisa terbang";

echo "Suny adalah elang <br>"; 
echo "Punya kaki sebanyak : ".$Suny->jumlah_kaki."<br>";
echo $Suny->bisa_terbang."<br>";
echo "Suaranya : ".$Suny->bersuara()."<br>";

echo "<hr>";