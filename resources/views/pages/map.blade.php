<div id="map" class="map my-2">
    <h1 class="my-1 font-fantasy">
        @lang('home.map')
    </h1>
    <div class="content">
        <div class="btn-group my-1">
            <a href="{{ url('/' . 1 . '#map') }}" class="btn btn-dark">@lang('home.golden_house')</a>
            <a href="{{ url('/' . 2 . '#map') }}" class="btn btn-dark">@lang('home.blue_castle')</a>
            <a href="{{ url('/' . 3 . '#map') }}" class="btn btn-dark">@lang('home.flowers_park')</a>
            <a href="{{ url('/' . 4 . '#map') }}" class="btn btn-dark">@lang('home.san_roque')</a>
        </div>

        @switch( $mapOption )
        @case(1)
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29692.209863784414!2d-64.74617230745987!3d-21.526269443663754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9406480a1d13e0a9%3A0xb58001b005ff7c65!2sCasa%20Dorada!5e0!3m2!1ses!2sar!4v1566938128828!5m2!1ses!2sar"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        @break
        @case(2)
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14845.271970844435!2d-64.7269097!3d-21.5344179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42c39e4fb0f3ebbf!2sCastillo%20Azul%20Moises%20Navajas!5e0!3m2!1ses!2sar!4v1571945772336!5m2!1ses!2sar"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        @break
        @case(3)
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.5250590975265!2d-64.7404710856131!3d-21.52631538573096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9406480cc270ba63%3A0x4f43385e6efa7bd4!2sParque%20de%20las%20Flores!5e0!3m2!1ses!2sar!4v1571945816656!5m2!1ses!2sar"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        @break
        @case(4)
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.439908428225!2d-64.735348385613!3d-21.52964768572919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9406480968d547b9%3A0x4f8beecb7094ba7f!2sIglesia%20San%20Roque%20Tarija!5e0!3m2!1ses!2sar!4v1571945987096!5m2!1ses!2sar"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        @break

        @default
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29692.209863784414!2d-64.74617230745987!3d-21.526269443663754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9406480a1d13e0a9%3A0xb58001b005ff7c65!2sCasa%20Dorada!5e0!3m2!1ses!2sar!4v1566938128828!5m2!1ses!2sar"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        @endswitch

    </div>
</div>
</div>