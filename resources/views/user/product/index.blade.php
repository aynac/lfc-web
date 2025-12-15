<x-app-layout>

    <main class="flex-grow" style="margin-top: 120px; padding: 0 20px;">

        <div class="shop-header-page mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">

                    {{-- Home  --}}
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" style="color : #51a2d8;">
                            <i class="bi bi-house-door-fill" style="font-size: 18px;"></i>
                        </a>
                    </li>

                    {{-- Store  --}}
                    <li class="breadcrumb-item">
                        {{-- Temp Products usage instead of Store  --}}
                        <a href="{{ route('user.product.index') }}" style="color : #51a2d8;">Products</a>
                    </li>

                    {{-- Current Page  --}}
                    <li class="breadcrumb-item active" aria-current="page" style="color : #51a2d8;">Trending</li>

                </ol>
            </nav>
        </div>


        {{-- Filter Bar (Landscape) --}}
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 p-3 rounded"
            style="background: linear-gradient(90deg, #aacff1 0%, #51a2d8 60%);">
            <div class="mb-2 mb-md-0">
                <span class="px-3 py-1 rounded-pill fw-semibold" style="background-color: #e0f2ff; color: #0b4b75;">
                    Trending
                </span>

                <h4 class="d-inline ms-2 text-white">Popular Sport Uniforms</h4>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                {{-- Filter Buttons --}}
                <button class="btn btn-light btn-sm fw-bold" onclick="filterKit('all')">Adults</button>
                {{-- <button class="btn btn-light btn-sm fw-bold">Kids</button> --}}
                <button class="btn btn-light btn-sm fw-bold" onclick="filterKit('home')">Home Kit</button>
                <button class="btn btn-light btn-sm fw-bold" onclick="filterKit('away')">Away Kit</button>

                {{-- Sort Dropdown --}}
                {{-- <select name="sortType" class="form-select form-select-sm" style="min-width: 160px;">
                    <option value="5">Sort By:</option>
                    <option value="2">Lowest Price</option>
                    <option value="3">Highest Price</option>
                    <option value="5">Newest Item</option>
                    <option value="11">Top Sellers</option>
                </select> --}}
            </div>
        </div>

        {{-- Product Listing --}}
        <div class="row g-4" id="productList">
            <x-product-card kit="home" image="{{ asset('storage/gallery/jersey/HomeGKFront.png') }}"
                title="Home Goal Keeper Jersey" price="$10.00" badge="" :sale="false" :sizes="['S', 'M', 'L', 'XL']"
                :images="[
                    asset('storage/gallery/jersey/HomeGKFront.png'),
                    asset('storage/gallery/jersey/HomeGKBack.png'),
                ]" />
            <x-product-card kit="home" image="{{ asset('storage/gallery/jersey/HomePlayerFront.png') }}"
                title="Home Player Jersey" price="$10.00" badge="" :sale="false" :sizes="['S', 'M', 'L', 'XL']"
                :images="[
                    asset('storage/gallery/jersey/HomePlayerFront.png'),
                    asset('storage/gallery/jersey/HomePlayerBack.png'),
                ]" />
            <x-product-card kit="away" image="{{ asset('storage/gallery/jersey/AwayPlayerFront.png') }}"
                title="Away Player Jersey" price="$10.00" badge="" :sale="false" :sizes="['S', 'M', 'L', 'XL']"
                :images="[
                    asset('storage/gallery/jersey/AwayPlayerFront.png'),
                    asset('storage/gallery/jersey/AwayPlayerBack.png'),
                ]" />
            <x-product-card kit="away" image="{{ asset('storage/gallery/jersey/AwayGKFront.png') }}"
                title="Away Goal Keeper Jersey" price="$10.00" badge="" :sale="false" :sizes="['S', 'M', 'L', 'XL']"
                :images="[
                    asset('storage/gallery/jersey/AwayGKFront.png'),
                    asset('storage/gallery/jersey/AwayGKBack.png'),
                ]" />
        </div>

        {{-- Pagination  --}}
        <div class="d-flex justify-content-between align-items-center mt-4 pb-4">
            {{-- <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="bi bi-arrow-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a>
                </li>
            </ul> --}}

            <div class="text-muted">
                <p class="mb-0">{{ count($products) }} products Available</p>
            </div>
        </div>

        {{-- dialog  --}}
        <div class="modal fade" id="productDetailModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="d-flex overflow-auto" id="productImagesContainer" style="gap:1rem;">
                                </div>
                            </div>

                            
                            <div class="col-md-6">
                                <h2 id="productTitle"></h2>
                                <h4 class="mb-3" id="productPrice" style="color : rgb(102, 209, 245);"></h4>

                                <div class="mb-3">
                                    <label class="form-label d-block mb-2">Size:</label>
                                    <div id="productSizes" class="d-flex flex-wrap gap-2">
                                    </div>
                                </div>

                                <p><strong>Available at:</strong>📍 Life University </p>

                                {{-- <button class="btn btn-primary mt-3">Add to Cart</button> --}}
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>

    </main>
    <script>
        function filterKit(type) {
            document.querySelectorAll('.product-item').forEach(item => {
                item.style.display =
                    type === 'all' || item.dataset.kit === type ?
                    'block' :
                    'none';
            });
        }
        
        document.querySelectorAll('.product-item').forEach(card => {
            card.addEventListener('click', function() {
                const title = card.dataset.title;
                const price = card.dataset.price;
                const images = card.dataset.images.split(',');
                const sizes = card.dataset.sizes.split(',');

                // Set modal content
                document.getElementById('productTitle').textContent = title;
                document.getElementById('productPrice').textContent = price;

                const imgContainer = document.getElementById('productImagesContainer');
                imgContainer.innerHTML = '';
                images.forEach(src => {
                    const img = document.createElement('img');
                    img.src = src;
                    img.style.height = '300px';
                    img.style.objectFit = 'contain';
                    img.classList.add('rounded');
                    imgContainer.appendChild(img);
                });

                const sizeContainer = document.getElementById('productSizes');
                sizeContainer.innerHTML = '';
                sizes.forEach(size => {
                    const div = document.createElement('div');
                    div.textContent = size;
                    div.className = 'border rounded px-3 py-1 text-center cursor-pointer';
                    sizeContainer.appendChild(div);
                });
            });
        });

    </script>

</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
