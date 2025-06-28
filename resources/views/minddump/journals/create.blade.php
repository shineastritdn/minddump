@extends('layouts.app')

@section('title', 'Tulis Jurnal Baru')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">Tulis Jurnal Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('journals.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Isi Jurnal</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mood" class="form-label">Mood Saat Ini</label>
                        <select class="form-select @error('mood') is-invalid @enderror" 
                                id="mood" name="mood" required>
                            <option value="">Pilih mood...</option>
                            <option value="happy" {{ old('mood') == 'happy' ? 'selected' : '' }}>😊 Bahagia</option>
                            <option value="sad" {{ old('mood') == 'sad' ? 'selected' : '' }}>😢 Sedih</option>
                            <option value="angry" {{ old('mood') == 'angry' ? 'selected' : '' }}>😠 Marah</option>
                            <option value="anxious" {{ old('mood') == 'anxious' ? 'selected' : '' }}>😰 Cemas</option>
                            <option value="neutral" {{ old('mood') == 'neutral' ? 'selected' : '' }}>😐 Netral</option>
                        </select>
                        @error('mood')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_public" 
                                   name="is_public" {{ old('is_public') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_public">
                                Buat jurnal ini publik
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Simpan Jurnal
                        </button>
                        <a href="{{ route('welcome') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 