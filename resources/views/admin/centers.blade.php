@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Bank Darah</div>
  <div class="panel-body">

    <table class="table">
      <tr>
        <th>Tempat</th>
        <th>Kontak</th>
        <th>Kota</th>
        <th>Kecamatan</th>
        <th>Kelurahan</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>


      @foreach($centers as $center)
      <tr>
        <td>{{ $center->name }}</td>
        <td>{{ $center->phone }}</td>
        <td>{{ $center->city }}</td>
        <td>{{ $center->district }}</td>
        <td>{{ $center->state }}</td>
        <td>{{ $center->landmark }}</td>
        <td>
          <a href="{{ url('admin/center/edit/'.$center->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>
          <a href="{{ url('admin/delete/center/'.$center->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
        </td>
      </tr>
      @endforeach


      @if (count($centers) == 0)
      <tr>
        <td colspan=6>Tidak terdapat Bank Darah.</td>
      </tr>
      @endif



    </table>


    {{ $centers->render() }}

  </div>

</div>
</div>

@stop