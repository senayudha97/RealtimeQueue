<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <form action="<?= base_url('Log_ampenan_niigata_generator/edit'); ?>" method="POST">

                <h1 class="h3 mb-4 text-gray-800">Ubah Data <?= $title; ?></h1>
                <div id="hidden_field">
                    <input type="text" name="pk[pk_niigata_generator]" value="<?= $edit['pk_niigata_generator']; ?>">
                    <input type="text" name="input[update_by]" value="<?= $user['id']; ?>">
                </div>

                <div id="setup">
                    <div class="form-group row">
                        <label for="input[tanggal_input]" class="col-sm-2 col-form-label">Tanggal & Waktu Input</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easydatepicker" id="tanggal_input" value="<?= content_date($edit['tanggal_input']) ?>" name="input[tanggal_input]" placeholder="Klik untuk input tanggal" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control easytimepicker" id="input[waktu]" value="<?= $edit['waktu'] ?>" name="input[waktu]" readonly placeholder="Klik untuk input jam">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input[mesin]" class="col-sm-2 col-form-label">Mesin & Generator</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tanggal_input" value="<?= $edit['mesin']; ?>" value="<?= $edit['mesin'] ?>" name="input[mesin]" placeholder="Nomor Mesin">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input[generator]" value="<?= $edit['generator']; ?>" value="<?= $edit['generator'] ?>" name="input[generator]" placeholder="Generator">
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-danger text-light">
                        Generator
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="input[tegangan]" class="col-sm-2 col-form-label">Tegangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[tegangan]" value="<?= $edit['tegangan'] ?>" name="input[tegangan]" placeholder="Input Tegangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[frekuensi]" class="col-sm-2 col-form-label">Frekuensi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[frekuensi]" value="<?= $edit['frekuensi'] ?>" name="input[frekuensi]" placeholder="Input Frekuensi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[faktor_daya]" class="col-sm-2 col-form-label">Faktor Daya</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[faktor_daya]" value="<?= $edit['faktor_daya'] ?>" name="input[faktor_daya]" placeholder="Input Faktor Daya">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[daya_semu]" class="col-sm-2 col-form-label">Daya Semu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[daya_semu]" value="<?= $edit['daya_semu'] ?>" name="input[daya_semu]" placeholder="Input Daya Semu">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[beban]" class="col-sm-2 col-form-label">Beban</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input[beban]" value="<?= $edit['beban'] ?>" name="input[beban]" placeholder="Input Beban">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Arus</label>
                            <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                                <input type="text" class="form-control" id="input[arus_r]" value="<?= $edit['arus_r'] ?>" name="input[arus_r]" placeholder="Nilai R">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_s]" value="<?= $edit['arus_s'] ?>" name="input[arus_s]" placeholder="Nilai S">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control" id="input[arus_t]" value="<?= $edit['arus_t'] ?>" name="input[arus_t]" placeholder="Nilai T">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penguat Medan</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[penguat_medan_arus]" value="<?= $edit['penguat_medan_arus'] ?>" name="input[penguat_medan_arus]" placeholder="Arus">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[penguat_medan_tegangan]" value="<?= $edit['penguat_medan_tegangan'] ?>" name="input[penguat_medan_tegangan]" placeholder="Tegangan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Suhu</label>
                            <div class="col-sm-2 col-lg-4 col-md-4 mt-2">
                                <input type="text" class="form-control lngsw1" id="input[suhu_1]" value="<?= $edit['suhu_1'] ?>" name="input[suhu_1]" placeholder="1">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control lngsw2" id="input[suhu_2]" value="<?= $edit['suhu_2'] ?>" name="input[suhu_2]" placeholder="2">
                            </div>
                            <div class="col-sm-2 col-lg-3 col-md-3 mt-2">
                                <input type="text" class="form-control lngsw3" id="input[suhu_3]" value="<?= $edit['suhu_3'] ?>" name="input[suhu_3]" placeholder="3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input[bearing]" class="col-sm-2 col-form-label">Bearing</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[bearing]" value="<?= $edit['bearing'] ?>" name="input[bearing]" placeholder="Input Bearing">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pendingin Udara Generator</label>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[pendingin_udara_generator_masuk]" value="<?= $edit['pendingin_udara_generator_masuk'] ?>" name="input[pendingin_udara_generator_masuk]" placeholder="Masuk">
                    </div>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[pendingin_udara_generator_keluar]" value="<?= $edit['pendingin_udara_generator_keluar'] ?>" name="input[pendingin_udara_generator_keluar]" placeholder="Keluar">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Putaran Turbo X 1000</label>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[putaran_turbo_a]" value="<?= $edit['putaran_turbo_a'] ?>" name="input[putaran_turbo_a]" placeholder="A">
                    </div>
                    <div class="col-sm-5 mt-2">
                        <input type="text" class="form-control" id="input[putaran_turbo_b]" value="<?= $edit['putaran_turbo_b'] ?>" name="input[putaran_turbo_b]" placeholder="B">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sikap_kwh_meter_hsd" class="col-sm-2 col-form-label">Sikap KWH Meter HSD</label>
                    <div class="col">
                        <input type="text" class="form-control" id="input[sikap_kwh_meter_hsd]" value="<?= $edit['sikap_kwh_meter_hsd'] ?>" name="input[sikap_kwh_meter_hsd]">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sikap_kwh_meter_mfo" class="col-sm-2 col-form-label">Sikap KWH Meter MFO</label>
                    <div class="col">
                        <input type="text" class="form-control" id="input[sikap_kwh_meter_mfo]" value="<?= $edit['sikap_kwh_meter_mfo'] ?>" name="input[sikap_kwh_meter_mfo]">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level_become" class="col-sm-2 col-form-label">Level Become</label>
                    <div class="col">
                        <input type="text" class="form-control" id="input[level_become]" value="<?= $edit['level_become'] ?>" name="input[level_become]" placeholder="Level Become">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Daya</label>
                    <div class="col-sm-3 mt-2">
                        <input type="text" class="form-control" id="input[daya_r]" value="<?= $edit['daya_r'] ?>" name="input[daya_r]" placeholder="R">
                    </div>
                    <div class="col-sm-3 mt-2">
                        <input type="text" class="form-control" id="input[daya_s]" value="<?= $edit['daya_s'] ?>" name="input[daya_s]" placeholder="S">
                    </div>
                    <div class="col-sm-2 mt-2">
                        <input type="text" class="form-control" id="input[daya_t]" value="<?= $edit['daya_t'] ?>" name="input[daya_t]" placeholder="T">
                    </div>
                    <div class="col-sm-2 mt-2">
                        <input type="text" class="form-control" id="input[daya_mw]" value="<?= $edit['daya_mw'] ?>" name="input[daya_mw]" placeholder="MW">
                    </div>
                </div> -->

                <div class="card mb-3">
                    <div class="card-header bg-danger text-light">
                        Temperatur ( °C )
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Air Pendingin Mesin</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngapm" id="input[air_pendingin_mesin_masuk]" value="<?= $edit['air_pendingin_mesin_masuk'] ?>" name="input[air_pendingin_mesin_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngapk" id="input[air_pendingin_mesin_keluar]" value="<?= $edit['air_pendingin_mesin_keluar'] ?>" name="input[air_pendingin_mesin_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Minyak Pelumas</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngmpm" id="input[minyak_pelumas_masuk]" value="<?= $edit['minyak_pelumas_masuk'] ?>" name="input[minyak_pelumas_masuk]" placeholder="Masuk">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngmpk" id="input[minyak_pelumas_keluar]" value="<?= $edit['minyak_pelumas_keluar'] ?>" name="input[minyak_pelumas_keluar]" placeholder="Keluar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Udara Bilas</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lnguba" id="input[udara_bilas_A]" value="<?= $edit['udara_bilas_A'] ?>" name="input[udara_bilas_A]" placeholder="A">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngubb" id="input[udara_bilas_B]" value="<?= $edit['udara_bilas_B'] ?>" name="input[udara_bilas_B]" placeholder="B">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input[air_pendingin_udara_masuk]" class="col-sm-2 col-form-label">Air Pendingin Udara Masuk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control lngapum" id="input[air_pendingin_udara_masuk]" value="<?= $edit['air_pendingin_udara_masuk'] ?>" name="input[air_pendingin_udara_masuk]" placeholder="Air Pendingin Udara Masuk">
                            </div>
                        </div>

                        <h4 class="mb-4"> Gas Buang </h4>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Silider Sisi A</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssa1" id="input[silinder_sisi_A_1]" value="<?= $edit['silinder_sisi_A_1'] ?>" name="input[silinder_sisi_A_1]" placeholder="1">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssa2" id="input[silinder_sisi_A_2]" value="<?= $edit['silinder_sisi_A_2'] ?>" name="input[silinder_sisi_A_2]" placeholder="2">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssa3" id="input[silinder_sisi_A_3]" value="<?= $edit['silinder_sisi_A_3'] ?>" name="input[silinder_sisi_A_3]" placeholder="3">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssa4" id="input[silinder_sisi_A_4]" value="<?= $edit['silinder_sisi_A_4'] ?>" name="input[silinder_sisi_A_4]" placeholder="4">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssa5" id="input[silinder_sisi_A_5]" value="<?= $edit['silinder_sisi_A_5'] ?>" name="input[silinder_sisi_A_5]" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top: -10px;">
                                <input type="text" class="form-control lnggssa6" id="input[silinder_sisi_A_6]" value="<?= $edit['silinder_sisi_A_6'] ?>" name="input[silinder_sisi_A_6]" placeholder="6">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Silider Sisi B</label>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssb1" id="input[silinder_sisi_B_1]" value="<?= $edit['silinder_sisi_B_1'] ?>" name="input[silinder_sisi_B_1]" placeholder="1">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssb2" id="input[silinder_sisi_B_2]" value="<?= $edit['silinder_sisi_B_2'] ?>" name="input[silinder_sisi_B_2]" placeholder="2">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssb3" id="input[silinder_sisi_B_3]" value="<?= $edit['silinder_sisi_B_3'] ?>" name="input[silinder_sisi_B_3]" placeholder="3">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssb4" id="input[silinder_sisi_B_4]" value="<?= $edit['silinder_sisi_B_4'] ?>" name="input[silinder_sisi_B_4]" placeholder="4">
                            </div>
                            <div class="col-sm-2 mt-2">
                                <input type="text" class="form-control lnggssb5" id="input[silinder_sisi_B_5]" value="<?= $edit['silinder_sisi_B_5'] ?>" name="input[silinder_sisi_B_5]" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top: -10px;">
                                <input type="text" class="form-control lnggssb6" id="input[silinder_sisi_B_6]" value="<?= $edit['silinder_sisi_B_6'] ?>" name="input[silinder_sisi_B_6]" placeholder="6">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo A</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngta1" id="input[turbo_a_1_a]" value="<?= $edit['turbo_a_1_a'] ?>" name="input[turbo_a_1_a]" placeholder="1">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngta2" id="input[turbo_a_2_a]" value="<?= $edit['turbo_a_2_a'] ?>" name="input[turbo_a_2_a]" placeholder="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo B</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngtb1" id="input[turbo_b_1_a]" value="<?= $edit['turbo_b_1_a'] ?>" name="input[turbo_b_1_a]" placeholder="1">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control lngtb2" id="input[turbo_b_2_a]" value="<?= $edit['turbo_b_2_a'] ?>" name="input[turbo_b_2_a]" placeholder="2">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo A</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[turbo_a_1_b]" value="<?= $edit['turbo_a_1_b'] ?>" name="input[turbo_a_1_b]" placeholder="1">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[turbo_a_2_b]" value="<?= $edit['turbo_a_2_b'] ?>" name="input[turbo_a_2_b]" placeholder="2">
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Turbo B</label>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[turbo_b_1_b]" value="<?= $edit['turbo_b_1_b'] ?>" name="input[turbo_b_1_b]" placeholder="1">
                            </div>
                            <div class="col-sm-5 mt-2">
                                <input type="text" class="form-control" id="input[turbo_b_2_b]" value="<?= $edit['turbo_b_2_b'] ?>" name="input[turbo_b_2_b]" placeholder="2">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input[operator]" class="col-sm-2 col-form-label">Operator</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input[operator]" value="<?= $edit['operator'] ?>" name="input[operator]" placeholder="Operator">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger ">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>