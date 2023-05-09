@extends('layouts.main')

@section('isi')
<div class="card">
    <div class="card-header"><strong>Profil</strong></div>
    <div class="card-body">
        <div class="basic-form">

            <form>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control text-black" value="{{ $data->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control text-black" value="{{ $data->username }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control text-black" value="*******" readonly>
                    </div>

                    <button type="button" class="btn btn-danger mb-2 " data-toggle="modal" data-target="#editpassword"><i class="fa fa-pencil"></i></button>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control text-black" value="{{ $data->no_hp }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Role</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control text-black" value="{{ $data->role }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status User</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control text-black" value="{{ $data->status_users }}" readonly>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mb-2 mx-3" data-toggle="modal" data-target="#basicModal">Edit Profil</button>
                    </div>
                </div>
            </form>

        </div>
        @include('edit-profil')
        @include('edit-password')
    </div>
</div>
@endsection


