<div class="art-nostyle">
  <!-- begin nostyle content -->
  <style>
  .search_text_MAD span {
    display: inline-table;
    font-size: 16px;
  }

  .search_text_MAD input,
  .search_text_MAD select {
    height: 23px;
  }

  #tsearch {
    height: 31px;
  }

  #uniform-city,
  #uniform-perioxi,
  #uniform-country,
  #uniform-eidos_akinitou,
  #uniform-domatia {
    height: 34px;
    width: 117px;
    padding: 0px;
  }

  #uniform-city span,
  #uniform-perioxi span,
  #uniform-country span,
  #uniform-eidos_akinitou span,
  #uniform-domatia span {
    background: url('images/koumpia.png');
    height: 30px;
    padding-top: 4px;
    padding-left: 4px;
  }
  </style>

  {{-- FORM START --}}
  <form name="ads_search_Form" id="ads_search_Form" action="{{url('adsearch')}}"
    method="GET">
    {{-- @csrf --}}
    {{-- <input type="hidden" value="1" name="new_search"> --}}

    <div class="search_box_MAD">
      <div class="adsmanager_spacer" style="margin-top:10px;"></div>

      <div style="width:100%;" class="search_text_MAD">
        <span>

          <select name="country" id="country">
            <option value="">{{__('select.country')}}</option>
          @foreach ($countries as $country)
                <option value="{{ $country->id }}" @if( old('country_id')  == $country->id) selected="selected" @endif>{{ $country->name }}</option>
          @endforeach
        </select>

        </span>

        <span>

          <select name="state" id="state">
            <option value="" selected="selected">{{__('select.state')}}</option>
        </select>

        </span>

        <span>

          <select name="city" id="city">
            <option value="" selected="selected">{{__('select.city')}}</option>
        </select>
        </span>

        <span style="width:445px;">
          <input type="text" name="tsearch" id="tsearch" value="e.g. Santorini Villas" onfocus="if( this.value=='e.g. Santorini Villas') this.value='';"
            onblur="if( this.value=='') this.value='e.g. Santorini Villas';">
        </span>

      </div>

      <div class="adsmanager_spacer" style="margin-top:15px;"></div>

      <div width="100%" class="search_text_MAD">

        <span style="width:auto;">
          <div class="search_box_polisi_MAD" style="display:inline-block; margin-left:0px;">
            <input type="checkbox" name="akinitopros" id="akinitopros" value="0"> &nbsp;Sale &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="akinitopros" id="akinitopros" value="1"> &nbsp;Hire
          </div>
        </span>

        <span style="margin-right:4px;">Price :

          <input type="text" name="price_from" style="width:40px;" id="price_from" size="5"
            value="from..." onfocus="if(this.value=='from...') this.value='';"
            onblur="if( this.value=='') this.value='from...';">&nbsp;&nbsp;


          <input type="text" name="price_to" id="price_to" style="width:40px;" value="to..."
            onfocus="if(this.value=='to...') this.value='';" onblur="if( this.value=='') this.value='to...';">
        </span>

        <span style="margin-right:4px;">Size:

          <input type="text" name="embadom_from" style="width:40px;" id="embadom_from" size="5"
            value="from..." onfocus="if(this.value=='from...') this.value='';"
            onblur="if( this.value=='') this.value='from...';">&nbsp;&nbsp;

          <input type="text" name="embadom_to" style="width:40px;" id="embadom_to" size="5"
            value="to..." onfocus="if(this.value=='to...') this.value='';"
            onblur="if( this.value=='') this.value='to...';">
        </span>
      </div>

      <div class="adsmanager_spacer" style="margin-top:15px;"></div>

      <div width="100%" class="search_text_MAD">
        <span>Type:
          <select name="eidos_akinitou" id="eidos_akinitou" onchange="set_span_title_MAD('eidos_akinitou', 'eidos_akinitou_span');">
            <option value="-1" selected="selected">Select..</option>
            <option value="0">Villa</option>
            <option value="1">House</option>
            <option value="2">Maisonette</option>
            <option value="3">Apartment/Penthouse</option>
            <option value="4">Apartment</option>
            <option value="5">Bedsit</option>
            <option value="6">Studio</option>
            <option value="7">Business area</option>
            <option value="8">Shop</option>
            <option value="9">Office</option>
            <option value="10">Warehouse</option>
            <option value="11">Garage/parking</option>
            <option value="12">Hotel</option>
            <option value="13">Rented Rooms</option>
            <option value="14">Plot</option>
            <option value="15">Parcel</option>
            <option value="16">Island</option>
          </select>
        </span>
        <span style="margin-right:4px;">Rooms:


          <select name="domatia" id="domatia" onchange="set_span_title_MAD('domatia', 'domatia_span');">
            <option value="-1">Select..</option>
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">10</option>
          </select>

        </span>
        <span style="margin-right:4px;">
          First at sea:

          <div style="display:inline-block; margin-left:0px;">

            <input type="checkbox" name="apostasithalassa" id="apostasithalassa" value="0">&nbsp;YES &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="apostasithalassa" id="apostasithalassa" value="1">&nbsp;NO

          </div>
        </span>

        <span style="margin-right:4px; float:right; margin-top:-10px;">
          <a href="{{route('adsearch')}}"
            class="adsmanager_general_links_button" style="color:#A12908;font-size:12px;;">FIND NOW</a>
        </span>

      </div>

    </div>

  </form>
  <!-- end nostyle content -->
</div>

@section('extra-js')
  <script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{route('get-state-list')}}?country_id="+countryID,
           success:function(res){
            if(res){
              // console.log(res);
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        // $("#city").empty();
        $("#city").append('<option>No Cities</option>');
    }
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{route('get-city-list')}}?state_id="+stateID,
           success:function(res){
            if(res){
              // console.log(res);
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }

   });
</script>

@endsection
