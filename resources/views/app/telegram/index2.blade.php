<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastGrade - فست گرید</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('landing/app/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/app/dist/app.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/app/dist/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/app/dist/swiper-bundle.min.css') }}">
    <!-- end Styles -->

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('landing/assets/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('landing/assets/images/logo/favicon.png') }}">

    <script type="text/javascript">
        window.RAYCHAT_TOKEN = "dff7806f-ee4b-46c7-9d8b-6cea0bcac3c1";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://widget-react.raychat.io/install/widget.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

</head>

<body class="home-main header-fixed rtl">

    <div class="wrapper">
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>

        <!-- Header -->
        <header id="header_main" class="header">
            <div class="container big">
                <div class="row">
                    <div class="col-12">
                        <div class="header__body">
                            <div class="header__logo">
                                <a href="index.html">
                                    <img id="site-logo" src="{{ asset('landing/assets/images/logo/logo.png') }}"
                                        alt="Peson" width="160" height="38"
                                        data-retina="{{ asset('landing/assets/images/logo/logo@2x.png') }}"
                                        data-width="160" data-height="38">
                                </a>
                            </div>

                            <div>
                                <div>
                                    <a href="{{ route('user.panel.index') }}" class="action-btn"><span>حساب
                                            کابری</span></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end Header -->

        <!-- Banner -->
        <section class="banner s3">
            <div class="shape"></div>
            <div class="shape right"></div>
            <div class="shape s3 right"></div>

            <div class="container big">
                <div class="row">
                    <div class="col-xl-5 col-md-12 align-items-center mt-lg-5">
                        <div class="banner__left pb-0">
                            <div class="block-text">
                                <h2 class="heading">Telegram<span class="arlo_tm_animation_text_word"></span>
                                </h2>
                                <p class="desc">خرید اکانت پریمیوم تلگرام (Telegram Premium) با پرداخت ریالی و در کمتر
                                    از 5 دقیقه به صورت اتوماتیک و بدون نیاز به لاگین!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">

                        <div class="banner__right  p-0">
                            <div class="image-1">
                                <img src="{{ asset('landing/assets/images/layouts/deco.png') }}" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Banner -->

        <section class="banner s3 d-md-flex justify-content-between  px-2 pb-5">
            <div class="banner-box  mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="top">
                    <h4 class="text-center">اکانت تلگرام پریمویم 3 ماهه</h4>
                </div>

                <div class="main justify-content-between">


                    <div class="info">
                        <p class="text-center">قیمت دلار</p>
                        <h4 class="text-center">52,000</h4>

                    </div>

                    <div class="coundown">
                        <p class="text-center">نرخ به تومان</p>
                        <h4 class="text-center">750,000</h4>

                    </div>
                </div>

                <div class="button">
                    <a href="{{ route('user.panel.plans') }}" class="action-btn"><span>
                            خرید اشتراک
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                transform="matrix(-1,1.2246467991473532e-16,-1.2246467991473532e-16,-1,0,0)">
                                <path d="M11.5 16.5L19 9M19 9L11.5 1.5M19 9H1" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="banner-box mx-2  mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="top">
                    <h4 class="text-center">اکانت تلگرام پریمویم 6 ماهه</h4>
                </div>

                <div class="main justify-content-between">


                    <div class="info">
                        <p class="text-center">قیمت دلار</p>
                        <h4 class="text-center">52,000</h4>

                    </div>

                    <div class="coundown">
                        <p class="text-center">نرخ به تومان</p>
                        <h4 class="text-center">750,000</h4>

                    </div>
                </div>

                <div class="button">
                    <a href="{{ route('user.panel.plans') }}" class="action-btn"><span>
                            خرید اشتراک
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                transform="matrix(-1,1.2246467991473532e-16,-1.2246467991473532e-16,-1,0,0)">
                                <path d="M11.5 16.5L19 9M19 9L11.5 1.5M19 9H1" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="banner-box  mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="top">
                    <h4 class="text-center">اکانت تلگرام پریمویم 1 ساله</h4>
                </div>

                <div class="main justify-content-between">


                    <div class="info">
                        <p class="text-center">قیمت دلار</p>
                        <h4 class="text-center">52,000</h4>

                    </div>

                    <div class="coundown">
                        <p class="text-center">نرخ به تومان</p>
                        <h4 class="text-center">750,000</h4>

                    </div>
                </div>

                <div class="button">
                    <a href="{{ route('user.panel.plans') }}" class="action-btn"><span>
                            خرید اشتراک
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                transform="matrix(-1,1.2246467991473532e-16,-1.2246467991473532e-16,-1,0,0)">
                                <path d="M11.5 16.5L19 9M19 9L11.5 1.5M19 9H1" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>



        <section class="faq s3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="block-text">
                            <h3 class="heading wow" data-splitting>امکانت تلگرام پریمیوم</h3>
                            <p>در زیر لیستی از امکانات اکانت پریمیوم تلگرام (Telegram Premium) به همراه سوالات احتمالی
                                شما عزیزان آورده شده!</p>

                        </div>
                        <div class="faq__main flat-tabs">
                            <div class="content-tab">
                                <div class="content-inner">
                                    <div class="flat-accordion">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title">امکانات اکانت تلگرام پریمیوم<span
                                                    class="icon-plus"></span></h6>
                                            <div class="toggle-content">


                                                <p><strong>امکان قرار دادن استوری (مختص تلگرام پرمیوم)</strong>
                                                </p>
                                                <hr>
                                                <p>می توانید تا حجم 4 گیگابایت هر فایلی که تمایل دارید را بارگذاری
                                                    کنید (که برای کاربران معمولی 2 گیگابایت است)</p>
                                                <hr>

                                                <p>هنگام بارگذاری فایل، سرعت آپلود و دانلود سریعتر خواهید داشت.
                                                </p>
                                                <hr>

                                                <p>حذف تبلیغات آزار دهنده که به زودی به تلگرام افزوده خواهد شد.
                                                </p>
                                                <hr>

                                                <p>اضافه شدن امکان تبدیل صدا به متن</p>
                                                <hr>

                                                <p>امکان پاسخگویی به پیام ها با استفاده از ایموجی های سفارشی سازی
                                                    شده.</p>
                                                <hr>

                                                <p>برچسب های پریمیوم و ستاره به پروفایل و صفحه کاربری شما افزوده
                                                    خواهد شد و شما را از دیگر افراد متمایز می کند.</p>
                                                <hr>

                                                <p>گزینه ای برای تنظیم یک پوشه پیش فرض هنگام دسترسی به تلگرام ، و
                                                    همچنین امکان بایگانی خودکار افراد جدید که پیام را دریافت کرده
                                                    اند (این ویژگی قبلاً موجود بود اما فقط برای کسانی که پیام های
                                                    زیادی دریافت کرده اند)</p>
                                                <hr>

                                                <p>باز شدن پروفایل ویدیوی شما در هر شرایطی (حتی اگر کاربری پروفایل
                                                    شما را باز نکرده باشد)</p>
                                                <hr>

                                                <p>امکان تغییر و شخصی سازی لوگوی تلگرام.</p>
                                                <hr>

                                                <p>میزان استیکر هایی را که کاربر می تواند به علایق خود در صفحه
                                                    استیکر اضافه کند ، افزایش می یابد.</p>
                                                <hr>

                                                <p>افزایش امکان ملحق شدن تعداد کل کانال ها و گروه های کاربر را از
                                                    500 به 1000 عدد.</p>
                                                <hr>

                                                <p>افزایش تعداد پوشه های چت های تلگرام از ده عدد به بیست عدد.</p>
                                                <hr>

                                                <p>توانایی کاربر در ایجاد سوپرگروه و کانال (ID) از 10 تا به 20 عدد
                                                    افزایش می یابد.</p>
                                                <hr>

                                                <p>تعداد مکالمات را افزایش دهید که کاربر ممکن است از 5 تا 10 و در
                                                    پوشه های 100 تا 200 به صفحه اصلی خود بچسبد ، و همچنین تعداد چت
                                                    هایی که می تواند در یک پوشه از 100 تا 200 قرار گیرد.</p>
                                                <hr>



                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"> فرایند فعال شدن اشتراک چقدر زمان میبرد؟<span
                                                    class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    مدت زمان فعال شدن اکانت شما بین 5 تا 15 دقیقه از لحظه پرداخت زمان
                                                    میبرد!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"> چرا قیمت سایت شما از دیگر سایت ها کمتر
                                                میباشد؟<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    والا من خودمم نمیدونم چرا اینقدر هزینه بالا میگیرن ما فقط یه مقدار
                                                    هزینه انجام کار رو میگیریم!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"> لطفا این رو هم بخونید!<span
                                                    class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    خواهشا هر مشکلی و هر چیزی که بود از طریق چت آنلاین با ما در ارتباط
                                                    باشید و توی کانال تلگرام ما عضو بشید تا تخفیف هارو ببینید!
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">

                        <div class="image" data-aos="fade-left" data-aos-duration="2000">
                            <img src="{{ asset('landing/assets/images/layouts/img-faq.png') }}" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <footer class="footer">
            <div class="shape right"></div>
            <div class="shape right"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                        <div class="footer__bottom">
                            <a href="index.html" class="logo"><img
                                    src="{{ asset('landing/assets/images/logo/logo.png') }}" alt=""></a>

                            <div class="center mb--30">

                                <p>کپی رایت © 1402, فست گرید . همه حقوق برای <a href="https://fastgrade.ir"> فست گرید
                                    </a>محفوظ است</p>
                            </div>
                            <ul class="list-social">
                                <li><a href="#">
                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.57969 9.03953C2.51969 9.03953 1.19969 9.03953 0.599688 9.03953C0.279688 9.03953 0.179688 8.91953 0.179688 8.61953C0.179688 7.81953 0.179688 6.99953 0.179688 6.19953C0.179688 5.87953 0.299688 5.77953 0.599688 5.77953H2.57969C2.57969 5.71953 2.57969 4.55953 2.57969 4.01953C2.57969 3.21953 2.71969 2.45953 3.11969 1.75953C3.53969 1.03953 4.13969 0.559531 4.89969 0.279531C5.39969 0.0995311 5.89969 0.0195312 6.43969 0.0195312H8.39969C8.67969 0.0195312 8.79969 0.139531 8.79969 0.419531V2.69953C8.79969 2.97953 8.67969 3.09953 8.39969 3.09953C7.85969 3.09953 7.31969 3.09953 6.77969 3.11953C6.23969 3.11953 5.95969 3.37953 5.95969 3.93953C5.93969 4.53953 5.95969 5.11953 5.95969 5.73953H8.27969C8.59969 5.73953 8.71969 5.85953 8.71969 6.17953V8.59953C8.71969 8.91953 8.61969 9.01953 8.27969 9.01953C7.55969 9.01953 6.01969 9.01953 5.95969 9.01953V15.5395C5.95969 15.8795 5.85969 15.9995 5.49969 15.9995C4.65969 15.9995 3.83969 15.9995 2.99969 15.9995C2.69969 15.9995 2.57969 15.8795 2.57969 15.5795C2.57969 13.4795 2.57969 9.09953 2.57969 9.03953Z"
                                                fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="#">
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5 1.42062C13.9794 1.66154 13.4246 1.82123 12.8462 1.89877C13.4412 1.524 13.8954 0.935077 14.1089 0.225231C13.5541 0.574154 12.9416 0.820615 12.2889 0.958154C11.7621 0.366462 11.0114 0 10.1924 0C8.60337 0 7.32412 1.36062 7.32412 3.02862C7.32412 3.26862 7.34338 3.49938 7.39062 3.71908C5.0045 3.59631 2.89313 2.38985 1.47475 0.552C1.22712 1.00523 1.08188 1.524 1.08188 2.08246C1.08188 3.13108 1.59375 4.06062 2.35675 4.59877C1.89562 4.58954 1.44325 4.44831 1.06 4.22585C1.06 4.23508 1.06 4.24708 1.06 4.25908C1.06 5.73046 2.05487 6.95262 3.3595 7.23415C3.12587 7.30154 2.87125 7.33385 2.607 7.33385C2.42325 7.33385 2.23775 7.32277 2.06362 7.28215C2.4355 8.48123 3.49075 9.36277 4.7455 9.39138C3.769 10.1972 2.52912 10.6828 1.18688 10.6828C0.9515 10.6828 0.72575 10.6717 0.5 10.6412C1.77137 11.5062 3.27813 12 4.903 12C10.1845 12 13.072 7.38462 13.072 3.384C13.072 3.25015 13.0676 3.12092 13.0615 2.99262C13.6311 2.56615 14.1097 2.03354 14.5 1.42062Z"
                                                fill="white" />
                                        </svg>
                                    </a></li>
                                <li><a href="#">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0006 14V8.87249C14.0006 6.35249 13.4581 4.42749 10.5181 4.42749C9.10062 4.42749 8.15563 5.19749 7.77063 5.93249H7.73563V4.65499H4.95312V14H7.85813V9.36249C7.85813 8.13749 8.08563 6.96499 9.59063 6.96499C11.0781 6.96499 11.0956 8.34749 11.0956 9.43249V13.9825H14.0006V14Z"
                                                fill="white" />
                                            <path d="M0.226562 4.65479H3.13156V13.9998H0.226562V4.65479Z"
                                                fill="white" />
                                            <path
                                                d="M1.68 0C0.7525 0 0 0.7525 0 1.68C0 2.6075 0.7525 3.3775 1.68 3.3775C2.6075 3.3775 3.36 2.6075 3.36 1.68C3.36 0.7525 2.6075 0 1.68 0Z"
                                                fill="white" />
                                        </svg>

                                    </a></li>
                                <li><a href="#">
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.2347 1.9639C17.1458 1.22216 16.4468 0.510897 15.7154 0.415609C11.2555 -0.138536 6.7457 -0.138536 2.28731 0.415609C1.55533 0.51069 0.856308 1.22216 0.76739 1.9639C0.452537 4.68236 0.452537 7.31818 0.76739 10.036C0.856308 10.7778 1.55533 11.4897 2.28731 11.5843C6.7457 12.1384 11.2557 12.1384 15.7154 11.5843C16.4468 11.4898 17.1458 10.7778 17.2347 10.036C17.5496 7.31842 17.5496 4.68236 17.2347 1.9639ZM7.58931 8.82375V3.17703L11.8243 6.00049L7.58931 8.82375Z"
                                                fill="white" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </footer>



        <a id="scroll-top"><span class="icon-arrow-top"></span></a>

    </div>



    <script src="{{ asset('landing/app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/app/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/app/js/plugins.js') }}"></script>
    <script src="{{ asset('landing/app/js/countto.js') }}"></script>
    <script src="{{ asset('landing/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/app/js/app.js') }}"></script>
    <script src="{{ asset('landing/app/js/count-down.js') }}"></script>
    <script src="{{ asset('landing/app/js/aos.js') }}"></script>
    <script src="{{ asset('landing/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/app/js/swiper.js') }}"></script>
    <!-- Initialize Swiper -->
</body>

</html>
