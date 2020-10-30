@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container rounded bg-s mt-5 bg-secondary text-white">
        <div class="row  bg-secondary text-white">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center py-0" ><img class="rounded-circle" style="width: 300px; height:300px"src="/assets/profile.png">
                <span class="font-weight-bold">Username</span><span class="text-white">email</span><span> </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Edit Profil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nama Lengkap</label><input type="text" class="form-control" placeholder="first name" value="Yulia Niza"></div>
                        <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="nizayulia" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">No Telepon</label><input type="text" class="form-control" placeholder="enter phone number" value="08999333423"></div>
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="enter address" value="Surabaya"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" value="lia@gmail.com"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="Masukkan password" value=""></div>
                        <div class="col-md-6"><label class="labels">Konfirmasi Password</label><input type="text" class="form-control" value="" placeholder="Konfirmasi password"></div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="mt-5 text-center mr-2"><button class="btn btn-primary profile-button" type="button">Simpan</button></div>
                        <div class="mt-5 text-center"><button class="btn btn-danger profile-button" type="button">Batalkan</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection