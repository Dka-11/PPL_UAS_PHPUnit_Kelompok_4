@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">
                Bank Darah
                @if (Auth::guest())
                @else
                @if (Auth::user()->is_admin == 1)
                <div class="pull-right"><a href="{{ url('center/new') }}" style="color: #FFE7BF">Tambahkan Bank Darah</a></div>
                @endif
                @endif
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Tempat</th>
                        <th>Kontak</th>
                        <th>Kota</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach($centers as $center )
                    <tr>
                        <td> {{ $center->name }} </td>
                        <td> {{ $center->phone }} </td>
                        <td> {{ $center->city }} </td>
                        <td> {{ $center->district }} </td>
                        <td> {{ $center->state }} </td>
                        <td> {{ $center->landmark }} </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection