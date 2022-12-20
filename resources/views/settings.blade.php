@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Edit Profile</div>

            <div class="panel-body">

                <form action="settings" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <p class="hint--top" data-hint="Nama" id="input-field">
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Nama" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Umur" id="input-field">
                            <input type="text" name="age" class="form-control" value="{{ $user->age }}" placeholder="Umur" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="weight" value="{{ $user->weight }}" placeholder="Berat Badan" aria-describedby="basic-addon2" required>
                            <span class="input-group-addon" id="basic-addon2">Kgs</span>
                        </div>

                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Alamat Rumah" id="input-field">
                            <textarea name="address" placeholder="Alamat Rumah" class="form-control" required>{{ $user->address }}</textarea>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Kelurahan" id="input-field">
                            <input type="text" name="state" class="form-control" value="{{ $user->state }}" placeholder="Kelurahan" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Kecamatan" id="input-field">
                            <input type="text" name="district" class="form-control" value="{{ $user->district }}" placeholder="Kecamatan" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Kota" id="input-field">
                            <input type="text" name="city" class="form-control" value="{{ $user->city }}" placeholder="Kota" required>
                        </p>
                    </div>
                    <div class="form-group">
                        <p class="hint--top" data-hint="Nomor Handphone" id="input-field">
                            <input type="tel" id="phone" name="phone" maxlength="10" class="form-control" value="{{ $user->phone }}" placeholder="Nomor Handphone" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Donor" id="input-field">
                            <select name="is_donor" class="form-control" required="">
                                <option selected disabled> Pernah Donor </option>
                                <option value="0"> Belum Pernah </option>
                            </select>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Terakhir Donor" id="input-field">
                            <input type="text" id="datetimepicker" name="last_donated" class="form-control" value="{{ $user->last_donated }}" placeholder="Terakhir Donor" required>
                        </p>
                    </div>

                    <input type="submit" class="btn btn-default" value="Kirim" style="background-color: #8B1517; color:white">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection