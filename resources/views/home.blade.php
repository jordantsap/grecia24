@include('partials.head')

  @include('partials.header')

  <div class="art-sheet">

    <div class="">


      <div id="content" class="col-xs-9">

        <div class="row art-layout-wrapper">
          <div class="art-content-layout">
            <div class="art-content-layout-row">

              <div class="art-layout-cell art-content">
                <!-- begin nostyle -->
                @include('home.search')
                <!-- end nostyle -->
                {{-- <article class="art-post art-messages" style="">
                  <div class="art-postcontent clearfix"></div>
                </article> --}}
                @include('home.search2')
                <!-- end nostyle -->
                <!-- begin nostyle -->
                <div class="art-nostyle">
                  <!-- begin nostyle content -->
                  <style>
                  /*HORIZONTIAL */

                  #d_akin_hor {
                    width: 820px;
                    margin: 0 auto;
                    display: block;
                    background: url('../images/d_akin_hor_bg2.png') no-repeat center;
                    margin-top: 20px;
                    padding-top: 20px;
                  }

                  #d_hor_animate {
                    margin: 0px!important;
                    padding: 0px!important;
                    position: relative;
                    height: 630px;
                    overflow: hidden;
                    display: block;
                  }

                  #d_akin_hor .adsmanager_hor_list {
                    height: 630px;
                    position: relative;
                  }

                  #d_akin_hor .adsmanager_hor_list li {
                    list-style-type: none;
                    float: left;
                    width: 190px;
                  }

                  #d_akin_hor .adsmanager_hor_list li .center {
                    position: relative;
                    padding: 0px!important;
                    margin: 0px 10px 0px 0px!important;
                    width: 178px;
                    height: 210px;
                    text-align: left !important;
                  }

                  #button_left,
                  #button_right {
                    cursor: pointer;
                  }

                  #button_left {
                    float: left;
                    margin-top: 278px;
                    margin-left: -20px;
                  }

                  #button_right {
                    float: right;
                    margin-top: -352px;
                    margin-right: -20px;
                  }
                  </style>


                  {{-- <script>
                  jQuery(document).ready(function() {

                    right_click = 0;
                    left_click = 0;
                    count_d_akin_hor = 0;

                    var left = jQuery('.adsmanager_hor_list  li').outerWidth(
                      true);
                    jQuery('#d_hor_animate').css('width', left * 4);
                    left = left;

                    jQuery('.adsmanager_hor_list  li').each(function(index,
                      element) {
                      count_d_akin_hor++;
                    })
                    jQuery('.adsmanager_hor_list').width(count_d_akin_hor /
                      3 * left);
                    if (count_d_akin_hor > 8) {
                      jQuery('#button_right').show();
                      jQuery('#button_left').css('visibility', 'hidden');
                    } else {
                      jQuery('#button_right, #button_left').hide();
                    }


                    jQuery('#button_right').click(function() {

                      jQuery('.adsmanager_hor_list').animate({
                        left: '-=' + left
                      }, 500);

                      right_click++;

                      check_first_last();
                    })

                    jQuery('#button_left').click(function() {

                      jQuery('.adsmanager_hor_list').animate({
                        left: '+=' + left
                      }, 500);

                      right_click = right_click - 1;

                      check_first_last();
                    })



                    function check_first_last() {



                      if (right_click == ((parseInt(count_d_akin_hor / 3)) -
                          4)) {
                        jQuery('#button_right').css('visibility', 'hidden');
                      } else {
                        jQuery('#button_right').css('visibility', 'visible');
                      }

                      if (right_click != 0) {
                        jQuery('#button_left').css('visibility', 'visible');
                      }

                      if (right_click == 0) {
                        jQuery('#button_left').css('visibility', 'hidden');
                      }

                    }



                  })
                  </script> --}}
                  <!-- end nostyle content -->
                </div>
                <!-- end nostyle -->


              </div>

            </div>
          </div>
        </div>



        <div class="push-left">
          @include('partials.outputgif') @include('partials.exnethellasbanner')
        </div>
      </div>
      <div id="right" class="col-xs-3 border">
        @include('partials.right')
      </div>
    </div>
  </div>

  @include('partials.footer')

</body>

</html>
