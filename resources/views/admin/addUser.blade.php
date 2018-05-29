@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <form method="POST" action="{{ route($route) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2" for="name">Nom:</label>
                                <input class="form-control col-md-10" type="text" id="first_name" name="first_name" />
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 d-inline-block" for="name">Prenom:</label>
                                <input class="form-control col-md-10" type="text" id="last_name" name="last_name"/>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2" for="email">Email:</label>
                                <input class="form-control col-md-10" type="email" id="email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2" for="adress">Adresse:</label>
                                <input class="form-control col-md-10" type="text" id="address" name="address"/>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2" for="phone">Tel:</label>
                                <input class="form-control col-md-10" type="text" id="phone" name="phone"/>
                            </div>
                            @if ($route === 'admin.createTechnician')
                                <div class="form-group">
                                    <label class="col-md-2" for="cin">CIN:</label>
                                    <input class="form-control col-md-10" type="text" id="cin" name="cin"/>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2" for="cin">Poste:</label>
                                    <select class="form-control col-md-10" type="text" id="post" name="post">
                                        <option selected disabled>Poste Du technicien</option>
                                        @foreach ($posts as $post)
                                            <option value="{{ $post }}" >{{ $post }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2" for="bio">Biographie:</label>
                                    <textarea class="form-control col-md-10" id="bio" name="bio"></textarea>
                                </div>
                            @endif
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Ajouter">
                                <input class="btn btn-danger" type="reset" value="Annuler">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>