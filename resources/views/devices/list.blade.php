@extends('home')
                        
    @section('content')

     <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

        <table class="table"  table id="example" class="display">
           
        <thead>
            
            <tr>
                <th>Imei</th>
                <th>Status</th>
                <th>Name</th>
                <th>Pos Sim Number/th>
                <th>Terminal Id</th>
                <th>Serial Number</th>
                <th>Pos Type</th>

            </tr>
            </thead>
                @foreach($device as $device)
                <tbody>
                <tr>   
                    <td>{{ $device['imei'] }}</td>
                    <td>{{ $device['status'] }}</td>
                    <td>{{ $device['name'] }}</td>
                    <td>{{ $device['pos_sim_number'] }}</td>
                    <td>{{ $device['terminal_id'] }}</td>
                    <td>{{ $device['serial_number'] }}</td>
                    <td>{{ $device['pos_type'] }}</td>
                    
                </tr>
                </tbody>
                @endforeach
                
                </table>
</div>
</div>
</div>
@endsection





