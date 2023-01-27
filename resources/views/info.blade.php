@extends('layouts.default')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <span style="font-size: 2rem;">JinyPHP</span>
    </div>

    <ul>
        <li class="text-sm text-gray-500">
            PHP v{{ PHP_VERSION }}
        </li>
        <li class="text-sm text-gray-500">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }}
        </li>
        <li class="text-sm text-gray-500">
            livewire
        </li>
    </ul>




</div>
@endsection
