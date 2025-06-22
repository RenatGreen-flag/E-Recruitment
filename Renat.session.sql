

use rekrutmen_online;

CREATE TABLE kandidat (
    id_kandidat INT AUTO_INCREMENT PRIMARY KEY,
    nama_kandidat VARCHAR(100),
    nik VARCHAR(20) UNIQUE,
    alamat TEXT,
    ttl DATE,
    jk ENUM('L', 'P'),
    telp VARCHAR(15),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100)
);

CREATE TABLE riwayat_pendidikan (
    id_kandidat INT,
    jenjang ENUM('SMA/SMK','Paket C','Sarjana','Magister','Lainnya'),
    prodi VARCHAR(100),
    nama_institusi VARCHAR(100),
    tahun_mulai YEAR,
    tahun_selesai YEAR,
    skor DECIMAL(4,2),

    FOREIGN KEY (id_kandidat) REFERENCES kandidat(id_kandidat)
);

CREATE TABLE pengalaman_kerja (
    id_kandidat INT,
    nama_institusi VARCHAR(100),
    posisi VARCHAR(100),
    deskripsi TEXT,
    tgl_mulai DATE,
    tgl_berakhir DATE,

    FOREIGN KEY (id_kandidat) REFERENCES kandidat(id_kandidat)
);

CREATE TABLE lowongan (
    no_lowongan VARCHAR(10) PRIMARY KEY,
    judul VARCHAR(100),
    kriteria_kandidat TEXT,
    tipe_pekerja ENUM('Fulltime','Parttime','Kontrak','Outsourcing'),
    tgl_unggahan DATE,
    tgl_penutupan DATE,
    departemen ENUM('SDM','Pemasaran','Keuangan','Produksi','IT','Pengadaan'),
    status_lowongan ENUM('Terbuka','Sudah Tutup','Draf')
);

CREATE TABLE lamaran (
    no_lamaran INT AUTO_INCREMENT PRIMARY KEY,
    id_kandidat INT,
    no_lowongan VARCHAR(10),
    no_lamaran_custom VARCHAR(30) UNIQUE,
    tgl_pengajuan DATE,

    FOREIGN KEY (id_kandidat) REFERENCES kandidat(id_kandidat),
    FOREIGN KEY (no_lowongan) REFERENCES lowongan(no_lowongan)
);

