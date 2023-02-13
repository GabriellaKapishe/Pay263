@extends('home')
                        
    @section('content')
    <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

        <table class="table"  table id="example" class="display">
           
        <thead>
            
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Account</th>
                <th>Email</th>
                <th>Cellphone</th>
                <th>Suburb</th>
                <th>City</th>
                <th>Action</th>

            </tr>
            </thead>
                @foreach($agent as $agent)
                <tbody>
                <tr>   
                    <td>{{ $agent['firstname'] }}</td>
                    <td>{{ $agent['lastname'] }}</td>
                    <td>{{ $agent['account'] }}</td>
                    <td>{{ $agent['email'] }}</td>
                    <td>{{ $agent['cellphone'] }}</td>
                    <td>{{ $agent['suburb'] }}</td>
                    <td>{{ $agent['city'] }}</td>
                    <td>
                        <a class="btn btn-primary" href="/create-device/{{$agent['id']}}">Add Device</a>
                    </td>
                </tr>
                </tbody>
                @endforeach
                
                </table>
</div>
</div>
</div>
@endsection





