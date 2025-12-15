<x-app-layout>
    <main class="flex-grow" style="margin-top: 120px; padding: 0 20px;">
        {{-- Header --}}
        <section class="bg-light py-5 border-bottom">
            <div class="container">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-bag-fill text-primary fs-2 me-3"></i>
                    <h1 class="h3 mb-0">Shopping Cart</h1>
                </div>
                <p class="text-muted">Review your items and proceed to checkout</p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row g-4">

                    {{-- Cart Items --}}
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h2 class="h5 mb-4">Cart Items ({{ count($cartItems) }})</h2>

                                @forelse ($cartProducts as $product)
                                    @php
                                        $quantity = $cartItems[$product->id]['quantity'] ?? 1;
                                        $size = $cartItems[$product->id]['size'] ?? 'M';
                                    @endphp
                                    <div class="d-flex mb-4 pb-4 border-bottom align-items-center">
                                        <div class="flex-shrink-0 me-3" style="width: 100px; height: 100px;">
                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                                class="img-fluid rounded">
                                        </div>

                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <div>
                                                    <h5 class="mb-1">{{ $product->name }}</h5>
                                                    <small class="text-muted">Size: {{ $size }}</small>
                                                </div>
                                                <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="bi bi-x"></i>
                                                    </button>
                                                </form>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <form action="{{ route('cart.update', $product->id) }}"
                                                        method="POST" class="d-flex align-items-center gap-1">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" name="action" value="decrease"
                                                            class="btn btn-outline-secondary btn-sm">-</button>
                                                        <span class="px-2">{{ $quantity }}</span>
                                                        <button type="submit" name="action" value="increase"
                                                            class="btn btn-outline-secondary btn-sm">+</button>
                                                    </form>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 fw-bold">
                                                        ${{ number_format($product->price * $quantity, 2) }}</p>
                                                    <small class="text-muted">${{ number_format($product->price, 2) }}
                                                        each</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">Your cart is empty.</p>
                                @endforelse

                                <a href="{{ route('store') }}" class="btn btn-link mt-3">
                                    &larr; Continue Shopping
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Order Summary --}}
                    <div class="col-lg-4">
                        <div class="card shadow-sm border-0 sticky-top" style="top: 120px;">
                            <div class="card-body">
                                <h2 class="h5 mb-4">Order Summary</h2>
                                @php
                                    $subtotal = $cartProducts->sum(
                                        fn($p) => $p->price * ($cartItems[$p->id]['quantity'] ?? 1),
                                    );
                                    $tax = $subtotal * 0.08;
                                    $total = $subtotal + $tax;
                                @endphp

                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between"><span>Subtotal</span>
                                        <span>${{ number_format($subtotal, 2) }}</span></li>
                                    <li class="d-flex justify-content-between"><span>Shipping</span> <span>FREE</span>
                                    </li>
                                    <li class="text-success small bg-light p-2 rounded mb-2">🎉 You got free shipping!
                                    </li>
                                    <li class="d-flex justify-content-between"><span>Tax (0%)</span>
                                        <span>${{ number_format($tax, 2) }}</span></li>
                                    <li class="d-flex justify-content-between fw-bold border-top pt-2">
                                        <span>Total</span> <span>${{ number_format($total, 2) }}</span></li>
                                </ul>

                                <form action="{{ route('cart.checkout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-100 mb-3">Proceed to
                                        Checkout</button>
                                </form>

                                {{-- <div class="mb-3">
                                    <label for="promo" class="form-label small">Promo Code</label>
                                    <div class="input-group">
                                        <input type="text" id="promo" placeholder="Enter code"
                                            class="form-control">
                                        <button class="btn btn-outline-secondary">Apply</button>
                                    </div>
                                </div> --}}

                                <p class="text-center text-muted small">Secure Check Out @LifeFootballClub</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-app-layout>
