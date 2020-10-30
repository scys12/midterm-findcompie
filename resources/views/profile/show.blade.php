@extends('layouts.app')
@section('content')
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center py-0" ><img class="rounded-circle" style="width: 300px; height:300px"src="https://cdn4.iconfinder.com/data/icons/instagram-ui-twotone/48/Paul-18-512.png">
                <span class="font-weight-bold">Username</span><span class="text-black-50">{{ $user->username }}</span><span> </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right"> Profile</h4>
                        <div class=" text-center"><button class="btn btn-warning profile-button" type="button">Edit Profil</button></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <b  class="form-control"> {{ $user->name }}</b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Username</label>
                            <b  class="form-control"> {{ $user->username }} </b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Location</label>
                            <b  class="form-control"> {{ $user->location}} </b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Phone Number</label>
                            <b  class="form-control"> {{ $user->phone_number}} </b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <b  class="form-control"> {{ $user->email }} </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection