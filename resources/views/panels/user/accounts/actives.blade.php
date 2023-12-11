@extends('panels.user.layouts.master')
@section('title')
    پنل من
@endsection


@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            @if (count($plans) == 0)
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-one">


                        <div class="widget-content">
                            <div class="invoice-box">

                                <div class="acc-total-info">
                                    <h5>شما هیچ طرح فعالی ندارید</h5>
                                </div>



                                <div class="inv-action">
                                    <a href="{{ route('user.panel.plans') }}" class="btn btn-outline-info">مشاهده همه طرح
                                        ها</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

            @foreach ($plans as $plan)
                @php
                    $startDate = \Carbon\Carbon::parse($plan->created_at)->startOfDay();
                    $endDate = \Carbon\Carbon::parse($plan->expire_date)->startOfDay();
                    $diffInDays = $startDate->diffInDays($endDate);

                @endphp

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-one">


                        <div class="widget-content">
                            <div class="invoice-box">

                                <div class="acc-total-info">
                                    <h5>{{ $plan->mainPlan->name }}</h5>
                                </div>

                                <div class="inv-detail">
                                    <div class="info-detail-1">
                                        <p>پلتفرم</p>
                                        <p>{{ $plan->mainPlan->category->name }}</p>
                                    </div>

                                    <div class="info-detail-1">
                                        <p>شناسه (یوزرنیم)</p>
                                        <p>{{ $plan->order->username }}</p>
                                    </div>
                                    <div class="info-detail-2">
                                        <p>تاریخ خرید</p>
                                        <p>
                                            @php
                                                $formattedDate = \Carbon\Carbon::parse($plan->created_at)->format('Y/m/d');
                                            @endphp

                                            {{ $formattedDate }}</p>
                                    </div>

                                    <div class="info-detail-2">
                                        <p>تاریخ انقضا</p>
                                        <p>
                                            @php
                                                $exformattedDate = \Carbon\Carbon::parse($plan->expire_date)->format('Y/m/d');
                                            @endphp

                                            {{ $exformattedDate }}</p>
                                    </div>
                                    <div class="info-detail-3 info-sub">
                                        <div class="info-detail">
                                            <p>مدت زمان باقی مانده</p>
                                            <p>{{ $diffInDays }} روز</p>
                                        </div>

                                    </div>
                                </div>

                                <div class="inv-action">
                                    <a href="{{ route('user.panel.plans') }}" class="btn btn-outline-info">همه طرح ها</a>
                                    <a href="" class="btn btn-success">تمدید</a>
                                </div>
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
