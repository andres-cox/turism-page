@extends('layouts.app')
@section('content')
<section id="home">
    <div class="landing">
        @include('partials.navbar')
        <div class="landing-inner">
            <h1 class="large font-fantasy">@lang('home.welcome')</h1>
            <p class="lead">
                @lang('home.welcome_message')
            </p>
        </div>
    </div>
</section>
@endsection