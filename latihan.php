<title>Tugas PBO 09 Nov 2022</title>
<form class="btn" method="POST" action="">
    <input type="submit" name="image" value="ImageButton" style="width:120px;height:60px;">
    <input type="submit" name="shape" value="ShapeButton" style="width:150px;height:75px;">
</form>
<?php
class Button{
    public $x;
    public $y;
    public $width;
    public $height;
}
class ImageButton extends Button{
    public $ukuran;
    public function tesUkuran(){
        echo "Lebarnya : ".$this->ukuran;
        echo "<br>";
        echo "Tingginya : ".$this->tinggi;
    }
}
class ShapeButton extends Button{
    public $cli;
    public function tesCli(){
        echo "Lebarnya : ".$this->ukuran;
        echo "<br>";
        echo "Tingginya : ".$this->tinggi;
    }
}

function one (){
    $Button = new ImageButton();
    $ukuran = $Button->ukuran=120.0;
    $tinggi = $Button->tinggi=60.0;

    echo $Button->tesUkuran();
}

function two (){
    $Button = new ShapeButton();
    $ukuran = $Button->ukuran=150.0;
    $tinggi = $Button->tinggi=75.0;

    echo $Button->tesCli();
}
if(isset($_POST['image'])){
    echo one();
}
if(isset($_POST['shape'])){
    echo two();
}
?>
