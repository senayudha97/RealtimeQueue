CREATE TABLE `kk_kehilangan` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kk_rusak` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kia_pemula` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kia_kehilangan` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kia_rusak` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `ktp_pemula` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `ktp_kehilangan` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `ktp_rusak` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kk_perubahan_data` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kk_penambahan_anggota` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `kk_pengurangan_anggota` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `akta_kelahiran_baru` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `akta_kelahiran_rusak` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

CREATE TABLE `akta_kelahiran_hilang` (
   `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_antrian` date DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `jenis` tinyint(4) NOT NULL,
  `pengurusan` varchar(100), 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4; 

















