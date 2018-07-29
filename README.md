# Peraturan Repositori Ini
Website khusus untuk bagian pegawai

Ada 4 branch pada repositori ini
- master
- Rizki
- Ragil
- Tio

branch master adalah template awal disitu sudah inisialisasi template admin jadi
tinggal ngoding aja.
branch Rizki, Ragil, Tio adalah tempat kita masing masing kembangin aplikasi
jadi masing masing dari kita punya branch dan tidak push ke branch lain atau master.
ketika kita selesai mengerjakan branch maka pada akhir pekan atau ketika apa yang
kita kerjakan selesai maka semua branch akan disatukan menjadi branch master,
lalu jika ada fitur baru buat branch lagi setelah selesai satukan ke master, begitu seterusnya.

> __Warning__ : JANGAN PUSH KE BRANCH MASTER


## Cara Inisialisasi Repositori Ke Folder (Dilakukan saat pertama kali)
- git init
- git remote add origin https://github.com/karyaTio/Sistem_Pegawai
- git pull origin nama_branch
> __Contoh__ : git pull origin Tio

## Cara push ke branch masing masing
- git checkout nama_branch
> __Contoh__ : git checkout Tio (digunakan untuk berganti branch)
- git add .
- git commit -m "Pesan anda kepada tim"
- git push origin nama_branch
> __Contoh__ : git push -u origin Tio

> __Warning__ : JANGAN PUSH KE BRANCH MASTER


## Catatan Project
- Fokus pada proses bisnis untuk aplikasi kita (fokus pada tampilan)
- Backup dan restore database gunakan sqlyog

## Format Penulisan Controller, Model, dan View

1. Controller = C_Admin
2. Model = M_Admin
3. View = V_Admin

buat folder di dalam view masing masing agar tidak berantakan

__contoh__
view/admin/v_admin.php
view/<namafolder>/v_namaView.php
