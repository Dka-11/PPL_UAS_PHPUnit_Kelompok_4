@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Daftar Permintaan Darah Terdekat</div>

            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Golongan Darah</th>
                    </tr>

                    @foreach($requests as $req)
                    <tr>
                        <td><a href="{{ url('request-details/'.$req->id) }}">{{ $req->patient  }}</a></td>
                        <td>{{ $req->city }}</td>
                        <td>{{ $req->group }}</td>
                    </tr>
                    @endforeach

                    @if (count($requests) == 0)
                    <tr>
                        <td colspan="3">Tidak ada permintaan darah terdekat.</td>
                    </tr>
                    @endif
                </table>





            </div>
        </div>
    </div>
</div>

@endsection