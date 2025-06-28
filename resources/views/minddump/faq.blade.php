@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Pertanyaan yang Sering Diajukan</h1>

                    <div class="accordion" id="faqAccordion">
                        <!-- Apa itu MindDump? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apa itu MindDump?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    MindDump adalah platform jurnal digital yang memungkinkan Anda menulis dan berbagi cerita secara anonim. 
                                    Kami menyediakan ruang yang aman dan nyaman untuk mengekspresikan diri Anda tanpa rasa takut akan penilaian.
                                </div>
                            </div>
                        </div>

                        <!-- Bagaimana cara menggunakan MindDump? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Bagaimana cara menggunakan MindDump?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Untuk menggunakan MindDump:
                                    <ol>
                                        <li>Buat akun atau login jika sudah memiliki akun</li>
                                        <li>Klik tombol "Tulis" untuk membuat jurnal baru</li>
                                        <li>Isi judul dan konten jurnal Anda</li>
                                        <li>Atur privasi jurnal (publik atau pribadi)</li>
                                        <li>Simpan dan bagikan jurnal Anda</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <!-- Apakah konten saya aman? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apakah konten saya aman?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Ya, kami sangat memperhatikan keamanan konten Anda. Semua konten dilindungi dengan enkripsi, 
                                    dan Anda memiliki kendali penuh atas privasi jurnal Anda. Anda dapat memilih untuk membuat jurnal 
                                    publik atau pribadi.
                                </div>
                            </div>
                        </div>

                        <!-- Bisakah saya menghapus jurnal saya? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Bisakah saya menghapus jurnal saya?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Ya, Anda dapat menghapus jurnal Anda kapan saja. Untuk menghapus jurnal:
                                    <ol>
                                        <li>Buka jurnal yang ingin dihapus</li>
                                        <li>Klik tombol "Hapus" di bagian bawah jurnal</li>
                                        <li>Konfirmasi penghapusan</li>
                                    </ol>
                                    Setelah dihapus, jurnal tidak dapat dipulihkan.
                                </div>
                            </div>
                        </div>

                        <!-- Bagaimana cara berbagi jurnal? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Bagaimana cara berbagi jurnal?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Untuk berbagi jurnal:
                                    <ol>
                                        <li>Buka jurnal yang ingin dibagikan</li>
                                        <li>Klik tombol "Bagikan"</li>
                                        <li>Salin link yang diberikan</li>
                                        <li>Bagikan link tersebut dengan orang yang Anda inginkan</li>
                                    </ol>
                                    Pastikan jurnal diatur sebagai publik agar dapat diakses oleh orang lain.
                                </div>
                            </div>
                        </div>

                        <!-- Apakah ada batasan konten? -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                    Apakah ada batasan konten?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Ya, kami memiliki beberapa batasan konten untuk menjaga kenyamanan semua pengguna:
                                    <ul>
                                        <li>Konten ilegal</li>
                                        <li>Konten yang bersifat diskriminatif atau ofensif</li>
                                        <li>Konten yang melanggar hak orang lain</li>
                                        <li>Spam atau konten promosi yang tidak relevan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <p class="text-muted mb-3">Masih memiliki pertanyaan?</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 