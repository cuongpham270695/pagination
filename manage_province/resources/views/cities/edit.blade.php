@extends('home')
@section('title','Edit city')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Edit city</h2>
            </div>
            <div class="col-12">
                <form action="{{route('cities.update',$city->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">City name
                            <input type="text" name="inputName" class="form-control" id="inputName" value="{{$city->name}}" required>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{route('cities.index')}}" class="btn btn-secondary">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
