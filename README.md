# Website Sederhana (Tugas ke-2)

Project ini adalah website sederhana berbasis PHP, MySQL, HTML, CSS, dan JavaScript.  
Dibuat menggunakan **Laragon**, **VSCode**, **Git**, dan **Figma**.

---

## Fitur Utama
- Login (Validasi sederhana)
- Dashboard sederhana
- Logout
- Koneksi database MySQL
- Tampilan mengikuti tema **Bridgestone (Merah – Hitam)**

---

## Struktur Folder
website-sederhana/
│── index.php
│── dashboard.php
│── logout.php
│── /assets
│ └── logoPT.BRIDGESTONE.png
| └── style.css
| └── script.js
└── /config
  └── koneksi.php

  
---

## Database
### **Nama Database:** `website_sederhana`

### **Tabel: users**
| Kolom | Tipe | Keterangan |
|-------|------|-------------|
| id | INT (AI) | Primary Key |
| username | VARCHAR(100) | Username |
| password | VARCHAR(200) | Password |

### **SQL (users.sql)**
```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('admin', '12345');


-----------------------------------------
// README Tugas Ke-4 // 

# Fitur Utama
- Login sistem (dengan hashing password)
- Dashboard
- CRUD Data Karyawan
- Logout

---

## Validasi
- Username tidak boleh kosong
- Password minimal 6 karakter
- Validasi form tambah/edit karyawan

---

### Keamanan
Fitur keamanan yang sudah diterapkan:
- Prepared Statements (mencegah SQL Injection)
- htmlspecialchars untuk mencegah XSS
- password_hash() dan password_verify()
- Validasi client-side (JavaScript)
- Validasi server-side (PHP).

----------------------------------------------
 
# README Tugas ke-5

## Fitur yang Tersedia

* **Dashboard** untuk melihat ringkasan data
* **Data Karyawan** (Tambah, Edit, Hapus)
* **Data Absensi** (masih kosong)
* **Settings** (masih kosong)
* **Logout** (sudah bisa langsung keluar dari Dashboard/ke Halaman Login)

## Cara Install dan Menjalankan Project

### 1. Clone atau Download Project

Download project sebagai ZIP atau clone repository:

```bash
contoh --> git clone https://github.com/ilhamnur02/repo.git
```

### 2. Install Dependencies

Jika menggunakan PHP + MySQL dan Laragon:

* Pastikan **Laragon** sudah terinstall
* Pindahkan folder project ke dalam:

```
contoh --> D:/Laragon/www/website-sederhana/
```

### 3. Import Database

* Buka **phpMyAdmin6** melalui menu Laragon → Database
* Buat database baru
* Import file SQL dari folder backup (`.sql`)

### 4. Konfigurasi Koneksi Database

Edit file:

```
contoh --> config/koneksi.php
```

Sesuaikan dengan:

```php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_website_sederhana';
```

### 5. Jalankan Project

Akses melalui browser:

```
http://localhost/website-sederhana/
```

--- Project siap dijalankan ---

----------------------------------------------

Screenshot final UI :

### Halaman Login
![image](https://github.com/ilhamnur02/website-sederhana/assets/Login.png)

### Halaman Dashboard
![image](https://github.com/ilhamnur02/website-sederhana/assets/Dashboard.png)

### Halaman Data Karyawan
![image](https://github.com/ilhamnur02/website-sederhana/assets/DataKaryawan.png)

### Halaman Tambah Karyawan
![image](https://github.com/ilhamnur02/website-sederhana/assets/TambahKaryawan.png)

### Halaman Edit Karyawan
![image](https://github.com/ilhamnur02/website-sederhana/assets/EditKaryawan.png)

### FIGMA
![image](https://github.com/ilhamnur02/website-sederhana/assets/UI_website-sederhana.png)