<div class="row art-layout-cell art-sidebar2" style="text-align:right;">
  <div class="art-block clearfix">
    <div class="art-blockcontent">
      <p>
        <a href="/index.php?option=com_adsmanager&amp;view=details&amp;id=4717&amp;catid=9&amp;Itemid=691&amp;lang=en"><img src="{{asset('images/output.gif')}}" border="0" width="250" style="border: 0;"></a>
      </p>
    </div>
  </div>
  <div class="art-block clearfix">
    <div class="art-blockcontent">
      <a href="{{route('adverts.create')}}"><img src="{{asset('images/kataxorisi_neas_aggelias_en.png')}}" alt="kataxorisi neas aggelias en"
          width="240" height="41"></a>
          {{-- <img src="{{asset('images/right_ad_en_new.png')}}"
        alt="right ad en new" width="235" height="175" style=""> --}}
      </div>
  </div>
  <div class="art-block clearfix">
    <div class="art-blockcontent">
      <a href="http://www.company.exnet.gr/index.php/eksostrefeia-proothisi-sto-eksoteriko-eshop/prosfora-kataskevis-e-shop-gia-eksoteriko-a2013-03-13-12-23-40-detail"
        target="_blank"><img src="{{asset('images/diadimisteite_edo_en.png')}}" alt="diadimisteite edo en"
          width="240" height="163"></a>
    </div>
  </div>
  {{-- LOGI FORM DISPLAY --}}
  <div class="art-block clearfix">
    <div class="art-blockcontent">We have&nbsp;1610 guests&nbsp;online</div>
  </div>
  @guest
    <div class="art-block clearfix">
      <div class="art-blockcontent">
        <style>

        </style>

        <form action="/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=93&amp;Itemid=699&amp;lang=en"
          method="post" name="login" id="form-login">
          <fieldset class="input">
            <p id="form-login-username">
              <label for="modlgn_username">Username</label>
              <br>
              <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username"
                size="18">
            </p>
            <p id="form-login-password">
              <label for="modlgn_passwd">Password</label>
              <br>
              <input id="modlgn_passwd" type="password" name="passwd" class="inputbox" size="18"
                alt="password">
            </p>
            <p id="form-login-remember">
              <label for="modlgn_remember">Remember Me</label>
              <input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes"
                alt="Remember Me">
            </p>
            <input id="login_button" type="submit" name="Submit" value="Login">
          </fieldset>
          <ul>
            <li>
              <a href="/index.php?option=com_user&amp;view=reset&amp;lang=en">
                Forgot your password?</a>
            </li>
            <li>
              <a href="/index.php?option=com_user&amp;view=remind&amp;lang=en">
                Forgot your username?</a>
            </li>
            <li>
              <a href="/index.php?option=com_user&amp;view=register&amp;lang=en">
                Create an account</a>
            </li>
          </ul>

          <input type="hidden" name="option" value="com_user">
          <input type="hidden" name="task" value="login">
          <input type="hidden" name="return" value="L2luZGV4LnBocD9vcHRpb249Y29tX2Fkc21hbmFnZXImdmlldz1mcm9udCZJdGVtaWQ9MSZsYW5nPWVu">
          <input type="hidden" name="f0b1c2f6c6b23a113b60dfb1ece653d9" value="1">
        </form>
      </div>
    </div>
  @endguest

  @auth
    <div class="art-block clearfix">
      <div class="art-blockcontent">
        <ul>
          <li>
            <a href="{{route('account')}}">
              Go to Account page</a>
            </li>
        </ul>
      </div>
    </div>
  @endauth

  <div class="art-block clearfix">
    <div class="art-blockcontent">
      <a href="http://www.anakainisi-katoikias.gr/" target="_blank"><img src="{{asset('images/diadimisteite_edo_3_en.png')}}" alt="diadimisteite edo 3 en"
          width="240" height="138"></a>
    </div>
  </div>

</div>
