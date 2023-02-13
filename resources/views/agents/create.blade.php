@extends('home')


@section('content')
    <div class="container-fluid">
        <form  action="{{route('agent.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <button class="btn btn-primary">Create Merchant <i class="bi bi-check"></i></button>
                    </div>
                    @if(Session::has('success'))
                     <p class="alert alert-info">{{ Session('success') }}</p>
                      @endif
                      @if(Session::has('error'))
                     <p class="alert alert-danger">{{ Session('error') }}</p>
                      @endif
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <strong>First Name:</strong>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Last Name:</strong>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Account:</strong>
                                <input type="text" name="account" class="form-control">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Suburb:</strong>
                                <input type="text" name="suburb" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Mobile Number:</strong>
                                <input type="number" name="cellphone" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>City:</strong>
                                <input type="text" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                           
                            </div>

                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
