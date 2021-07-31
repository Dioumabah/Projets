@extends('layouts.appadmin', ['title'=>'Liste des contacts'])

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des contacts</h1>
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
                                <h3 class="card-title">Liste des contacts de la plateform</h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (Session::has('contact_delete'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('contact_delete') }}
                                </div>
                            @endif

                            <table id="dataBmd" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom </th>
                                        <th>Email</th>
                                        <th>Suject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{!! $contact->subject !!}</td>
                                            <td>{!! $contact->message !!}</td>
                                            <td class="text text-center text-sm">
                                                <a href="{{ route('admin.deleteContact', $contact->id) }}"><span
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
