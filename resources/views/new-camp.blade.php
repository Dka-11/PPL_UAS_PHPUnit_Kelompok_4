@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Jadwal Baru</div>

            <div class="panel-body">

                <form action="{{ url('camp/new') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="details" placeholder="Rumah Sakit" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" placeholder="Kota" class="form-control" required></input>
                    </div>

                    <div class="form-group">
                        <input type="text" name="district" placeholder="Kecamatan" class="form-control" required></input>
                    </div>


                    <div class="form-group">
                        <input type="text" name="state" placeholder="Alamat" class="form-control" required></input>
                    </div>



                    <div class="form-group">
                        <input type="text" name="start" placeholder="Mulai" class="form-control" id="start" required></input>
                    </div>



                    <div class="form-group">
                        <input type="text" name="end" placeholder="Selesai" class="form-control" id="end" required></input>
                    </div>


                    <input type="submit" class="btn btn-default" value="Kirim" style="background-color: #8B1517; color:white">
                </form>


            </div>
        </div>
    </div>
</div>
@endsection