@extends('pages.base')

@section('content')


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
    </style>


   
    <center><div class="row">

        <h2>Edit Manager</h2>
        <div >
            <form action="{{url('managers/'.$manager->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="rgm_id" class="title">Select Manager</label>
                    <select name="rgm_id" id="rgm_id" class="form-select">
                        @foreach ($rgms as $rgmId => $rgm)
                            <option value="{{$rgmId}}">{{$rgm}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input">               
                    <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control" value="{{$manager->full_name}}">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">                
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control" value="{{$manager->email}}">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="station" id="station" placeholder="Enter station..." class="form-control" value="{{$manager->station}}">
                    @error('station')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="salary" id="salary" placeholder="Enter salary..." class="form-control" value="{{$manager->salary}}">
                    @error('salary')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="contact_number" id="contact_number" placeholder="Enter contact_number..." class="form-control" value="{{$manager->contact_number}}">
                    @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Edit Manager
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>

@endsection