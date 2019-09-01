@include('partials.head')

<body style="background-image:url('{{asset('images/page.jpg')}}')">

  @include('partials.header')

  <div class="container art-sheet" style="padding-left:0px !important;padding-right:0px !important;">
    @include('partials.breadcrump')
    {{-- #all content here --}}
    <div class="col-xs-12">
      <div id="content" class="col-xs-9">
        @yield('content')
      </div>
      <div id="right" class="col-xs-3">
        @include('right')
      </div>
    </div>

  </div>

  <div style="margin-top:10px;background-color:#000000;opacity:0.9;">
    <div class="container">
      @include('partials.footer')
    </div>
  </div>
</body>

</html>
