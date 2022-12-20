@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Bank Darah Baru</div>

            <div class="panel-body">
                <form action="{{ url('center/new') }}" method="post">
                    {{ csrf_field() }}



                    <div class="form-group">
                        <input type="text" name="name" placeholder="Bank Darah" class="form-control" required></input>
                    </div>

                    <div class="form-group">
                        <input type="phone" name="phone" placeholder="Kontak" class="form-control" required></input>
                    </div>



                    <div class="form-group">
                        <input type="text" name="city" placeholder="Kota" class="form-control" required></input>
                    </div>

                    <div class="form-group">
                        <input type="text" name="district" placeholder="Kecamatan" class="form-control" required></input>
                    </div>


                    <div class="form-group">
                        <input type="text" name="state" placeholder="Kelurahan" class="form-control" required></input>
                    </div>


                    <div class="form-group">
                        <input type="text" name="landmark" placeholder="Alamat" class="form-control" required></input>
                    </div>

                    <input type="submit" class="btn btn-default" value="Submit" value="Kirim" style="background-color: #8B1517; color:white">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection