@extends('layouts.app')
<style type="text/css">
    .pofile-img {
        max-width: 150px;
        border: 5px solid lightblue;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
    }

</style>
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{ Auth::user()->name }}'s Profile</span>


                </div>

                <div class="panel-body text-center">
                    <img class="pofile-img" src="https://cdn.pixabay.com/photo/2016/08/20/05/38/avatar-1606916__340.png">

                    <h1>{{ $user->name }}</h1>
                    <h5>{{ $user->email }}</h5>
                    <h5>{{ $user->date_of_birth }} ( {{Carbon\Carbon::createFromFormat('Y-m-d', $user->date_of_birth)->age }} years old )</h5>


                </div>
            </div>
        </div>
    </div>
@endsection
