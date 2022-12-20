@extends('layouts.admin')

@section('content')


<div class="panel panel-default">
       <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Bank Darah</div>
       <div class="panel-body">


              <form action="{{ url('admin/center/edit/'.$center->id) }}" method="POST">
                     {{ csrf_field() }}

                     <div class="form-group">
                            Tempat
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $center->name }}" required>
                     </div>


                     <div class="form-group">
                            Kontak
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $center->phone }}" required>
                     </div>



                     <div class="form-group">
                            Kecamatan
                            <input type="text" name="state" class="form-control" placeholder="State" value="{{ $center->state }}" required>
                     </div>

                     <div class="form-group">
                            Kelurahan
                            <input type="text" name="district" class="form-control" placeholder="District" value="{{ $center->district }}" required>
                     </div>


                     <div class="form-group">
                            Kota
                            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $center->city }}" required>
                     </div>



                     <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Kirim">
                     </div>

              </form>
       </div>

</div>
</div>

@stop