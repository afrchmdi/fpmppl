@extends('layout.master')
<!-- sementara pake dashboard -->
@section('content')

<section class="content">

      <div class="error-page">
        <h2 class="headline text-red">500</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>

          <p>
            We could not find the page you were looking for.<br>
            Meanwhile, you may <a href="/dashboard">return to dashboard</a> or
            <a href="/">home</a>
          </p>
        </div>
      </div>
      <!-- /.error-page -->

</section>

@endsection