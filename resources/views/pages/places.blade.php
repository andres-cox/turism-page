<div id="places" class="places">
    <h1 class="my-2 font-fantasy">
        @lang('home.places')
    </h1>
    <div class="places-inner">
        <div class="m-1 card">
            <a class="" href="#popup1">
                <img src="https://lavozdetarija.com/wp-content/uploads/2017/04/San-Roque.jpg" alt="Snow"
                    style="width:100%;">
                <h2 class="centered">@lang('home.san_roque')</h2>
            </a>
        </div>

        <div class="m-1 card">
            <a class="" href="#popup2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/Castillo_Azul_-_Tarija.jpg" alt="Snow"
                    style="width:100%;">
                <h2 class="centered">@lang('home.blue_castle')</h2>
            </a>
        </div>

        <div class="m-1 card">
            <a class="" href="#popup3">
                <img src="https://lavozdetarija.com/wp-content/uploads/2017/12/Parque-de-las-flores-Tarija.jpg"
                    alt="Snow" style="width:100%;">
                <h2 class="centered">@lang('home.flowers_park')</h2>
            </a>

        </div>
        <div class="m-1 card">
            <a class="" href="#popup4">
                <img src="https://lavozdetarija.com/wp-content/uploads/2017/07/casa-dorada-tarija-e1498922606855.jpg"
                    alt="Snow" style="width:100%;">
                <h2 class="centered">@lang('home.golden_house')</h2>
            </a>
        </div>
    </div>
</div>

@foreach ($places as $place)
<div id="popup{{$loop->index+1}}" class="overlay">
    <div class="popup">
        <div class="popup-image">
            <img src="{{$place->img_url}}" alt="Snow" style="width:100%;">
        </div>
        <div class="popup-content">
            <h2>{{$place->title}}</h2>
            <a class="close" href="#places">&times;</a>
            <div class="conten">
                {{$place->text}}
            </div>
        </div>
    </div>
</div>
@endforeach