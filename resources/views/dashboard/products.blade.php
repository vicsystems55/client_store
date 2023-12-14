@extends('dashboard.layouts.base')

@section('content')

<products-component vueurl="{{config('app.url')}}"></products-component>



@endsection
