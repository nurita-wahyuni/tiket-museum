CREATE DATABASE museum_db;

USE museum_db;

CREATE TABLE museum (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    harga INT
);

CREATE TABLE pemesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pengunjung VARCHAR(100),
    museum_id INT,
    jumlah_tiket INT,
    total_harga INT,
    FOREIGN KEY (museum_id) REFERENCES museum(id)
);

-- Data awal museum
INSERT INTO museum (nama, harga) VALUES
('Museum Kayu Tuah Himba', 10000),
('Museum Mulawarman', 25000);