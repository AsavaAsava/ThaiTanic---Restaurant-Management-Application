@extends('layouts.app', ['activePage' => 'maps', 'title' => 'Thai-Tanic', 'navName' => 'Home', 'activeButton' => 'laravel'])

@section('content')
    <div class="map-container">
        <div id="map"></div>
    </div>
@endsection