@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Syarat & Ketentuan</h1>
                    <p class="text-muted mb-4">Terakhir diperbarui: {{ date('d F Y') }}</p>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">1. Penerimaan Syarat</h2>
                        <p class="text-muted">
                            Dengan mengakses dan menggunakan MindDump, Anda menyetujui untuk terikat dengan syarat dan ketentuan ini. 
                            Jika Anda tidak setuju dengan syarat dan ketentuan ini, mohon untuk tidak menggunakan layanan kami.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">2. Penggunaan Layanan</h2>
                        <p class="text-muted">
                            Anda setuju untuk:
                        </p>
                        <ul class="text-muted">
                            <li>Memberikan informasi yang akurat dan lengkap</li>
                            <li>Menjaga kerahasiaan akun Anda</li>
                            <li>Menggunakan layanan sesuai dengan hukum yang berlaku</li>
                            <li>Tidak menyalahgunakan layanan kami</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">3. Konten Pengguna</h2>
                        <p class="text-muted">
                            Anda bertanggung jawab atas konten yang Anda buat dan bagikan di MindDump. Anda setuju untuk:
                        </p>
                        <ul class="text-muted">
                            <li>Tidak memposting konten ilegal atau melanggar hak orang lain</li>
                            <li>Tidak memposting konten yang bersifat diskriminatif atau ofensif</li>
                            <li>Menghormati privasi dan hak pengguna lain</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">4. Hak Kekayaan Intelektual</h2>
                        <p class="text-muted">
                            Anda mempertahankan hak atas konten yang Anda buat. Namun, Anda memberikan kami lisensi untuk menggunakan, 
                            menyimpan, dan menampilkan konten Anda dalam rangka menyediakan layanan kami.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">5. Pembatasan Layanan</h2>
                        <p class="text-muted">
                            Kami berhak untuk:
                        </p>
                        <ul class="text-muted">
                            <li>Mengubah atau menghentikan layanan kapan saja</li>
                            <li>Membatasi akses ke layanan</li>
                            <li>Menghapus konten yang melanggar syarat dan ketentuan</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">6. Tanggung Jawab</h2>
                        <p class="text-muted">
                            MindDump disediakan "sebagaimana adanya" tanpa jaminan apapun. Kami tidak bertanggung jawab atas:
                        </p>
                        <ul class="text-muted">
                            <li>Konten yang dibuat oleh pengguna</li>
                            <li>Kerugian yang timbul dari penggunaan layanan</li>
                            <li>Masalah teknis atau gangguan layanan</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">7. Perubahan Syarat</h2>
                        <p class="text-muted">
                            Kami dapat mengubah syarat dan ketentuan ini kapan saja. Perubahan akan diberitahukan melalui website atau email.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">8. Kontak</h2>
                        <p class="text-muted">
                            Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami di:
                            <br>
                            Email: legal@minddump.com
                        </p>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('privacy') }}" class="btn btn-outline-primary">Baca Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 