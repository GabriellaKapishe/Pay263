@extends('home')                   
                       
    @section('content')

     <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

        <table class="table"  table id="example" class="display">
           
        <thead>
            
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>

            </tr>
            </thead>
                @foreach($users as $user)
                <tbody>
                <tr>   
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <a class href="{{ route('users.edit',$user->id) }}"> <i class='fa fa-edit'></i></a>
                       
                    </td>
                </tr>
                </tbody>    
                @endforeach
                
                </table>
</div>
</div>
@endsection





