@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #8B1517; color:white">
        Jadwal dan Tempat Donor
        @if (Auth::guest())
        @else
        @if (Auth::user()->is_admin == 1)
        <div class="pull-right"><a href="{{ url('camp/new') }}" style="color: #FFE7BF">Tambah Jadwal</a></div>
        @endif
        @endif
      </div>
      <br>
      <div class="panel-body">

        @foreach($camps as $camp )
        <div class="thumbnail">
          <div class="camps">
            <p>

            <div class="panel panel-default">
              <div class="panel-body">
                {{ $camp->details }}
              </div>
            </div>
            </p>
            <p> Alamat : {{ $camp->city }} , {{ $camp->district }} , {{ $camp->state }} </p>
            <p> Mulai : {{ date('F d, Y h:m A', strtotime($camp->start)) }} </p>
            <p> Selesai : {{ date('F d, Y h:m A', strtotime($camp->end)) }} </p>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>

@endsection