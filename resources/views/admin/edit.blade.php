@extends('layouts.appadmin', ['title'=>'Modification'])

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Création d'une activité</h1>
                    </div>
                    <div class="col-sm-6">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Editeur de saisie
                                <small>Simple et rapide</small>
                            </h3>

                        </div>
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('admin.update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $activite->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Titre</label>
                                    <input type="text" name="titre" class="form-control" id="exampleInputEmail1"
                                        placeholder="Titre de l'activité" value="{{ old('titre') ?: $activite->titre }}">
                                    @error('titre')
                                        <span class="text-danger text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" value="{{ old('image') ?: $activite->image }}"
                                                class="custom-file-input" id="exampleInputFile"
                                                onchange="previewFile(this)">
                                            <label class="custom-file-label" for="exampleInputFile">Télécharger</label>


                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <img id="previewImg" alt="{{ $activite->titre }}" class="img-thumbnail"
                                            src="{{ asset('/uploads/activites') }}/{{ $activite->image }}" width="250"
                                            style="max-width: 130px; margin-top: 20px;">

                                    </div>
                                    @error('image')
                                        <span class="text-danger text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Contenu</label>
                                    <div class="mb-3">
                                        <textarea class="textarea" name="contenu" placeholder="Saisir ici le contenu"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                            id="previewImg">{{ old('conenu') ?: $activite->contenu }}</textarea>
                                    </div>
                                    @error('contenu')
                                        <span class="text-danger text-sm ">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                        <!-- /.card-header -->
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
