<header class="art-header" style="height:100px">

    <div class="container">
        <div class="row">
            {{-- <div class=""> --}}
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-xs-4">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="/">
                    <img src="{{asset('images/logo1.png')}}" alt="grecia24">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-xs-12 col-sm-8">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <div id="languages" class="col-xs-3" style="">
                      <div id="jflanguageselection">
                          <div class="rawimages">
                              <span><a href="https://grecia24.gr/index.php?lang=ru"><img src="{{asset('images/flags/ru.gif')}}" alt="Russian" title="Russian"></a></span>
                              <span>
                                  <a href="https://grecia24.gr/index.php?lang=el">
                                      <img src="{{asset('images/flags/el.gif')}}" alt="Greek" title="Greek"></a></span>
                              <span id="active_language"><a href="https://grecia24.gr/index.php?lang=en"><img src="{{asset('images/flags/en.gif')}}" alt="English" title="English"></a></span>
                              <span><a href="https://grecia24.gr/index.php?lang=bg"><img src="{{asset('images/flags/bg.gif')}}" alt="Bulgarian" title="Bulgarian"></a></span>
                          </div>
                      </div>
                  </div>
                    <div id="menu" class="col-xs-12" style="">
                      <ul class="art-hmenu" style="margin-top:20px;">
                          <li id="current" class="active item1"><a href="https://grecia24.gr/" class=" active">Home</a></li>
                          <li class="item427"><a href="{{url('company')}}">Company</a></li>
                          <li class="item690"><a href="{{url('catalog')}}">Catalog</a></li>
                          <li class="item699"><a href="{{url('destinations')}}">Tourist Destination</a></li>
                          <li class="item308"><a href="{{url('contact')}}">Contact us</a></li>
                      </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div>

        </div>
        <!--row end--->
    </div><!-- /.container-fluid -->

</header>
