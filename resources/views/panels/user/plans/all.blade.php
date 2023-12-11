@extends('panels.user.layouts.master')
@section('title')
    پنل من
@endsection


@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            @foreach ($plans as $plan)
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-one">


                        <div class="widget-content">
                            <div class="invoice-box">

                                <div class="acc-total-info">
                                    <h5>{{ $plan->name }}</h5>
                                </div>

                                <div class="inv-detail">

                                    <div class="info-detail-1">
                                        <p>قیمت به دلار</p>
                                        <p class=" fs-2">
                                            {{ substr(number_format($plan->dollar_price, 2, '.', ','), 0, -3) }} دلار</p>
                                    </div>
                                    <div class="info-detail-2">
                                        <p>قیمت به تومان</p>
                                        <p class="text-success fs-2">
                                            {{ substr(number_format($plan->price, 2, '.', ','), 0, -3) }} تومان</p>

                                    </div>
                                    <div class="info-detail-3 info-sub">
                                        <div class="info-detail">
                                            <p>مدت زمان طرح</p>
                                            <p class="fs-2">{{ $plan->duration_per_day }} روز</p>
                                        </div>

                                    </div>
                                </div>


                                <form action="" class="d-flex justify-content-between" method="post">
                                    @csrf

                                    <input id="t-text" type="text" name="txt" placeholder="آیدی حساب : FastGrade"
                                        class="form-control col-8" required>

                                    <button class="btn btn-outline-primary col-3">خرید طرح</button>
                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('panel/assets/js/dashboard/dash_1.js') }}"></script>
@endsection
