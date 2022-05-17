
<div style="">
    <div class="h-32 w-full">
        <img class="h-32 w-full object-cover" src="{{ $asset }}" alt="{{ $title }}">
    </div>
    <div style="margin:auto;width: 100%;height: 100%;">
        <a href="{{ $url }}" style="margin:auto;" class="m-auto bg-blue-800 button button-red" target="_blank" rel="noopener">{{$slot}}</a>
    </div>
</div>
{{--    <div>--}}

{{--        <a href="{{ $url }}" class="button button-{{ $color ?? 'primary' }}" target="_blank" rel="noopener">{{ $slot }}</a>--}}
{{--    </div>--}}
