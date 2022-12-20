@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading" style="background-color: #8B1517; color:white">Detail Permintaan</div>
    <div class="panel-body">
        <table class="table">
            <tr>
                <td> Nama</td>
                <td> {{ $request->patient }}</td>
            </tr>

            <tr>
                <td>Golongan Darah</td>
                <td> {{ $request->group }}</td>
            </tr>

            <tr>
                <td>Alamat Rumah</td>
                <td> {{ $request->hospital }}</td>
            </tr>

            <tr>
                <td> Kota</td>
                <td> {{ $request->city }}</td>
            </tr>
            <tr>
                <td> Kecamatan</td>
                <td> {{ $request->state }}</td>
            </tr>
            <tr>
                <td> Kelurahan</td>
                <td> {{ $request->district }}</td>
            </tr>

            <tr>
                <td>Nomor Handphone</td>
                <td> {{ $request->contact_phone }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{ $request->contact_email }}</td>
            </tr>

            <tr>
                <td>Tanggal Permintaan</td>
                <td> {{ date('F d, Y h:m A', strtotime($request->when)) }}</td>
            </tr>



        </table>
    </div>
</div>

@stop