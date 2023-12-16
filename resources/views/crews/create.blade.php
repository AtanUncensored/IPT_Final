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
    .title {
        text-align: left;
    }
    .main {
        text-align: center;
        color: black;
    }

    .form-select {
        width: 340px;
    }
    .form-control {
        width: 340px;
    }
    .button {
        margin: 0 50px;
    }
    form {
        width: 300px;
    }
</style>


<h1 class="main">Create Crew</h1>
<center><div class="row">
    <div class="col-md-5">
        <form action="{{url('crews/create')}}" method="POST">
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
            <div class="form-group mt-4">
                <label for="full_name">full_name</label>
                <input type="text" name="full_name" id="full_name" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="address">address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="salary">salary</label>
                <input type="text" name="salary" id="salary" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="station">station</label>
                <input type="text" name="station" id="station" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="contact_number">contact_number</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary mt-2" type="submit">Add Crew</button>
            </div>
        </form>
    </div>
</div></center>

@endsection