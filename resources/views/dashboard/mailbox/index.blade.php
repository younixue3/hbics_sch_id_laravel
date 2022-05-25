@extends('layouts.dashboard.master')
@section('title', 'Mailbox')
@section('content')
    <mailbox-component>
        @forelse($mailbox as $key => $value)
            <mailbox-card-component name="{{$value->kunjungan == null ? $value->content : $value->kunjungan()}}" subject="{{$value->kunjungan != null ? 'Kunjungan_'.$value->kunjungan : 'Pesan Dari '.json_decode($value->content)->items->name}}" date="{{$value->created_at}}" content="{{$value->kunjungan != null ? $value->kunjungan() : $value->content}}" type="{{$value->kunjungan}}" url="{{route('dashboard.send.mailbox', $value->id)}}" sent="{{route('dashboard.mailbox.show', $value->id)}}"></mailbox-card-component>
            @empty
            Data Kosong
            @endforelse
    </mailbox-component>
@endsection
{{--@section('modalShow')--}}
{{--    <form-prestasi-component>--}}
{{--    </form-prestasi-component>--}}
{{--@endsection--}}
{{--@section('modalEdit')--}}
{{--    <form-prestasi-edit-component>--}}
{{--    </form-prestasi-edit-component>--}}
{{--@endsection--}}
{{--@section('modalAdd')--}}
{{--    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">--}}
{{--        <div class="col-start-1 col-span-2">--}}
{{--            <label class="block font-medium text-gray-700">--}}
{{--                Name--}}
{{--            </label>--}}
{{--            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"--}}
{{--                   type="text" name="name">--}}
{{--        </div>--}}
{{--        <div class="row-span-2">--}}
{{--            <label class="block font-medium text-gray-700">--}}
{{--                Foto--}}
{{--            </label>--}}
{{--            <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">--}}
{{--                <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer--}}
{{--                                  file:mr-4 file:py-2 file:px-4--}}
{{--                                  file:rounded-full file:border-0--}}
{{--                                  file:text-sm file:font-semibold--}}
{{--                                  file:bg-violet-50 file:text-violet-700--}}
{{--                                  hover:file:bg-violet-100--}}
{{--                                "/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-start-1 col-span-2">--}}
{{--            <label class="block font-medium text-gray-700">--}}
{{--                Prestasi--}}
{{--            </label>--}}
{{--            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"--}}
{{--                   type="text" name="prestasi">--}}
{{--        </div>--}}
{{--        <div class="col-start-1 col-span-2">--}}
{{--            <label class="block font-medium text-gray-700">--}}
{{--                Detail Prestasi--}}
{{--            </label>--}}
{{--            <textarea--}}
{{--                class="resize-none flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"--}}
{{--                name="detail_prestasi"></textarea>--}}
{{--        </div>--}}
{{--        <div class="col-start-1 col-span-2">--}}
{{--            <label class="block font-medium text-gray-700">--}}
{{--                Area--}}
{{--            </label>--}}
{{--            <select name="area"--}}
{{--                    class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase">--}}
{{--                <option disabled selected>--- Pilih Area ---</option>--}}
{{--                <option>hhk</option>--}}
{{--                <option>sd</option>--}}
{{--                <option>smp</option>--}}
{{--                <option>sma</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
        @if(session()->has('success'))
            <notification-component type="success" message="{{ session()->get('success') }}"></notification-component>
        @endif
    </div>
@endsection
