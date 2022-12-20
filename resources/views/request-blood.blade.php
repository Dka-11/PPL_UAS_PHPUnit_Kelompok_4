@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default">
            @if (Auth::guest())
            <div class="panel-heading"><a href="{{ url('/login') }}">Login</a> Terlebih Dahulu Untuk Mengakses Halaman
                ini</div>
            @else
            <div class="panel-heading" style="background-color: #8B1517; color:white">Permintaan Darah</div>

            <div class="panel-body">

                <form action="request-blood" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" name="patient" class="form-control" placeholder="Nama Pasien" required>
                    </div>

                    <div class="form-group">
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
                    </div>

                    <div class="form-group">
                        <input type="text" name="state" class="form-control" placeholder="Kecamatan" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="district" class="form-control" placeholder="Kelurahan" required>
                    </div>



                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="Kota" required>
                    </div>



                    <div class="form-group">
                        <textarea name="hospital" placeholder="Alamat Rumah" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" name="doctor" class="form-control" placeholder="Rumah Sakit" required>
                    </div>


                    <div class="form-group">
                        <input type="text" name="contact_person" class="form-control" placeholder="Nomor Orang tua / Wali" required>
                    </div>


                    <div class="form-group">
                        <input type="email" name="contact_email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="number" name="contact_phone" class="form-control" placeholder="Nomor Handphone" required>
                    </div>


                    <div class="form-group">
                        <input type="datetime" name="when" class="form-control" placeholder="Tanggal Permintaan" id="datetimepicker" required>
                    </div>

                    <input type="submit" class="btn btn-default" value="Kirim" style="background-color: #8B1517; color:white">

                </form>


            </div>
            @endif
        </div>

    </div>

</div>
@endsection