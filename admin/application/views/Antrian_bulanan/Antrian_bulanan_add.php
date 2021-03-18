<div class="container-fluid">
    <h1>Input Setup Antrian Bulanan</h1>
    <?php $countDayinmonth = cal_days_in_month(CAL_GREGORIAN, 3, 2021); ?>
    <?php $formatDay = date('-m-Y'); ?>
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Antrian_bulanan/add'); ?>" method="POST">
                <div id="hidden_field">
                    <!-- <input type="hidden" name="input[pk_antrian_bulanan]" value="<?= 'NE' . date('dhs'); ?>"> -->
                    <input type="hidden" value="1" name="isSubmit">
                </div>
                <table class="table table-bordered">
                    <th>Tanggal</th>
                    <th>Maksima Antrian</th>
                    <th>Maksima Antrian Perjaman</th>
                    <th>Libur</th>
                    <?php for ($i = 1; $i <= $countDayinmonth; $i++) :  ?>
                        <?php
                        $isLibur = '';
                        $MyGivenDateIn = strtotime(date_to_db($i . $formatDay));
                        $ConverDate = date("l", $MyGivenDateIn);
                        $ConverDateTomatch = strtolower($ConverDate);
                        if (($ConverDateTomatch == "saturday") || ($ConverDateTomatch == "sunday")) {
                            $isLibur = 'checked';
                        }
                        ?>
                        <tr>
                            <input type="hidden" value="<?= $user['id']; ?>" name="input[<?= $i; ?>][insert_by]">
                            <td>
                                <input type="text" value="<?= $i . $formatDay; ?>" readonly name="dummy" class="form-control">
                                <input type="hidden" value="<?= date_to_db($i . $formatDay); ?>" readonly name="input[<?= $i; ?>][tanggal_antrian]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="input[<?= $i; ?>][maksimal_antrian]" value="150" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="input[<?= $i; ?>][maksimal_antrian_perjam]" class="form-control" value="37">
                            </td>
                            <td>
                                <input type="checkbox" <?= $isLibur; ?> name="input[<?= $i; ?>][islibur]" class="form-control" value="1  ">
                            </td>
                        </tr>
                    <?php endfor; ?>
                </table>
                <input type="submit" class="btn btn-danger" value="Kirim">
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        console.log('Berhasil JQuery');
    });
</script>