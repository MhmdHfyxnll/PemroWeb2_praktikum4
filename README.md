# Praktikum 4 - Login System CodeIgniter 4

### Nama  : Muhammad Hafiyainul Yakin Wahid

### NIM   : 312410164


## Deskripsi
Praktikum ini membahas implementasi sistem login pada aplikasi web menggunakan CodeIgniter 4.  
Fitur yang dibuat meliputi autentikasi user, session login, logout, serta proteksi halaman admin.

---

## Fitur Yang Dibuat

- Login User
- Logout User
- Session Login
- Validasi Username dan Password
- Password Hashing
- Halaman Admin Artikel
- CRUD Artikel
- Pagination Artikel
- Search Artikel

---

## Struktur Database

### Tabel User

```sql
CREATE TABLE user (
    id INT(11) auto_increment,
    username VARCHAR(200) NOT NULL,
    useremail VARCHAR(200),
    userpassword VARCHAR(200),
    PRIMARY KEY(id)
);
```
### Menambahkan User Admin
```
INSERT INTO user (username, useremail, userpassword)
VALUES (
    'admin',
    'admin@gmail.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
);
```

### Login Admin
- Username : admin
- Password : password

### Routing
```
$routes->match(['get', 'post'], '/user/login', 'User::login');
$routes->get('/user/logout', 'User::logout');

$routes->get('/admin/artikel', 'Artikel::admin_index');

$routes->match(['get', 'post'],
    '/admin/artikel/add',
    'Artikel::add'
);

$routes->match(['get', 'post'],
    '/admin/artikel/edit/(:num)',
    'Artikel::edit/$1'
);

$routes->get(
    '/admin/artikel/delete/(:num)',
    'Artikel::delete/$1'
);
```

### Controller Login

Controller login digunakan untuk:

- Memvalidasi username
- Memvalidasi password
- Membuat session login
- Redirect ke halaman admin

### Tampilan yang dibuat

#### Halaman Login
- Form usernam
- Form password
- Validasi error login

#### Halaman Admin
- Daftar artikel
- Tambah artikel
- Edit artikel
- Hapus artikel
- Search artikel
- Pagination artikel
- Tombol logout

### URL Pengujian

#### Login
```
http://127.0.0.1:8080/user/login
```
<img width="1366" height="768" alt="Screenshot from 2026-05-25 20-26-07" src="https://github.com/user-attachments/assets/b29770a2-d98a-4d68-bd1a-a2916d9b8542" />


#### Logout
```
http://127.0.0.1:8080/user/logout
```
<img width="1366" height="768" alt="Screenshot from 2026-05-25 20-26-32" src="https://github.com/user-attachments/assets/152097a4-a710-4f1c-9fb3-c8e003e7fd6a" />


#### Admin Artikel
```
http://127.0.0.1:8080/admin/artikel
```
<img width="1366" height="768" alt="Screenshot from 2026-05-25 15-11-28" src="https://github.com/user-attachments/assets/8f660f48-47d1-4dd6-ae47-d8e4c3a59ca7" />


#### Halaman Artikel
```
http://127.0.0.1:8080/artikel
```
<img width="1366" height="768" alt="Screenshot from 2026-05-25 15-11-53" src="https://github.com/user-attachments/assets/0cbce93c-faaf-4abd-aa43-7e1a54d58807" />


### Hasil Praktikum
Sistem login berhasil dibuat menggunakan CodeIgniter 4 dengan fitur autentikasi user dan session login.
Halaman admin artikel dapat diakses setelah user berhasil login.
Fitur CRUD artikel, pagination, dan search juga berjalan dengan baik.
