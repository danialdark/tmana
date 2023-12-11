<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام و ورود</title>
    <link rel="stylesheet" href="{{ asset('landing/assets/fonts/iran/css/fontiran.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "IRANSans", sans-serif;
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 500px;
            min-height: 350px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
            /* border: 1px solid red; */
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <div class="logo">
            <img src="{{ asset('panel/assets/img/telegram-logo-960.png') }}" alt="">
        </div>


        @if ($errors->any())
            <div>
                <div class="text-danger">مشکلی پیش آمده!</div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <form class="p-3 pb-0 " id="otpForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div id="codeGeterDiv">
                    <div class="form-field d-flex align-items-center border  border-2 " id="phoneNumberBox">
                        <span class="far fa-user"></span>

                        <input type="text" class="text-center disabled" required name="phone_number"
                            value="{{ old('phone_number') }}" id="otpPhoneNumber" placeholder="شماره تماس شما">
                    </div>

                    <div class="form-field d-flex align-items-center">
                        <span class="fas fa-key"></span>
                        <input class="text-center" type="text" name="password" id="otpPassword"
                            placeholder="رمز ارسال شده برای شما">
                    </div>

                    <input type="checkbox" id="remember_me" name="remember" checked class="d-none">

                    <p class="text-start text-danger fw-bold text-center d-none" id="alertO">رمز یکبار مصرف معتبر
                        نمیباشد!
                    </p>

                </div>

                <button class="btn mt-3" type="submit" id="otpSubmitter">ورود به پنل</button>
                <a class="mt-5 fw-bold" onclick="location.reload();">تغییر شماره تماس</a>
            </form>
        @else
            <div class="p-3 pb-0 " id="numberFrom">
                <div id="codeGeterDiv">
                    <div class="form-field d-flex align-items-center border  border-2 " id="phoneNumberBox">
                        <span class="far fa-user"></span>
                        <input type="text" class="text-center" required name="phoneNumber" id="phoneNumber"
                            placeholder="شماره تماس">
                    </div>

                    <p class="text-start text-danger fw-bold text-center d-none" id="alertP">شماره تماس معتبر
                        نمیباشد!
                    </p>

                    <p class="text-center fa-stack-1x">نیاز به وارد کردن شماره تلگرام نمیباشد!
                    </p>
                </div>
                <button class="btn mt-3 " disabled type="button" id="sendingButton">ارسال رمز یکبار مصرف</button>
            </div>

            <form class="p-3 pb-0 d-none" id="otpForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div id="codeGeterDiv">
                    <div class="form-field d-flex align-items-center border  border-2 " id="phoneNumberBox">
                        <span class="far fa-user"></span>

                        <input type="text" class="text-center disabled" required name="phone_number"
                            value="{{ old('phone_number') }}" id="otpPhoneNumber" placeholder="شماره تماس شما">
                    </div>

                    <div class="form-field d-flex align-items-center">
                        <span class="fas fa-key"></span>
                        <input class="text-center" type="text" name="password" id="otpPassword"
                            placeholder="رمز ارسال شده برای شما">
                    </div>

                    <input type="checkbox" id="remember_me" name="remember" checked class="d-none">


                    <p class="text-start text-danger fw-bold text-center d-none" id="alertO">رمز یکبار مصرف معتبر
                        نمیباشد!
                    </p>

                </div>

                <button class="btn mt-3" disabled type="submit" id="otpSubmitter">ورود به پنل</button>
                <a class="mt-5 fw-bold" onclick="location.reload();">تغییر شماره تماس</a>
            </form>
        @endif




    </div>

    <script src="{{ asset('site/phoneNumber.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
