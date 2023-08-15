@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h4>
            <font color="orange"><b>Gestion des materiels</b></font>
        </h4>
    </div>
    <div class="col-md-12">
        <a style="margin: 19px;" href="{{ route('materiels.create')}}" class="btn btn-primary"><b>Ajouter un nouveau
                materiel</b></a>
    </div>
    <div class="col-md-12">
        <div style="display:block;position:relative;height:300px;overflow:auto;">
            <table class="table table-hover table-condensed ">
                <thead>
                    <tr>
                        <th style="background-color:orange;">
                            <font color="white"><b>ID materiel</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Nom</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Prenom</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Datenais</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Adresse</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Email</b></font>
                        </th>
                        <th style="background-color:orange;">
                            <font color="white"><b>Tel</b></font>
                        </th>
                        <th style="background-color:orange;text-align:center;" colspan="4">
                            <font color="white"><b>Actions</b></font>
                        </th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($materiels as $materiel)
                    <tr>
                        <td style="vertical-align:middle;">{{$materiel->id}}</td>
                        <td style="vertical-align:middle;">{{$materiel->nom_materiel}}</td>
                        <td style="vertical-align:middle;">{{$materiel->caracteristique}}</td>
                        <td style="vertical-align:middle;">{{$materiel->type}}</td>
                        <td style="vertical-align:middle;">{{$materiel->marque}}</td>

                        <td colspan="2"></td>
                        <td>
                            <a href="{{ route('materiels.edit',$materiel->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('materiels.destroy', $materiel->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">X</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
        </div>
        <div class="col-sm-12">

            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
















        @endsec
        tion