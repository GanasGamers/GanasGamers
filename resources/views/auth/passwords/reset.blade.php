@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title">Reset Password</h1>

          <form action="{{route('register')}}" method="POST" role="form">
            {{csrf_field()}}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="field">
              <label for="name" class="label">Name</label>
              <p class="control">
                <input type="text" {{$errors->has('name') ? 'is-danger' : ''}} class="input" name="name" id="name" placeholder="Your Fullname" value="{{old('name')}}" required>
              </p>
              @if ($errors->has('name'))
                <p class="help is-danger">{{$errors->first('name')}}</p>
              @endif
          </div>
          <div class="field">
              <label for="email" class="label">Email Address</label>
              <p class="control">
                <input type="text" {{$errors->has('email') ? 'is-danger' : ''}} class="input" name="email" id="email" placeholder="example@mail.com" value="{{old('email')}}" required>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
          </div>
          <div class="field">
              <label for="password" class="label">Password</label>
              <p class="control">
                <input type="password" {{$errors->has('password') ? 'is-danger' : ''}} class="input" name="password" id="password" required>
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{$errors->first('password')}}</p>
              @endif
          </div>
          <div class="field">
              <label for="password_confirmation" class="label">Password Confirm</label>
              <p class="control">
                <input type="password_confirmation" {{$errors->has('password_confirmation') ? 'is-danger' : ''}} class="input" name="password_confirmation" id="password_confirmation" required>
              </p>
              @if ($errors->has('password_confirmation'))
                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
              @endif
          </div>
          <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
          </form
        </div><!-- End Of Content -->

      </div>
    </div>
    <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
  </div>


{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
