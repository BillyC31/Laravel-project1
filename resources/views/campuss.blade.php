<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
@extends('component.app')

@section('content')
    <div class="container">
        
        <header>
            <h1>Informasi Universitas</h1>
        </header>
        <main>
            <section id="about">
                <h2>Tentang Universitas</h2>
                <img src="univ.png" >
                <p>Universitas Mikroskil adalah institusi pendidikan tinggi yang menyediakan berbagai program studi, gelar, dan pelatihan akademik dalam berbagai bidang ilmu pengetahuan, seni, dan profesi. Universitas adalah pusat pembelajaran, penelitian, dan pengembangan pengetahuan yang memainkan peran penting dalam masyarakat dan mempersiapkan mahasiswa untuk masa depan mereka.

                    Berikut adalah beberapa ciri-ciri umum tentang sebuah universitas:
                    
                    Pendidikan Tinggi: Universitas menyediakan program pendidikan tinggi, termasuk program sarjana, magister, dan doktor, yang memungkinkan mahasiswa mendapatkan gelar akademik.
                    
                    Beragam Program Studi: Universitas biasanya memiliki berbagai jurusan dan program studi yang mencakup berbagai disiplin ilmu seperti ilmu sosial, ilmu alam, seni, kedokteran, teknik, dan banyak lagi.
                    
                    Penelitian: Universitas seringkali menjadi tempat penelitian ilmiah dan pengembangan teknologi yang signifikan. Fakultas dan mahasiswa terlibat dalam penelitian di berbagai bidang.
                    
                    Staf Akademik: Terdapat dosen dan staf akademik yang berkompeten dan berpengalaman yang bertanggung jawab untuk memberikan pengajaran dan membimbing mahasiswa.
                    
                    Fasilitas: Universitas biasanya dilengkapi dengan fasilitas modern seperti perpustakaan, laboratorium, pusat olahraga, dan teknologi informasi untuk mendukung pembelajaran dan penelitian.
                    
                    Kegiatan Ekstrakurikuler: Selain pendidikan akademik, universitas juga menyediakan berbagai kegiatan ekstrakurikuler seperti klub, organisasi mahasiswa, dan acara sosial yang membantu mahasiswa mengembangkan minat dan bakat mereka.
                    
                    Jaringan Alumni: Banyak universitas memiliki jaringan alumni yang kuat, yang memberikan manfaat kepada lulusan dalam hal peluang kerja dan jejaring profesional.
                    
                    Penerimaan Mahasiswa: Universitas memiliki prosedur penerimaan mahasiswa baru yang berbeda-beda, termasuk persyaratan akademik dan proses seleksi.
                    
                    Pengabdian Masyarakat: Beberapa universitas juga terlibat dalam proyek-proyek pengabdian masyarakat yang memberikan kontribusi positif kepada komunitas lokal dan global.
                    
                    Pengakuan Internasional: Universitas yang terkemuka sering mendapatkan pengakuan internasional dan reputasi yang baik dalam hal kualitas pendidikan dan penelitian.
                    
                    Setiap universitas memiliki karakteristik dan identitas uniknya sendiri, dan mereka berperan penting dalam menghasilkan pemimpin, profesional, dan peneliti yang akan membentuk masa depan.</p>
            </section>
            <section id="programs">
                <h2>Program Studi</h2>
                <ul>
                    <li>Program Sarjana</li>
                    <li>Program Magister</li>                    
                </ul>
            </section>
            <section id="admissions">
                <h2>Penerimaan Mahasiswa Baru</h2>
                <p>Informasi tentang prosedur penerimaan, persyaratan, dan tanggal penting dapat ditemukan di sini.</p>
            </section>
            <section id="contact">
                <h2>Kontak Universitas</h2>
                <address>
                    Alamat: Jalan Universitas XYZ No. 123, Kota ABC<br>
                    Telepon: (123) 456-7890<br>
                    Email: info@universitasxyz.ac.id
                </address>
            </section>
        </main>
        
    </div>
@endsection