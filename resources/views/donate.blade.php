<!DOCTYPE html>
<html lang="ar">
    <head>
        <title> حملة - المركز العربي لتطوير الإعلام الاجتماعي </title>
        <meta charset="utf-8">
        <meta name="description" content="donation donate palestine jordan">
        <meta name="author" content="NADSoft hamla">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <link rel="icon" type="image/png" sizes="144x144" href="favicon.png">
        <link rel="stylesheet" href="css/app_ar.css">
        <link rel="stylesheet" href="fonts/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/font_ar.css">
        <link rel="stylesheet" href="css/footer_ar.css" />
    </head>
    <body id="main-wrapper">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2" id="logo">
                        <a href="#">
                            <img src="img/logo.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <nav class="navbar navbar-expand-sm">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item" id="about">
                                        <a class="nav-link" href="#about">عن حملة</a>
                                    </li>
                                    <li class="nav-item" id="releases">
                                        <a class="nav-link" href="#">
                                        اصدارات
                                        </a>
                                    </li>
                                    <li class="nav-item" id="news">
                                        <a class="nav-link" href="#">أخبار</a>
                                    </li>
                                   
                                    <li class="nav-item" id="campaigns">
                                        <a class="nav-link" href="#">
                                        حملات
                                        </a>
                                    </li>
                                    <li class="nav-item" id="contact">
                                        <a class="nav-link" href="#">
                                        تواصل معنا
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#en">En</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-sm-3" id="leftheaderpart">
                        <a class="get-involved" href="#">
                            شارك معنا
                        </a>
                        <a class="donate" href="{{ url('/') }}">
                            تبرع
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <h2 class="main-title"><span style="padding: top 50px;">تبرع</span></h2>
            </div>
        </div>
        <!-- main -->
        <div class="container" id="main-con">
            <!-- long title -->
            <div class="row" id="long-tit">
                <h2 id="long-tit">
                ساعد حملة في حماية حرية التعبير و الحقوق الرقمية الفلسطينية أرسل تبرعاتك و مساهمتك من خلال:
                </h2>
            </div>
            <!-- donate form --> 
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <form role="form" id="donationForm" method="POST" name="dFrom"
                  action="{{ route('donate.store') }}"
                  enctype="multipart/form-data">
                @csrf
            <div class="container" id="donation-form">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    <h4>معلومات التبرع</h4>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label">
                            اختر نوع التبرع:<span class="text-danger">*</span>
                        </label>
                        <br>
                        <div class="row" id="donate-type">
                            <div class="col-6">
                                <input type="radio" name="radio1" id="radio1" value="pay_once" checked/>
                                <label for="radio1"> مرة واحدة</label>
                            </div>
                            <div class="col-6">
                                <input type="radio" name="radio1" id="radio2" value="pay_monthly" />
                                <label for="radio2"> شهري</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-check-label">
                            اختر العملة :<span class="text-danger">*</span>
                        </label>
                        <br>
                        <div class="row" id="donate-currency">
                            <div class="col-6">
                                <input type="radio" name="radio2" id="radio11" value="USA" checked/>
                                <label for="radio11"> الدولار الأمريكي($) </label>
                            </div>
                            <div class="col-6">
                                <input type="radio" name="radio2" id="radio22" value="ILS" />
                                <label for="radio22"> الشيكل (₪)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="amount-group" class="form-check-label">اختر مبلغ التبرع:<span class="text-danger">*</span></label>
                        <br>
                        <div class="row" style="padding: 10px;" id="amount-group">
                            <button type="button" id="b100" name="button1" value="100" data-toggle="button" aria-pressed="false" class="btn btn-success add">100$</button>&nbsp;
                            <button type="button" id="b150" name="button2" value="150" data-toggle="button" aria-pressed="false" class="btn btn-success add">150$</button>&nbsp;
                            <button type="button" id="b200" name="button3" value="200" data-toggle="button" aria-pressed="false" class="btn btn-success add">200$</button>&nbsp;
                            <button type="button" id="b250" name="button4" value="250" data-toggle="button" aria-pressed="false" class="btn btn-success add">250$</button>&nbsp;
                            <button type="button" id="b300" name="button5" value="300" data-toggle="button" aria-pressed="false" class="btn btn-success add">300$</button>&nbsp;
                            
                            <input style="width:66%" name="amount" class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}" type="text" id="total_amount" value="" required readonly>
                            <span class="text-danger">{{ $errors->first('amount') }}</span>
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    <h4>المعلومات الشخصية</h4>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="personal-info">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="full-name">الاسم:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full-name" name="fname" placeholder="الاسم كامل" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">البلد:<span class="text-danger">*</span></label>
                            <select name="country" id="country_list" class="form-control" required>
                                <option value="" selected>اختر البلد</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="city">المدينة:<span class="text-danger">*</span></label>
                            <select name="city" id="city_list" class="form-control" required>
                                <option value="" selected>اختر المدينة</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">العنوان:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="faddress" placeholder="عمان-ش.الاردن-عمارة67" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">البريد الالكتروني:<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="e_mail" placeholder="user@gmail.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone-number">رقم الهاتف:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone-number" name="phone_num" placeholder="+976 999 999 99 99" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    <h4>معلومات الدفع</h4>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label">
                            اختر طريقة الدفع:
                        </label>
                        <br>
                        <div class="row" id="donate-type">
                            <div class="col-6">
                                <input type="radio" name="radio3" id="radio111" value="card" checked/>
                                <label for="radio111"> بطاقة ائتمان</label><img  style="float:right; margin-top:20px; margin-right:15px;" src="img/card.png"/>
                            </div>
                            <div class="col-6">
                                <input type="radio" name="radio3" id="radio222" value="paypal"/>
                                <label for="radio222"> Paypal</label><img  style="float:right; margin-top:20px; margin-right:15px;" src="img/paypal.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div class="pay-card" id="card_pay_method">
                    <div class="row card-info">
                        <div class="form-group col-md-6">
                            <label for="holder-name">اسم حامل البطاقة:</label>
                            <input type="text" class="form-control" id="holder-name" name="h_name" placeholder="CARD HOLDER NAME">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="card-number">رقم البطاقة:</label>
                            <input type="text" class="form-control" id="card-number" name="c_num" placeholder="123 456 665 909 009">
                        </div>
                    </div>
                    <div class="row card-info">
                        <div class="form-group col-md-3">
                            <label for="end-date">تاريخ انتهاء</label>
                            <input type="text" class="form-control" id="end-date" name="c_end_date" placeholder="23/21">
                        </div>
                        <div class="form-group col-md-3">
                        
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc" name="c_cvc" placeholder="CARD HOLDER NAME">
                        </div>
                    </div>
                    <div style="text-align:center;"> 
                        <input type="submit" value="تم" id="btn-done">
                    </div>
                </div>
                <div id="paypal_method" style="display: none;">
                    <img style="width: 989px; hight:395px; padding: 80px;" src="img/paypal_soon.png"> 
                </div>
                <div style="display: block;">
                    <button type="submit" id="btn-donate">تبرع</button>
                </div>
            </div>
            </form>

        </div>
        <!-- subcscribe -->
        <div class="container-fluid" id="subscribe">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <h4>انضم لقائمة النشر</h4>
                        <p>لتكن جزء من التكافل المجتمعي وتنضم لفريق النشر في حملة</p>
                        <form id="subscribeform">
                            <input type="hidden" name="_token" value="">          
                            <input type="text" name="name" value="" required placeholder="الاسم">
                            <input type="email" name="email" value="" required placeholder="البريد الإلكتروني" >
                            <input type="submit" value="ارسل انضمامي" id="btnsubscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ../subcscribe -->
        <!-- footer -->
        <div class="jumbotron" style="margin-bottom:0">
            <footer>
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12" id="footer-design">
                            <img src="img/footer-logo.png" id="footer-logo"/>
                        </p>
                    </div>
                    <div class="row">
                        <ul class="footerul">
                        <li><a href="#">الصفحة الرئيسية</a></li>
                        <li><a href="#">عن حملة</a></li>
                        <li><a href="#"> تواصل معنا</a></li>
                        <li><a href="#">حملات</a></li>
                        <li><a href="#">اصدارات</a></li>
                        <li><a href="#">أخبار</a></li>
                        <li><a href="#donate">تبرع</a></li>
                        <li><a href="#">شارك معنا</a></li>
                        </ul>
                    </div>
                    <div class="row socialfooter">
                        <ul>
                        <li><a href="#" target="_blank"><img src="img/facebook.png" /></a></li>
                        <li><a href="#" target="_blank"><img src="img/twitter.png" /></a></li>
                        <li><a href="#" target="_blank"><img src="img/youtube-logo.png" /></a></li>
                        <li><a href="#" target="_blank"><img src="img/linkedin.png" /></a></li>
                        <li><a href="#"><img src="img/mail.png" /></a></li>
                        </ul>
                    </div>
                    <div class="row" id="footer-copy-right">
                        <div class="col-sm-6">
                        جميع الحقوق مجفوظة لموقع  
                        <span style="color:  #8DC640;">حملة</span>&nbsp; &copy; 2020
                        </div>
                        <div class="col-sm-6">
                        تصميم وتطوير
                        <span id="nadsoft-colour-full">NADSoft</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script>

        var currency_sign = '$';
        var total = 0;

        $(document).ready(function(){
            var radioValue = $("input[name='radio2']:checked").val();
            $("input:radio[name=radio2]").click(function() {
                radioValue = $("input[name='radio2']:checked").val();
                if(radioValue == 'ILS'){
                    currency_sign = '₪';
                    document.getElementById("b100").innerHTML = '100₪';
                    document.getElementById("b150").innerHTML = '150₪';
                    document.getElementById("b200").innerHTML = '200₪';
                    document.getElementById("b250").innerHTML = '250₪';
                    document.getElementById("b300").innerHTML = '300₪';
                    $("#total_amount").val(total + currency_sign);
                }else{
                    currency_sign = '$';
                    document.getElementById("b100").innerHTML = '100$';
                    document.getElementById("b150").innerHTML = '150$';
                    document.getElementById("b200").innerHTML = '200$';
                    document.getElementById("b250").innerHTML = '250$';
                    document.getElementById("b300").innerHTML = '300$';
                    $("#total_amount").val(total + currency_sign);
                }
            })

            $("input:radio[name=radio3]").click(function() {
                radioValue2 = $("input[name='radio3']:checked").val();
                var card_pay_method = document.getElementById("card_pay_method");
                var paypal_method = document.getElementById("paypal_method");

                if(radioValue2 == 'paypal'){
                    card_pay_method.style.display = "none";
                    paypal_method.style.display = "block";
                }else{
                    card_pay_method.style.display = "block";
                    paypal_method.style.display = "none";
                }
            })
    

            
        });

        
        $("button[name=button1],[name=button2],[name=button3],[name=button4],[name=button5]").on('click', function () {
            var self = $(this);
            var gValue = Number(self.val());
            if (self.hasClass("add")) {
                total += gValue;
                self.removeClass("add").addClass("sub");
            } else {
                total -= gValue;
                self.removeClass("sub").addClass("add");
            }
            $("#total_amount").val(total + currency_sign);
        });


       
        

       

    </script>

<script>
    var stateObject = {
    "الاردن": {
        "عمان": [""],
        "الزرقاء": [""],
        "اربد": [""],
    },
    "فلسطين": {
        "جنين": [""],
        "نابلس": [""]
    }
    }
window.onload = function () {
var countryList = document.getElementById("country_list");
cityList = document.getElementById("city_list");
for (var country in stateObject) {
countryList.options[countryList.options.length] = new Option(country, country);
}
countryList.onchange = function () {
cityList.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
cityList.options[cityList.options.length] = new Option(state, state);
}
}
countryList.onchange(); // reset in case page is reloaded

}
</script>
</html>
