@extends('base')

@section('content')

@include('alerts')
<div class="card mt-5">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Immatriculation</th>
                    <th>Disponible</th>
                    <th>Actions</th>
                </tr>


            <tbody>
                @foreach ($voiture as $voit)
                    <tr>
                        <td>{{ $voit->marque }}</td>
                        <td>{{ $voit->model }}</td>
                        <td>{{ $voit->couleur }}</td>
                        <td>{{ $voit->immatriculation }}</td>
                        
                        @if ($voit->disponible==0)
                            <td>Non</td>
                        @else
                            <td>Oui</td>
                        @endif

                        <td class="text-center">
                            <a href="" class="btn  bg-info" data-toggle="modal"
                                data-target="#modal{{ $voit->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" class="btn bg-secondary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="btn bg-danger" data-toggle="modal"
                                data-target="#mymodal{{ $voit->id }}">
                                <i class="fas fa-trash"></i>
                            </a>


                            {{-- modal modification --}}

                            {{-- modal modification --}}
                            <div class="modal fade" id="modal{{ $voit->id }}">
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
                                            <form action="{{ route('voiture.update', $voit->id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Marque :</label>
                                                            <input type="text" value="{{ $voit->marque }}" class="form-control" name="marque" id="exampleInputEmail1"
                                                                placeholder="Entrez la marque">
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Modèle :</label>
                                                            <input type="text" value="{{ $voit->model }}" class="form-control" name="model" id="exampleInputEmail1"
                                                                placeholder="Enter le modèle">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Couleur :</label>
                                                            <input type="text" class="form-control" value="{{ $voit->couleur }}" name="couleur" id="exampleInputEmail1"
                                                                placeholder="Enter la couleur">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Immatriculation :</label>
                                                            <input type="text" class="form-control" value="{{ $voit->immatriculation }}" name="immatriculation" id="exampleInputEmail1"
                                                                placeholder="Enter l'immatriculation de la voiture'">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group text-center">
                                                    <label for="sex">Disponible :</label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <div class="form-check d-inline-block">
                                                        <input class="form-check-input" id="sex" type="radio" value="1"  name="disponible"
                                                            @if ($voit->disponible == 1)
                                                            checked
                                                            @endif>
                                                        <label class="form-check-label">Oui</label>
                                                    </div>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <div class="form-check d-inline-block">
                                                        <input class="form-check-input" id="sex" type="radio" value="0"
                                                        @if ($voit->disponible == 0)
                                                            checked
                                                        @endif name="disponible">
                                                        <label class="form-check-label">Non</label>
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
                                <div class="modal fade" id="mymodal{{ $voit->id }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger ">
                                                        <h4 class="modal-title text-white fw-bold">Small Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('voiture.delete', $voit->id) }}" method="POST">
                                                            @csrf
                                                                <p>voulez vous vraiment supprimer La voiture "

                                                                        {{ $voit->marque }}&nbsp;({{ $voit->model }})" ?</p>

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
