<!DOCTYPE html>
<html>
  <head>
    <title>OTP Verification</title>
  </head>
  <body>
    <?php
      if(isset($_POST['submit'])) {
        $mobile_number = $_POST['mobile_number'];
        $otp = rand(100000, 999999);
        send_otp($mobile_number, $otp);
        echo "<p>An OTP has been sent to $mobile_number.</p>";
        echo "<form method='post' action=''>
                <input type='hidden' name='mobile_number' value='$mobile_number'>
                <label for='otp'>Enter OTP:</label>
                <input type='text' id='otp' name='otp'>
                <input type='submit' name='verify' value='Verify OTP'>
              </form>";
      }

      if(isset($_POST['verify'])) {
        $otp = $_POST['otp'];
        $mobile_number = $_POST['mobile_number'];
        if($_SESSION['otp'] == $otp) {
          echo "<p>OTP Verified Successfully!</p>";
        } else {
          echo "<p>Invalid OTP!</p>";
        }
      }

      function send_otp($mobile_number, $otp) {
        $authkey = 'your_auth_key';
        $senderid = 'your_sender_id';
        $message = "Your OTP is: $otp";
        $route = '4';
        $url = 'http://api.msg91.com/api/sendhttp.php';
        $params = array(
          'authkey' => $authkey,
          'mobiles' => $mobile_number,
          'message' => $message,
          'sender' => $senderid,
          'route' => $route
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $_SESSION['otp'] = $otp;
      }
    ?>

    <h1>OTP Verification</h1>
    <form method="post" action="">
      <label for="mobile_number">Enter your mobile number:</label>
      <input type="text" id="mobile_number" name="mobile_number">
      <input type="submit" name="submit" value="Send OTP">
    </form>
  </body>
</html>
