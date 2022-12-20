@extends('layouts.admin')

@section('content')


<div class="panel panel-default">

  <div class="panel-heading">
    <div class="pull-right"><a href="{{ url('admin/delete/support/'.$support->id) }}">Hapus</a></div>

    <i class="fa fa-ticket"></i>Pesan Pengguna
  </div>
  <div class="panel-body">

    <table class="table">

      <tr>
        <td>Nama</td>
        <td> {{ $support->name }}</td>
      </tr>

      <tr>
        <td>Email</td>
        <td> {{ $support->email }}</td>
      </tr>

      <tr>
        <td>Dibuat pada</td>
        <td> {{ date('F d, Y h:m A', strtotime($support->created_at)) }}</td>
      </tr>

      <tr>
        <td>Pesan</td>
        <td> {{ $support->message }}</td>
      </tr>



    </table>


    <div class="page-header">Balas</div>
    <form action="/admin/reply" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        <input placeholder="Judul" type="text" name="subject" class="form-control" required>
      </div>
      <div class="form-group">
        <textarea name="message" class="form-control" placeholder="Pesan" required></textarea>
      </div>
      <div class="form-group">
        <input value="Kirim" type="Submit" class="btn btn-default">
      </div>
    </form>
  </div>

</div>
</div>

@stop