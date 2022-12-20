@extends('layouts.app')

@section('content')
<div class="content-fixer">
    <div class="row">

        <div class="col-md-3">

            <form method="GET" action="">
                <div class="form-group">
                    <select name="group" class="form-control">
                        <option value="AB +">AB +</option>
                        <option value="AB -">AB -</option>
                        <option value="A +">A +</option>
                        <option value="A -">A -</option>
                        <option value="B +">B +</option>
                        <option value="B -">B -</option>
                        <option value="O +">O +</option>
                        <option value="O -">O -</option>
                    </select>
                </div>

        </div>
        <div class="col-md-3">
            <input type="submit" class="btn btn-default btn-info" value="Cari">
        </div>
    </div>
</div>



<div class="row">
    @foreach ($users as $user)
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption">
                <h3><a href="{{ url('donor/' . $user->id) }}"> {{ ucfirst($user->name) }} </a>
                </h3>
                <ul class="list-group">
                    <li class="list-group-item">Golongan Darah : {{ $user->group }}</li>
                    <li class="list-group-item">Kota : {{ $user->city }}</li>
                    <li class="list-group-item">Kecamatan : {{ $user->district }}</li>
                    <li class="list-group-item">Keluarahan : {{ $user->state }}</li>
                    <li class="list-group-item">Berat Badan : {{ $user->weight }} kgs</li>
                    <li class="list-group-item">Jenis Kelamin : {{ $user->gender }}</li>
                    <li class="list-group-item">Umur : {{ $user->age }}</li>
                    <li class="list-group-item">Terakhir Donor :
                        {{ date('F d, Y A', strtotime($user->last_donated)) }}
                    </li>
                    <li class="list-group-item">Sosial : {{ $user->phone }}</li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if (count($users) == 0)
<div class="alert alert-info">Mohon Maaf !! Saat ini belum ada pencarian yang sesuai.</div>
@endif

{{ $users->render() }}

</div>
@stop