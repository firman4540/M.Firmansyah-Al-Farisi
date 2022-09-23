<?php

//Membuat array dua dimensi
$ANGKA = array(
    array("Negara", "Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"),
    array("Ibukota", "D.K.I Jakarta", "SIngapura", "Kuala Lumpur", "Bandar Seri Begawan", "Bangkok", "Vientiane", "Manila", "Naypyidaw"),
    array("Kode Telepon", "+62", "+65", "+60", "+673", "+66", "+856", "+63", "+95")
);

?>
<html>

<head>
    <title>Daftar Angka Negara ASEAN & Ibukotanya Berupa Tabel</title>
</head>

<body>

    <table align="center" border="3" cellpadding="6">
        <tr>
            <th><?php echo $ANGKA[0][0] ?></th>
            <th><?php echo $ANGKA[1][0] ?></th>
            <th><?php echo $ANGKA[2][0] ?></th>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][1] ?></td>
            <td><?php echo $ANGKA[1][1] ?></td>
            <td><?php echo $ANGKA[2][1] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][2] ?></td>
            <td><?php echo $ANGKA[1][2] ?></td>
            <td><?php echo $ANGKA[2][2] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][3] ?></td>
            <td><?php echo $ANGKA[1][3] ?></td>
            <td><?php echo $ANGKA[2][3] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][4] ?></td>
            <td><?php echo $ANGKA[1][4] ?></td>
            <td><?php echo $ANGKA[2][4] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][5] ?></td>
            <td><?php echo $ANGKA[1][5] ?></td>
            <td><?php echo $ANGKA[2][5] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][6] ?></td>
            <td><?php echo $ANGKA[1][6] ?></td>
            <td><?php echo $ANGKA[2][6] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][7] ?></td>
            <td><?php echo $ANGKA[1][7] ?></td>
            <td><?php echo $ANGKA[2][7] ?></td>
        </tr>
            <tr>
            <td><?php echo $ANGKA[0][8] ?></td>
            <td><?php echo $ANGKA[1][8] ?></td>
            <td><?php echo $ANGKA[2][8] ?></td>
        </tr>
    </table>

</body>

</html>
