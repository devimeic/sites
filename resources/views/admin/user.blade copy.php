@extends('layouts.main')

@section('isi')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel User</h4>
            </div>
            <div class="card-body">

                        <a href="javascript:void(0)" class="btn btn-rounded btn-primary mb-4" id="btn-create-post"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                        </span>Tambah User</a>

                        
                        <div class="table-responsive">
                            <table id="example4" class="display min-w850">
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
                                            {{-- <td>***** </td> --}}
                                            <td>{{ $usr->no_hp }}</td>
                                            <td>{{ $usr->role }}</td>
                                            <td>
                                                @if ($usr->status_users == 'aktif')
                                                <span class="badge light badge-success">{{ $usr->status_users }}</span></td>
                                                @else
                                                <span class="badge light badge-danger">{{ $usr->status_users }}</span></td>
                                                @endif
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#editModal-{{ $usr->id }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    
                                                    {{-- <a href="{{ route('hapus', $usr->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                                    @include('admin.edit')
                                                    

                                                </div>
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                 
                                </tbody>
                            </table>
                           
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.tambah')
</body>
</html>

               
        


  
@endsection