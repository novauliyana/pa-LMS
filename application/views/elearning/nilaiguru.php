<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Nilai tugas</h4>
                        <div class="table-responsive pt-3">
                            <form>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama Lengkap</th>
                                            <th>Pengumpulan</th>
                                            <th>Waktu</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 1;
                                    foreach ($nilaitugas as $sia) : ?>
                                        <tbody>
                                            <tr>
                                                <td align="center" width="50"><?= $no ?></td>
                                                <td width="80"><?= $sia['nis'] ?></td>
                                                <td width="180"><?= $sia['nama_siswa'] ?></td>
                                                <td width="180"><?= $sia['nama_file'] ?></td>
                                                <td width="150"><?= $sia['tanggal'] ?></td>
                                                <td align="center" width="80"><?= $sia['nilai'] ?></td>
                                                <td width="70"><?php echo anchor('elearningguru/editnilai/' . $sia['id'], '<div class="btn btn-primary btn-sm"> Nilai </i></div>') ?>
                                                </td>

                                            </tr>
                                        </tbody>
                                    <?php $no++;
                                    endforeach; ?>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>