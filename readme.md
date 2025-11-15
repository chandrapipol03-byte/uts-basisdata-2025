# 🏥 Hospital Management System – Database Documentation  
_Premium Edition_

---

## 📑 Daftar Isi
- [Deskripsi Sistem](#deskripsi-sistem)
- [Struktur Database](#struktur-database)
- [Detail Schema & Penjelasan](#detail-schema--penjelasan)
  - Rumah Sakit  
  - Poliklinik  
  - Dokter  
  - Jadwal Praktek  
  - Pasien  
  - Kunjungan  
  - Obat  
  - Resep  
  - Resep Item
- [Relasi ERD](#relasi-erd)
- [Daftar Migration](#daftar-migration)
- [Daftar Seeder](#daftar-seeder)
- [Catatan Desain](#catatan-desain)

---

# 📌 Deskripsi Sistem
Dokumentasi ini berisi penjelasan lengkap mengenai **struktur database** yang digunakan dalam Sistem Informasi Rumah Sakit.

Database terdiri dari 9 tabel utama:

- rumah_sakits  
- polikliniks  
- dokters  
- jadwal_prakteks  
- pasiens  
- kunjungans  
- obats  
- reseps  
- resep_items  

Semua didesain mengikuti standar **Relational Database Model** yang stabil dan terukur.

---

# 🏛️ Struktur Database
Berikut daftar tabel dan fungsinya:

| Tabel | Fungsi |
|-------|--------|
| rumah_sakits | Master data rumah sakit |
| polikliniks | Daftar poliklinik per rumah sakit |
| dokters | Data dokter & spesialisasi |
| jadwal_prakteks | Jadwal kerja dokter |
| pasiens | Data pasien & informasi pribadi |
| kunjungans | Riwayat kunjungan pasien |
| obats | Data obat di apotek |
| reseps | Catatan resep medis |
| resep_items | Detail obat dalam resep |

---

# 🧱 Detail Schema & Penjelasan

---

## 🏥 1. Tabel: `rumah_sakits`
**Deskripsi:** Menyimpan identitas rumah sakit.

| Kolom | Tipe | Deskripsi |
|------|------|-----------|
| id | BIGINT | Primary key |
| nama | VARCHAR(150) | Nama rumah sakit |
| alamat | TEXT | Alamat lengkap |
| kota | VARCHAR(100) | Kota operasional |
| no_telepon | VARCHAR(20) | Kontak utama |
| email | VARCHAR(150) | Email resmi |
| status | ENUM(aktif, nonaktif) | Status operasional |
| created_at / updated_at | TIMESTAMP | Default Laravel |

---

## 🏥 2. Tabel: `polikliniks`
**Deskripsi:** Unit poliklinik dalam rumah sakit.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| rumah_sakit_id | BIGINT FK |
| nama_poliklinik | VARCHAR(150) |
| kode_poli | VARCHAR(20) |
| deskripsi | TEXT |
| created_at | TIMESTAMP |

---

## 🩺 3. Tabel: `dokters`
**Deskripsi:** Data dokter beserta spesialisasinya.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| rumah_sakit_id | FK |
| nama | VARCHAR(150) |
| jenis_kelamin | ENUM(L, P) |
| spesialisasi | VARCHAR(100) |
| no_telepon | VARCHAR(20) |
| email | VARCHAR(150) |
| sip | VARCHAR(100) |
| status | ENUM(aktif, cuti, nonaktif) |
| created_at | TIMESTAMP |

---

## 📅 4. Tabel: `jadwal_prakteks`
**Deskripsi:** Jadwal kerja dokter.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| dokter_id | FK |
| hari | ENUM(Senin–Minggu) |
| jam_mulai | TIME |
| jam_selesai | TIME |
| kuota_pasien | INT |
| created_at | TIMESTAMP |

---

## 👤 5. Tabel: `pasiens`
**Deskripsi:** Data pribadi pasien.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| no_rm | VARCHAR UNIQUE |
| nama | VARCHAR |
| nik | VARCHAR(16) |
| jenis_kelamin | ENUM(L,P) |
| tanggal_lahir | DATE |
| alamat | TEXT |
| no_telepon | VARCHAR |
| golongan_darah | ENUM(A,B,AB,O) |
| alergi | TEXT |
| created_at | TIMESTAMP |

---

## 📄 6. Tabel: `kunjungans`
**Deskripsi:** Riwayat kunjungan pasien.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| pasien_id | FK |
| dokter_id | FK |
| poliklinik_id | FK |
| keluhan | TEXT |
| diagnosis | TEXT |
| tanggal_kunjungan | DATE |
| status | ENUM(menunggu, diperiksa, selesai) |
| created_at | TIMESTAMP |

---

## 💊 7. Tabel: `obats`
**Deskripsi:** Data obat dan stok.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| kode_obat | VARCHAR UNIQUE |
| nama_obat | VARCHAR |
| sediaan | ENUM(tablet, kapsul, sirup, salep, ampul) |
| kategori | ENUM(bebas, resep, narkotika) |
| stok | INT |
| harga | DECIMAL(12,2) |
| expired_at | DATE |
| created_at | TIMESTAMP |

---

## 📝 8. Tabel: `reseps`
**Deskripsi:** Resep dari dokter.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| kunjungan_id | FK |
| dokter_id | FK |
| pasien_id | FK |
| tanggal_resep | DATE |
| catatan | TEXT |
| total_harga | DECIMAL(12,2) |
| created_at | TIMESTAMP |

---

## 🧾 9. Tabel: `resep_items`
**Deskripsi:** Detail obat dalam resep.

| Kolom | Tipe |
|-------|------|
| id | BIGINT |
| resep_id | FK |
| obat_id | FK |
| jumlah | INT |
| aturan_pakai | TEXT |
| subtotal | DECIMAL(12,2) |
| created_at | TIMESTAMP |

---

# 🔗 Relasi ERD
