<table>
    <tr>
        <td>Index</td>
        <td>Type Data</td>
        <td>Data</td>
    </tr>
    <?php

        $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
        $i = 0;
        foreach ($data as $dt) {
            if($dt < 0){
                echo "tidak bisa di validasi sistem <br>";
            }elseif(is_string($dt) == true){
                echo "Indeks ke ".$i." adalah Varchar dengan data : ".$dt."<br>";
            }else{
                echo "Indeks ke ".$i." adalah Integer dengan data : ".$dt."<br>";
            }

            $i++;
        }
    ?>
</table>