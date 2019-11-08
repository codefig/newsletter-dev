<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Dashboard</title>
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
    <div>
      <div class="sidebar">
        <div class="sidebar-inner">
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="index.html"
                  ><div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="assets/static/images/logo.png" alt="" />
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">NewsLetter</h5>
                    </div>
                  </div></a
                >
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n"
                    ><i class="ti-arrow-circle-left"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active">
              <a class="sidebar-link" href="{{ route('home') }}"
                ><span class="icon-holder"
                  ><i class="c-blue-500 ti-home"></i> </span
                ><span class="title">Dashboard</span></a
              >
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="{{ route('email') }}"
                ><span class="icon-holder"
                  ><i class="c-brown-500 ti-email"></i> </span
                ><span class="title">Email</span></a
              >
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="{{ route('compose') }}"
                ><span class="icon-holder"
                  ><i class="c-blue-500 ti-share"></i> </span
                ><span class="title">Compose</span></a
              >
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="calendar.html"
                ><span class="icon-holder"
                  ><i class="c-deep-orange-500 ti-calendar"></i> </span
                ><span class="title">New Mail-list</span></a
              >
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="#"
                ><span class="icon-holder"
                  ><i class="c-deep-purple-500 ti-comment-alt"></i> </span
                ><span class="title">Subscriber Lists</span></a
              >
            </li>

          </ul>
        </div>
      </div>
      <div class="page-container">
        <div class="header navbar">
          <div class="header-container">
            <ul class="nav-left">
              <li>
                <a
                  id="sidebar-toggle"
                  class="sidebar-toggle"
                  href="javascript:void(0);"
                  ><i class="ti-menu"></i
                ></a>
              </li>
              <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);"
                  ><i class="search-icon ti-search pdd-right-10"></i>
                  <i class="search-icon-close ti-close pdd-right-10"></i
                ></a>
              </li>
              <li class="search-input">
                <input
                  class="form-control"
                  type="text"
                  placeholder="Search..."
                />
              </li>
            </ul>
            <ul class="nav-right">
              <li class="notifications dropdown">

                <ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-bell pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/1.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <span
                              ><span class="fw-500">{{ $user->name }}</span>
                              <span class="c-grey-600"
                                >liked your
                                <span class="text-dark">post</span></span
                              ></span
                            >
                            <p class="m-0">
                              <small class="fsz-xs">5 mins ago</small>
                            </p>
                          </div></a
                        >
                      </li>
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/2.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <span
                              ><span class="fw-500">Moo Doe</span>
                              <span class="c-grey-600"
                                >liked your
                                <span class="text-dark">cover image</span></span
                              ></span
                            >
                            <p class="m-0">
                              <small class="fsz-xs">7 mins ago</small>
                            </p>
                          </div></a
                        >
                      </li>
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/3.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <span
                              ><span class="fw-500">Lee Doe</span>
                              <span class="c-grey-600"
                                >commented on your
                                <span class="text-dark">video</span></span
                              ></span
                            >
                            <p class="m-0">
                              <small class="fsz-xs">10 mins ago</small>
                            </p>
                          </div></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span
                      ><a href="" class="c-grey-600 cH-blue fsz-sm td-n"
                        >View All Notifications
                        <i class="ti-angle-right fsz-xs mL-10"></i></a
                    ></span>
                  </li>
                </ul>
              </li>
              <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span>
                <a
                  href=""
                  class="dropdown-toggle no-after"
                  data-toggle="dropdown"
                  ><i class="ti-email"></i
                ></a>
                <ul class="dropdown-menu">
                  <li class="pX-20 pY-15 bdB">
                    <i class="ti-email pR-10"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                  </li>
                  <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/1.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">John Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">5 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm"
                                >Want to create your own customized data
                                generator for your app...</span
                              >
                            </div>
                          </div></a
                        >
                      </li>
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/2.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Moo Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">15 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm"
                                >Want to create your own customized data
                                generator for your app...</span
                              >
                            </div>
                          </div></a
                        >
                      </li>
                      <li>
                        <a
                          href=""
                          class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                          ><div class="peer mR-15">
                            <img
                              class="w-3r bdrs-50p"
                              src="https://randomuser.me/api/portraits/men/3.jpg"
                              alt=""
                            />
                          </div>
                          <div class="peer peer-greed">
                            <div>
                              <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                  <p class="fw-500 mB-0">Lee Doe</p>
                                </div>
                                <div class="peer">
                                  <small class="fsz-xs">25 mins ago</small>
                                </div>
                              </div>
                              <span class="c-grey-600 fsz-sm"
                                >Want to create your own customized data
                                generator for your app...</span
                              >
                            </div>
                          </div></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="pX-20 pY-15 ta-c bdT">
                    <span
                      ><a
                        href="email.html"
                        class="c-grey-600 cH-blue fsz-sm td-n"
                        >View All Email
                        <i class="fs-xs ti-angle-right mL-10"></i></a
                    ></span>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a
                  href=""
                  class="dropdown-toggle no-after peers fxw-nw ai-c lh-1"
                  data-toggle="dropdown"
                  ><div class="peer mR-10">
                    <img
                      class="w-2r bdrs-50p"
                      src="https://randomuser.me/api/portraits/men/10.jpg"
                      alt=""
                    />
                  </div>
                  <div class="peer">
                    <span class="fsz-sm c-grey-900">{{ $user->name }}</span>
                  </div></a
                >
                <ul class="dropdown-menu fsz-sm">
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                      ><i class="ti-settings mR-10"></i> <span>Setting</span></a
                    >
                  </li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                      ><i class="ti-user mR-10"></i> <span>Profile</span></a
                    >
                  </li>
                  <li>
                    <a
                      href="email.html"
                      class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                      ><i class="ti-email mR-10"></i> <span>Messages</span></a
                    >
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                      ><i class="ti-power-off mR-10"></i> <span>Logout</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <main class="main-content bgc-grey-100">
          <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item w-100">
                <div class="row gap-20">
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Visits</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500"
                              >+10%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Page Views</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash2"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500"
                              >-7%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Unique Visitor</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500"
                              >~12%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Bounce Rate</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash4"></span>
                          </div>
                          <div class="peer">
                            <span
                              class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500"
                              >33%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="masonry-item col-md-12">
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Sales Report</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="bgc-light-blue-500 c-white p-20">
                        <div class="peers ai-c jc-sb gap-40">
                          <div class="peer peer-greed">
                            <h5>November 2019</h5>
                            <p class="mB-0">Sales Report</p>
                          </div>
                          <div class="peer">
                            <h3 class="text-right">$6,000</h3>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive p-20">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="bdwT-0">Name</th>
                              <th class="bdwT-0">Status</th>
                              <th class="bdwT-0">Date</th>
                              <th class="bdwT-0">Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="fw-600">Item #1 Name</td>
                              <td>
                                <span
                                  class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill"
                                  >Unavailable</span
                                >
                              </td>
                              <td>Nov 18</td>
                              <td><span class="text-success">$12</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #2 Name</td>
                              <td>
                                <span
                                  class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill"
                                  >New</span
                                >
                              </td>
                              <td>Nov 19</td>
                              <td><span class="text-info">$34</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #3 Name</td>
                              <td>
                                <span
                                  class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill"
                                  >New</span
                                >
                              </td>
                              <td>Nov 20</td>
                              <td><span class="text-danger">-$45</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #4 Name</td>
                              <td>
                                <span
                                  class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill"
                                  >Unavailable</span
                                >
                              </td>
                              <td>Nov 21</td>
                              <td><span class="text-success">$65</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #5 Name</td>
                              <td>
                                <span
                                  class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill"
                                  >Used</span
                                >
                              </td>
                              <td>Nov 22</td>
                              <td><span class="text-success">$78</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #6 Name</td>
                              <td>
                                <span
                                  class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill"
                                  >Used</span
                                >
                              </td>
                              <td>Nov 23</td>
                              <td><span class="text-danger">-$88</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #7 Name</td>
                              <td>
                                <span
                                  class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill"
                                  >Old</span
                                >
                              </td>
                              <td>Nov 22</td>
                              <td><span class="text-success">$56</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="ta-c bdT w-100 p-20">
                    <a href="#">Check all the sales</a>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </main>

      </div>
    </div>
    <script type="text/javascript" src="{{ URL::to('static/js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('static/js/bundle.js') }}"></script>
  </body>
</html>
