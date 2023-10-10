<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>desain/css/style.css"
    </head>
<body>
    <center>
        <hl>Edit Data Mahasiswa</hl>
        </center>
    <?php foreach($mahasiswa as $u) { ?>
    <form action="<?php echo base_url(). 'kampus/update'; ?>"method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td>
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                <input type="text" name="nim" value="<?php echo $u->nim ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?php echo $u->nama ?>">
        </td>
    </tr>
    <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
    </tr>
    <tr>
            <td>Pekerjaan</td>
            <td>
                <input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
    </tr>
    <tr>
            <td></td>
                <td><input type="submit" value="update"> <?php echo anchor('kampus','<input type=button value=kembali>'); ?></td>
    </tr>
</table>
</form>
<?php } ?>
</body>
</html>