@extends('pages.base')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete RGM - {{$crew->full_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <form action="{{url('crews/delete/'. $crew->id)}}" method="POST">
        @csrf
        @method('DELETE')
       
        <div class="modal-body">
          Are you sure you want to delete this RGM?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete Crew</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@if (session('message'))
<div class="success">{{session('message')}}</div>
@endif

    <style>
        .row  {
            color: black;
            width: 400px;
            border: 1px solid black;
            padding: 20px;
            background-color: rgba(167, 164, 164, 0.651);
        }
        .input {
            margin: 10px;
        }
        h1 {
            color:black;
        }
    </style>


   
    <center><div class="row">

        <h2>Edit Crew</h2>
        <div >
            <form action="{{url('crews/'.$crew->id)}}" method="POST">
                @csrf  
                
                <div class="form-group">
                    <label for="manager_id" class="title">Select Manager</label>
                    <select name="manager_id" id="manager_id" class="form-select">
                        @foreach ($managers as $managerId => $manager)
                            <option value="{{$managerId}}">{{$manager}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rgm_id" class="title">Select Rgm</label>
                    <select name="rgm_id" id="rgm_id" class="form-select">
                        @foreach ($rgms as $rgmId => $rgm)
                            <option value="{{$rgmId}}">{{$rgm}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input">               
                    <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control" value="{{$crew->full_name}}">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">                
                    <input type="text" name="address" id="address" placeholder="Enter address..." class="form-control" value="{{$crew->address}}">
                    @error('address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="station" id="station" placeholder="Enter station..." class="form-control" value="{{$crew->station}}">
                    @error('station')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="salary" id="salary" placeholder="Enter salary..." class="form-control" value="{{$crew->salary}}">
                    @error('salary')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="contact_number" id="contact_number" placeholder="Enter contact_number..." class="form-control" value="{{$crew->contact_number}}">
                    @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                        Delete
                      </button>

                    <button class="btn btn-primary" type="submit">
                        Edit Crew
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>

@endsection