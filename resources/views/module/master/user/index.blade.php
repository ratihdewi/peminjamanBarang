@extends("master.main")

@section("title","User")

@section("content")

<header class="page-header page-header-dark pb-10">
    <div class="container"><br>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    @include('partial.alert')
    <div class="card mb-4">
        <div class="card-header">
            Daftar User
            <a class="btn btn-primary btn-sm float-right" href="{{route('master.user.create')}}">
                <i class="mr-1" data-feather="plus-square"></i>
                Tambah User
            </a>
        </div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>                            
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                       
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->users->name}}</td>
                                <td class="text-center"><a href="{{route('master.user.show', [$user])}}" class="btn btn-light btn-sm"><small>Detail</small></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection