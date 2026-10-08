# Absensi Wajah — SMA Negeri 5 Kepulauan Aru

Aplikasi absensi siswa satu aplikasi: kamera wajah, data siswa/kelas, rekap, dan export Excel. Frontend dapat dibungkus menjadi APK dengan Capacitor. Backend PHP + MySQL harus ditempatkan pada hosting HTTPS; isi URL API di `frontend/js/config.js`.

## Demo lokal frontend
Buka `frontend/index.html` melalui HTTPS/localhost. Face recognition memakai face-api.js dari CDN dan model di `frontend/models/`.

## Backend
Import `backend/database.sql` ke MySQL. Salin `backend/config/config.example.php` menjadi `config.php`, lalu isi kredensial database.

## APK via GitHub
Workflow `build-apk.yml` membangun Android APK menggunakan Capacitor. Set `API_BASE_URL` di `frontend/js/config.js` ke backend online sebelum build.
