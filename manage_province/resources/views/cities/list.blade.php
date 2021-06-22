@extends('home')
@section('title','City list')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h2>City list</h2>
            </div>
            <div class="col-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </p>
                @endif
            </div>
            <a href="{{route('cities.create')}}" class="btn btn-info">Add new city</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" class="col-12 col-md-1" style="text-align: center">#</th>
                    <th scope="col" class="col-12 col-md-2" style="text-align: center">City</th>
                    <th scope="col" class="col-12 col-md-5" style="text-align: center">Customer quantity</th>
                    <th colspan="2" class="col-12 col-md-4" style="text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($cities as $key => $city)
                    <tr>
                        <th scope="row" class="col-12 col-md-1" style="text-align: center">{{++$key}}</th>
                        <td class="col-12 col-md-2" style="text-align: center">{{$city->name}}</td>
                        <td class="col-12 col-md-5" style="text-align: center">{{count($city->customers)}}</td>
                        <td class="col-12 col-md-2" style="text-align: center"><a
                                href="{{route('cities.edit',$city->id)}}" class="btn btn-primary">Edit</a></td>
                        <td class="col-12 col-md-2" style="text-align: center"><a
                                href="{{route('cities.destroy',$city->id)}}" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this ?')">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td>Don't have any data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
