@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Kontak</div>
  <div class="panel-body">

    <table class="table">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>


      @foreach($supports as $support)
      <tr>
        <td>{{ $support->name }}</td>
        <td>{{ $support->email }}</td>
        <td>{{ date('F d, Y h:m A', strtotime($support->created_at)) }}</td>
        <td>
          <a href="{{ url('admin/view/support/'.$support->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Lihat</a>
          <a href="{{ url('admin/delete/support/'.$support->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>
        </td>
      </tr>
      @endforeach


      @if (count($supports) == 0)
      <tr>
        <td colspan=4>Tidak terdapat pesan</td>
      </tr>
      @endif



    </table>


    {{ $supports->render() }}

  </div>

</div>
</div>

@stop