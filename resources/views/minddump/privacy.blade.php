@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Kebijakan Privasi</h1>
                    <p class="text-muted mb-4">Terakhir diperbarui: {{ date('d F Y') }}</p>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">1. Informasi yang Kami Kumpulkan</h2>
                        <p class="text-muted">
                            Kami mengumpulkan informasi yang Anda berikan secara langsung kepada kami, seperti:
                        </p>
                        <ul class="text-muted">
                            <li>Informasi akun (nama pengguna, alamat email)</li>
                            <li>Konten yang Anda buat dan bagikan</li>
                            <li>Informasi komunikasi dengan kami</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">2. Bagaimana Kami Menggunakan Informasi</h2>
                        <p class="text-muted">
                            Kami menggunakan informasi yang kami kumpulkan untuk:
                        </p>
                        <ul class="text-muted">
                            <li>Menyediakan dan memelihara layanan kami</li>
                            <li>Meningkatkan dan mengembangkan layanan kami</li>
                            <li>Mengkomunikasikan dengan Anda</li>
                            <li>Melindungi pengguna dan layanan kami</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">3. Privasi Konten</h2>
                        <p class="text-muted">
                            Kami menghormati privasi konten Anda. Konten yang Anda buat di MindDump:
                        </p>
                        <ul class="text-muted">
                            <li>Dapat diatur sebagai publik atau pribadi</li>
                            <li>Dilindungi dengan enkripsi</li>
                            <li>Tidak akan dibagikan tanpa izin Anda</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">4. Keamanan Data</h2>
                        <p class="text-muted">
                            Kami menerapkan langkah-langkah keamanan teknis dan organisasi yang sesuai untuk melindungi data Anda dari akses, 
                            penggunaan, atau pengungkapan yang tidak sah.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">5. Hak Pengguna</h2>
                        <p class="text-muted">
                            Anda memiliki hak untuk:
                        </p>
                        <ul class="text-muted">
                            <li>Mengakses data pribadi Anda</li>
                            <li>Memperbarui atau menghapus data Anda</li>
                            <li>Menolak penggunaan data Anda</li>
                            <li>Mengunduh data Anda</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">6. Kontak</h2>
                        <p class="text-muted">
                            Jika Anda memiliki pertanyaan tentang kebijakan privasi kami, silakan hubungi kami di:
                            <br>
                            Email: privacy@minddump.com
                        </p>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('terms') }}" class="btn btn-outline-primary">Baca Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 