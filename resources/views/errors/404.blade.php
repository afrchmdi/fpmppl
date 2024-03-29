@extends('layout.master')
<!-- sementara pake dashboard -->
@section('content')

    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.<br>
            Meanwhile, you may <a href="/dashboard">return to dashboard</a> or
            <a href="/">home</a>
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

@endsection