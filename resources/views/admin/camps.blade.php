@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-ticket"></i> Jadwal Donor</div>
    <div class="panel-body">

        <table class="table">
            <tr>
                <th>Rumah Sakit</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Alamat</th>
                <th>Mulai Donor</th>
                <th>Waktu Selesai</th>
                <th>Aksi</th>
            </tr>


            @foreach ($camps as $camp)
            <tr>
                <td>{{ $camp->details }}</td>
                <td>{{ $camp->city }}</td>
                <td>{{ $camp->district }}</td>
                <td>{{ $camp->state }}</td>
                <td>{{ date('F d, Y h:m A', strtotime($camp->start)) }}</td>
                <td>{{ date('F d, Y h:m A', strtotime($camp->end)) }}</td>
                <td>
                    <a href="{{ url('admin/camp/edit/' . $camp->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>
                    <a href="{{ url('admin/delete/camp/' . $camp->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
                </td>
            </tr>
            @endforeach


            @if (count($camps) == 0)
            <tr>
                <td colspan=6>Tidak terdapat jadwal</td>
            </tr>
            @endif



        </table>


        {{ $camps->render() }}

    </div>

</div>
</div>

@stop