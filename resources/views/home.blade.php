@extends('layouts.app')

@section('main_content')
<section class="products-list">

    <div class="container">
        <h4 class="title-uppercase">current series</h4>

        <div class="card-container">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <p>{{ $comic['series'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('page_script')
<script src= "{{ asset('js/app.js')}}"></script>
@endsection