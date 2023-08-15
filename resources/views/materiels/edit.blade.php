@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Materiel</a></li>
            <li>edit</li>
        </ol>


    </div>
</section><!-- End Breadcrumbs -->

@section('content')
<div class="row">
    <div class="col-12">
        <div style="width:800px;">
            <h4>
                <font color="#3c4c69"><b>Modification d'un Materiel </b></font>
            </h4>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <div class="row">
            <div class="col-12">
                <form name="fmateriel" method="post" action="{{ route('materiels.update', $materiel->id) }}">
                    @method('PATCH')
                    @csrf

                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="client">Nom du materiel:</label>
                                <input type="text" class="form-control" name="nom_materiel" value="{{ $materiel->nom_materiel }}" />
                            </div>
                            <div class="form-group">
                                <label for="client">Caracteristique:</label>
                                <input type="text" class="form-control" name="caracteristique" value="{{ $materiel->caracteristique }}" />
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="ville">Type:</label>
                                <input type="text" class="form-control" name="type" value="{{ $materiel->type }}" />
                            </div>
                            <div class="form-group">
                                <label for="edresse">Marque:</label>
                                <input type="text" class="form-control" name="marque" value="{{ $materiel->marque }}" />
                            </div>

                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-12">
                            <div class="card" style="border: 0; display: flex; align-items: flex-end;">
                                <button type="submit" style="width: 20rem;" class="btn btn-primary">Modification du materiel</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>




        @endsection