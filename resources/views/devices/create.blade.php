@extends('home')


@section('content')
    <div class="container-fluid">
        <form  action="/save/device" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">

                    <div class="form-group">
                        <button class="btn btn-primary">Create Device <i class="bi bi-check"></i></button>
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Merchant Name: {{$agent->firstname}}</label>
                                <input type="hidden" name="agent_id" class="form-control" value="{{$agent->id}}">
                            </div>    
                            </div><br>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Imei:</strong>
                                    <input type="text" name="imei" class="form-control">
                                </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Status:</strong>
                                <input type="text" name="status" class="form-control">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Pos Sim Number:</strong>
                                <input type="text" name="pos_sim_number" class="form-control">
                                </div>
                            </div>
                    
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Terminal Id:</strong>
                                <input type="text" name="terminal_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Serial Number:</strong>
                                <input type="text" name="serial_number" class="form-control">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Pos Type:</strong>
                                <input type="text" name="pos_type" class="form-control">
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
