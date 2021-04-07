<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="100" valign="center">
                                    <?php foreach ($jumlahulangan as $jm) : ?>
                                        <h4>Ulangan</h4>
                                        <small><?= $jm->jmlhulangan; ?> Ulangan</small>
                                    <?php endforeach; ?></p>
                                </td>
                                <td align="right"><a href="<?= base_url('guru/addulangan/') . $this->uri->segment('3') ?>">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Tambah
                                        </button></a>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table>
                            <?php foreach ($ulangan as $sia) : ?>
                                <tr height="50">
                                    <td width="1000"><?= $sia['judul_ulangan'] ?>
                                        <br><small class="text-success " style="font-size: 10px"><?= $sia['tanggal'] ?></small>
                                    </td>
                                    <td><?php echo anchor('guru/lihat_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-inverse-primary btn-sm"><i class="mdi mdi-eye"></div>') ?></td>
                                    <td><?php echo anchor('guru/edit_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-inverse-warning btn-sm"><i class="mdi mdi-pencil"></div>') ?></td>
                                    <td><?php echo anchor('guru/hapus_ulangan/' . $sia['id_ulangan'] . '/' . $sia['id_mapel'], '<div class="btn btn-inverse-danger btn-sm"><i class="mdi mdi-delete"></i></div>') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>