@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-group"></i> Pengguna</div>
  <div class="panel-body">

    <table class="table">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Waktu Register</th>
        <th>Terakhir Login</th>
        <th>Pernah Donor</th>
        <th>Aksi</th>
      </tr>


      @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ date('F d, Y h:m A', strtotime($user->created_at)) }}</td>
        <td>{{ date('F d, Y h:m A', strtotime($user->updated_at)) }}</td>
        <td>@if ( $user->is_donor == 1 )
          Yes
          @else
          No
          @endif</td>
        <td>

          <a href="{{ url('admin/user/edit/'.$user->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>

          @if ($user->id != Auth::user()->id )
          <a href="{{ url('admin/delete/user/'.$user->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Hapus</a>

          @endif

        </td>
      </tr>
      @endforeach




    </table>


    {{ $users->render() }}

  </div>

</div>
</div>

@stop