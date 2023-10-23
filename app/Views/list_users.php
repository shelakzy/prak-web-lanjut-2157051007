<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<table>
<table class="content-table">
<body>
    <u><h1 style="color:  #ffffff"; align=”center”><font face=”arial”> LIST DATA PENGGUNA</font></h1></u>
<hr align=”center” size=“4” noshade> </hr> <!–Ini garis horizontal–>
    <link rel="stylesheet" href="<?=base_url("assets/css/stylelist.css")?>">
    <thead>
    <a href="<?= base_url('/user/create') ?>">Tambah Data</a>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NPM</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
            <a href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
            <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>">Edit</a>
            <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <?= csrf_field() ?>
            <button type="submit">Delete</button>
            </form>
            </td>  
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>