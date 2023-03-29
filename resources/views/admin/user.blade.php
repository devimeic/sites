@extends('layouts.main')

@section('head')
    <!-- Datatable -->
    <link href="/disk/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('isi')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar User</h4>
        </div>
        <div class="card-body">
            <a href="javascript:void(0)" class="btn btn-rounded btn-primary mb-4" id="btn-create-post"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
            </span>Tambah User</a>
            
            <div class="table-responsive">
                <table id="example3" class="display min-w850">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Username</th>
                            {{-- <th>Password</th> --}}
                            <th>No HP</th>
                            <th>Rule</th>
                            <th>Status </th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        
                        @foreach ($data as $usr)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $usr->name }}</td>
                            <td>{{ $usr->username }}</td>
                            <td>{{ $usr->no_hp }}</td>
                            <td>{{ $usr->role }}</td>
                            <td> @if ($usr->status_users == 'aktif')
                                <span class="badge light badge-success">{{ $usr->status_users }}</span></td>
                                @else
                                <span class="badge light badge-danger">{{ $usr->status_users }}</span></td>
                                @endif</td>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#editModal-{{ $usr->id }}" class="btn btn-primary shadow btn-xs sharp mr-1">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </td>
                            			
                            @include('admin.edit')									
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    @include('admin.tambah')
@endsection

@section('foot')
    <!-- Datatable -->
    <script src="/disk/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/disk/js/plugins-init/datatables.init.js"></script>

    <!-- Modal Tambah Json -->
    <script>
        //button create post event
        $('body').on('click', '#btn-create-post', function () {
    
            //open modal
            $('#modal-create').modal('show');
        });
    
        //action create post
        $('#store').click(function(e) {
            e.preventDefault();
    
            //define variable
            let title   = $('#name').val();
            let username = $('#username').val();
            let password = $('#password').val();
            let no_hp = $('#no_hp').val();
            let role = $('#role').val();
            let status_users = $('#status_users').val();
            let token   = $("meta[name='csrf-token']").attr("username");
            
            //ajax
            $.ajax({
    
                url: `/tambahadmin`,
                type: "POST",
                cache: false,
                data: {
                    "name": name,
                    "username": username,
                    "password": password,
                    "no_hp": no_hp,
                    "role": role,
                    "status_users": status_users,
                    "_token": token
                },
                success:function(response){
    
                    //show success message
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                    });
    
                    //data post
                    let post = `
                        <tr id="index_${response.data.id}">
                            <td>${response.data.name}</td>
                            <td>${response.data.username}</td>
                            <td>${response.data.password}</td>
                            <td>${response.data.no_hp}</td>
                            <td>${response.data.role}</td>
                            <td>${response.data.status_users}</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                                <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                        </tr>
                    `;
                    
                    //append to table
                    $('#table-posts').prepend(post);
                    
                    //clear form
                    $('#name').val('');
                    $('#username').val('');
                    $('#password').val('');
                    $('#no_hp').val('');
                    $('#role').val('');
                    $('#status_user').val('');
    
                    //close modal
                    $('#modal-create').modal('hide');
                    
    
                },
                error:function(error){
                    
                    if(error.responseJSON.title[0]) {
    
                        //show alert
                        $('#alert-title').removeClass('d-none');
                        $('#alert-title').addClass('d-block');
    
                        //add message to alert
                        $('#alert-title').html(error.responseJSON.title[0]);
                    } 
    
                    if(error.responseJSON.content[0]) {
    
                        //show alert
                        $('#alert-content').removeClass('d-none');
                        $('#alert-content').addClass('d-block');
    
                        //add message to alert
                        $('#alert-content').html(error.responseJSON.content[0]);
                    } 
    
                }
    
            });
    
        });
    
    </script>
    <!-- End Modal Tambah Json -->
@endsection