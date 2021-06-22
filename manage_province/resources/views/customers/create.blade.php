@extends('home')
@section('title','Add new customer')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Add new customer</h2>
            </div>
            <div class="col-12">
                <form action="{{route('customers.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Customer name
                            <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Enter name" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputDob">Date of birth
                            <input type="date" name="inputDob" id="inputDob" class="form-control" placeholder="yyyy-mm-dd" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email
                            <input type="text" name="inputEmail" id="inputEmail" class="form-control" placeholder="Enter email" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputCityId">City
                            <select name="inputCityId" id="inputCityId" class="form-control">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('customers.index')}}" class="btn btn-secondary">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
