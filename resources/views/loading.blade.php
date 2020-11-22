<!DOCTYPE html>
<html>
	<head>
        <title>BlacKFriday</title>
        <link rel="icon" href="{{ asset('images/shamii.png') }}">
		<link rel="stylesheet" href="{{ asset('css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/loading.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Courgette|Lobster" rel="stylesheet">
    </head>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section{
            position: relative;
            width: 100%;
            height: 100vh;
            background: #000;
            display: flex;
            justify-content:center;
            align-items: center;
            overflow: hidden;
        }
        
        section h2{
            position: relative;
            font-size: 8em;
            color: #fff;
            z-index: 10000;
            mix-blend-mode: overlay;
        }
        
        section video{
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            height:100%;
            object-fit:cover;
        }
    </style>
<body>

    <!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->
        
    <section>
        <h2> Black Friday</h2>
        <video src="{{asset('videos/smoke.mp4')}}" muted loop autoplay type="mp4"></video>
    </section>

    <div class="countdown-container">
        <div class="countdown">
            <div id="day">NA</div>
            <div id="hour">NA</div>
            <div id="minute">NA</div>
            <div id="second">NA</div>
        </div>
    </div>
    
	<!-- -------------------------------------------------------- -->
	<!-- -------------------------------------------------------- -->	

	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        setTimeout(function(){window.location='home'}, 6000);
        var countDate = new Date('Nov 27,2020 00:00:00').getTime();
        
        function blackFriday(){
            var now = new Date().getTime();
            gap = countDate - now;

            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;

            var d= Math.floor(gap / (day));
            var h= Math.floor(gap % (day) / (hour));
            var m= Math.floor(gap % (hour) / (minute));
            var s= Math.floor(gap % (minute) / (second));

            document.getElementById('day').innerText = d;
            document.getElementById('hour').innerText = h;
            document.getElementById('minute').innerText = m;
            document.getElementById('second').innerText = s;
        }

        blackFriday();

        setInterval(function(){
            blackFriday();
        },1000);
    </script> 
</body>
</html>