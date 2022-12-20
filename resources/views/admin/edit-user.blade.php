@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">


    <i class="fa fa-ticket"></i> Edit Pengguna
  </div>
  <div class="panel-body">


    <form action="{{ url('admin/user/edit/'.$user->id) }}" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        Nama
        <p class="hint--top" data-hint="Name" id="input-field">
          <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Name" required>
        </p>
      </div>

      <div class="form-group">
        Umur
        <p class="hint--top" data-hint="Age" id="input-field">
          <input type="text" name="age" class="form-control" value="{{ $user->age }}" placeholder="Age" required>
        </p>
      </div>


      <div class="form-group">
        Berat
        <div class="input-group">

          <input type="text" class="form-control" name="weight" value="{{ $user->weight }}" placeholder="Weight" aria-describedby="basic-addon2" required>
          <span class="input-group-addon" id="basic-addon2">Kgs</span>
        </div>

      </div>


      <div class="form-group">
        Alamat
        <p class="hint--top" data-hint="Address" id="input-field">
          <textarea name="address" placeholder="Address" class="form-control" required>{{ $user->address }}</textarea>
        </p>
      </div>




      <div class="form-group">
        Kecamatan
        <p class="hint--top" data-hint="State" id="input-field">
          <input type="text" name="state" class="form-control" value="{{ $user->state }}" placeholder="State" required>
        </p>
      </div>


      <div class="form-group">
        Kota
        <p class="hint--top" data-hint="City" id="input-field">
          <input type="text" name="city" class="form-control" value="{{ $user->city }}" placeholder="City" required>
        </p>
      </div>



      <div class="form-group">
        Kelurahan
        <p class="hint--top" data-hint="District" id="input-field">
          <input type="text" name="district" class="form-control" value="{{ $user->district }}" placeholder="District" required>
        </p>
      </div>

      <div class="form-group">
        Kontak
        <p class="hint--top" data-hint="Phone" id="input-field">
          <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="Phone" required>
        </p>
      </div>


      <div class="form-group">
        <p class="hint--top" data-hint="Donate" id="input-field">
          <select name="is_donor" class="form-control" required="">
            <option selected disabled> Pernah Donor </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
        </p>
      </div>



      <input type="submit" class="btn btn-default" value="Kirim">
    </form>

  </div>

</div>
</div>

@stop