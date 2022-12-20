@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8B1517; color:white">Tanya kami</div>

            <div class="panel-body">

                <form action="support" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <p class="hint--top" data-hint="Nama" id="input-field">
                            <input type="text" name="name" class="form-control" placeholder="Nama" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Email" id="input-field">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="hint--top" data-hint="Pesan" id="input-field">
                            <textarea name="message" placeholder="Pesan" class="form-control" required></textarea>
                        </p>
                    </div>

                    <input type="submit" class="btn btn-default" value="Kirim" style="background-color: #8B1517; color:white">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection