@extends('layouts.superadmin')
@section('main-content')
<section class="content-header">
    <h1><i class="fa fa-bullhorn"></i> Dashboard </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <h4>Welcome, {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}!</h4>
                    <p>You are now logged in to the Super Admin Dashboard.</p>
                    <!-- Add other content or features as needed -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection