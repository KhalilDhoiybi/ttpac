@extends('layouts.app')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Materiel</a></li>
            <li>create</li>
        </ol>
        <h2>Create Page</h2>

    </div>
</section><!-- End Breadcrumbs -->

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <h4>
            <font color="orange"><b>Ajouter un Materiel </b></font>
        </h4>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('materiels.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="client">Nom du materiel:</label>
                            <input type="text" class="form-control" name="nom_materiel" />
                        </div>
                        <div class="form-group">
                            <label for="client">Caracteristique:</label>
                            <input type="text" class="form-control" name="caracteristique" />
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="ville">Type:</label>
                            <input type="text" class="form-control" name="type" />
                        </div>
                        <div class="form-group">
                            <label for="edresse">Marque:</label>
                            <input type="text" class="form-control" name="marque" />
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <div class="col-md-12">
                        <div class="card" style="border: 0; display: flex; align-items: flex-end;">
                            <button type="submit" style="width: 20rem;" class="btn btn-primary">Ajouter le materiel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection