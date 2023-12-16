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

        <h2>Edit RGM</h2>
        <div >
            <form action="{{url('rgms/'.$rgm->id)}}" method="POST">
                @csrf
                <div class="input">               
                    <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control" value="{{$rgm->full_name}}">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">                
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control" value="{{$rgm->email}}">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="branch" id="branch" placeholder="Enter branch..." class="form-control" value="{{$rgm->branch}}">
                    @error('branch')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="salary" id="salary" placeholder="Enter salary..." class="form-control" value="{{$rgm->salary}}">
                    @error('salary')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="contact_number" id="contact_number" placeholder="Enter contact_number..." class="form-control" value="{{$rgm->contact_number}}">
                    @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">

                    <button class="btn btn-primary" type="submit">
                        Edit Rgm
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>

@endsection