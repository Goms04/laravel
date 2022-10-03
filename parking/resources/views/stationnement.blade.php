@extends('base')

@section('content')



    <!-- general form elements -->
    <div class=" container-fluid card card-default">
        <div class="card-header">
            <h3 class="">Informations de la personne</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('stationnement.create') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom :</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nom"
                                placeholder="Entrez le nom">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prénoms :</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="prenom"
                                placeholder="Enter le prenom">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date de naissance :</label>
                            <input type="date" class="form-control" name="date_naissance" id="exampleInputEmail1"
                                placeholder="Entrez la date de naissance">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email :</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                placeholder="Entrer email">
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <label for="sex">Sexe :</label>
                    &nbsp;&nbsp;&nbsp;
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" id="sex" type="radio" value="M" name="sexe" checked>
                        <label class="form-check-label">Masculin</label>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" id="sex" type="radio" value="F" name="sexe">
                        <label class="form-check-label">Féminin</label>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class=" container-fluid card card card-default ">
                <div class="card-header">
                    <h3 class="">Informations de la voiture</h3>
                </div>

                <div class="row mt-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Marque :</label>
                            <input type="text" class="form-control" name="marque" id="exampleInputEmail1"
                                placeholder="Entrez la marque">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Modele :</label>
                            <input type="text" class="form-control" name="model" id="exampleInputEmail1"
                                placeholder="Enter le modèle">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Couleur :</label>
                            <input type="text" class="form-control" name="couleur" id="exampleInputEmail1"
                                placeholder="Enter la couleur">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Immatriculation :</label>
                            <input type="text" class="form-control" name="immatriculation" id="exampleInputEmail1"
                                placeholder="Enter l'immatriculation de la voiture'">
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <label for="sex">Disponible :</label>
                    &nbsp;&nbsp;&nbsp;
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" id="sex" type="radio" value="1" name="disponible"
                            checked>
                        <label class="form-check-label">Oui</label>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" id="sex" type="radio" value="0" name="disponible">
                        <label class="form-check-label">Non</label>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Heure d'arrivée :</label>
                            <input type="time" class="form-control" name="heure" id="exampleInputEmail1"
                                placeholder="Entrez l'heure d'arrivée'">
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-3">
                        <label for="sex">Récupérée :</label>
                        &nbsp;&nbsp;&nbsp;
                        <div class="form-check">
                            <input class="form-check-input" id="sex" type="radio" value="1"
                                name="recupere">
                            <label class="form-check-label">Oui</label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" id="sex" type="radio" value="0"
                                name="recupere" checked>
                            <label class="form-check-label">Non</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
            </div>

        </form>


        <div class="card mt-5">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Voiture</th>
                            <th>Heure d'arrivée</th>
                            <th>Récupérée</th>
                            <th>Actions</th>
                        </tr>


                    <tbody>
                        {{-- the $stationnement variable is the variable declared in the display controller to recycle the list
                            stationnement table from the database --}}
                        @foreach ($stationnement as $st)
                            <tr>
                                
                                <td>{{ $st->personne->nom }}</td>
                                <td>{{ $st->personne->prenom }}</td>
                                <td>{{ $st->voiture->marque }} &nbsp; ({{ $st->voiture->model }})</td>
                                <td>{{ $st->heure }}</td>
                                @if ($st->recupere == 0)
                                    <td>Non</td>
                                @else
                                    <td>Oui</td>
                                @endif

                                <td class="text-center">
                                    <a href="" class="btn  bg-info" data-toggle="modal"
                                        data-target="#modal{{ $st->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn bg-secondary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn bg-danger" data-toggle="modal"
                                        data-target="#mymodal{{ $st->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>


                                    {{-- modal modification --}}
                                    <div class="modal fade" id="modal{{ $st->id }}">
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
                                                    <form action="{{ route('stationnement.update', $st->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Heure d'arrivée :</label>
                                                            <input type="time" class="form-control"
                                                                value="{{ $st->heure }}" name="heure"
                                                                id="exampleInputEmail1"
                                                                placeholder="Entrez l'heure d'arrivée'">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sex">Récupérée :</label>
                                                            &nbsp;&nbsp;&nbsp;
                                                            <div class="form-check d-inline-block">
                                                                <input class="form-check-input" id="sex"
                                                                    type="radio"
                                                                    value="1" @if ($st->recupere == '1') checked @endif
                                                                    name="recupere">
                                                                <label class="form-check-label">Oui</label>
                                                            </div>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <div class="form-check d-inline-block">
                                                                <input class="form-check-input" id="sex"
                                                                    type="radio"
                                                                    value="0" @if ($st->recupere == '0') checked @endif  name="recupere">
                                                                <label class="form-check-label">Non</label>
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

                                        <div class="modal fade" id="mymodal{{ $st->id }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger ">
                                                        <h4 class="modal-title text-white fw-bold">Small Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('stationnement.delete', $st->id) }}" method="POST">
                                                            @csrf
                                                                <p>voulez vous vraiment supprimer l'entité "
                                                                        {{ $st->personne->nom}} du véhicule
                                                                        {{ $st->voiture->marque }}&nbsp;({{ $st->voiture->model }})"</p>

                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger ">Supprimer</button>
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
        <!-- /.card -->
    </div>


@endsection
