@extends('pages.base')

@section('content')
@if (session('message'))
    <div class="success">{{session('message')}}</div>
@endif

<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('managers/create ')}}" class="btn btn-primary me-md-2" type="button">
        Add New Manager
    </a>
</div>

    <style>

           /* Center the entire table */
    table {
        width: 100%; /* Adjust the width as needed */
        margin: auto;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: yellow;
        color: rgb(23, 43, 23);
        
    }
    td {
        background-color: rgb(233, 233, 190);
    }

    .success  {
        padding: 15px;
        text-align: center;
        background-color: white;
        color: green;
        border-radius: 9px;

    }

    </style>

   <center><table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rgm</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Station</th>
                    <th>Salary</th>
                    <th>Contact_Number</th>
                    <th>Edit</th>


                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($managers as $manager):?>
                    <tr>
                        <td>{{$manager->id}}</td>
                        <td>{{$manager->rgm->full_name}}</td>
                        <td>{{$manager->full_name}}</td>
                        <td>{{$manager->email}}</td>
                        <td>{{$manager->station}}</td>
                        <td>{{$manager->salary}}</td>
                        <td>{{$manager->contact_number}}</td>
                        <td class="text-center">
                            <a href="{{url('/managers/'.$manager->id)}}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </td>

                        
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table></center> 
        
@endsection