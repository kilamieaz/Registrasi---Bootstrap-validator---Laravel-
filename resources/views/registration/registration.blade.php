@extends('registration.master')
@section('content')
  <!-- Navbar -->
  <nav class="navbar" style="background: #00405D;" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="yurpish"></a>
      </div>
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->

  <!-- breadcrumb -->
  <div class="breadcrumb-area">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Registrasi</li>
      </ol>
    </div>
  </div>

  <!-- Form Register -->
  <div class="container" id="contactForm">
    <div class="row">
    <form id="form_register" class="registrasi_form form-horizontal" role="form" action="{{ route('post-registration') }}" method="POST">
    {{csrf_field()}}
        <fieldset>
        <div class="col-md-3 col-sm-12">    
          <p><strong>SUDAH PUNYA AKUN ?</strong></p>
          <p>
            <a href="/login">
              <button type="button" name="button" class="btn btn-warning">
                Silahkan Login
                <i class="glyphicon glyphicon-log-in"></i>
              </button>
            </a>
          </p>
          <hr>
          <span class="text-center">
            <h4>Membership</h4>
          </span>
          <div class="form-group has-feedback" id="membership">
            <div class="col-md-12">
              <div class="radio col-md-4">
                <label>
                      <input type="radio" name="membership" value="1">Reguler
                    </label>
              </div>
              <div class="radio col-md-8">
                <label>
                      <input type="radio" name="membership" value="2">Premium
                    </label>
              </div>
            </div>
          </div>
          <!-- /#membership -->
          <div class="clearfix"></div>
          <hr>

          <span class="text-center">
            <h4>Data Referal</h4>
          </span>
          <div class="form-group">
            <label class="control-label">Referal</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" placeholder="Referal" name="friend_code">
            </div>
            <hr>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <legend class="text-center">Registrasi!</legend>
            <div class="form-group">
              <label class="col-md-3 control-label">Username</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
              </div>
            </div>
            <!-- /.UserName -->

            <div class="form-group">
              <label class="col-md-3 control-label">Nama Lengkap</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
                </div>
              </div>
            </div>
            <!-- /.Nama Lengkap -->

            <div class="form-group">
              <label class="col-md-3 control-label">E-Mail</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="E-Mail Address" name="email">
                </div>
              </div>
            </div>
            <!-- /.E-mail -->

            <div class="form-group">
              <label class="col-md-3 control-label">Kata Sandi</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                </div>
              </div>
            </div>
            <!-- /.Kata Sandi -->

            <div class="form-group">
              <label class="col-md-3 control-label">Ulang Kata Sandi</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" placeholder="Ulang Kata Sandi" name="password_confirmation">
                </div>
              </div>
            </div>
            <!-- /.Ulang Kata Sandi -->

            <div class="form-group">
              <label class="col-md-3 control-label">No. HP</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="text" class="form-control" placeholder="08xxxxxxxxxx" name="mobile">
                </div>
              </div>
            </div>
            <!-- /.Phone -->

            <div class="form-group">
              <label class="col-md-3" for="gender">Jenis Kelamin</label>
              <div class="col-md-8">
                <div class="radio col-md-3">
                  <label>
                    <input type="radio" name="gender" value="1">
                    Pria
                  </label>
                </div>
                <div class="radio col-md-8">
                  <label>
                    <input type="radio" name="gender" value="2">
                    Wanita
                  </label>
                </div>
              </div>
            </div>
            <!-- Jenis_kelamin -->
            <p class="text-center">
              Dengan menekan D A F T A R, Anda telah menyetujui aturan penggunaan yurbiss.com
            </p>

            <div class="form-group">
              <div class="col-md-push-4 col-md-8">
                {{-- <input type="submit" class="btn btn-primary" name="submit" value="D A F T A R"> --}}
                <button class="btn btn-primary" type="submit">D A F T A R</button>
              </div>
            </div>
            <!-- Button Daftar -->
          </div>
          <!-- /.col-md-6 -->
        </fieldset>
      </form>
    </div>
  </div>

@endsection
