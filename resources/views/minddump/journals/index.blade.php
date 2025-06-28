@extends('layouts.app')

@section('title', 'Jurnal Publik')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Jurnal Publik</h3>
                <a href="{{ route('journals.create') }}" class="btn btn-light">
                    <i class="fas fa-plus me-1"></i> Tulis Jurnal Baru
                </a>
            </div>
            <div class="card-body">
                @if($journals->isEmpty())
                    <div class="text-center py-5">
                        <i class="fas fa-book-open fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Belum ada jurnal publik yang ditulis.</p>
                        <a href="{{ route('journals.create') }}" class="btn btn-primary">
                            <i class="fas fa-pen me-1"></i> Mulai Menulis
                        </a>
                    </div>
                @else
                    <div class="row">
                        @foreach($journals as $journal)
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $journal->title }}</h5>
                                        <p class="card-text text-muted small">
                                            <i class="far fa-calendar-alt me-1"></i>
                                            {{ $journal->created_at->format('d M Y') }}
                                        </p>
                                        <p class="card-text">
                                            {{ Str::limit(strip_tags($journal->content), 100) }}
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-{{ $journal->mood === 'happy' ? 'success' : 
                                                ($journal->mood === 'sad' ? 'info' : 
                                                ($journal->mood === 'angry' ? 'danger' : 
                                                ($journal->mood === 'anxious' ? 'warning' : 'secondary'))) }}">
                                                @switch($journal->mood)
                                                    @case('happy')
                                                        😊 Bahagia
                                                        @break
                                                    @case('sad')
                                                        😢 Sedih
                                                        @break
                                                    @case('angry')
                                                        😠 Marah
                                                        @break
                                                    @case('anxious')
                                                        😰 Cemas
                                                        @break
                                                    @default
                                                        😐 Netral
                                                @endswitch
                                            </span>
                                            <a href="{{ route('journals.show', $journal->access_code) }}" 
                                               class="btn btn-sm btn-outline-primary">
                                                Baca
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 