<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-3" href="/">

            <div class="logo-circle d-flex align-items-center justify-content-center">
                <img src="{{ Storage::url('lfc_logo.webp') }}" alt="Life FC Logo" class="img-fluid"
                    style="width: 90%; height: auto;">
            </div>

            <div class="d-flex flex-column">
                <span class="fw-bold">LIFE FOOTBALL CLUB</span>
                <small class="text-muted">សមាគមន៍ក្លឹបបាល់ទាត់ ឡាយហ្វ ខេត្តព្រះសីហនុ</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Nav Link  & Cart, Profile --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center ms-5">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/players">Players</a></li>
                <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                {{-- temporary changed from store to product  --}}
                <li class="nav-item"><a class="nav-link" href="/store">Products</a></li> 
                <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.fixture.index') }}">Fixture</a></li>
                <li class="nav-item"><a class="nav-link" href="/highlight">Highlights</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="/donation">Donation</a></li> --}}
            </ul>

            {{-- Left Cart and Profile  --}}
            <div class="d-flex align-items-center gap-3 ms-auto">
                {{-- <a href="/cart" class="btn btn-outline-primary position-relative">
                    <i class="bi bi-cart3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span> --}}
                {{-- </a> --}}
                <a href="/profile" class="d-flex align-items-center ms-3">
                    <i class="bi bi-person-circle fs-3" style="color : #51a2d8"></i>
                </a>
            </div>
        </div>

    </div>
</nav>


<style>
    /* Glow / blur behind logo */
    .logo-glow {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(-25%, -50%);
        width: 64px;
        height: 64px;
        background: linear-gradient(135deg, #a8c9f0, #d0e7ff);
        /* lightBlue-400 to lightBlue-600 */
        border-radius: 50%;
        filter: blur(12px);
        opacity: 0.5;
        transition: opacity 0.3s;
        z-index: 0;
    }

    .logo-circle:hover~.logo-glow,
    .logo-glow:hover {
        opacity: 0.75;
    }

    .logo-circle:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    }

    .logo-circle {
        width: 60px;
        height: 60px;
        background-color: #d0e7ff;
        border-radius: 50%;
    }


    .navbar-brand span {
        z-index: 2;
    }

    .navbar-nav .nav-link {
        transition: background-color 0.3s, color 0.3s;
        border-radius: 0.375rem;
        /* rounded corners like Tailwind */
        padding: 0.5rem 0.75rem;
    }

    .navbar-nav .nav-link:hover {
        background-color: #80c9ea;
        /* lightBlue-400 */
        color: #fff !important;
    }
</style>
