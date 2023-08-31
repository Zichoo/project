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
                        <a href="<?= base_url; ?>/Barang/tambah">
                            <button type="button" class="btn btn-primary">Tambah Barang</button>
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data['barang'] as $row) :?>
                                        <tr>
                                            <td class="text-bold-500"><?= $row['id_barang']?></td>
                                            <td><?= $row['nama_barang']?></td>
                                            <td class="text-bold-500"><?= $row['harga_barang']?></td>
                                            <td>
                                            <a href="<?= base_url; ?>/Barang/edit/<?= $row['id_barang'] ?>" class="badge badge-info">Edit</a> 
                                            <a href="<?= base_url; ?>/Barang/hapus/<?= $row['id_barang'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
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

            