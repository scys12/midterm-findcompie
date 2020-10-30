@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <br>
    <div class="container rounded bg-secondary text-white mt-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center py-0" ><img class="rounded-circle" style="width: 300px; height:300px"src="https://cdn4.iconfinder.com/data/icons/instagram-ui-twotone/48/Paul-18-512.png">
                <span class="font-weight-bold">Username</span><span class="text-white">email</span><span> </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right"> Profil</h4>
                        <div class=" text-center"><button class="btn btn-warning profile-button" type="button">Edit Profil</button></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nama Lengkap</label>
                            <b  class="form-control"> Yulia Niza</b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Username</label>
                            <b  class="form-control"> nizayulia</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Alamat</label>
                            <b  class="form-control"> Surabaya</b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">No Telepon</label>
                            <b  class="form-control"> 089999922222</b>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <b  class="form-control"> aa@gmail.com</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection