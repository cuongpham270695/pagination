@extends('home')
@section('title','Add new city')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Add new city</h2>
            </div>
            <div class="col-12">
                <form action="{{route('cities.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">City
                            <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Enter name" required>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{route('cities.index')}}" class="btn btn-secondary">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
