<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="<?=base_url("assets/css/stylelist.css")?>">
<div class="user">
    <div class="container-fluid">
        <div class="card-shadow mb-4">
            <div class="card-header w-100 d-flex align-items-center justify-content-center mb-2">
                <h1 class="m-0">LIST DATA KELAS</h1>
            </div>
            <a href="<?= base_url('/kelas/create') ?>" class="btn btn-light mb-3">Tambah Data</a>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KELAS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kelas as $kelas){
                    ?>
                    <tr>
                        <td><?= $kelas['id'] ?></td>
                        <td><?= $kelas['nama_kelas'] ?></td>
                        <td>
                            <div class="aksi d-flex justify-content-center align-items-center">
                                <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-primary me-2">Edit</a>
                                <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>  
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>      
    </div>
</div>
<?= $this->endSection() ?>