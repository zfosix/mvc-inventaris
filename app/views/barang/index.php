<style>
     .card {
          width: 90%;
          max-width: 1200px;
          padding: 2rem 1.5rem;
          border-radius: 1rem;
          border: 1px solid transparent;
          background: rgba(255, 255, 255, 0.26);
          border-radius: 16px;
          box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
          backdrop-filter: blur(10.2px);
          -webkit-backdrop-filter: blur(10.2px);
     }

     h3 {
          color: black;
     }

     .cb1 {
          background-color: rgba(225, 225, 225, 0.1);
     }
</style>

<div class="position-absolute top-50 start-50 translate-middle">
     <div class="cb1 card" style="width: 80rem;">
          <div class="card-body">
               <h3 class="mb-3">Daftar Peminjaman</h3>
               <br>
               <div class="d-flex justify-content-between">
                    <a href="<?= BASE_URL; ?>/barang/tambah" class="btn btn-primary"><i class="ri-add-box-line"></i>
                         Peminjaman</i></a>
                    <div class="d-flex ">
                         <form action="<?= BASE_URL; ?>/barang/cari" method="post" class="d-flex" role="search">
                              <input class="form-control me-2" type="text" name="search" size="30" aria-label="Search" autofocus placeholder="search.." autocomplete="off">
                              <button class="btn btn-primary" type="submit" name="cari"><i class="ri-search-line"></i></button>
                              <a href="<?= BASE_URL ?>/barang/index/" class="btn btn-dark"><i class="ri-refresh-line"></i></a>
                         </form>
                    </div>
               </div>
               <br>
               <table class="table table-dark table-striped table-bordered">
                    <thead>
                         <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Peminjam</th>
                              <th scope="col">Jenis Barang</th>
                              <th scope="col">No Barang</th>
                              <th scope="col">Tanggal Pinjam</th>
                              <th scope="col">Tanggal Kembali</th>
                              <th scope="col">Status</th>
                              <th scope="col">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $no = 1; ?>
                         <?php foreach ($data['barang'] as $row) : ?>
                              <tr>
                                   <td><?= $no ?></td>
                                   <td><?= $row['nama_peminjam'] ?></td>
                                   <td><?= $row['jenis_barang'] ?></td>
                                   <td><?= $row['no_barang'] ?></td>
                                   <td><?= $row['tgl_pinjam'] ?></td>
                                   <td><?= $row['tgl_kembali'] ?></td>
                                   <td>
                                        <?php
                                        $tgl_kembali = date('Y-m-d H:i:s', strtotime($row['tgl_pinjam'] . ' +2 days'));
                                        $tgl_sekarang = date('Y-m-d H:i:s');
                                        if ($tgl_sekarang > $tgl_kembali) {
                                             echo "<div class='btn btn-success text-white'>Sudah Kembali !</div>";
                                        } else {
                                             echo "<div class='btn btn-danger text-white'>Belum Kembali !</div>";
                                             // alert alert-danger' role='alert
                                        }
                                        ?>
                                   </td>
                                   <td>
                                        <?php if ($tgl_sekarang < $tgl_kembali) : ?>
                                             <a href="<?= BASE_URL ?>/barang/edit/<?= $row['id'] ?>" class="btn btn-primary"><i class='ri-edit-2-line'></i></a>
                                        <?php endif; ?>
                                        <a href="<?= BASE_URL ?>/barang/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')"><i class='ri-delete-bin-line'></i></a>
                                   </td>
                              </tr>
                         <?php $no++;
                         endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>