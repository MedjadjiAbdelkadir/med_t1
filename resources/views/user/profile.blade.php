@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="profile-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 form-group mb-2">
                    <label for="first_name">Prénom</label>
                    <input type="text" class="form-control" id="first_name" disabled name="first_name"
                        value="{{ $user->first_name }}">
                </div>
                <div class="col-sm-12 col-md-6 form-group mb-2">
                    <label for="last_name">Nom</label>
                    <input type="text" class="form-control" id="last_name" disabled name="last_name"
                        value="{{ $user->last_name }}">

                </div>
                <div class="col-sm-12 col-md-6 form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" disabled name="email"
                        value="{{ $user->email }}">

                </div>
                <div class="col-sm-12 col-md-6 form-group mb-2">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" disabled name="phone"
                        value="{{ $user->phone }}">

                </div>
            </div>
        </div>
    </div>
@endsection
