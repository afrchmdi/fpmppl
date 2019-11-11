<!doctype html>
<html lang="en">
  <head>

    @include('layout.head')

  </head>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

      @include('layout.header')

      @include('layout.sidebar')

      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              @yield('content-header')
            </h1>
          </section>
      
          <section class="content">
            @yield('content')
          </section>

      </div>
      @include('layout.footer')
    </div>

    @include('layout.foot')
  </body>
  @yield('morejs')
</html>