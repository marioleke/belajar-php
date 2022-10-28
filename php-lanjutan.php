<?php

$nama = "bintang";

// PERULANGAN
/*
echo $nama;
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/


/*

$no = 9;

for ($i=0; $i<=9; $i++) {
    $n = $i + 1;
    echo $n."" .$nama. "<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama. "<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama. "<br/>";
    $i++;
} while ($i < $no)
*/

$data = array('Pajero', 'Fortuner', 'Raize', 'Merchedes Benz', 'Jazz');

/*
for ($i=0; $i<count($data); $i++){
    echo $data [$i]."<br>";
}
*/

/*
$i = 0;
while ($i < count($data)) {
    echo $data [$i]."<br>";
    $i++;
}
*/

//echo $data[4];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "marc") {
    echo $nama. " adalah orang Kupang";
} else if ($nama == "bintang") {
    echo $nama. " berasal dari pulau jawa";
} else {
    echo $nama. " darimana ya?";
}
*/

/*
switch($nama) {
    case "marc":
        echo $pesan = $nama. " adalah orang Kupang";
    break;
    case "bintang":
        echo $pesan = $nama. " berasal dari pulau jawa";
    break;
    default:
        echo $pesan = $nama." darimana ya?";

}
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (!empty($_POST['submit'])) {
         
            switch($_POST['nama']) {
                case "marc":
                    echo $pesan = $_POST['nama']. " adalah orang Kupang";
                break;
                case "bintang":
                    echo $pesan = $_POST['nama']. " berasal dari pulau jawa";
                break;
                default:
                    echo $pesan = $_POST['nama']." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan. "<br>";
            }


        }  else {
            echo "Anda belum input nama dan jumlah";
        } 

    ?>

</body>
</html>