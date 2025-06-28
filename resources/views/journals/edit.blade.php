@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3 mb-0">Edit Jurnal</h1>
                        <a href="{{ route('journals.show', $journal->id) }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Kembali
                        </a>
                    </div>

                    <form action="{{ route('journals.update', $journal->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                id="title" name="title" value="{{ old('title', $journal->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label">Konten</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                id="content" name="content" rows="10" required>{{ old('content', $journal->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="mood" class="form-label">Mood</label>
                                <select class="form-select @error('mood') is-invalid @enderror" 
                                    id="mood" name="mood">
                                    <option value="">Pilih mood...</option>
                                    <option value="Senang" {{ old('mood', $journal->mood) == 'Senang' ? 'selected' : '' }}>😊 Senang</option>
                                    <option value="Sedih" {{ old('mood', $journal->mood) == 'Sedih' ? 'selected' : '' }}>😢 Sedih</option>
                                    <option value="Marah" {{ old('mood', $journal->mood) == 'Marah' ? 'selected' : '' }}>😠 Marah</option>
                                    <option value="Kecewa" {{ old('mood', $journal->mood) == 'Kecewa' ? 'selected' : '' }}>😞 Kecewa</option>
                                    <option value="Bingung" {{ old('mood', $journal->mood) == 'Bingung' ? 'selected' : '' }}>😕 Bingung</option>
                                    <option value="Tenang" {{ old('mood', $journal->mood) == 'Tenang' ? 'selected' : '' }}>😌 Tenang</option>
                                    <option value="Semangat" {{ old('mood', $journal->mood) == 'Semangat' ? 'selected' : '' }}>💪 Semangat</option>
                                    <option value="Lelah" {{ old('mood', $journal->mood) == 'Lelah' ? 'selected' : '' }}>😫 Lelah</option>
                                </select>
                                @error('mood')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="tags" class="form-label">Tag (pisahkan dengan koma)</label>
                                <input type="text" class="form-control @error('tags') is-invalid @enderror" 
                                    id="tags" name="tags" 
                                    value="{{ old('tags', $journal->tags ? implode(', ', $journal->tags) : '') }}" 
                                    placeholder="Contoh: harian, refleksi, inspirasi">
                                @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_public" name="is_public" value="1" 
                                    {{ old('is_public', $journal->is_public) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_public">
                                    Buat jurnal ini <b>publik</b> (bisa dilihat orang lain)
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="show_name" name="show_name" value="1" 
                                    {{ old('show_name', $journal->show_name) ? 'checked' : '' }}>
                                <label class="form-check-label" for="show_name">
                                    Tampilkan <b>nama saya</b> pada jurnal ini (jika tidak dicentang, akan tampil sebagai Anonim)
                                </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Auto-resize textarea
const textarea = document.getElementById('content');
textarea.addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});
</script>
@endpush
@endsection 


