@extends('home')
@section('title','Customer List')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Customer List</h2></div>
            <div class="col-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check"
                           aria-hidden="true"></i>{{\Illuminate\Support\Facades\Session::get('success')}}
                    </p>
                @endif

                @if(isset($totalCustomerFilter))
                    <span class="text-muted">{{"Found $totalCustomerFilter customers"}}</span>
                @endif

                @if(isset($cityFilter))
                    <div class="pl-5">
                        <span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                            {{"In: $cityFilter->name"}}
                        </span>
                    </div>
                @endif
            </div>
            <div>
            <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#cityModal">
                Filter
            </a>
            <a href="{{route('customers.create')}}" class="btn btn-info ">Create new</a>
            </div>
            <div class="col-6">
                <form action="" class="navbar-form navbar-left">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer name</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($customers as $key => $customer)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->city->name}}</td>
                        <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{route('customers.destroy',$customer->id)}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure to delete this? ')">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Don't have data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
{{--            {{$customers->links()}}--}}
            {{ $customers->appends(request()->query()) }}
        </div>
        <div class="modal fade" id="cityModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <form action="{{route('customers.filterByCity')}}" method="get">
                    @csrf
                    <<div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!--Lọc theo khóa học -->
                            <div class="select-by-program">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label border-right">Filter customer by city</label>
                                    <div class="col-sm-7">
                                        <label>
                                            <select class="custom-select w-100" name="city_id">
                                                <option value="">Choose city</option>
                                                @foreach($cities as $city)
                                                    @if(isset($cityFilter))
                                                        @if($city->id == $cityFilter->id)
                                                            <option value="{{$city->id}}"
                                                                    selected>{{ $city->name }}</option>
                                                        @else
                                                            <option value="{{$city->id}}">{{ $city->name }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{$city->id}}">{{ $city->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                            <!--End-->

                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submitAjax" class="btn btn-primary">Chọn</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
