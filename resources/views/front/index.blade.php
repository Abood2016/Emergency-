<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts.header')

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


        <label for="slct">

            <h2>How do you feel ?</h2>

            <div class="logo"><img src="{{ asset('frontend_assets/logo.png') }}" alt=""></div>

            <input type="text" name="" id="" placeholder="Enter A Symptom" disabled>
            <form action="{{ route('sympotom') }}" method="post">
                @csrf
                <select id="slct" name="sympotom" id="sympotom">
                    @foreach ($sympotoms as $item)
                        <option value="" disabled selected>choose Option</option>
                        <option style="text-align: center" value="{{ $item->id }}">{{ $item->symptom }}</option>
                    @endforeach
                </select>
                <br>
                <button type="submit"
                    style="margin: 8px;padding: 6px;  cursor:pointer;background-image: linear-gradient(#42A1EC, #0070C9);
                border: 1px solid #0077CC;
                border-radius: 4px;
                box-sizing: border-box;
                color: #FFFFFF;
                cursor: pointer;
                direction: ltr;
                display: block;
                font-size: 17px;
                    font-weight: 400; letter-spacing: -.022em; line-height: 1.47059; min-width: 30px; overflow: visible;
                    padding: 8px 15px; text-align: center;">Choose
                    Sympotom</button>
            </form>
        </label>


    </section>
</body>

</html>
