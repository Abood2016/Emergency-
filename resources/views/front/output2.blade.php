<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/output-2.css') }}">
</head>

<body>
    <!-- **********************new edit********************************** -->
    <header>
        <img src="{{ asset('frontend_assets/MainLogo.png') }}" alt="">
        <button>Log out</button>
    </header>
    <!-- **********************new edit********************************** -->
    <section>

        <area class="back"></area>
        <h1>Emergency Help Center</h1>
        <div class="box" style="margin-top: 100px">
            <h2>Dear Patient "{{ auth()->user()->username }}"</h2>
            <div class="imgbx">
                <img src="{{ asset('frontend_assets/imgs/heart.png') }}" alt="">
            </div>
            <div class="txtbox">
                <p>You're looking Good , no need to visit ER .</p>
                <p>Please Follow to photo link &nbsp; bellow &nbsp; &nbsp;&nbsp; to &nbsp;&nbsp; have <br> some advices
                    to maintain your health.
                </p>
            </div>
            <div class="icons" style="padding-right: 60px">
                <img src="{{ asset('frontend_assets/imgs/checkbox.png') }}" alt="">
                <img src="{{ asset('frontend_assets/imgs/calender.png') }}" alt="">
            </div>
        </div>
    </section>
</body>

</html>
