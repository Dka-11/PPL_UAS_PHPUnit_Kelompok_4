@extends('layouts.app')

@section('content')
<div class="content-fixer">
  <div class="row ">

    <div class="col-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{ url('images/carousel1.png') }}" alt="...">

          </div>
          <div class="item">
            <img src="{{ url('images/carousel2.png') }}" alt="...">

          </div>
          <div class="item">
            <img src="{{ url('images/carousel3.png') }}" alt="...">

          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>

  <div class="page-header">
    <h4>PALANG MERAH INDONESIA </h4>
  </div>
  <p>
    Salam Kemanusiaan,
  </p>
  <p>
    Setiap menit terdapat 1 (satu) Orang yang membutuhkan transfusi darah di Indonesia. Palang Merah Indonesia
    merupakan organisasi
    yang sah secara Undang-undang untuk membantu Pemerintah dalam memenuhi kebutuhan pelayanan darah transfusi dan
    pelayanan
    sosial kemanusian di Indonesia.
  </p>
  Layanan ini adalah aplikasi dan portal informasi yang dikemas untuk memudahkan pelayanan darah transfusi melalui
  Palang Merah Indonesia di kota Malang, dalam hal Pelayanan Sosial dan Kemanusian kami mencoba
  memudahkan penyaluran bantuan/donasi Anda kepada penerima manfaat secara langsung melalui PMI.
  </p>
  <p>
    Seiring donasi menjadi lebih mudah, semoga akan lebih banyak yang dapat kita bantu.
  </p>

  <div class="page-header">
    <h4> Tabel kompatibilitas sel darah merah </h4>
  </div>

  <p>
  <table class="table table-bordered table-striped table-hover table-responsive info-table">
    <thead align="right">
      <tr>
        <th>
          Penerima
        </th>
        <th colspan="8">
          Pendonor
        </th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>

        </td>
        <td>
          <b>O-</b>
        </td>
        <td>
          <b> O+</b>
        </td>
        <td>
          <b> A-</b>
        </td>
        <td>
          <b>A+</b>
        </td>
        <td>
          <b>B-</b>
        </td>
        <td>
          <b> B+</b>
        </td>
        <td>
          <b> AB-</b>
        </td>
        <td>
          <b> AB+</b>
        </td>
      </tr>
      <tr>
        <td>
          <b>O-</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b>O+</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b> A-</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b> A+</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b> B-</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b>B+</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b>AB-</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>

        </td>
      </tr>
      <tr>
        <td>
          <b> AB+</b>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
        <td>
          <i class="fa fa-check"></i>
        </td>
      </tr>
    </tbody>
  </table>
  </p>

  <div class="page-header">
    <h4>Stok Darah </h4>
  </div>
  <center><img src="{{ url('images/stokdarah.png') }}" alt="..." style="width: 800px;"></center>

  <div class="page-header">
    <h4>Mengapa donor darah itu penting ? </h4>
  </div>
  <p>
    Donor darah itu aman dan sederhana. Dibutuhkan sekitar 10-15 menit untuk menyelesaikan proses donor darah.
    Setiap orang dewasa yang sehat antara 18 tahun dan 60 tahun dapat menyumbangkan darah. Inilah yang dapat Anda
    harapkan ketika Anda siap untuk mendonorkan darah:
  </p>
  <p>
    Anda berjalan ke pusat donor darah yang terkenal dan aman atau kamp keliling yang diselenggarakan oleh lembaga
    terkenal. Beberapa pertanyaan akan diajukan untuk menentukan status kesehatan Anda (pertanyaan umum tentang
    kesehatan, riwayat donasi, dll). Biasanya Anda akan diminta untuk mengisi formulir singkat.
  </p>
  Kemudian pemeriksaan fisik cepat akan dilakukan untuk memeriksa suhu, tekanan darah, denyut nadi dan kadar
  hemoglobin dalam darah untuk memastikan Anda adalah pendonor yang sehat.
  </p>
  <p>
    Jika dirasa cocok untuk disumbangkan, maka Anda akan diminta untuk berbaring di kursi istirahat atau tempat
    tidur. Lengan Anda akan dibersihkan secara menyeluruh. Kemudian menggunakan alat steril darah akan ditampung
    dalam kantong plastik khusus. Sekitar 350 ml darah akan terkumpul dalam satu kali donor. Mereka yang memiliki
    berat badan lebih dari 60 Kg dapat mendonorkan 450 ml darah. Maka Anda harus beristirahat dan bersantai selama
    beberapa menit dengan makanan ringan dan minuman yang menyegarkan. Beberapa makanan ringan dan jus akan
    disediakan.
  </p>
  <p>
    Darah akan dipisahkan menjadi komponen-komponen dalam waktu delapan jam setelah donor Darah kemudian akan dibawa
    ke laboratorium untuk diuji. Setelah ditemukan aman, itu akan disimpan dalam penyimpanan khusus dan dirilis bila
    diperlukan. Darah sekarang siap untuk dibawa ke rumah sakit, untuk menyelamatkan nyawa.
  </p>
  <br>

  <div class="row ">

    <div class="col-md-6">
      <div class="content-video">
        <iframe width="500" height="300" src="https://www.youtube.com/embed/DNu0vtDlYWE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-md-6">
      <div class="content-video">
        <iframe width="500" height="300" src="https://www.youtube.com/embed/REvau7SU65g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>

  </div>


  {{-- <div class="page-header">
            <h4>Recent Donors</h4>
        </div>


        <div class="row">

            @foreach ($users as $user)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ url('donor/' . $user->id) }}"> {{ ucwords($user->name) }}</a> (
  {{ ucwords($user->city) }}
  , {{ ucwords($user->district) }} , {{ ucwords($user->state) }} ) <div class="pull-right">
    {{ $user->group }}
  </div>
</div>
</div>
@endforeach


@if (count($users) == 0)
<div class="alert alert-info">Currently there is no donors.</div>
@endif

</div> --}}
</div>

@endsection