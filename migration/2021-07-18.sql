-- AKTA
ALTER TABLE app_antrian.akta_kelahiran_baru ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kelahiran_hilang ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kelahiran_rusak ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kelahiran_pembaruan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kematian_baru ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kematian_hilang ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kematian_rusak ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_kematian_pembaruan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perkawinan_baru ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perkawinan_hilang ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perkawinan_rusak ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perkawinan_pembaruan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perceraian_baru ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perceraian_hilang ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perceraian_rusak ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.akta_perceraian_pembaruan ADD file_form varchar(250) NULL;

-- KK
ALTER TABLE app_antrian.kk_kehilangan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_pecah_1desa ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_penambahan_kedatangan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_penambahan_kelahiran ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_pengurangan_kematian ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_perubahan_data ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_pindah_kecamatan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_pindah_keluar_kota ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kk_rusak ADD file_form varchar(250) NULL;

-- KTP
ALTER TABLE app_antrian.ktp_kehilangan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.ktp_pemula ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.ktp_rusak ADD file_form varchar(250) NULL;

-- KIA
ALTER TABLE app_antrian.kia_kehilangan ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kia_pemula ADD file_form varchar(250) NULL;
ALTER TABLE app_antrian.kia_rusak ADD file_form varchar(250) NULL;
