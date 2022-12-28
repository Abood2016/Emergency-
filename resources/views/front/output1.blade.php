<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/output1.css') }}">

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
                <p style="color: black">You Need to visit nearest ER</p>
                <p style="color: black">Please Follow to photo link &nbsp; bellow &nbsp; &nbsp;&nbsp; to &nbsp;&nbsp;
                    find <br> nearest Clinic.
                </p>
            </div>

            <div class="icons" style="padding-right: 60px;">
                <img src="{{ asset('frontend_assets/imgs/headset.png') }}" alt="">
                <img src="{{ asset('frontend_assets/imgs/map.png') }}" alt="">
            </div>
            <form action="{{ route('appoinment') }}" method="POST">
                @csrf
                <div style="text-align: center;margin-bottom: 50px;">
                    <br>
                    <input name="appintment_date" type="datetime-local" style="text-align: center;padding:3px;">
                    <button
                        style=" cursor:pointer;background-image: linear-gradient(#42A1EC, #0070C9);border: 1px solid #0077CC;
            border-radius: 4px; box-sizing: border-box;
            color: #FFFFFF;  padding: 8px 15px; text-align: center;"
                        type="submit">Choose
                        Date</button>
            </form>
        </div>
        </div>
    </section>

</body>

</html>
