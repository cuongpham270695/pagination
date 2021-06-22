@extends('home')
@section('title','Edit customer')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h2>Edit customer</h2>
            </div>
            <div class="col-12">
                <form action="{{route('customers.update',$customer->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Customer name
                            <input type="text" name="inputName" class="form-control" id="inputName"
                                   value="{{$customer->name}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputDob">Date of birth
                            <input type="date" name="inputDob" id="inputDob" class="form-control"
                                   value="{{$customer->dob}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email
                            <input type="text" name="inputEmail" id="inputEmail" class="form-control"
                                   value="{{$customer->email}}" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputCityId">City
                            <select name="inputCityId" id="inputCityId" class="form-control">
                                @foreach($cities as $city)
                                    <option
                                    @if($customer->city_id == $city->id)
                                        {{"selected"}}
                                        @endif
                                        value="{{$city->id}}"
                                    >{{$city->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{route('customers.index')}}" class="btn btn-secondary">Return</a>
                </form>
            </div>
        </div>
    </div>
@endsection
