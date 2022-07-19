<?php
//error Control
// @$test = 5 / 0;
// echo $test;

$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


?>
<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Bilangan</td>
        <td>Jenis</td>
    </tr>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <tr>
            <td><?php echo "$angka[$i]" ?></td>
            <td>
                <?php
                //Tulis jawaban disini
                if ($angka[$i] % 2 == 0) {
                    echo "Bilangan Genap";
                } else {
                    echo "Bilangan Ganjil";
                }
                ?>
            </td>
        </tr>
    <?php } ?>
</table>