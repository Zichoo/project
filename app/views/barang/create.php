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
        
              <form role="form" action="<?= base_url; ?>/Barang/simpanBarang" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" class="form-control" placeholder="masukkan harga barang" name="id_barang">
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" placeholder="masukkan nama barang" name="nama_barang">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" placeholder="masukkan harga barang" name="harga_barang">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->