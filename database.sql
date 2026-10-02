CREATE DATABASE IF NOT EXISTS kursus_gitar;
USE kursus_gitar;

CREATE TABLE IF NOT EXISTS testimoni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO testimoni (nama, pesan) VALUES
('Andi', 'Belajar gitar di sini sangat menyenangkan. Pengajarnya sabar dan mudah dipahami.'),
('Salsa', 'Saya yang awalnya tidak bisa gitar sekarang sudah bisa memainkan beberapa lagu.');