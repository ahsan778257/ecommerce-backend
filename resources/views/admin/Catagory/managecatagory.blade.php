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
                            <td>Catagory Name</td>
                            <td>Catagory Price</td>
                            <td>Publication status</td>
                            <td>Catagory description</td>
                            <td>Action</td>
                        </tr>
                        @php($i = 1)
                        @foreach($catagories as $catagory)
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $catagory -> catagory_name }}</td>
                                <td>{{ $catagory -> catagory_price }}</td>
                                <td>{{ $catagory -> publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>{{ $catagory -> catagory_description }}</td>
                                <td>
                                    @if($catagory -> publication_status == 1)
                                        <a href="{{ route('unpublished-catagory',['id'=>$catagory->id]) }}" class="btn btn-secondary btn-xs">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('published-catagory',['id'=>$catagory->id]) }}" class="btn btn-warning btn-xs">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </a>
                                    @endif

                                    <a href="{{ route('editcatagory',['id'=>$catagory->id]) }}" class="btn btn-success btn-xs">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="{{ route('delete-catagory', ['id'=>$catagory->id]) }}" class="btn btn-danger btn-xs">
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

