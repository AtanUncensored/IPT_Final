@extends('pages.base')

@section('content')

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

        <h2>Create New Rgm</h2>
        <div >
            <form action="{{url('rgms/create')}}" method="POST">
                @csrf
                <div class="input">               
                    <input type="text" name="full_name" id="full_name" placeholder="Enter full name..." class="form-control">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">                
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="branch" id="branch" placeholder="Enter branch..." class="form-control">
                    @error('branch')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="salary" id="salary" placeholder="Enter salary..." class="form-control">
                    @error('salary')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <input type="text" name="contact_number" id="contact_number" placeholder="Enter contact number..." class="form-control">
                    @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add Rgm
                    </button>
                </div>
            </form>
        </div>
    </div>
</center>

@endsection