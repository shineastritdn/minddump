@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Edit Profil</h2>
                        <p class="text-muted">Perbarui informasi profil Anda</p>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="text-center mb-4">
                            <div class="position-relative d-inline-block">
                                @if($user->profile_photo)
                                    <img src="{{ asset('storage/profile-photos/' . $user->profile_photo) }}" 
                                         alt="Profile Photo" 
                                         class="rounded-circle"
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                @else
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                         style="width: 150px; height: 150px;">
                                        <i class="bi bi-person-fill text-white" style="font-size: 4rem;"></i>
                                    </div>
                                @endif
                                <label for="profile_photo" class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-2" style="cursor: pointer;">
                                    <i class="bi bi-camera"></i>
                                </label>
                                <input type="file" id="profile_photo" name="profile_photo" class="d-none" accept="image/*">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">Ubah Password</h5>
                        <div class="mb-4">
                            <label for="current_password" class="form-label">Password Saat Ini</label>
                            <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" 
                                   id="current_password" name="current_password">
                        </div>

                        <div class="mb-4">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" class="form-control form-control-lg @error('new_password') is-invalid @enderror" 
                                   id="new_password" name="new_password">
                        </div>

                        <div class="mb-4">
                            <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control form-control-lg" 
                                   id="new_password_confirmation" name="new_password_confirmation">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                    <hr class="my-4">

                    <div class="text-center">
                        <h5 class="text-danger mb-3">Hapus Akun</h5>
                        <p class="text-muted mb-3">Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.</p>
                        <form method="POST" action="{{ route('profile.destroy') }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus akun?')">
                                Hapus Akun
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Preview foto sebelum upload
    document.getElementById('profile_photo').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.querySelector('.rounded-circle');
                if (img) {
                    img.src = e.target.result;
                } else {
                    // Jika belum ada gambar, buat elemen img baru
                    const newImg = document.createElement('img');
                    newImg.src = e.target.result;
                    newImg.alt = 'Profile Photo';
                    newImg.className = 'rounded-circle';
                    newImg.style.width = '150px';
                    newImg.style.height = '150px';
                    newImg.style.objectFit = 'cover';
                    
                    const container = document.querySelector('.position-relative');
                    const placeholder = container.querySelector('.rounded-circle');
                    if (placeholder) {
                        container.replaceChild(newImg, placeholder);
                    }
                }
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush
@endsection 