CREATE TABLE hrd (
    nip VARCHAR(20) PRIMARY KEY,
    nama_hrd VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE hasil_putusan (
    no_lamaran INT,
    nip VARCHAR(20),
    tgl_putusan DATE,
    deskripsi_evaluasi TEXT,
    putusan ENUM('Lolos','Tidak Lolos','Review Berkas','Interview','Tertunda'),
    no_putusan_custom VARCHAR(50) UNIQUE,


    FOREIGN KEY (no_lamaran) REFERENCES lamaran(no_lamaran),
    FOREIGN KEY (nip) REFERENCES hrd(nip)
);


INSERT INTO kandidat (nama_kandidat, nik, alamat, ttl, jk, telp, email, password) VALUES
('Ahmad Nurhadi', '3276011234', 'Bandung', '2000-05-10', 'L', '0812345678', 'ahmad@gmail.com', 'ahmad123'),
('Siti Komariah', '3276025678', 'Cimahi', '1999-12-01', 'P', '0821123412', 'siti@gmail.com', 'siti123'),
('Budi Santoso', '3276035678', 'Garut', '1998-03-20', 'L', '08135551234', 'budi@gmail.com', 'budi123'),
('Dina Maulida', '3276045678', 'Tasikmalaya', '2001-07-15', 'P', '08214567891', 'dina@gmail.com', 'dina123'),
('Rizky Hidayat', '3276055678', 'Sumedang', '2000-10-02', 'L', '08126789456', 'rizky@gmail.com', 'rizky123'),
('Fitri Andini', '3276065678', 'Bandung', '1997-08-25', 'P', '08211234876', 'fitri@gmail.com', 'fitri123'),
('Imam Subekti', '3276075678', 'Cianjur', '1999-11-11', 'L', '08134567812', 'imam@gmail.com', 'imam123'),
('Nurul Aini', '3276085678', 'Depok', '2002-01-01', 'P', '08213344556', 'nurul@gmail.com', 'nurul123'),
('Agus Firmansyah', '3276095678', 'Bogor', '1995-04-04', 'L', '08123455678', 'agus@gmail.com', 'agus123'),
('Rina Kartika', '3276105678', 'Bekasi', '2003-06-06', 'P', '08214569876', 'rina@gmail.com', 'rina123');

INSERT INTO riwayat_pendidikan (id_kandidat, jenjang, prodi, nama_institusi, tahun_mulai, tahun_selesai, skor) VALUES
(001, 'sarjana', 'Teknik Informatika', 'UNPAD', 2018, 2022, 3.45),
(002, 'sarjana', 'Manajemen', 'UNJ', 2017, 2021, 3.80),
(003, 'sarjana', 'Sistem Informasi', 'UGM', 2016, 2020, 3.60),
(004, 'Magister', 'Akuntansi', 'UNPAS', 2018, 2022, 3.75),
(005, 'sarjana', 'Teknik Industri', 'ITENAS', 2017, 2021, 3.50),
(006, 'sarjana', 'Psikologi', 'UIN Bandung', 2015, 2019, 3.65),
(007, 'Magister', 'Teknik Elektro', 'ITB', 2017, 2021, 3.88),
(008, 'sarjana', 'Ilmu Komunikasi', 'UNPAD', 2019, 2023, 3.70),
(009, 'SMA/SMK', 'Ekonomi', 'SMA 17 Jakarta', 2014, 2018, 3.40),
(010, 'sarjana', 'Teknik Sipil', 'ITS', 2019, 2023, 3.55);


INSERT INTO pengalaman_kerja (id_kandidat, nama_institusi, posisi, deskripsi, tgl_mulai, tgl_berakhir) VALUES
(001, 'PT Telkom', 'Programmer', 'Membuat aplikasi internal', '2022-01-01', '2023-12-01'),
(002, 'PT Indofood', 'Admin Gudang', 'Pengelolaan stok barang', '2021-06-01', '2022-12-01'),
(003, 'PT PLN', 'Staf TI', 'Support sistem informasi perusahaan', '2020-02-01', '2022-11-01'),
(004, 'PT Astra', 'Finance Staff', 'Pencatatan keuangan bulanan', '2022-01-01', '2023-01-01'),
(005, 'PT Gojek', 'Logistik Analyst', 'Optimasi rute pengiriman', '2019-07-01', '2020-12-01'),
(006, 'PT Pegadaian', 'HR Assistant', 'Mengelola data pelamar kerja', '2018-01-01', '2019-08-01'),
(007, 'PT Pindad', 'Teknisi Lapangan', 'Maintenance peralatan', '2019-05-01', '2020-11-01'),
(008, 'PT Antam', 'Staff Media', 'Mengelola konten sosial media', '2023-01-01', '2023-06-01'),
(009, 'PT Bank BRI', 'Customer Service', 'Melayani nasabah', '2018-02-01', '2020-02-01'),
(010, 'PT Wijaya Karya', 'Surveyor', 'Pengukuran lapangan proyek', '2023-01-01', '2023-05-01');

INSERT INTO lowongan (no_lowongan, judul, kriteria_kandidat, tipe_pekerja, tgl_unggahan, tgl_penutupan, departemen, status_lowongan) VALUES
('LWPW', 'Programmer Web', 'S1 TI, HTML, PHP', 'fulltime', '2025-06-01', '2025-06-30', 'IT', 'Terbuka'),
('LWAG', 'Admin Gudang', 'S1 Manajemen, pengalaman min. 1 tahun', 'kontrak', '2025-06-01', '2025-06-25', 'Produksi', 'Terbuka'),
('LWDM', 'Digital Marketing', 'S1 Komunikasi atau setara', 'fulltime', '2025-06-03', '2025-06-28', 'Pemasaran', 'Terbuka'),
('LWHR', 'Staf HRD', 'S1 Psikologi/Manajemen SDM', 'kontrak', '2025-06-02', '2025-06-26', 'SDM', 'Sudah Tutup');

INSERT INTO lamaran2 (id_kandidat, no_lowongan, tgl_pengajuan) VALUES
('1','LWPW', '2025-06-20');
('102', 002, 'LWAG', '2025-06-12'),
('103', 003, 'LWPW', '2025-06-13'),
('104', 004, 'LWAG', '2025-06-13'),
('105', 005, 'LWAG', '2025-06-14'),
('106', 006, 'LWHR', '2025-06-14'),
('107', 007, 'LWAG', '2025-06-15'),
('108', 008, 'LWHR', '2025-06-15'),
('109', 009, 'LWDM', '2025-06-16'),
('110', 010, 'LWAG', '2025-06-16');

INSERT INTO hrd (nip, nama_hrd, password) VALUES
('HRD01', 'Rina Marlina', 'hrd123'),
('HRD02', 'Dika Ramdani', 'admin567');

INSERT INTO hasil_putusan (no_lamaran_custom,nip,tgl_putusan,deskripsi_evaluasi,putusan,no_putusan_custom) VALUES
('LWAG-2025-1', 'HRD01', '2025-06-20', 'Kandidat memenuhi kriteria dan akan lanjut interview.', 'Interview', 'PTSN001'),
('LWPW-2025-1', 'HRD02', '2025-06-15', 'Masih menunggu dokumen tambahan dari kandidat.', 'Tertunda', 'PTSN002'),
('LWDM-2025-2', 'HRD001', '2025-06-22', 'Berkas telah diverifikasi, lanjut ke tahap wawancara.', 'Review Berkas', 'PTSN004');


CREATE DATABASE rekrutmen;

use rekrutmen;

CREATE TABLE loker_yg_dilamar (
    no_lowongan VARCHAR(10),
    kd_lamaran VARCHAR(30) UNIQUE,
    no_lamaran_custom VARCHAR(30),

    FOREIGN KEY (no_lamaran_custom) REFERENCES lamaran2(no_lamaran_custom),
    FOREIGN KEY (no_lowongan) REFERENCES lowongan(no_lowongan)
);


CREATE TABLE lamaran2 (
    no_lamaran INT AUTO_INCREMENT PRIMARY KEY,
    id_kandidat INT,
    no_lamaran_custom VARCHAR(30) UNIQUE,
    tgl_pengajuan DATE,

    FOREIGN KEY (id_kandidat) REFERENCES kandidat(id_kandidat)
);

INSERT INTO lamaran2 (id_kandidat, no_lamaran_custom, tgl_pengajuan) VALUES
('2','1-02', '2025-06-21');

INSERT INTO loker_yg_dilamar (no_lowongan, kd_lamaran, no_lamaran_custom) VALUES
('LWPW', 'LWPW-2-01', '2-01');


