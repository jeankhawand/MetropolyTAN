@extends('dashboard::layouts.master')
@section('content')


    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            @include('dashboard::layouts.sidebar')
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                @include('dashboard::layouts.header')
                <div>
                    @yield('dashboard-content')
                </div>
            </div>

        </div>
    </main>


@endsection
