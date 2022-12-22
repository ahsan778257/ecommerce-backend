@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ route('add') }}">Add catagory</a></li>
                        <li><a href="{{ route('manage') }}">Manage Catagory</a></li>
                        <li><a href="{{ route('brand') }}">Brand Catagory</a></li>
                    </ul>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
