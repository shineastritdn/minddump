@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h3 mb-0">Jurnal Saya</h1>
                <a href="{{ route('journals.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Tulis Jurnal Baru
                </a>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        @forelse($journals as $journal)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{ $journal->title }}</h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($journal->content, 150) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">
                                {{ $journal->created_at->format('d M Y') }}
                            </small>
                            <div class="btn-group">
                                <a href="{{ route('journals.show', $journal->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i>Lihat
                                </a>
                                <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-edit me-1"></i>Edit
                                </a>
                                <form action="{{ route('journals.destroy', $journal->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jurnal ini?')">
                                        <i class="fas fa-trash me-1"></i>Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-book fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">Belum ada jurnal</h4>
                    <p class="text-muted mb-4">Mulai menulis jurnal pertama Anda</p>
                    <a href="{{ route('journals.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Tulis Jurnal Baru
                    </a>
                </div>
            </div>
        @endforelse
    </div>

    @if($journals->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $journals->links() }}
        </div>
    @endif
</div>
@endsection 