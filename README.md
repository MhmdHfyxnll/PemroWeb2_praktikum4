# 🔐 Praktikum 4 - Modul Login CodeIgniter 4

👤 **Nama:** Naufal Rafi Haryanto
🆔 **NIM:** 312410118
📚 **Mata Kuliah:** Pemrograman Web 2

---

## 🎯 Deskripsi

Praktikum ini bertujuan untuk mengimplementasikan sistem **Login (Authentication)** menggunakan framework **CodeIgniter 4**.
Sistem ini memungkinkan user untuk login, mengakses halaman admin, serta membatasi akses menggunakan filter.

---

## ✨ Fitur Utama

* 🔐 Login user (tanpa hash / plain password untuk praktikum)
* 🚪 Logout
* 🧠 Session login
* 🛡️ Proteksi halaman admin menggunakan Auth Filter
* 🎨 Tampilan login modern (UI sederhana)

---

## 🗄️ Struktur Database

### Tabel: `user`

| Field        | Tipe Data | Keterangan  |
| ------------ | --------- | ----------- |
| id           | INT       | Primary Key |
| username     | VARCHAR   | Nama user   |
| useremail    | VARCHAR   | Email user  |
| userpassword | VARCHAR   | Password    |

---

## ⚙️ Cara Menjalankan Project

### 1. Jalankan XAMPP

* Aktifkan **Apache**
* Aktifkan **MySQL**

---

### 2. Buat Database

Masuk ke phpMyAdmin lalu buat database:

```sql
CREATE DATABASE lab14_ci;
```

---

### 3. Buat Tabel User

```sql
CREATE TABLE user (
  id INT(11) AUTO_INCREMENT,
  username VARCHAR(200) NOT NULL,
  useremail VARCHAR(200),
  userpassword VARCHAR(200),
  PRIMARY KEY (id)
);
```

---

### 4. Insert Data User

```sql
INSERT INTO user (username, useremail, userpassword) VALUES (
'admin',
'admin@email.com',
'admin123'
);
```

---

### 5. Konfigurasi Database

Edit file `.env`:

```ini
database.default.hostname = localhost
database.default.database = lab14_ci
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

---

### 6. Jalankan Project

Buka terminal:

```bash
php spark serve
```

---

### 7. Akses di Browser

```text
http://localhost:8080/user/login
```

---

## 🔑 Login Default

* **Email:** [admin@email.com](mailto:admin@email.com)
* **Password:** admin123

---

## 🛡️ Sistem Keamanan

* Menggunakan **Session** untuk menyimpan status login
* Menggunakan **Auth Filter** untuk membatasi akses ke halaman admin
* User yang belum login akan diarahkan ke halaman login

---

## 📁 Struktur Folder Penting

```
app/
├── Controllers/
│   ├── User.php
│   └── Artikel.php
├── Models/
│   └── UserModel.php
├── Views/
│   ├── user/login.php
│   └── admin/artikel.php
├── Filters/
│   └── Auth.php
```

---

## 🧪 Hasil Pengujian

* ✅ Login berhasil dengan data yang benar
* ❌ Login gagal jika password salah
* 🔐 Halaman admin tidak bisa diakses tanpa login
* 🚪 Logout berhasil menghapus session

---

## 💡 Kesimpulan

Melalui praktikum ini, saya memahami:

* Cara membuat sistem login di CodeIgniter 4
* Penggunaan session untuk autentikasi
* Implementasi filter untuk keamanan akses halaman

---

## 🚀 Penutup

Praktikum ini menjadi dasar penting dalam pengembangan sistem autentikasi pada aplikasi web berbasis framework modern.

---
