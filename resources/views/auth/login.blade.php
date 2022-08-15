@extends('auth.template.index')

@section('content')
 
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('login') }}" class="h1"><b>Levantamento de Máquinas</b><br>Anchor</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Acesse para abrir uma sessão</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label for="email"></label>
          <input type="email" name="email" id="email" class="form-control @error('email') has-error @enderror" vaule="{{old('email') ?? ''}}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error("email")

            <span class="text-danger">{{$message}}</span>
            <hr>

        @enderror


        <div class="input-group mb-3">
            <label for="password"></label>
          <input type="password" name="password" id="password" class="form-control @error('password') has-error @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        @error("email")

            <span class="text-danger">{{$message}}</span>
            <hr>

        @enderror

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Matenha-me Conectado
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acessar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
