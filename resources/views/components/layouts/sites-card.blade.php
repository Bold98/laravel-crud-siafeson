<div class="col">
<a style="text-decoration: none" class="text-info" target="__blank" href="{{$siteUrl ?? '#'}}">
    <div class="card scale-card h-100">
        <img src="{{$siteImageUrl ?? 'https://www.siafeson.com/assets/customs/siafeson/img/sitios/simgbn.png'}}"
            class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">{{ $siteName ?? ''}}</h5>
            <p class="card-text">
                {{$siteDescription ?? ''}}
            </p>
        </div>
    </div>
</a>
    
</div>