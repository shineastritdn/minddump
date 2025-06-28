@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <!-- Main Image -->
                    <img src="{{ asset('images/journal-writing.jpg') }}" alt="Menulis Jurnal" 
                         class="img-fluid rounded-4 shadow-lg" 
                         style="width: 100%; height: auto; object-fit: cover;">
                    
                    <!-- Floating Stats -->
                    <div class="position-absolute top-0 end-0 mt-3 me-3">
                        <div class="bg-white rounded-pill shadow-sm px-4 py-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-users text-primary me-2"></i>
                                <span>5000+ Pengguna Aktif</span>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 start-0 mb-3 ms-3">
                        <div class="bg-primary text-white rounded-pill shadow-sm px-4 py-2">
                            <i class="fas fa-shield-alt me-2"></i>100% Aman & Anonim
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start ps-lg-5">
                <span class="badge bg-primary text-white mb-3">Smart Journal Platform</span>
                <h1 class="display-4 fw-bold mb-4" style="letter-spacing: -1px;">
                    Tempat Terbaik<br>
                    Untuk Menulis<br>
                    <span class="highlight-text">Cerita Hidupmu</span>
                </h1>
                <p class="lead mb-4 text-muted">
                    Tulis, simpan, dan bagikan pengalamanmu dengan bebas.<br>
                    Privasi terjamin, tanpa perlu khawatir.
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ route('journals.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-pen me-2"></i>Mulai Menulis
                    </a>
                    <a href="{{ route('journals.index') }}" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-book-open me-2"></i>Baca Jurnal
                    </a>
                </div>

                <!-- Features List -->
                <div class="row mt-5">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-lock text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Privasi Terjamin</h6>
                                <p class="mb-0 text-muted small">Tulis dengan bebas & aman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-smile-beam text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Mood Tracker</h6>
                                <p class="mb-0 text-muted small">Pantau suasana hatimu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-share-alt text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Berbagi Cerita</h6>
                                <p class="mb-0 text-muted small">Inspirasi untuk yang lain</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="feature-icon me-3">
                                <i class="fas fa-mobile-alt text-primary"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Akses Dimana Saja</h6>
                                <p class="mb-0 text-muted small">Desktop & Mobile friendly</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="bg-light rounded-4 p-4">
                    <h2 class="fw-bold mb-1">5000+</h2>
                    <p class="text-muted mb-0">Pengguna Aktif</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-light rounded-4 p-4">
                    <h2 class="fw-bold mb-1">15000+</h2>
                    <p class="text-muted mb-0">Jurnal Ditulis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-light rounded-4 p-4">
                    <h2 class="fw-bold mb-1">100%</h2>
                    <p class="text-muted mb-0">Privasi Terjamin</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Cara Kerja</h2>
            <p class="text-muted">Mulai menulis jurnal dalam 3 langkah mudah</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="step-number mb-3">
                        <span class="btn btn-lg btn-primary rounded-circle fw-bold">1</span>
                    </div>
                    <h4>Buat Jurnal</h4>
                    <p class="text-muted">Klik tombol "Mulai Menulis" dan tuangkan isi pikiranmu</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="step-number mb-3">
                        <span class="btn btn-lg btn-primary rounded-circle fw-bold">2</span>
                    </div>
                    <h4>Pilih Privasi</h4>
                    <p class="text-muted">Tentukan apakah jurnalmu bersifat pribadi atau publik</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="step-number mb-3">
                        <span class="btn btn-lg btn-primary rounded-circle fw-bold">3</span>
                    </div>
                    <h4>Simpan & Bagikan</h4>
                    <p class="text-muted">Dapatkan kode akses unik untuk membuka jurnalmu kembali</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 bg-primary text-white shadow-lg">
                    <div class="card-body text-center p-5">
                        <h2 class="mb-4">Siap Menulis Jurnalmu?</h2>
                        <p class="lead mb-4">Bergabunglah dengan ribuan pengguna yang telah menemukan kebebasan dalam menulis.</p>
                        <a href="{{ route('journals.create') }}" class="btn btn-lg btn-light">
                            Mulai Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 