<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="INT" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
    </table>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE" ></td>
        </tr>
</form>