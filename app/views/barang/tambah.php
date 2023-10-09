<div class="position-absolute top-50 start-50 translate-middle">
     <div class="cb1 card" style="width: 30rem;">
          <div class="card-body">
               <br>
               <h1 class="fw-bold mb-2 fs-2 ">Tambah Peminjaman</h1>
               <br>
               <br>
               <form action="<?= BASE_URL; ?>/barang/simpanbarang" method="post">
                    <div class="form-group mb-3">
                         <label for="">Nama Peminjam : </label>
                         <input type=" text" class="form-control" autocomplete="off" name=" nama_peminjam" value="<?= $data['nama_peminjam_value'] ?>">
                    </div>
                    <div class="form-group mb-3">
                         <label for="">Jenis Barang : </label>
                         <select name="jenis_barang" required class="form-control">
                              <option value="Laptop" <?= $data['jenis_barang_value'] == 'Laptop' ? 'selected' : '' ?>>
                                   Laptop
                              </option>
                              <option value="Handphone" <?= $data['jenis_barang_value'] == 'Handphone' ? 'selected' : '' ?>>
                                   Handphone</option>
                              <option value="AdaptorLAN" <?= $data['jenis_barang_value'] == 'AdaptorLAN' ? 'selected' : '' ?>>
                                   Adaptor LAN</option>
                         </select>
                    </div>
                    <div class="form-group mb-3">
                         <label for="">Nomor Barang : </label>
                         <input type="number" class="form-control" name="no_barang" value="<?= $data['no_barang_value'] ?>">
                    </div>
                    <div class="form-group mb-3">
                         <label for="">Tanggal Pinjam : </label>
                         <input type="datetime-local" class="form-control" name="tgl_pinjam" value="<?= $data['tgl_pinjam_value'] ?>">
                    </div>
                    <!-- <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Submit</button>
               </form>
          </div>
     </div>
</div>