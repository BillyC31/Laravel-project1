<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $name = 'Billy Chayady';
    $deskripsi = 'Seorang mahasiswa yang juga sedang bekerja adalah individu yang sedang menjalani dua peran yang berbeda secara bersamaan. Di satu sisi, mereka adalah seorang mahasiswa yang sedang mengejar pendidikan tinggi, seperti gelar sarjana atau pasca-sarjana, di universitas atau perguruan tinggi. Mereka mungkin mengikuti berbagai mata kuliah, mengerjakan tugas akademik, dan terlibat dalam aktivitas kampus.Di sisi lain, sebagai seorang yang sedang bekerja, mereka memiliki pekerjaan atau pekerjaan paruh waktu yang mereka lakukan untuk mendapatkan penghasilan. Pekerjaan ini dapat beragam, seperti bekerja di restoran, toko, kantor, atau bahkan pekerjaan lepas. Meskipun mereka tengah mengejar pendidikan tinggi, mereka juga aktif dalam dunia kerja untuk membiayai pendidikan mereka sendiri atau memenuhi kebutuhan sehari-hari. Seorang mahasiswa yang juga sedang bekerja harus mengelola waktu dengan baik dan memiliki kemampuan multitasking yang kuat untuk menjalani kedua peran tersebut. Ini adalah tantangan yang bisa mengajarkan keterampilan manajemen waktu, disiplin, dan kemampuan beradaptasi yang sangat berharga dalam kehidupan mereka. Selain itu, pengalaman bekerja sambil kuliah juga bisa memberikan mereka wawasan praktis yang bermanfaat untuk karir mereka di masa depan setelah menyelesaikan pendidikan mereka.';

    $data['name'] = $name;
    $data['deskripsi'] = $deskripsi;
    return view('about', $data);
  }
}