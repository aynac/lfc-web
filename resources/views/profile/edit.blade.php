<x-app-layout>
    <main class="flex-grow-1">
        <div class="min-vh-100 bg-light">

            <!-- HEADER SECTION -->
            <section class="py-5 text-white" style="background: linear-gradient(135deg, #d0e7ff, #87cce8, #6698cd););">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">

                        <!-- Profile Picture -->
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <h1 class="mb-1 fs-4" style="color : black;">{{ Auth::user()->name }}
                                    {{ Auth::user()->last_name ?? '' }}</h1>
                                <p class="mb-1" style="color : black;">{{ Auth::user()->email }}</p>
                                <span class="badge text-dark" style="background-color : #68bdf5;">Admin</span>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark d-flex align-items-center gap-2">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>

                    </div>
                </div>
            </section>

            {{-- Fixture Dashboard  --}}
            <section class="py-3 text-white">
                <div class="container">
                    <div>
                        <!-- New Button to Fixture -->
                        <a href="/fixture" class="btn mt-3" style="background-color :#bddaee; color : rgb(49, 48, 48);">
                            View Fixture
                        </a>
                    </div>
                </div>
            </section>

            <!-- MAIN BODY -->
            <section class="py-5">
                <div class="container py-5">
                    <div class="row">

                        <!-- Sidebar -->
                        <div class="col-lg-3 mb-4">
                            <div class="card shadow-sm">
                                <div class="list-group list-group-flush" id="profile-tabs" role="tablist">
                                    <a class="list-group-item list-group-item-action active" data-bs-toggle="tab"
                                        href="#profile" role="tab">Profile</a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="tab"
                                        href="#account" role="tab">Account</a>
                                    <a class="list-group-item list-group-item-action" data-bs-toggle="tab"
                                        href="#notifications" role="tab">Notifications</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content -->
                        <div class="col-lg-9">
                            <div class="tab-content">

                                <!-- Profile Tab -->
                                <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                    <div class="bg-white rounded-xl shadow-sm border p-4">
                                        <h2 class="mb-4">Personal Information</h2>
                                        <form method="POST" action="{{ route('profile.update') }}">
                                            @csrf
                                            @method('PATCH')

                                            <div class="row g-3 mb-3">
                                                <div class="col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" id="firstName" name="name"
                                                        class="form-control"
                                                        value="{{ old('name', Auth::user()->name) }}">
                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" id="lastName" name="last_name"
                                                        class="form-control"
                                                        value="{{ old('last_name', Auth::user()->last_name) }}">
                                                    @error('last_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    value="{{ old('email', Auth::user()->email) }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <button class="btn" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Account Tab -->
                                <div class="tab-pane fade" id="account" role="tabpanel">
                                    <div class="bg-white rounded-xl shadow-sm border p-4">
                                        <h2 class="mb-4">Account Security</h2>

                                        <!-- Password Update -->
                                        <div class="mb-4">
                                            <form method="POST" action="{{ route('user.password.update') }}">
                                                @csrf
                                                @method('PATCH')

                                                <div class="mb-3">
                                                    <label class="form-label">Current Password</label>
                                                    <input type="password" name="current_password" class="form-control">
                                                    @error('current_password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control">
                                                </div>

                                                <button class="btn btn-sm" type="submit">Change
                                                    Password</button>
                                            </form>
                                        </div>

                                        <!-- Email Verification -->
                                        <div class="mb-4">
                                            @if (!Auth::user()->hasVerifiedEmail())
                                                <div
                                                    class="alert alert-warning d-flex justify-content-between align-items-center">
                                                    <span>Your email is not verified.</span>
                                                    <form method="POST" action="{{ route('verification.send') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-sm">Resend
                                                            Verification</button>
                                                    </form>
                                                </div>
                                            @else
                                                <div class="alert alert-success">Email verified ✓</div>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <!-- Notifications Tab -->
                                <div class="tab-pane fade" id="notifications" role="tabpanel">
                                    <div class="bg-white rounded-xl shadow-sm border p-4">
                                        <h2 class="mb-4">Notification Preferences</h2>
                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                            <div>
                                                <h6 class="mb-1">Email Notifications</h6>
                                                <small class="text-muted">Receive notifications via email</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </div>

                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                            <div>
                                                <h6 class="mb-1">Match Reminders</h6>
                                                <small class="text-muted">Get notified before matches start</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </div>

                                        <div
                                            class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                                            <div>
                                                <h6 class="mb-1">News Updates</h6>
                                                <small class="text-muted">Latest club news and announcements</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" checked>
                                            </div>
                                        </div>

                                        <button class="btn mt-3">Save Preferences</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </main>
    <style>
        /* Change active tab background color */
        #profile-tabs .list-group-item.active {
            background-color: #bddaee !important;
            color: #000 !important; /* optional: change text color */
        }
        .btn{
            background-color: #b3e1ff !important;
        }
    </style>
</x-app-layout>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
