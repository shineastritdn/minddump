@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3 mb-0">{{ $journal->title }}</h1>
                        <div class="btn-group">
                            <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-outline-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </a>
                            <form action="{{ route('journals.destroy', $journal->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jurnal ini?')">
                                    <i class="fas fa-trash me-1"></i>Hapus
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="mb-4">
                        <small class="text-muted">
                            Ditulis pada {{ $journal->created_at->format('d F Y H:i') }}
                        </small>
                    </div>

                    <div class="journal-content mb-4">
                        {{ nl2br(e($journal->content)) }}
                    </div>

                    @if($journal->mood)
                        <div class="mb-4">
                            <span class="badge bg-info">
                                <i class="fas fa-smile me-1"></i>{{ $journal->mood }}
                            </span>
                        </div>
                    @endif

                    @if($journal->tags)
                        <div class="mb-4">
                            @foreach($journal->tags as $tag)
                                <span class="badge bg-secondary me-1">
                                    <i class="fas fa-tag me-1"></i>{{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    <div class="mb-4">
                        @if($journal->is_public)
                            <span class="badge bg-info">
                                Ditulis oleh:
                                @if($journal->show_name)
                                    {{ $journal->user->name }}
                                @else
                                    Anonim
                                @endif
                            </span>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <a href="{{ route('journals.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Kembali
                        </a>
                        <div>
                            <button class="btn btn-outline-primary me-2" onclick="copyToClipboard()">
                                <i class="fas fa-share-alt me-1"></i>Bagikan
                            </button>
                            <a href="{{ route('journals.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i>Tulis Jurnal Baru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('Link jurnal berhasil disalin!');
    }).catch(err => {
        console.error('Gagal menyalin link:', err);
    });
}
</script>
@endpush
@endsection 