@extends('layouts.dashboard.master')
@section('title', '')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-purple-500 text-white rounded-full px-5 py-4 fas fa-shopping-bag"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">236</span>
                <div class="-mt-3 text-lg">Orders<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-green-500 text-white rounded-full px-3 py-4 fas fa-users"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">56</span>
                <div class="-mt-3 text-lg">Users<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-blue-500 text-white rounded-full px-4 py-4 fas fa-envelope"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">12</span>
                <div class="-mt-3 text-lg">Emails<i
                        class="mx-2 text-red-500 fas fa-caret-up transform rotate-180"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-yellow-500 text-white rounded-full px-3.5 py-4 fas fa-id-card-alt"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">36</span>
                <div class="-mt-3 text-lg">Subscribers<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <mac-card-component cardsname="Staff | Status" class="row-span-1 md:col-span-4 lg:col-span-6 overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4">

                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal font-raleway">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal font-raleway">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal font-raleway">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal font-raleway">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
                <div class="text-center">
                    <img class="h-8 w-8 rounded-full mx-auto"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                    <h1 class="text-base font-normal font-raleway">Jane Doe</h1>
                    <div class="px-6">
                        <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                    </div>
                </div>
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Blog | Table" class="row-span-2 md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-fixed w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Order Id</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Experience & Review</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td class="truncate">Template E-Commerce + Pro</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-yellow-500 px-2 py-0.5 text-white rounded-full">Pending</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-blue-500 px-2 py-0.5 text-white rounded-full">Processing</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Mail | Table" class="row-span-3 md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-fixed w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Order Id</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Experience & Review</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td class="truncate">Template E-Commerce + Pro</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-yellow-500 px-2 py-0.5 text-white rounded-full">Pending</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-blue-500 px-2 py-0.5 text-white rounded-full">Processing</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Visitor | Table" class="row-span-3 md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-fixed w-full h-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Order Id</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Experience & Review</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td class="truncate">Template E-Commerce + Pro</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-yellow-500 px-2 py-0.5 text-white rounded-full">Pending</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-blue-500 px-2 py-0.5 text-white rounded-full">Processing</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
    </div>
@endsection
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
        @if(session()->has('success'))
            <notification-component type="success" message="{{ session()->get('success') }}"></notification-component>
        @endif
        @if(session()->has('error'))
            <notification-component type="error" message="{{ session()->get('error') }}"></notification-component>
        @endif
    </div>
@endsection
