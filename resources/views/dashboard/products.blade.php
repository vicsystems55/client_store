@extends('dashboard.layouts.base')

@section('content')

<dash-products-component vueurl='{{config('app.url')}}'></dash-products-component>



@endsection
