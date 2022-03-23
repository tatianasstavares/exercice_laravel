





<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">

        @foreach ($carouselImages as $image)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->index}}"   class="@if ($loop->first) active @endif"></li>
        @endforeach
                </ol>
    <div class="carousel-inner">
        @foreach ($title as $titles)
        <div class="carousel-item @if ($loop->first) active @endif">
            <img src="{{$carouselImages[$loop->index]}}"  style="height: 400px" class=" mh-80 d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$titles}}</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
