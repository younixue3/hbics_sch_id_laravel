

    <div class="flex relative my-4">
        <div class="h-32 w-full">
            <img class="h-32 w-full object-cover" src="">
        </div>
        <div class="absolute flex w-full h-full">
            <a href="{{ $url }}" target="_blank"
               class="m-auto button bg-blue-800 text-lg px-3 py-1">
                {{ $slot }}
            </a>
        </div>
    </div>
{{--    <div>--}}

{{--        <a href="{{ $url }}" class="button button-{{ $color ?? 'primary' }}" target="_blank" rel="noopener">{{ $slot }}</a>--}}
{{--    </div>--}}
