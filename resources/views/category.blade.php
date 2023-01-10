@extends('includes.dashboard')
@section('section')
    <br><br>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class=" mt-20">All Categories</h4>
                <div class="card mb-4 w-100%">

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $value)
                                    <tr>


                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td><img src="{{ asset('images/category/' . $value->image) }}" alt="tag"></td>
                                        <td> <a href="{{ url('delete-category/' . $value->id) }}"><i
                                                    class="fa fa-trash text-danger"></i></a> </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>

    </div>
    < </div>
    @endsection
