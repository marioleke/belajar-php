-- buat database fakultas
CREATE DATABASE seal_fakultas;

-- buat table jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

-- buat table mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- masukin data jurusan
insert into jurusan (kode,nama) values ('APBL','Kedokteran');
insert into jurusan (kode,nama) values ('AKTS','Psikologi');

-- masukin data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'19032010134', 'Mario', 'laki-laki', 'Kupang', '2001-03-23', 'Jl. Jatisari Permai 1');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (2,'19032040054', 'Bintang', 'perempuan', 'Kupang', '2001-08-04', 'Jl. Jatisari Permai 2');

-- update data mahasiswa
update mahasiswa set alamat = "Jl. Nusantara" where id = 2;

-- delete data mahasiswa
delete from mahasiswa where id=2;