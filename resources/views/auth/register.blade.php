@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Registrasi</div>
            <div class="panel-body">
                <form id="registerForm" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Nama Lengkap</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Umur</label>

                        <div class="col-md-6">
                            <input type="number" id="age" class="form-control" name="age" value="{{ old('age') }}" required>

                            @if ($errors->has('age'))
                            <span class="help-block">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Jenis Kelamin</label>

                        <div class="col-md-6">
                            <select class="form-control" name="gender" required>
                                <option value="M">Laki Laki</option>
                                <option value="F">Perempuan</option>
                            </select>

                            @if ($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Berat Badan</label>

                        <div class="col-md-6">
                            <input type="number" id="weight" class="form-control" name="weight" value="{{ old('weight') }}" required>

                            @if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Golongan Darah</label>

                        <div class="col-md-6">
                            <select name="group" class="form-control">
                                <option value="AB +">AB +</option>
                                <option value="AB -">AB -</option>
                                <option value="A +">A +</option>
                                <option value="A -">A -</option>
                                <option value="B +">B +</option>
                                <option value="B -">B -</option>
                                <option value="O +">O +</option>
                                <option value="O -">O -</option>


                            </select>
                            @if ($errors->has('group'))
                            <span class="help-block">
                                <strong>{{ $errors->first('group') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Handphone</label>

                        <div class="col-md-6">
                            <input type="text" id="phone" maxlength="10" class="form-control" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Whatsapp</label>

                        <div class="col-md-6">
                            <select class="form-control" name="whatsapp" required>
                                <option value="1">Yes</option>
                                <option value="0" selected="">No</option>
                            </select>

                            @if ($errors->has('whatsapp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('whatsapp') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Alamat</label>

                        <div class="col-md-6">

                            <textarea class="form-control" name="address" required>{{ old('address') }}</textarea>
                            @if ($errors->has('adress'))
                            <span class="help-block">
                                <strong>{{ $errors->first('adress') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Kota</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                            @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Kecamatan</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="kecamatan" value="{{ old('district') }}" required>

                            @if ($errors->has('district'))
                            <span class="help-block">
                                <strong>{{ $errors->first('district') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Kelurahan</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="kelurahan" value="{{ old('state') }}" required>

                            @if ($errors->has('state'))
                            <span class="help-block">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-mail</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Ulangi Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('is_donor') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Pernah Donor</label>

                        <div class="col-md-6">
                            <select class="form-control" name="is_donor" required>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>

                            @if ($errors->has('is_donor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('is_donor') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_donated') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Terakhir Donor</label>

                        <div class="col-md-6">
                            <input type="text" id="datetimepicker" class="form-control" name="last_donated" value="{{ old('last_donated') }}" required>

                            @if ($errors->has('last_donated'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_donated') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary" style="background-color: #8B1517; color:white">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection