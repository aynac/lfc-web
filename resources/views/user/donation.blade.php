<x-app-layout>
    <main class="flex-grow">

        {{-- Hero  --}}
        <section class="py-5 gradient-hero text-center">
            <div class="container">
                <div class="mx-auto mb-3"
                    style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(4px); border-radius: 50%; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-heart-fill text-white" style="font-size: 2rem;"></i>
                </div>
                <h1 class="mb-3">Support Life Football Club</h1>
                <p class="lead">Your contribution helps us develop young talent and support our community.</p>
            </div>
        </section>


        {{-- Content  --}}
        <section class="py-5 bg-white border-bottom">
            <div class="container">
                <div class="row g-5">

                    {{-- Left Col  --}}
                    <div class="col-lg-8">

                        {{-- Donation Type  --}}
                        <h4 class="mb-3">Donation Type</h4>
                        <div class="row g-3">

                            <div class="col-6">
                                <div class="select-btn p-3 border rounded text-center" data-type="one-time">
                                    One-Time
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="select-btn p-3 border rounded text-center active" data-type="monthly">
                                    Monthly
                                </div>
                            </div>

                        </div>

                        <hr class="my-4">

                        {{-- Select Cause  --}}
                        <h4 class="mb-3">Select a Cause</h4>
                        <div class="row g-3">

                            <!-- Card 1 -->
                            <div class="col-md-6">
                                <div class="card select-card p-3" data-cause="general">
                                    <div class="d-flex">
                                        <div class="me-3 bg-primary bg-opacity-25 rounded p-2">
                                            <i class="bi bi-heart-fill text-primary"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">General Support</h6>
                                            <small class="text-muted">Support the overall development of the
                                                club.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 2 --}}
                            <div class="col-md-6">
                                <div class="card select-card p-3" data-cause="academy">
                                    <div class="d-flex">
                                        <div class="me-3 bg-success bg-opacity-25 rounded p-2">
                                            <i class="bi bi-mortarboard-fill text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Youth Academy</h6>
                                            <small class="text-muted">Develop the next generation of football
                                                players.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 3  --}}
                            <div class="col-md-6">
                                <div class="card select-card p-3 active" data-cause="facilities">
                                    <div class="d-flex">
                                        <div class="me-3 bg-purple bg-opacity-25 rounded p-2">
                                            <i class="bi bi-building text-purple"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Facilities Upgrade</h6>
                                            <small class="text-muted">Improve stadium and training facilities.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Card 4  --}}
                            <div class="col-md-6">
                                <div class="card select-card p-3" data-cause="community">
                                    <div class="d-flex">
                                        <div class="me-3 bg-warning bg-opacity-25 rounded p-2">
                                            <i class="bi bi-people-fill text-warning"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Community Programs</h6>
                                            <small class="text-muted">Support community outreach initiatives.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr class="my-4">

                        {{-- Amount  --}}
                        <h4 class="mb-3">Select Amount</h4>
                        <div class="row g-2">
                            <div class="col-4 col-md-2">
                                <button class="btn btn-outline-secondary w-100 select-amount"
                                    data-value="25">$25</button>
                            </div>
                            <div class="col-4 col-md-2">
                                <button class="btn btn-outline-secondary w-100 select-amount"
                                    data-value="50">$50</button>
                            </div>
                            <div class="col-4 col-md-2">
                                <button class="btn btn-outline-secondary w-100 select-amount"
                                    data-value="100">$100</button>
                            </div>
                            <div class="col-4 col-md-2">
                                <button class="btn btn-outline-secondary w-100 select-amount"
                                    data-value="250">$250</button>
                            </div>
                            <div class="col-4 col-md-2">
                                <button class="btn btn-outline-secondary w-100 select-amount"
                                    data-value="500">$500</button>
                            </div>
                        </div>

                        {{-- Custom  --}}
                        <div class="mt-3">
                            <label class="form-label">Or enter custom amount</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input id="customAmount" type="number" class="form-control" placeholder="0.00">
                            </div>
                        </div>


                        <hr class="my-4">

                        {{-- User Info  --}}
                        <h4 class="mb-3">Your Information</h4>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" id="firstName" class="form-control" placeholder="John">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" id="lastName" class="form-control" placeholder="Doe">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" id="email" class="form-control"
                                    placeholder="john@example.com">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Message (optional)</label>
                                <textarea id="message" class="form-control" placeholder="Write your message here..."></textarea>
                            </div>

                        </div>

                        <form id="donationForm">
                            <!-- Your existing donation type, cause, amount, and user info fields -->
                            <button type="button" class="btn btn-primary w-100 mt-4 py-3"
                                onclick="contactToDonate()">
                                Contact To Donate
                            </button>
                        </form>
                        <p class="text-muted text-center small mt-2">Your donation is secure and encrypted.</p>

                    </div>

                    {{-- Right Oil  --}}
                    <div class="col-lg-4">
                        <div class="border rounded p-4 sticky-top" style="top: 100px;">
                            <h5>Your Impact</h5>

                            <div class="p-3 my-3 bg-light border rounded">
                                <strong>Facilities Upgrade</strong>
                                <p class="mb-0 text-muted small">Improve training facilities and stadium
                                    infrastructure.</p>
                            </div>

                            <ul class="list-unstyled small text-muted">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> 100% goes to
                                    your selected cause</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Transparent donation tracking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>

