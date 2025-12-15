<div class="col-12 col-md-4 col-lg-3">
    <div class="player-card">
        <img src="{{ $image }}" alt="{{ $name }}">

        <div class="player-overlay"></div>

        <div class="player-info">
            <p class="text-info mb-1">#{{ $number }}</p>
            <h4 class="m-0">{{ $name }}</h4>
            <h5 class="m-0">{{ $country }}</h5>
        </div>
    </div>
</div>
<style>
    .player-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .player-card:hover {
        transform: scale(1.03);
    }

    .player-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .player-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.1));
    }

    .player-info {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
    }

    /* number  */
    .player-info p {
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 1px;
        margin-bottom: 3px;
        text-shadow: 0 0 1px rgba(164, 219, 238, 0.938);
    }

    /* name  */
    .player-info h4 {
        font-size: 26px;
        font-weight: 700;
        margin: 0;
        text-shadow: 0 0 5px rgba(87, 167, 252, 0.8);
    }

    /* country  */
    .player-info h4 {
        font-size: 22px;
        font-weight: 700;
        margin: 0;
        text-shadow: 0 0 5px rgba(125, 180, 238, 0.8);
    }
</style>
