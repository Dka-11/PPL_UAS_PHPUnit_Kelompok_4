@extends('layouts.app')

@section('content')
<div class="content-fixer">
    <div class="row ">

        <div class="col-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                {{-- <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol> --}}

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ url('images/carousel5.png') }}" alt="...">

                    </div>
                    {{-- <div class="item">
                            <img src="{{ url('images/carousel4.png') }}" alt="...">

                </div>
                <div class="item">
                    <img src="{{ url('images/carousel1.png') }}" alt="...">

                </div> --}}

            </div>

            {{-- <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a> --}}
        </div>
    </div>

</div>

<div class="page-header text-center">
    <h4>VISI DAN MISI</h4>
</div>
<strong>
    VISI
</strong>
<p>
    "Terwujudnya PMI yang Profesional dan Berintegritas serta Bergerak bersama Masyarakat"
</p>
<br>
<strong>
    MISI
</strong>
<p>
    1. Memelihara reputasi organisasi PMI di tingkat nasional dan internasional.
</p>
<p>
    2. Menjadi organisasi kemanusiaan terdepan yang memberikan layanan berkualitas kepada masyarakat sesuai dengan
    Prinsip-Prinsip Dasar Gerakan Internasional Palang Merah dan Bulan Sabit Merah.
</p>
</p>
3. Meningkatkan integritas dan kemandirian organisasi melalui kerja sama strategis yang berkesinambungan dengan
pemerintah, swasta, mitra gerakan, masyarakat, dan pemangku kepentingan lainnya di semua tingkatan PMI dengan
mengutamakan keberpihakan kepada masyarakat yang memerlukan bantuan.
</p>

<div class="page-header text-center">
    <h4> INFORMASI </h4>
</div>
<div class="row ">

    <div class="col-md-6">
        <img src="{{ url('images/kantor.jpg') }}" alt="...">

    </div>

    <div class="col-md-6">
        <br>
        <strong>
            ALAMAT
        </strong>
        <p>
            Utd Pmi Malang, Jl. Buring No.10, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119
        </p>
        <br>
        <strong>
            TELP/FAX
        </strong>
        <p>
            0341-364617
        </p>
        <br>
        <strong>
            INFO STOK & DONOR DARAH
        </strong>
        <p>
            0341-325443
        </p>
        <br>
        <strong>
            EMAIL
        </strong>
        <p>
            pmi_malang@yahoo.co.id
        </p>


    </div>

</div>
</div>
@endsection