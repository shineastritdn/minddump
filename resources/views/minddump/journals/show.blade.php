@extends('layouts.app')

@section('title', $journal->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">{{ $journal->title }}</h3>
                <span class="badge bg-light text-primary">
                    @switch($journal->mood)
                        @case('Senang')
                            😊 Senang
                            @break
                        @case('Sedih')
                            😢 Sedih
                            @break
                        @case('Marah')
                            😠 Marah
                            @break
                        @case('Kecewa')
                            😞 Kecewa
                            @break
                        @case('Bingung')
                            😕 Bingung
                            @break
                        @case('Tenang')
                            😌 Tenang
                            @break
                        @case('Semangat')
                            💪 Semangat
                            @break
                        @case('Lelah')
                            😫 Lelah
                            @break
                        @default
                            😐 Netral
                    @endswitch
                </span>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <p class="text-muted mb-0">
                        <i class="far fa-calendar-alt me-1"></i>
                        {{ $journal->created_at->format('d M Y H:i') }}
                    </p>
                </div>

                <div class="journal-content mb-4">
                    {{ nl2br(e($journal->content)) }}
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="badge bg-{{ $journal->is_public ? 'success' : 'secondary' }}">
                            {{ $journal->is_public ? 'Publik' : 'Pribadi' }}
                        </span>
                    </div>
                    <div>
                        <a href="{{ route('welcome') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 