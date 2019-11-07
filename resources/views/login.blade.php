<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Sign In</title>
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }
      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }
      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out;
      }
      @-webkit-keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
        }
        100% {
          -webkit-transform: scale(1);
          opacity: 0;
        }
      }
      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        100% {
          -webkit-transform: scale(1);
          transform: scale(1);
          opacity: 0;
        }
      }
    </style>
    <link href="{{ URL::to('static/css/style.css') }}" rel="stylesheet" />
  </head>
  <body class="app">
    <div id="loader"><div class="spinner"></div></div>
    <script>
      window.addEventListener("load", () => {
        const loader = document.getElementById("loader");
        setTimeout(() => {
          loader.classList.add("fadeOut");
        }, 300);
      });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
      <div
        class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
        style="background-image:url({{ URL::to('static/images/bg.jpg') }})"
      >
        <div class="pos-a centerXY">
          <div
            class="bgc-white bdrs-50p pos-r"
            style="width:120px;height:120px"
          >
            <img
              class="pos-a centerXY"
              src="{{ URL::to('/images/news-logo.jpg') }}"
              alt=""
            />
          </div>
        </div>
      </div>
      <div
        class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r"
        style="min-width:320px"
      >
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>


        <form method="POST" action="{{ route('login') }}">

          <div class="form-group">
            <label class="text-normal text-dark">Username</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="John Doe" />
          </div>
          <div class="form-group">
            <label class="text-normal text-dark">Password</label>
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              name="password"
            />
          </div>
          <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer">
                <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                  <input
                    type="checkbox"
                    id="inputCall1"
                    name="inputCheckboxesCall"
                    class="peer"
                  />
                  <label for="inputCall1" class="peers peer-greed js-sb ai-c"
                    ><span class="peer peer-greed">Remember Me</span></label
                  >
                </div>
              </div>
              <div class="peer">
                <button class="btn btn-primary">Login</button>
              </div>
            </div>
          </div>
        </form>


      </div>
    </div>
    <script type="text/javascript" src="{{ URL::to('static/js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('static/js/bundle.js') }}"></script>
  </body>
</html>
