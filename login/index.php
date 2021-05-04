<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div style="width: 500px" id="reader"></div>
            <!-- <iframe src="http://localhost/green_electricity/login/index.html"></iframe> -->
            <!-- <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div> -->
            <!-- <input type="submit" class="btn solid" name="" value="login"> -->
            <a href="../back" class="btn solid" ><p style="margin-left: 50px; margin-top:12px;">Login</p></a>
            <!-- <a href="../back"><input type="submit" value="Login" class="btn solid" /></a> -->
            <a href="../index.html"><p class="social-text">Kembali</p></a>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
             <a href="../index.html"><p class="social-text">Kembali</p></a>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum punya akun ?</h3>
            <p>
              Ayo manfaatkan sampahmu menjadi listrik... Buruan Daftar!!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah daftar Green Electricity ?</h3>
            <p>
              AyoManfaatkan Sampahmu dan Jadilah bagian dari Green Electricity Buruan Daftar!!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script src="js_scan/src/html5-qrcode-scanner.js"></script>
    <script src="js_scan/src/html5-qrcode.js"></script>
    <script type="js_scan/minified/html5-qrcode.min.js"></script>
    <script src="https://raw.githubusercontent.com/mebjas/html5-qrcode/master/minified/html5-qrcode.min.js"></script>
    <script type="text/javascript">
      function onScanSuccess(qrMessage) {
      // handle the scanned code as you like, for example:
      console.log(`QR matched = ${qrMessage}`);
    }

    function onScanFailure(error) {
      // handle scan failure, usually better to ignore and keep scanning.
      // for example:
      console.warn(`QR error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", { fps: 10, qrbox: 250 }, /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);

    const html5QrCode = new Html5Qrcode("reader", /* verbose= */ true);
    </script>
  </body>
</html>