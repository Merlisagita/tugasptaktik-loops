<?php

//loop while
$shit = 0;
while ($shit < 10) { //trus 0 < 10
    //kode yang akan dijalankan jika kondisi benar
    echo "$shit <br>";
    $shit += 2; //shit = shit + 2 --> 0 + 2 = 2
}

$shit = 1;
while ($shit < 8) {
    echo "$shit <br>";
    $shit += 2;
}

//do while
echo "<h2>pengulangan do while</h2>";
$i = 1;
do {
    //kode yang akan di eksekusi
  echo $i;
  $i++;
} while ($i < 6);
?>