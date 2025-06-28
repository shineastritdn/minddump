<!-- Footer -->
<footer class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a class="navbar-brand d-flex align-items-center mb-3" href="{{ route('welcome') }}">
                    <i class="fas fa-book me-2"></i>Mind<span class="highlight-text">Dump</span>
                </a>
                <p class="text-muted mb-4">Platform jurnal digital yang memungkinkan kamu menulis dan berbagi cerita secara anonim.</p>
                <div class="social-links">
                    <a href="https://twitter.com/minddump" class="text-dark me-3" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/minddump" class="text-dark me-3" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/company/minddump" class="text-dark" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3">Menu</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('welcome') }}" class="text-decoration-none text-muted">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('journals.create') }}" class="text-decoration-none text-muted">Tulis</a></li>
                    <li class="mb-2"><a href="{{ route('journals.index') }}" class="text-decoration-none text-muted">Jelajahi</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold mb-3">Informasi</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-decoration-none text-muted">Tentang Kami</a></li>
                    <li class="mb-2"><a href="{{ route('privacy') }}" class="text-decoration-none text-muted">Kebijakan Privasi</a></li>
                    <li class="mb-2"><a href="{{ route('terms') }}" class="text-decoration-none text-muted">Syarat & Ketentuan</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="fw-bold mb-3">Kontak</h6>
                <p class="text-muted mb-2">Email: info@minddump.com</p>
                <p class="text-muted mb-3">Telepon: +62 123 4567 890</p>
                <form action="{{ route('subscribe') }}" method="POST" class="mb-3">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-muted mb-0">&copy; {{ date('Y') }} MindDump. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{ route('privacy') }}" class="text-muted">Privacy</a></li>
                    <li class="list-inline-item">·</li>
                    <li class="list-inline-item"><a href="{{ route('terms') }}" class="text-muted">Terms</a></li>
                    <li class="list-inline-item">·</li>
                    <li class="list-inline-item"><a href="{{ route('faq') }}" class="text-muted">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 