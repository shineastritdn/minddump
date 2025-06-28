@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Tentang MindDump</h1>
                    
                    <div class="mb-5">
                        <h2 class="h4 mb-3">Visi Kami</h2>
                        <p class="text-muted">
                            MindDump adalah platform jurnal digital yang memungkinkan pengguna untuk menulis dan berbagi cerita secara anonim. 
                            Kami percaya bahwa setiap orang memiliki cerita yang layak untuk dibagikan, dan setiap cerita berhak mendapatkan 
                            ruang untuk didengar.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">Misi Kami</h2>
                        <p class="text-muted">
                            Kami berkomitmen untuk menyediakan platform yang aman dan nyaman bagi pengguna untuk mengekspresikan diri mereka 
                            tanpa rasa takut akan penilaian atau stigma. Melalui MindDump, kami berharap dapat menciptakan komunitas yang 
                            mendukung dan inklusif di mana setiap orang merasa bebas untuk berbagi pengalaman mereka.
                        </p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">Nilai-Nilai Kami</h2>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2">✓ Privasi dan Anonimitas</li>
                            <li class="mb-2">✓ Inklusivitas dan Keragaman</li>
                            <li class="mb-2">✓ Empati dan Dukungan</li>
                            <li class="mb-2">✓ Kreativitas dan Ekspresi</li>
                            <li class="mb-2">✓ Keamanan dan Kepercayaan</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 mb-3">Tim Kami</h2>
                        <p class="text-muted">
                            MindDump dikembangkan oleh tim yang berdedikasi untuk menciptakan pengalaman yang bermakna bagi pengguna kami. 
                            Kami terdiri dari pengembang, desainer, dan penulis yang bersemangat tentang teknologi dan kemanusiaan.
                        </p>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('journals.create') }}" class="btn btn-primary me-2">Mulai Menulis</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 