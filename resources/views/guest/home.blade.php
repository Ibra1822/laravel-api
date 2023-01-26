@extends('layouts.presentation')

@section('content')
{{-- <div id="app"> --}}

<div class="cont-all">
    <div class="cont-aside-guest">
        @include('admin.partials.aside')
    </div>
    <div class="ib-content ">
        <h1> Benvenuto @auth {{ Auth::user()->name}} @endauth </h1>
    </div>
</div>

{{-- </div> --}}
@endsection
