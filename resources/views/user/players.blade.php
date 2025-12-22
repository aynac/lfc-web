<x-app-layout>
    <main class="flex-grow">
        <div class="container-fluid py-5" style="background-color:#e0f2fe !important;">
            <div class="container">
                <h1 class="text-dark mb-4">Our Squad</h1>
                <p class="text-muted fs-5">Meet the talented players who represent Life Football Club</p>
            </div>
        </div>

        {{-- Strikers --}}
        <section class="py-5 bg-white">
            <div class="container">
                <div class="d-flex align-items-center mb-4">
                    <div class="lightblue-accent"></div>
                    <h2 class="text-dark m-0">Strikers</h2>
                </div>

                <div class="row g-4">
                    {{-- 09  --}}
                    <x-player-card
                        name="Khem Leangkhe"
                        number="09"
                        image="{{asset('gallery/players/09.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 12  --}}
                    <x-player-card
                        name="Kour Sopheak"
                        number="12"
                        image="{{asset('gallery/players/12.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 17  --}}
                    <x-player-card
                        name="Kea Piseth"
                        number="17"
                        image="{{asset('gallery/players/17.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 19  --}}
                    <x-player-card
                        name="Kim JoungWoo"
                        number="19"
                        image="{{asset('gallery/players/19.png')}}"
                        country="🇰🇷 South Korea"
                    />
                    {{-- 99  --}}
                    <x-player-card
                        name="Yen Makara"
                        number="99"
                        image="{{asset('gallery/players/99.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 11  --}}
                    <x-player-card
                        name="Kim HyeonSu"
                        number="11"
                        image="{{asset('gallery/players/11.png')}}"
                        country="🇰🇷 South Korea"
                    />
                    {{-- 30  --}}
                    <x-player-card
                        name="Chan Meta"
                        number="30"
                        image="{{asset('gallery/players/30.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                </div>
            </div>
        </section>

        {{-- MIDFIELDERS  --}}
        <section class="py-5 bg-light">
            <div class="container">
                <div class="d-flex align-items-center mb-4">
                    <div class="lightblue-accent"></div>
                    <h2 class="text-dark m-0">Midfielders</h2>
                </div>

                <div class="row g-4">
                    {{-- 08  --}}
                    <x-player-card
                        name="Le Songpov"
                        number="08"
                        image="{{asset('gallery/players/08.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 13  --}}
                    <x-player-card
                        name="Asami Kanta"
                        number="13"
                        image="{{asset('gallery/players/13.png')}}"
                        country="🇯🇵 Japan"
                    />
                    {{-- 36  --}}
                    <x-player-card
                        name="Vi Chandara"
                        number="36"
                        image="{{asset('gallery/players/36.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                </div>
            </div>
        </section>

        {{-- Defenders --}}
        <section class="py-5 bg-light">
            <div class="container">
                <div class="d-flex align-items-center mb-4">
                    <div class="lightblue-accent"></div>
                    <h2 class="text-dark m-0">Defenders</h2>
                </div>

                <div class="row g-4">
                    {{-- 20  --}}
                    <x-player-card
                        name="Uk Devin"
                        number="20"
                        image="{{asset('gallery/players/20.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 27  --}}
                    <x-player-card
                        name="Hak Vuthy"
                        number="27"
                        image="{{asset('gallery/players/27.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 66 --}}
                    <x-player-card
                        name="Vann Vit"
                        number="66"
                        image="{{asset('gallery/players/66.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                </div>
            </div>
        </section>

        {{-- Goal Keeper --}}
        <section class="py-5 bg-light">
            <div class="container">
                <div class="d-flex align-items-center mb-4">
                    <div class="lightblue-accent"></div>
                    <h2 class="text-dark m-0">Goal Keepers</h2>
                </div>

                <div class="row g-4">
                    {{-- 01  --}}
                    <x-player-card
                        name="Lon Vanthana"
                        number="01"
                        image="{{asset('gallery/players/01.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                    {{-- 22  --}}
                    <x-player-card
                        name="Rong Chongmieng"
                        number="22"
                        image="{{asset('gallery/players/22.png')}}"
                        country="🇰🇭 Cambodia"
                    />
                </div>
            </div>
        </section>

    </main>

</x-app-layout>

<style>
    .player-card {
        height: 320px;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        background: #f1f5f9;
    }

    .player-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .3s ease;
    }

    .player-card:hover img {
        transform: scale(1.05);
    }

    .player-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(15, 23, 42, 0.9), transparent 60%);
        opacity: 0.85;
    }

    .player-info {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
    }

    .lightblue-accent {
        width: 4px;
        height: 32px;
        background: #3b82f6;
        margin-right: 12px;
    }
</style>
