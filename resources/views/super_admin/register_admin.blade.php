@extends('layouts.superadmin')
@section('main-content')
<section class="content-header">
</section>

<section class="content">
    <div class="register-box-body col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Register a Program Coordinator</h3>
            </div>

            <div class="box-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (Session::has('success'))
                <div class="callout callout-success">
                    <div align='center'>{{ Session::get('success') }}</div>
                </div>
                @endif

                <form action="{{ url('/superadmin/register_admin/save') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="username"
                            value="{{ old('username') }}" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="First Name" name="name"
                                value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Middle Name" name="middlename"
                                value="{{ old('middlename') }}" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname"
                                value="{{ old('lastname') }}" />
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="email" class="form-control"
                            placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"
                            value="{{ old('email') }}" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="password" class="form-control"
                                placeholder="{{ trans('adminlte_lang::message.password') }}" name="password" />
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control"
                                placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}"
                                name="password_confirmation" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ trans('adminlte_lang::message.register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.register-box-body -->
</section>
@endsection