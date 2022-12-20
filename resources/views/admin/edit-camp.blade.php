@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
       <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Jadwal</div>
       <div class="panel-body">


              <form action="{{ url('admin/camp/edit/'.$camp->id) }}" method="POST">
                     {{ csrf_field() }}
                     <div class="form-group">
                            Rumah Sakit
                            <textarea class="form-control" name="" placeholder="Details" value="{{ $camp->details }}" required>{{ $camp->details }}</textarea>
                     </div>


                     <div class="form-group">
                            Alamat
                            <input type="text" name="state" class="form-control" placeholder="State" value="{{ $camp->state }}" required>
                     </div>

                     <div class="form-group">
                            Kecamatan
                            <input type="text" name="district" class="form-control" placeholder="District" value="{{ $camp->district }}" required>
                     </div>


                     <div class="form-group">
                            Kota
                            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $camp->city }}" required>
                     </div>



                     <div class="form-group">
                            Mulai Donor
                            <input type="text" name="start" class="form-control" placeholder="Start" value="{{ $camp->start }}" required>
                     </div>



                     <div class="form-group">
                            Waktu Selesai
                            <input type="text" name="end" class="form-control" placeholder="End" value="{{ $camp->end }}" required>
                     </div>

                     <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Kirim">
                     </div>

              </form>
       </div>

</div>
</div>

@stop