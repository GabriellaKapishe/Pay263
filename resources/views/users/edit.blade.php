@extends('home')
   
@section('content')
    <div class="card">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <br><br>
                <a class="btn btn-primary" href="{{ route('users.list') }}"> Back</a>
            </div>
        </div>
    
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="post">

        @csrf
        @method('POST')
   
         <!-- <div class="row"> -->
        


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                                </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                            </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Status:</strong>
                                <input type="text" name="status" value="{{ $user->status }}" class="form-control" placeholder="Status">
                            </div>
                            </div>
                           
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <strong>Role:</strong>
                            <select class="form-control" name="role">
                                <option value="admin">Admin User</option>
                                <option value="agent">Merchant User</option>
                            </select>
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
        @endsection
