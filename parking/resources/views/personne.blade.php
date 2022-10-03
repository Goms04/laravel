@extends('base')

@section('content')

<div class="card mt-5">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénoms</th>
                    <th>Date de naissance</th>
                    <th>Email</th>
                    <th>Sexe</th>
                    <th>Actions</th>
                </tr>


            <tbody>
                @foreach ($personne as $pers)
                    <tr>
                        <td>{{ $pers->nom }}</td>
                        <td>{{ $pers->prenom }}</td>
                        <td>{{ $pers->date_naissance }}</td>
                        <td>{{ $pers->email }}</td>
                        <td>{{$pers->sexe}}</td>

                        <td class="text-center">
                            <a href="" class="btn  bg-info" data-toggle="modal"
                                data-target="#modal{{ $pers->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" class="btn bg-secondary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="btn bg-danger" data-toggle="modal"
                                data-target="#mymodal{{ $pers->id }}">
                                <i class="fas fa-trash"></i>
                            </a>


                            {{-- modal modification --}}

                            {{-- modal modification --}}
                            <div class="modal fade" id="modal{{ $pers->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modification</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            {{-- content --}}
                                            <form action="{{ route('personne.update', $pers->id) }}"
                                                method="POST">
                                                @csrf

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Nom :</label>
                                                                <input type="text" class="form-control" value="{{ $pers->nom }}" id="exampleInputEmail1" name="nom"
                                                                    placeholder="Entrez le nom">
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Prénoms :</label>
                                                                <input type="text" class="form-control" value="{{ $pers->prenom }}" id="exampleInputEmail1" name="prenom"
                                                                    placeholder="Enter le prenom">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Date de naissance :</label>
                                                                <input type="date" class="form-control" value="{{ $pers->date_naissance }}" name="date_naissance" id="exampleInputEmail1"
                                                                    placeholder="Entrez la date de naissance">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email :</label>
                                                                <input type="email" class="form-control" value="{{ $pers->email }}" name="email" id="exampleInputEmail1"
                                                                    placeholder="Entrer email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <label for="sex">Sexe :</label>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <div class="form-check d-inline-block">
                                                            <input class="form-check-input" id="sex" type="radio" value="M"
                                                            @if ($pers->sexe == 'M')
                                                                checked
                                                            @endif name="sexe">
                                                            <label class="form-check-label">Masculin</label>
                                                        </div>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <div class="form-check d-inline-block">
                                                            <input class="form-check-input" id="sex" type="radio"
                                                            @if ($pers->sexe == 'F')
                                                                checked
                                                            @endif value="F" name="sexe">
                                                            <label class="form-check-label">Féminin</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-primary ">Enregistrer</button>
                                                </div>
                                            </form>
                                        </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>

                                {{-- modal de suppression --}}
                                <div class="modal fade" id="mymodal{{ $pers->id }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger ">
                                                        <h4 class="modal-title text-white fw-bold">Small Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('personne.delete', $pers->id) }}" method="POST">
                                                            @csrf
                                                                <p>voulez vous vraiment supprimer"

                                                                        {{ $pers->nom }}&nbsp;({{ $pers->mprenoms }})" ?</p>

                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger swalDefaultSuccess">Supprimer</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                     <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
