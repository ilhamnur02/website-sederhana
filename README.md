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

