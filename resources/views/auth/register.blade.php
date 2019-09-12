@extends('layouts.master') @section('breadcrumbs') {{ Breadcrumbs::render('login')
}} @endsection @section('content')
<div class="art-layout-wrapper">
  <div class="art-content-layout">
    <div class="art-content-layout-row">
      <div class="art-layout-cell art-content">
        <article class="art-post">
          <div class="art-postmetadataheader">
            <h2 class="art-postheader"><span class="componentheading">
                                Registration </span></h2>
          </div>
          <div class="art-postcontent clearfix">
            <style>
            #uniform-login_button,
            #uniform-logout_button,
            #uniform-login_button2,
            #uniform-logout_button2 {
              box-shadow: 0px 0px 2px 2px #555;
              -moz-box-shadow: 0px 0px 2px 2px #555;
              -webkit-box-shadow: 0px 0px 2px 2px #555;
              background-image: none;
              color: #000;
              margin-top: 4px;
              cursor: pointer;
            }

            #uniform-login_button span,
            #uniform-logout_button span,
            #uniform-login_button2 span,
            #uniform-logout_button2 span {
              background-image: none;
              background: none;
            }

            #login_button,
            #logout_button,
            #login_button2,
            #logout_button2 {
              background: #ccc;
              box-shadow: 2px 2px #555;
              -moz-box-shadow: 2px 2px #555;
              -webkit-box-shadow: 2px 2px #555;
              cursor: pointer;
            }
            </style>


            <style>
            .componentheading,
            .art-postmetadataheader {
              display: none;
            }

            .user_headline {
              font-size: 24px;
              padding: 15px;
              background: url('images/login_bg.gif');
            }

            #check_username {
              background-repeat: no-repeat;
              vertical-align: middle;
              margin-left: 10px solid red;
              display: inline-block;
              width: 18px;
              height: 19px;
            }

            .remember {
              width: 21px;
              height: 21px;
              padding: 0px;
              background: url("/components/com_adsmanager/images/checkbox_rememberme.png");
              display: block;
              clear: left;
              float: left;
              margin-right: 10px;
              cursor: pointer;
            }

            .remember.checked {
              background-position: 0px -50px;
            }

            .remember.clicked {
              background-position: 0px -25px;
            }

            .remember.clicked.checked {
              background-position: 0px -75px;
            }

            .othercheckboxes {
              width: 36px;
              height: 36px;
              padding: 0px;
              background: url("/components/com_adsmanager/images/checkbox_register.png");
              display: block;
              clear: left;
              float: left;
              margin-right: 10px;
              cursor: pointer;
            }

            .othercheckboxes.checked {
              background-position: 0px -85px;
            }

            .othercheckboxes.clicked {
              background-position: 0px -42px;
            }

            .othercheckboxes.clicked.checked {
              background-position: 0px -128px;
            }
            </style>


            <script type="text/javascript">
            //jQuery.noConflict();

            $(function() {

              $('input[type=checkbox]').each(function() {

                var span = $('<span class="' + $(this).attr('type') +
                  ' ' + $(this).attr('class') + '"></span>').click(
                  doCheck).mousedown(doDown).mouseup(doUp);

                if ($(this).is(':checked')) {

                  span.addClass('checked');

                }

                $(this).wrap(span).hide();

              });



              function doCheck() {

                if ($(this).hasClass('checked')) {

                  $(this).removeClass('checked');

                  $(this).children().prop("checked", false);

                  $(this).children().trigger('change');

                } else {

                  $(this).addClass('checked');

                  $(this).children().prop("checked", true);

                  $(this).children().trigger('change');

                }

              }



              function doDown() {

                $(this).addClass('clicked');

              }



              function doUp() {

                $(this).removeClass('clicked');

              }



              $('#username').focus(function() {
                $('#check_username').css('background-image', "");
              });

              $('#username').change(function() {

                if ($('#username').val()) {

                  $('#check_username').css('background-image',
                    "url('/administrator/components/com_content/views/form/images/_indicator.gif')"
                  );

                  $.ajax({
                    url: '/index.php?option=com_adsmanager&task=write&check_username=' +
                      $('#username').val(),

                    success: function(data) {

                      if (data.indexOf("niar") !== -1)

                        $('#check_username').css(
                        'background-image',
                        "url('/components/com_adsmanager/images/correct.png')"
                      );

                      else

                        $('#check_username').css(
                        'background-image',
                        "url('/components/com_adsmanager/images/error.png')"
                      );

                    }

                  });

                } else

                  $('#check_username').css('background-image', "");

              });

            });
            </script>



            <form action="{{route('login')}}" method="post" name="login" id="login">

                @csrf


              <div class="user_headline">

                In order to manage your ads, you must be logged in.
              </div>



              <br>



              <div style="font-size:13px;padding:5px;">

                Username
                <br>

                <input name="username" type="text" class="inputbox" id="username" size="20" style="width:350px; padding:13px; margin-top: 7px;">

                <div id="check_username" style="background-image: url(&quot;/components/com_adsmanager/images/error.png&quot;);"></div>

                <br>

                <br> Password
                <br>


                <input name="password" type="password" class="inputbox" size="20" style="width:350px; padding:13px; margin-top: 7px;">




                <br>

                <br>

                <div style="width:350px;">

                  <span class="checkbox remember">
                    <input type="checkbox" class="remember" name="remember" value="yes"
                      style="display: none;">
                  </span>

                  Remember me



                  <div style="float:right;">
                    <input id="login_button2" type="submit" name="submit" value="Login">
                  </div>



                </div>

                <br>

                <br>

                <br>



                <noscript>

                  Your browser doesn't support javascript, you cannot display this page
                </noscript>





                <input type="hidden" name="op2" value="login">

                <input type="hidden" name="f035dd34a20589c4963c8e1c01946a3e" value="1">
                <input type="hidden" name="message" value="0">

                <input type="hidden" name="force_session" value="1">

                <input type="hidden" name="return" value="L2luZGV4LnBocD9vcHRpb249Y29tX2Fkc21hbmFnZXImYW1wO3Rhc2s9d3JpdGUmYW1wO0l0ZW1pZD02OTEmYW1wO2xhbmc9ZW4=">

                <input type="hidden" name="task" value="login">
                <input type="hidden" name="option" value="com_user">
              </div>

            </form>



            <div class="user_headline">

              If you don't have account, you must register
            </div>




            <!-- Plugin Include component version 1.12 by Mike Reumer
       for: http://grecia24.gr/index.php?option=com_user&view=register&lang=en&tmpl=component&print=1&origin=aHR0cDovL2dyZWNpYTI0LmdyL2luZGV4LnBocD9vcHRpb249Y29tX2Fkc21hbmFnZXImdGFzaz13cml0ZSZJdGVtaWQ9NjkxJmxhbmc9ZW4= -->



            <style>
            #k2Container input[type='text'],
            #k2Container input[type='password'] {
              width: 365px;
              padding: 13px;
              font-weight: normal;
              color: #787878 !important;
              background-color: #fafafa !important;
            }

            #url {
              width: 333px !important;
              padding: 4px !important;
            }

            .k2ProfileHeading {
              background-color: white !important;
            }

            .key {
              padding: 10px 0 7px 5px;
              color: black !important;
              font-family: Segoe UI;
              font-size: 13px !important;
              font-weight: normal !important;
              text-align: left !important;
              background-color: white !important;
              border: 0 !important;
            }

            label[for="genderm"],
            label[for="genderf"] {
              font-size: 11px !important;
              font-weight: bold;
            }

            label[for="genderf"] {
              color: lightgray;
            }

            input[name="gender"] {
              visibility: hidden;
            }

            #description_ifr,
            .mceLayout {
              width: 365px !important;
              height: 85px !important;
            }
            </style>
            <script type="text/javascript">
            $(function() {
              $('input[name="gender"]').click(function() {
                $('label[for="genderm"], label[for="genderf"]').css(
                  'color', 'lightgray')
                $('label[for="' + $(this).attr('id') + '"]').css(
                  'color', 'black');
              })

            });
            </script>

            <!-- K2 user register form -->

            <form action="/index.php?option=com_user&amp;lang=en" enctype="multipart/form-data"
              method="post" id="josForm" name="josForm">
              <!-- class="form-validate" -->

              <div id="k2Container" class="k2AccountPage">
                <div style="float:right;background:#f6f6f6;color:#F00;padding:10px;font-weight:bold;width:40%;">Παρακαλούμε συμπληρώστε τα στοιχεία σας με Λατινικούς Χαρακτήρες</div>

                <table class="admintable" cellpadding="0" cellspacing="0" width="50%">
                  <tbody>
                    <tr>
                      <th class="k2ProfileHeading">
                        Account details </th>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="namemsg" for="name">Your name</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" name="name" id="name" size="40" value="" class="inputbox"
                          maxlength="50">
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="usernamemsg" for="username">Username</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" id="username" name="username" size="40" value="" class="inputbox validate-username"
                          maxlength="25">
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="emailmsg" for="email">Email</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" id="email" name="email" size="40" value="" class="inputbox validate-email"
                          maxlength="100">
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="pwmsg" for="password">Password</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="inputbox validate-password" type="password" id="password"
                          name="password" size="40" value="">
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="pw2msg" for="password2">Verify password</label>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <input class="inputbox validate-passverify" type="password" id="password2"
                          name="password2" size="40" value="">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="paramlist_key">Verify Code</span>
                        <br>

                        <span class="paramlist_value">Please enter the text in box , you see in below image</span>
                      </td>
                    </tr>
                    <tr>

                      <td class="paramlist_value">
                        <img id="xiCaptchaImage" src="/index.php?option=com_joomlaxi&amp;task=generateImage&amp;value=1568247228&amp;lang=en">
                        <br>
                        <br>
                        <input class="inputbox" type="text" id="jsCaptchaValue" name="jsCaptchaValue"
                          size="20" value="">
                        <br>

                      </td>
                    </tr>

                    <tr>
                      <th colspan="2" class="k2ProfileHeading">
                        Personal Details </th>
                    </tr>
                    <!-- K2 attached fields -->
                    <tr>
                      <td class="key">
                        <label id="gendermsg" for="gender">Gender</label>

                        <input type="radio" name="gender" id="genderm" value="m" checked="checked">
                        <label for="genderm">Male</label>
                        <input type="radio" name="gender" id="genderf" value="f">
                        <label for="genderf">Female</label>
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="descriptionmsg" for="description">Description</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Start Editor -->
                        <textarea id="description" name="description" cols="" rows=""
                          style="width: 100%; height: 250px; display: none;" class="mce_editable"></textarea>
                        <span id="description_parent" class="mceEditor defaultSkin">
                          <table id="description_tbl" class="mceLayout" cellspacing="0" cellpadding="0" style="width: 100%; height: 250px;">
                            <tbody>
                              <tr class="mceFirst">
                                <td class="mceToolbar mceLeft mceFirst mceLast">
                                  <a href="#" accesskey="q" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X">
                                    <!-- IE -->
                                  </a>
                                  <table id="description_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" cellpadding="0"
                                    cellspacing="0" align="">
                                    <tbody>
                                      <tr>
                                        <td class="mceToolbarStart mceToolbarStartButton mceFirst">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                        <td>
                                          <a id="description_bold" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_bold"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Bold (Ctrl+B)">
                                            <span class="mceIcon mce_bold"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_italic" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_italic"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Italic (Ctrl+I)">
                                            <span class="mceIcon mce_italic"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_underline" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_underline"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Underline (Ctrl+U)">
                                            <span class="mceIcon mce_underline"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_strikethrough" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_strikethrough"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Strikethrough">
                                            <span class="mceIcon mce_strikethrough"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_justifyleft" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_justifyleft"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Align left">
                                            <span class="mceIcon mce_justifyleft"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_justifycenter" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_justifycenter"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Align center">
                                            <span class="mceIcon mce_justifycenter"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_justifyright" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_justifyright"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Align right">
                                            <span class="mceIcon mce_justifyright"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_justifyfull" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_justifyfull"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Align full">
                                            <span class="mceIcon mce_justifyfull"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <table id="description_styleselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_styleselect">
                                            <tbody>
                                              <tr>
                                                <td class="mceFirst">
                                                  <a id="description_styleselect_text"
                                                    href="javascript:;" class="mceText mceTitle"
                                                    onclick="return false;" onmousedown="return false;">Styles</a>
                                                </td>
                                                <td class="mceLast">
                                                  <a id="description_styleselect_open"
                                                    tabindex="-1" href="javascript:;"
                                                    class="mceOpen" onclick="return false;"
                                                    onmousedown="return false;">
                                                    <span></span>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                        <td>
                                          <table id="description_formatselect" cellpadding="0" cellspacing="0" class="mceListBox mceListBoxEnabled mce_formatselect">
                                            <tbody>
                                              <tr>
                                                <td class="mceFirst">
                                                  <a id="description_formatselect_text"
                                                    href="javascript:;" class="mceText"
                                                    onclick="return false;" onmousedown="return false;">Format</a>
                                                </td>
                                                <td class="mceLast">
                                                  <a id="description_formatselect_open"
                                                    tabindex="-1" href="javascript:;"
                                                    class="mceOpen" onclick="return false;"
                                                    onmousedown="return false;">
                                                    <span></span>
                                                  </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                        <td class="mceToolbarEnd mceToolbarEndListBox mceLast">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table id="description_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" cellpadding="0"
                                    cellspacing="0" align="">
                                    <tbody>
                                      <tr>
                                        <td class="mceToolbarStart mceToolbarStartButton mceFirst">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                        <td>
                                          <a id="description_bullist" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_bullist"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Unordered list">
                                            <span class="mceIcon mce_bullist"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_numlist" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_numlist"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Ordered list">
                                            <span class="mceIcon mce_numlist"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_outdent" href="javascript:;"
                                            class="mceButton mce_outdent mceButtonDisabled"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Outdent">
                                            <span class="mceIcon mce_outdent"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_indent" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_indent"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Indent">
                                            <span class="mceIcon mce_indent"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_undo" href="javascript:;"
                                            class="mceButton mce_undo mceButtonDisabled"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Undo (Ctrl+Z)">
                                            <span class="mceIcon mce_undo"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_redo" href="javascript:;"
                                            class="mceButton mce_redo mceButtonDisabled"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Redo (Ctrl+Y)">
                                            <span class="mceIcon mce_redo"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_link" href="javascript:;"
                                            class="mceButton mce_link mceButtonDisabled"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Insert/edit link">
                                            <span class="mceIcon mce_link"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_unlink" href="javascript:;"
                                            class="mceButton mce_unlink mceButtonDisabled"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Unlink">
                                            <span class="mceIcon mce_unlink"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_anchor" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_anchor"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Insert/edit anchor">
                                            <span class="mceIcon mce_anchor"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_image" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_image"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Insert/edit image">
                                            <span class="mceIcon mce_image"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_cleanup" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_cleanup"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Cleanup messy code">
                                            <span class="mceIcon mce_cleanup"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_help" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_help"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Help">
                                            <span class="mceIcon mce_help"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_code" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_code"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Edit HTML Source">
                                            <span class="mceIcon mce_code"></span>
                                          </a>
                                        </td>
                                        <td class="mceToolbarEnd mceToolbarEndButton mceLast">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table id="description_toolbar3" class="mceToolbar mceToolbarRow3 Enabled" cellpadding="0"
                                    cellspacing="0" align="">
                                    <tbody>
                                      <tr>
                                        <td class="mceToolbarStart mceToolbarStartButton mceFirst">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                        <td>
                                          <a id="description_hr" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_hr"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Insert horizontal ruler">
                                            <span class="mceIcon mce_hr"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_removeformat" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_removeformat"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Remove formatting">
                                            <span class="mceIcon mce_removeformat"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_visualaid" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_visualaid mceButtonActive"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Toggle guidelines/invisible elements">
                                            <span class="mceIcon mce_visualaid"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_sub" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_sub"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Subscript">
                                            <span class="mceIcon mce_sub"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <a id="description_sup" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_sup"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Superscript">
                                            <span class="mceIcon mce_sup"></span>
                                          </a>
                                        </td>
                                        <td>
                                          <span class="mceSeparator"></span>
                                        </td>
                                        <td>
                                          <a id="description_charmap" href="javascript:;"
                                            class="mceButton mceButtonEnabled mce_charmap"
                                            onmousedown="return false;" onclick="return false;"
                                            title="Insert custom character">
                                            <span class="mceIcon mce_charmap"></span>
                                          </a>
                                        </td>
                                        <td class="mceToolbarEnd mceToolbarEndButton mceLast">
                                          <span>
                                            <!-- IE -->
                                          </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X"
                                    onfocus="tinyMCE.getInstanceById('description').focus();">
                                    <!-- IE -->
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td class="mceIframeContainer mceFirst mceLast">
                                  <iframe id="description_ifr" src="javascript:&quot;&quot;"
                                    frameborder="0" style="width: 100%; height: 160px;"></iframe>
                                </td>
                              </tr>
                              <tr class="mceLast">
                                <td class="mceStatusbar mceFirst mceLast">
                                  <div id="description_path_row">Path:
                                    <a href="#" accesskey="x"></a>
                                    <span id="description_path"></span>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </span>

                        <div style="margin-top:-5px">
                          <div class="button2-left">
                            <div class="blank">
                              <a href="#" onclick="javascript:tinyMCE.execCommand('mceToggleEditor', false, 'description');return false;"
                                title="Toggle editor">Toggle editor</a>
                            </div>
                          </div>
                        </div>
                        <!-- End Editor -->
                      </td>
                    </tr>
                    <tr>
                      <td class="key">
                        <label id="imagemsg" for="image">User image (avatar)</label>
                        <input style="width:230px" type="file" id="image" name="image">
                      </td>
                    </tr>
                    <!-- K2 Plugin attached fields -->
                    <tr>
                      <th colspan="2" class="k2ProfileHeading">
                        Additional Details </th>
                    </tr>
                    <tr>
                      <td class="key" colspan="2">
                        <label id="urlmsg" for="url">URL</label>
                        <input type="text" size="50" value="" name="url" id="url">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <table class="paramlist admintable" cellspacing="1">
                          <tbody>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldseponymia-lbl"
                                    for="pluginsuserExtendedFieldseponymia">Company Name</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldseponymia]"
                                  id="pluginsuserExtendedFieldseponymia" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldsafm-lbl" for="pluginsuserExtendedFieldsafm">Vat</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldsafm]"
                                  id="pluginsuserExtendedFieldsafm" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldstelephone-lbl"
                                    for="pluginsuserExtendedFieldstelephone">Telephone</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldstelephone]"
                                  id="pluginsuserExtendedFieldstelephone" value=""
                                  class="text_area" size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldsmobile-lbl" for="pluginsuserExtendedFieldsmobile">Mobile</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldsmobile]"
                                  id="pluginsuserExtendedFieldsmobile" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldsaddress-lbl"
                                    for="pluginsuserExtendedFieldsaddress">Address</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldsaddress]"
                                  id="pluginsuserExtendedFieldsaddress" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldscity-lbl" for="pluginsuserExtendedFieldscity">City</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldscity]"
                                  id="pluginsuserExtendedFieldscity" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldsstateOrProvince-lbl"
                                    for="pluginsuserExtendedFieldsstateOrProvince">State or Province</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldsstateOrProvince]"
                                  id="pluginsuserExtendedFieldsstateOrProvince" value=""
                                  class="text_area" size="40">
                              </td>
                            </tr>
                            <tr>
                              <td class="paramlist_key">
                                <span class="editlinktip">
                                  <label id="pluginsuserExtendedFieldszipCode-lbl"
                                    for="pluginsuserExtendedFieldszipCode">Zip Code</label>
                                </span>
                              </td>
                              <td class="paramlist_value">
                                <input type="text" name="plugins[userExtendedFieldszipCode]"
                                  id="pluginsuserExtendedFieldszipCode" value="" class="text_area"
                                  size="40">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>

                    <!-- Joomla! 1.6+ JForm implementation -->

                  </tbody>
                </table>

                <br>
                <br>
                <br>
                <div class="user_headline">
                  Credits
                </div>
                <br>
                <!--<input type='checkbox' class='othercheckboxes'> <div style='display:table-cell;vertical-align:middle;height:36px;font-size:17px'>Simply Register</div>-->
                <br clear="all">
                <div style="display:table-cell;vertical-align:middle;height:36px;font-size:17px">Buy ad credits
                  <br>
                  <span style="font-size:13px;">Before you try to register your property in Grecia24.ru you must
                    choose one Package. 1 credit corresponds to property registration
                    1.</span>
                </div>

                <br clear="all">
                <div id="buy_credits_container">
                  <div class="key">
                    <b>PACKAGE SELECTION</b>
                  </div>
                  <input class="packages" checked="" type="radio" name="pack_id" value="1"> Package 1 (10 credits)=40€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="2"> Package 2 (20 credits)=60€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="3"> Package 3 (50 credits)=80€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="4"> Package 4 (10000 credits)=100€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="5"> Package 5 - for 2 years (10000 credits)=180€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="6"> Package 6 - for 3 years (10000 credits)=250€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="7"> Package 7 - for 5 years (10000 credits)=500€
                  <br>
                  <input class="packages" type="radio" name="pack_id" value="8"> ad1 (1 credits)=15€
                  <br>
                  <br>
                  <div class="key">
                    <b>PAYMENT METHOD</b>
                  </div>
                  <input type="radio" id="paypal" class="pay_methods" name="pay_methods" value="paypal"
                    checked="">
                  <label for="paypal"><img align="absmiddle" src="{{asset('images/paypal.png')}}"></label>
                  <br>
                  <br>
                  <!--<input type=radio id=paysafe  name='pay_methods' value='paysafe' disabled>-->
                  <!--<label for=paysafe><img align=absmiddle src="/"></label><br>-->
                  <input type="radio" id="deposit" name="pay_methods" value="deposit" onclick="alert('ALPHA BANK\nAlpha Bank:920-002101-140330\nIBAN:GR06 0140 9200 9200 0210 1140 330,\n\nEUROBANK\nEurobank:0026-0120-54-0101308269\nIBAN:GR04 0260 1200 0005 4010 1308 269');">

                  <label for="deposit"><img align="absmiddle" src="{{asset('images/bank-deposit-logo.png')}}"></label>
                  <br>
                </div>
                <br>
                <br>
                <button class="button validate art-button" type="submit">
                  Register </button>
              </div>
              <input type="hidden" name="option" value="com_user">
              <input type="hidden" name="task" value="register_save">
              <input type="hidden" name="id" value="0">
              <input type="hidden" name="gid" value="0">
              <input type="hidden" name="K2UserForm" value="1">
              <input type="hidden" name="f035dd34a20589c4963c8e1c01946a3e" value="1">
            </form>

            <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ?
              "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost +
              "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"
            ));
            </script>
            <script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
            <script type="text/javascript">
            try {
              var pageTracker = _gat._getTracker("UA-30243435-1");
              pageTracker._trackPageview();
            } catch (err) {}
            </script>

            <!-- End Plugin Include component -->
          </div>
        </article>
      </div>

    </div>
  </div>
</div>
@endsection
