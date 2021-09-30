<?= $this->extend('template/V_header') ?>

<?= $this->section('content') ?>

<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <a href="<?= site_url('C_laporan/laporan') ?>" class="btn btn-info btn-flat">
                <span class="fas fa-arrow-circle-left"></span>
                Kembali
            </a>
        </div>

        <div class="invoice col-sm-12 p-3 mb-3">
            <!-- title row -->
            <div id="div1">
                <div class="row">
                    <div class="col-12">
                        <table>
                            <tr>
                                <td width=100>
                                    <img src="<?= base_url('assets') ?>/dist/img/tanah_datar.png" width="100" alt="">
                                </td>
                                <td>
                                    <center>
                                        <h4>
                                            <p> Pemerintah Kabupaten Tanah Datar</p>
                                            <p> DINAS PENANAMAN MODAL PELAYANAN TERPADU SATU PINTU DAN TENAGA KERJA</p>
                                        </h4>
                                    </center>
                                </td>
                                <td width=100></td>
                            </tr>
                        </table>
                        <hr>
                        <center>
                            <b>
                                <p> LAPORAN NOTA PENCAIRAN DANA</p>
                            </b>
                        </center>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row">

                </div>

                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Periode</th>
                                    <th>Tanggal</th>
                                    <th>Kode Rekening</th>
                                    <th>No Rekening Asal</th>
                                    <th>No Rekening Tujuan</th>
                                    <th>Nama Penerima</th>
                                    <th>Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($data_npd as $d) {
                                    $no++;

                                ?>
                                    <tr>
                                        <td width="10" class="text-center"><?php echo $no . '.'; ?></td>
                                        <td width=20><?= date('Y', strtotime($d->tanggal)) ?></td>
                                        <td><?= date('d/M/Y', strtotime($d->tanggal)) ?></td>
                                        <td><?= $d->kode_rekening ?></td>
                                        <td><?= $d->norek_asal ?></td>
                                        <td><?= $d->norek_tujuan ?></td>
                                        <td><?= $d->nama_pegawai ?></td>
                                        <td><?= "Rp " . number_format($d->nominal) ?></td>
                                    </tr>
                                <?php  } ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.col -->
                </div>
            </div>


            <div class="row no-print">
                <div class="col-sm-12">
                    <button onclick="printContent('div1')" class="btn btn-primary float-right"><i class="fa fa-print"></i>Cetak</button>
                </div>

            </div>

        </div>
    </div>
</div>


<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<?= $this->endSection() ?>