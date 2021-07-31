@extends('layouts.appadmin', ['title'=>'Liste des activités en ligne'])

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des activités</h1>
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
                                <h3 class="card-title">Liste des activités en ligne</h3>
                           </div>
                           <div class="col-md-6">
                                <a href="{{ route('admin.create') }}"><i class="btn btn-primary"> Créer une activité</i></a>
                           </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (Session::has('activite_delete'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('activite_delete') }}
                                </div>
                            @endif
                            @if (Session::has('activite_update'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('activite_update') }}
                                </div>
                            @endif
                            <table id="dataBmd" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activites as $activite)
                                        <tr>
                                            <td>{{ $activite->titre }}</td>
                                            <td>{!! $activite->contenu !!}</td>
                                            <td><img class="img-thumbnail"
                                                    src="{{ asset('/uploads/activites') }}/{{ $activite->image }}"
                                                    width="100"></td>
                                            <td class="text text-center text-sm">
                                                <a href="/edit-activite/{{ $activite->id }}"><span
                                                        class="btn btn-primary fa fa-edit"></span></a>
                                                <a href="/delete-activite/{{ $activite->id }}"><span
                                                        class="btn btn-danger fa fa-trash-alt"></span></a>
                                            </td>
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Image</th>
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
