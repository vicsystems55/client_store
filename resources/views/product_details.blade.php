@extends('layouts.base')

@section('content')


@include('inc.header')



<product-details-component :product_code="{{request()->id}}"></product-details-component>

@include('inc.footer')

@endsection