<style>
    .gradient-hero {
        background: linear-gradient(135deg, #d0e7ff, #60a5fa, #d0e7ff);
        color: white;
    }

    .select-card.active,
    .select-btn.active {
        border-color: #0d6efd !important;
        background-color: #e7f1ff !important;
    }
</style>


<script>
    // Donation Type Click
    document.querySelectorAll(".select-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".select-btn").forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
        });
    });

    // Causes Click
    document.querySelectorAll(".select-card").forEach(card => {
        card.addEventListener("click", () => {
            document.querySelectorAll(".select-card").forEach(c => c.classList.remove("active"));
            card.classList.add("active");
        });
    });

    // Amount Click
    document.querySelectorAll(".select-amount").forEach(button => {
        button.addEventListener("click", () => {
            document.querySelectorAll(".select-amount").forEach(b => b.classList.remove("btn-primary"));
            button.classList.add("btn-primary");
        });
    });

    const amountButtons = document.querySelectorAll('.select-amount');
    const customInput = document.getElementById('customAmount');

    amountButtons.forEach(button => {
        button.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            customInput.value = value;

            // Highlight selected button
            amountButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // When user types manually, remove active highlight
    customInput.addEventListener('input', () => {
        amountButtons.forEach(btn => btn.classList.remove('active'));
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("service_j65mmwo");
    })();

    function contactToDonate() {
        // Donation Type
        const type = document.querySelector('.select-btn.active')?.dataset.type || '';

        // Cause
        const cause = document.querySelector('.select-card.active')?.dataset.cause || '';

        // Amount
        const customAmount = document.getElementById('customAmount').value;
        const selectedAmount = document.querySelector('.select-amount.btn-primary')?.dataset.value;
        const amount = customAmount || selectedAmount || '';

        // User info
        const firstName = document.getElementById('firstName').value || '';
        const lastName = document.getElementById('lastName').value || '';
        const email = document.getElementById('email').value || '';
        const fullName = `${firstName} ${lastName}`;

        // Message
        const message = document.getElementById('message').value || 'I would like to donate.';

        // Time
        const time = new Date().toLocaleString();

        // Send EmailJS
        emailjs.send("service_j65mmwo", "template_7315olj", {
                name: fullName,
                email: email,
                donation_type: type,
                cause: cause,
                amount: amount,
                message: message,
                time: time
            })
            .then(function(response) {
                console.log('SUCCESS!', response.status, response.text);
                alert("Thank you! Your donation inquiry has been sent.");
            }, function(error) {
                console.log('FAILED...', error);
                alert("Oops! Something went wrong. Please try again.");
            });
    }
</script>
