# PROYEK 3 - MODUL 3 - LARAVEL BASIC
Nama: Rizky Yanuar Irawan
Kelas: 2A D3
NIM: 251511029

# Struktur Direktori Utama

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── ActivityController.php   # Mengatur flow HTTP Request & Response
│   │   └── Controller.php
│   └── Requests/
│       ├── StoreActivityRequest.php  # Validasi input pembuatan aktivitas
│       └── UpdateActivityRequest.php # Validasi input pembaruan aktivitas
├── Models/
│   ├── Activity.php                  # Model Eloquent + Query Scope Filter
│   └── User.php
├── Providers/
│   └── AppServiceProvider.php
└── Services/
    └── ActivityService.php           # Encapsulation logika bisnis & persistence
resources/
└── views/
    ├── activities/
    │   ├── _form.blade.php           # Partial view untuk form create & edit
    │   ├── create.blade.php          # Tampilan tambah kegiatan
    │   ├── edit.blade.php            # Tampilan edit kegiatan
    │   ├── index.blade.php           # Tampilan daftar kegiatan + Filter
    │   └── show.blade.php            # Tampilan rincian/detail kegiatan
    └── layouts/                      # Layout utama aplikasi (Blade)
```

---

# Arsitektur & Peran Komponen

Sistem menggunakan alur pemisahan tanggung jawab sebagai berikut:

```text
[ Browser ] ──(HTTP GET/POST)──> [ Route (web.php) ]
                                          │
                                          ▼
                                [ FormRequest (Validation) ]
                                          │
                                          ▼
                                [ ActivityController ]
                                          │
                                          ▼
                                [ ActivityService (Business Logic) ]
                                          │
                                          ▼
                                [ Activity Model / Eloquent DB ]
                                          │
                                          ▼
                                [ Blade View Response ]
```

# Akses aplikasi melalui browser pada alamat [http://127.0.0.1:8000/activities](http://127.0.0.1:8000/activities).