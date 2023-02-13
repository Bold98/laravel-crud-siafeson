<x-layouts.app title="Home" meta-description="Descripcion del Home">

    <div id="carouselExampleIndicators" class="carousel slide mb-5 d-none d-md-block">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.siafeson.com/assets/customs/siafeson/img/trigo.png" class="d-block w-100"
                    alt="..." />
            </div>
            <div class="carousel-item">
                <img src="http://siafeson.com/assets/customs/siafeson/img/plantas.png" class="d-block w-100"
                    alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <x-layouts.sites-container categoryName="Productos Sonora">
        @foreach ($sites_and_gategories as $site)
            @if ($site->category == 1)
                <x-layouts.sites-card 
                siteUrl="{{ $site->imageUrl }}" 
                siteName="{{ $site->name }}"
                    siteDescription="{{ $site->description }}" />
            @endif
        @endforeach
    </x-layouts.sites-container>
    <x-layouts.sites-container categoryName="Productos Nacional">
        @foreach ($sites_and_gategories as $site)
            @if ($site->category == 2)
                <x-layouts.sites-card 
                siteUrl="{{ $site->imageUrl }}" 
                siteName="{{ $site->name }}"
                    siteDescription="{{ $site->description }}" />
            @endif
        @endforeach
    </x-layouts.sites-container>
    <x-layouts.sites-container categoryName="Otros Productos">
        @foreach ($sites_and_gategories as $site)
            @if ($site->category == 3)
                <x-layouts.sites-card 
                siteUrl="{{ $site->imageUrl }}" 
                siteName="{{ $site->name }}"
                    siteDescription="{{ $site->description }}" />
            @endif
        @endforeach
    </x-layouts.sites-container>


    </x-layouts.layout>
