<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
<head>
<body>
    <center><hl>Data Mahasiswa</hl></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach($mahasiswa as $u){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nim ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>                
            <td><?php echo $u->pekerjaan ?></td>
            <td>
                <?php echo anchor('kampus/edit/'.$u->id,'edit');?>
                <?php echo anchor('kampus/hapus/'.$u->id,'hapus');?>
            </td>
        </tr>
        <?php  }  ?>
    </table>
    <center><?php echo anchor('kampus/tambah','<input type=button value=\'tambah data\'>'); ?></center>

</body>
</html>