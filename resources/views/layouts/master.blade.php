@include('partials.head')

  @include('partials.header')

  <div class="art-sheet" style="padding-left:0px !important;padding-right:0px !important;">
    {{-- @include('partials.breadcrumb') --}}
    @yield('breadcrumbs')
    {{-- #all content here --}}
      <div class="row">
        @include('partials.alerts')
        <div class="col-xs-12">
        <div id="content" class="col-xs-9">
          @yield('content')
          @include('partials.outputgif')
          @include('partials.exnethellasbanner')
        </div>
      <div id="right" class="col-xs-3">
        @include('partials.right')
      </div>
    </div>
    </div>

  </div>

  @include('partials.footer')


</body>

</html>
