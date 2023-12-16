@extends('dashboard.layouts.base')

@section('content')

<div class="page-body">
    <div class="m-5"></div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Settings
                            <small></small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

                    <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row products-admin ratio_asos">


                            @if(Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                            @endif


                            <form action="/update-app" method="post">
                                @csrf
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update application version </button>
                                </div>
                            </form>




                        </div>
                    </div>
                    <!-- Container-fluid Ends-->
</div>



@endsection
