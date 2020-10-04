<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabibna App Registeration</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #dddddd;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .separator {
            background-color: #dddddd;
            min-height: 10px;
            position: absolute;
            left: 0;
            right: 0;


        }

        .name {
            margin-right: 5px;
            margin-left: 5px;
        }

        .option {
            padding-left: 10px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .container {
            padding: 20px;

        }

        .center {
            margin-left: auto;
            margin-right: auto;
            background-color: #FFFFFF;
            padding: 20px;
        }

        .header {
            padding-right: 30px;
        }

        .form-control {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .options {
            margin-left: 30px
        }
    </style>
</head>

<body>
    <div class="container">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="center">
            <div class="row flex-center">
                <div class="header col-xs-3">
                    <h3>Registration Form</h3>
                    <h5>Join Our Health Professionals Network (Tabibna)</h5>
                </div>
                <div class="col-xs-9">
                    <img src="{{asset('img/logo.jpeg')}}" width="300px">

                </div>
            </div>
            <div class="">
                <form id="reg_form" class="form" method="POST" enctype="multipart/form-data" action="{{route('doctors.store')}}">

                   @csrf

                    <div class="form-group" style="min-height:300px">
                        <label for="">Motivation Letter:</label>
                        <textarea name="motivation_letter"></textarea>
                    </div>

                    <div class="separator"></div>
                    <br><br>
                    <h5><strong>Contact</strong></h5>

                    <div class="form-group">
                        <label for="">Full Name:<span style="color:red;">*</span></label>
                        <div class="row col-xs-12">
                            <input required name="first_name" class=" form-control col-md-3" placeholder="First Name" type="text" />
                            <input required name="second_name" class=" form-control col-md-3" placeholder="Second Name" type="text" />
                            <input required name="third_name" class=" form-control col-md-3" placeholder="Third Name" type="text" />
                            <input required name="fourth_name" class=" form-control col-md-3" placeholder="Fourth Name" type="text" />

                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="" class="col-md-2">Email:<span style="color:red;">*</span></label>
                        <input name="email" required class="form-control" type="text" />
                    </div>


                    <div class="form-group">
                        <label class="col-md-2" for="">Phone:<span style="color:red;">*</span></label>
                        <input name="phone" required class="form-control" type="text" />
                    </div>

                    <div class="form-group" id="div_radio">
                        <label class="control-label requiredField" for="radio">State <span class="asteriskField" style="color: red;">*</span></label>
                        <div class="">
                            <label class="radio-inline">
                                <input name="radio" type="radio" value="khrt">&nbsp;&nbsp;&nbsp; Khartoum</label>
                            <input name="radio" type="radio" value="bhri">&nbsp;&nbsp;&nbsp; Bahri</label>
                            <label class="radio-inline">
                                <input name="radio" type="radio" value="omdur">&nbsp;&nbsp;&nbsp; Omdurman</label>
                            <label class="radio-inline">
                                <input name="radio" type="radio" value="other">&nbsp;&nbsp;&nbsp; States</label>
                        </div>
                    </div>
                    <div class="form-group"><label class="control-label requiredField" for="select">Area <span class="asteriskField" style="color: red;">*</span></label><select required class="select form-control" id="select" name="area">
                            <option value="توصيل فوري">توصيل فوري</option>
                        </select></div>

                    <div class="form-group">
                        <label class="col-md-2" for="">Address 1:<span style="color:red;">*</span></label>
                        <input name="address_1" required class="form-control" type="text" />
                    </div>

                    <div class="form-group">
                        <label class="" for="">Address 2:</label>
                        <input name="address_2" class="form-control" type="text" />
                    </div>
                    <div class="separator"></div>
                    <br><br>
                    <h5><strong>Career</strong></h5>

                    <div class="form-group">
                        <label for="">Speciality:<span style="color:red;">*</span></label>
                        <select required name="speciality" class="form-control">
                            <option value="1">الأنف والأذن والحنجرة</option>
                            <option value="2">علاج الأورام</option>
                            <option value="3">قلب كبار</option>
                            <option value="4">قلب صغار</option>
                            <option value="5">العلوم الطبية الأساسية</option>
                            <option value="6">الجراحة العامة</option>
                            <option value="7">التمريض</option>
                            <option value="8">صحة الاسنان العامة</option>
                            <option value="9">الغدد الصم اطفال</option>
                            <option value="10">العناية الحرجة كبار</option>
                            <option value="11">طب المخ والاعصاب</option>
                            <option value="12">الروماتزم</option>
                            <option value="13">جراحة المخ والأعصاب</option>
                            <option value="14">جراحة الفم والوجه والفكين</option>
                            <option value="15">جراحة المسالك البولية</option>
                            <option value="16">جراحة الأطفال</option>
                            <option value="17">الجهاز الهضمي</option>
                            <option value="18">الجهاز التنفسي</option>
                            <option value="19">جراحة التجميل</option>
                            <option value="20">جراحة العظام</option>
                            <option value="21">الطب الباطني</option>
                            <option value="22">الطب النفسي</option>
                            <option value="23">طب وصحة الطفل</option>
                            <option value="24">أمراض النساء والتوليد</option>
                            <option value="25">طب المجتمع</option>
                            <option value="26">طب الطوارئ</option>
                            <option value="27">طب الأسرة</option>
                            <option value="28">التخدير والعناية المركزة</option>
                            <option value="29">الصيدلة</option>
                            <option value="30">المناعة السريرية</option>
                            <option value="31">الأشعة التشخيصية</option>
                            <option value="32">الأمراض الجلدية والتناسلية</option>
                            <option value="33">الأحياء الدقيقة</option>
                            <option value="34">أمراض اللثة</option>
                        </select>
                    </div>

                    <div class="form-group" style="min-height:300px">
                        <label for="">Past Experience:<span style="color:red;">*</span></label>
                        <textarea name="past_experience" required></textarea>
                    </div>

                    <div class="separator"></div>
                    <br><br>
                    <h5><strong>Documents</strong></h5>

                    <div class="form-group">
                        <label class="col-md-3" for="">Permenant Registration:<span style="color:red;">*</span></label>
                        <input name="permenant_registration" required class="form-control" type="file" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="">Graduation Certificate:<span style="color:red;">*</span></label>
                        <input name="graduation_certificate" required class="form-control" type="file" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="">National ID (Passport):<span style="color:red;">*</span></label>
                        <input class="form-control" name="national_id" required type="file" />
                    </div>

                    <div class="separator"></div>
                    <br><br>
                    <h5><strong>How did you first hear about us?</strong></h5>

                    <div class="options">
                        <div class="row">
                            <input name="how_website" class="option" type="radio">
                            <p class="option">Company website</p></input>
                        </div>
                        <div class="row">
                            <input name="how_job_board" class="option" type="radio">
                            <p class="option">Job Board</p></input>
                        </div>
                        <div class="row">
                            <input name="how_social_network" class="option" type="radio">
                            <p class="option">Social Network</p></input>
                        </div>
                        <div class="row">
                            <input name="how_event" class="option" type="radio">
                            <p class="option">Event</p></input>
                        </div>
                        <div class="row">
                            <input name="how_email" class="option" type="radio">
                            <p class="option">Email</p></input>
                        </div>
                        <div class="row">
                            <input name="how_other" class="option" type="radio">
                            <p class="option">Other</p></input>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" onclick='submit()' class="btn btn-info" value="Submit" />
                    </div>


                </form>
            </div>

        </div>
    </div>
</body>



<script>
   function submit()
   {
       $('#reg_form').submit();
   }
</script>







<script>
    var newOptions = {



    };

    var $el = $("#select");
    $el.empty(); // remove old options
    $.each(newOptions, function(key, value) {
        $el.append($("<option></option>")
            .attr("value", value).text(key));
    });
    $('input[name="radio"]').on('change', function() {
        var newOptions = {

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

            "توصيل فوري": "توصيل فوري",

        };
        var se;
        se = $('input[name="radio"]:checked').val();



        if (se == 'bhri') {

            var newOptions = {

                "الأملاك": "الأملاك",

                "المنطقه الصناعيه": "المنطقه الصناعيه",

                "الوابورات": "الوابورات",

                "الدناقلة": "الدناقلة",

                "الدروشاب": "الدروشاب",

                "الكدرو": "الكدرو",

                "البراحة": "البراحة",

                "سعد قشرة": "سعد قشرة",

                "القري": "القري",

                "شمبات": "شمبات",

                "كوبر": "كوبر",

                "كافوري": "كافوري",

                "المزاد": "المزاد",

                "المغتربين": "المغتربين",

                "الحاج يوسف شارع واحد": "الحاج يوسف شارع واحد",

                "الصبابي": "الصبابي",

                "الحلفايا": "الحلفايا",

                "الصافية": "الصافية",

                "الختمية": "الختمية",

                "الشعبية": "الشعبية",

                "حلة حمد": "حلة حمد",

                "حلة خوجلي": "حلة خوجلي",

                "السامراب": "السامراب",

                "حي الهدي": "حي الهدي",

                "الحاج يوسف المايقوما": "الحاج يوسف المايقوما",

                "حي الجامعة": "حي الجامعة",

                " الفيحاء": " الفيحاء",

                "حي النصر": "حي النصر",

                "حلة كوكو": "حلة كوكو",

                "الحاج يوسف الوحدة": "الحاج يوسف الوحدة",

                " القادسية": " القادسية",

                " الردمية": " الردمية",

                " نبته": " نبته",

                "الامراء": "الامراء",

                "الجريف شرق": "الجريف شرق",

                "شرق النيل": "شرق النيل",

                "الميرغنية": "الميرغنية",

                "ديوم بحري": "ديوم بحري",

            };
        }


        if (se == 'khrt') {
            var newOptions = {

                "الصفا": "الصفا",

                "الديوم": "الديوم",

                " العزوزاب": " العزوزاب",

                "المنطقة الصناعية": "المنطقة الصناعية",

                "باريس": "باريس",

                " القوز": " القوز",

                "الزهور": "الزهور",

                " النزهه": " النزهه",

                " الرميله": " الرميله",

                "سوبا-": "سوبا-",

                "السوق المحلي": "السوق المحلي",

                "توتي": "توتي",

                "الفردوس": "الفردوس",

                " الانقاذ": " الانقاذ",

                " المدرعات": " المدرعات",

                "العامرية": "العامرية",

                " الفردوس": " الفردوس",

                " يثرب": " يثرب",

                " الكلاكلة": " الكلاكلة",

                " الشجرة": " الشجرة",

                " السجانة": " السجانة",

                "الصحافة الامتداد": "الصحافة الامتداد",

                "الصحافة شرق": "الصحافة شرق",

                " العمارات": " العمارات",

                " الرياض": " الرياض",

                " الديم": " الديم",

                " المجاهدين": " المجاهدين",

                " الأزهري": " الأزهري",

                " المقرن": " المقرن",

                " الطائف": " الطائف",

                "اللاماب بحر ابيض": "اللاماب بحر ابيض",

                "حي المطار": "حي المطار",

                "قاردن": "قاردن",

                " جبرة": " جبرة",

                "الخرطوم 2": "الخرطوم 2",

                " بري": " بري",

                " أركويت": " أركويت",

                " المنشية": " المنشية",

                " المعمورة": " المعمورة",

                "ابوادم": "ابوادم",

                "العمارات": "العمارات",

                "عيد حسين-": "عيد حسين-",

                "الجريف غرب": "الجريف غرب",

                "السلمة": "السلمة",

                "الصفاء": "الصفاء",

                "الخرطوم 3": "الخرطوم 3",

                "السوق العربي-": "السوق العربي-",

                "استاد الخرطوم-": "استاد الخرطوم-",

                "مايو-": "مايو-",

                "الدخينات-": "الدخينات-",

                "الحلة الجديدة": "الحلة الجديدة",

                "الصحافة زلط": "الصحافة زلط",

                "غزة": "غزة",

                "قاردن سيتي": "قاردن سيتي",

                "العشرة": "العشرة",

                "السكة حديد": "السكة حديد",

                "ابوحمامة": "ابوحمامة",

                "السوق الشعبي": "السوق الشعبي",

            };
        }

        if (se == 'omdur') {

            var newOptions = {

                "الشهداء": "الشهداء",

                "الثورة": "الثورة",

                " البوسته": " البوسته",

                " مكى": " مكى",

                " الواحة": " الواحة",

                "حي العرب": "حي العرب",

                " الدوحة": " الدوحة",

                " الموردة": " الموردة",

                " القماير": " القماير",

                " أمبدة": " أمبدة",

                " المربعات": " المربعات",

                " المهندسين": " المهندسين",

                " الفتيحاب": " الفتيحاب",

                " الملازمين": " الملازمين",

                " العرضة": " العرضة",

                " الثورات": " الثورات",

                " المسالمة": " المسالمة",

                " الركابية": " الركابية",

                " بانت": " بانت",

                "بيت المال": "بيت المال",

                "الامراء": "الامراء",

                " الهجرة": " الهجرة",

                " العباسية": " العباسية",

                "ود البخيت": "ود البخيت",

                " الحتانه": " الحتانه",

                "ود نوباوي": "ود نوباوي",

                "مدينة النيل": "مدينة النيل",

                "الروضة": "الروضة",

                "حي العمدة": "حي العمدة",

                "اب روف": "اب روف",

                "الأربعين": "الأربعين",

                "الوادي": "الوادي",

                "الجرافة": "الجرافة",

                "المنارة": "المنارة",

            };
        }


        if (se == 'other') {

            var newOptions = {

                "مدني": "مدني",

                "بورتسودان": "بورتسودان",

                "القضارف": "القضارف",

                "الحصاحيصا": "الحصاحيصا",

                "شندي": "شندي",

                "كسلا": "كسلا",

                "اخري": "اخري",

            };
        }

        var $el = $("#select");
        $el.empty(); // remove old options
        $.each(newOptions, function(key, value) {
            $el.append($("<option></option>")
                .attr("value", value).text(key));
        });
    });
</script>




</html>