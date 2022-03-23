@extends('master.main')

@section('content')
    @component('components.carousel.index', [
        'carouselImages' => $carouselImages,
        'title'=>$title
    ])
    @endcomponent
    @component('components.cards.index')
    @endcomponent
@endSection
