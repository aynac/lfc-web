<div class="col-md-4 product-item" data-kit="{{ $kit }}" 
         data-title="{{ $title }}"
         data-price="{{ $price }}"
         data-sizes="{{ implode(',', $sizes) }}" 
         data-images="{{ implode(',', $images) }}"
         data-bs-toggle="modal" 
         data-bs-target="#productDetailModal"
         >
    <div class="card h-100 border-1 shadow-sm overflow-hidden position-relative"
        style="cursor:pointer;" >
    
        <div class="position-relative">
            <img src="{{ $image }}"
                class="card-img-top"
                alt="{{ $title }}"
                style="height: 320px; object-fit: contain; transition: transform 0.5s;">

            @if($badge)
                <span class="badge bg-danger position-absolute top-0 end-0 m-3 shadow">
                    {{ $badge }}
                </span>
            @endif
        </div>

        <div class="card-body d-flex flex-column">
            <h5 class="card-title text-dark">{{ $title }}</h5>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="h5 mb-0" style="color : rgb(102, 209, 245);">{{ $price }}</p>
            </div>

            @if($sale)
                <span class="badge rounded-pill text-white"
                    style="background: linear-gradient(to right, #f97316, #ef4444);
                           font-size:0.75rem;
                           display:inline-flex;
                           align-items:center;
                           gap:0.25rem;
                           width:95px;">
                    🔥 On Sale
                </span>
            @endif
        </div>
    </div>
</div>
