@extends('admin.dashboard.dash-master')



@section('mainpanel')

    <div class="container">
        <div class="row">
            <div class="col-md-12 justify-content-center">
                <div class="card align-items-center">
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <td>Si No</td>
                            <h1> {{ Session::get('message') }}</h1>
                            <td>Brand Name</td>
                            <td>Brand Price</td>
                            <td>Publication status</td>
                            <td>Brand description</td>
                            <td>Action</td>
                        </tr>
                        @php($i = 1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $brand -> brand_name }}</td>
                                <td>{{ $brand -> brand_price }}</td>
                                <td>{{ $brand -> publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>{{ $brand -> brand_description }}</td>
                                <td>
                                    @if($brand -> publication_status == 1)
                                        <a href="{{ route('unpublished-brand',['id'=>$brand->id]) }}" class="btn btn-warning btn-xs">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('published-brand',['id'=>$brand->id]) }}" class="btn btn-secondary btn-xs">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </a>
                                    @endif
                                        <a href="{{ route('update-brand',['id'=>$brand->id]) }}" class="btn btn-success btn-xs">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-brand', ['id'=>$brand->id]) }}" class="btn btn-danger btn-xs">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>


                                </td>
                            </tr>
                        @endforeach


                    </table>

                </div>

            </div>


        </div>
    </div>


@endsection

