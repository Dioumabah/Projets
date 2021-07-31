@extends('layouts.appadmin', ['title'=>'Liste des utilisateurs'])

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des utilisateurs</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                           <div class="col-md-6">
                                <h3 class="card-title">Liste des utilisateurs de la plateform</h3>
                           </div>
                           <div class="col-md-6">
                                <a href="{{ route('admin.creer') }}"><i class="btn btn-primary"> Créer un utilisateur</i></a>
                           </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (Session::has('compte_delete'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('compte_delete') }}
                                </div>
                            @endif
                            @if (Session::has('compte_update'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('compte_update') }}
                                </div>
                            @endif
                             @if (Session::has('compte_creer'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('compte_creer') }}
                                </div>
                            @endif

                            <table id="dataBmd" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email  }}</td>
                                            <td>{{ $user->role->name  }}</td>
                                            <td class="text text-center text-sm">
                                                <a href="/edit-user/{{ $user->id }}"><span
                                                        class="btn btn-primary fa fa-edit"></span></a>
                                                <a href="/delete-user/{{ $user->id }}"><span
                                                        class="btn btn-danger fa fa-trash-alt"></span></a>
                                            </td>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
