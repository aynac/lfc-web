<x-guest-layout>
    <main class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="container my-5">
                    <div class="row justify-content-center align-items-center">

                        {{-- Left Image Card  --}}
                        <div class="col-md-6 d-none d-md-block">
                            <div class="position-relative" style="max-width: 400px; margin:auto;">

                                {{-- Background Rotate  --}}
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3"
                                    style="background: linear-gradient(to bottom right, #d0e7ff, #77d8f5); transform: rotate(-3deg); z-index: 0;">
                                </div>

                                {{-- Foreground Card  --}}
                                <div class="card bg-white shadow-lg rounded-3 position-relative p-4"
                                    style="transform: rotate(2deg); z-index: 1; overflow: hidden;">

                                    {{-- Image --}}
                                    <div style="height: 500px; overflow: hidden; border-radius: 1rem;">
                                        <img src="{{ Storage::url('gallery/slide_pic/slide_pic3.webp') }}"
                                            alt="Football fans" class="img-fluid w-100 h-100"
                                            style="object-fit: cover;">
                                    </div>

                                    {{-- Text  --}}
                                    <div class="text-center mt-4">
                                        <h3 class="h5 text-dark mb-2">Join Our Community</h3>
                                        <p class="text-secondary mb-0">Be part of the Life Football Club family and
                                            never miss a moment!</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Login Form  --}}
                        <div class="col-md-6 col-lg-5">
                            <div class="card shadow-lg border-0 rounded-4">
                                <div class="card-body p-4">

                                    {{-- Login & header  --}}
                                    <div class="d-flex flex-column align-items-center mb-4">
                                        <img src="{{ Storage::url('lfc_logo.webp') }}" alt="Life FC Logo"
                                            class="img-fluid mb-3"
                                            style="max-width: 200px; height: auto; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                        <h1 class="fw-bold mt-4 text-center" style="color: #3dd1eb; font-size: 1.5rem;">Welcome Back</h1>
                                        <p class="text-muted text-center">Sign in to continue</p>
                                    </div>

                                    {{-- Form  --}}
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        {{-- Email --}}
                                        <div class="mb-4">
                                            <label for="email"
                                                class="form-label fw-bold medium" style="color : #64b7c6;">Email</label>
                                            <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                                <span class="input-group-text bg-light border-0">
                                                    <i class="bi bi-envelope-fill"></i>
                                                </span>
                                                <input type="email"
                                                    class="form-control form-control-lg border-0 @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}"
                                                    placeholder="Enter your email" required autofocus>
                                            </div>
                                            @error('email')
                                                <small class="text-danger mt-1 d-block">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        {{-- Password --}}
                                        <div class="mb-4">
                                            <label for="password"
                                                class="form-label fw-bold medium" style="color : #64b7c6;" >Password</label>
                                            <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                                <span class="input-group-text bg-light border-0">
                                                    <i class="bi bi-lock-fill"></i>
                                                </span>
                                                <input type="password"
                                                    class="form-control form-control-lg border-0 @error('password') is-invalid @enderror"
                                                    id="password" name="password" placeholder="Enter your password"
                                                    required>
                                                <button type="button" class="btn btn-light border-0"
                                                    onclick="togglePassword()">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </div>
                                            @error('password')
                                                <small class="text-danger mt-1 d-block">{{ $message }}</small>
                                            @enderror
                                        </div>



                                        {{-- Remember Me  --}}
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>

                                        {{-- Login Button  --}}
                                        <div class="d-flex justify-content-end">
                                            <x-primary-button class="btn btn-lg" style="background-color: #64b7c6;"> 
                                                {{ __('Log in') }} 
                                            </x-primary-button>
                                        </div>

                                        {{-- Link  --}}
                                        <div class="text-center mt-4">
                                            <p class="mb-1">Don't have an account?
                                                <a href="{{ route('register') }}"
                                                    class="fw-bold" style="color : #64b7c6;">Register</a>
                                            </p>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-muted small" style="color : #64b7c6; text-decoration: underline;">
                                                    Forgot Your Password?
                                                </a>
                                            @endif
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>
</x-guest-layout>

<style>
    .btn {
        background-color: #75e4f8;
    }

    .bi-eye-fill {
        color: white;
    }
    .bi-eye-slash-fill {
        color: white;
    }
    .bi-lock-fill{
        color : #75e4f8;
    }
    .bi-envelope-fill{
        color : #75e4f8;
    }
</style>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon = event.currentTarget.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
        } else {
            input.type = 'password';
            icon.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
        }
    }
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
