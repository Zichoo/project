        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Table</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url; ?>/User/tambah">
                            <button type="button" class="btn btn-primary">Tambah user</button>
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>No HP</th>
                                            <th>Password</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data['user'] as $row) :?>
                                        <tr>
                                            <td class="text-bold-500"><?= $row['id_user']?></td>
                                            <td class="text-bold-500"><?= $row['username']?></td>
                                            <td class="text-bold-500"><?= $row['email']?></td>
                                            <td class="text-bold-500"><?= $row['no_hp']?></td>
                                            <td class="text-bold-500"><?= $row['password']?></td>
                                            <td class="text-bold-500"><?= $row['alamat']?></td>
                                            <td>
                                            <a href="<?= base_url; ?>/tbl_user/edit/<?= $row['id_user'] ?>" class="badge badge-info">Edit</a> 
                                            <a href="<?= base_url; ?>/tbl_user/hapus/<?= $row['id_user'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>

            