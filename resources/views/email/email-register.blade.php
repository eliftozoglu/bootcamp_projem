<html> <!-- #A3D0F8 -->
<body style="color: #000; font-size: 16px; text-decoration: none; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #efefef;">

<div id="wrapper" style="max-width: 600px; margin: auto auto; padding: 20px;">

    <div id="logo" style="">
        <center><h1 style="margin: 0px;"><a  target="_blank"><img style="max-height: 75px;" src="{{asset('images/image_8.jpg')}}"></a></h1></center>
    </div>

    <div id="content" style="font-size: 16px; padding: 25px; background-color: #fff;
				moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; -khtml-border-radius: 10px;
				border-color: #A3D0F8; border-width: 4px 1px; border-style: solid;">

        <h1 style="font-size: 22px;"><center>WELCOME</center></h1>

        <p>Hi {{$username}},</p>

        <p>Your registration is succesful! We are happy to see you. </p>

        <p>Please verify your account.</p>

        <br />

        <p style="display: flex; justify-content: center; margin-top: 10px;"><center>


            <a href="{{route('home-page')}}" target="_blank" style="border: 1px solid #0561B3; background-color: #238CEA;
					color: #fff; text-decoration: none; font-size: 18px; padding: 10px 20px;">Verify</a></div>
    </center></p>

</div>

<div id="footer" style="margin-bottom: 20px; padding: 0px 8px; text-align: center;">
    even add footer links to your <a href="https://www.heytuts.com/web-dev" style="text-decoration: none; color: #238CEA;">website</a> from these emails
</div>
</div>
</body>
</html>
