<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
            <img src="{{asset('/images/logo_head.png')}}" alt="">
            <a class="logo-dark" style="font-weight: bold; color:rgb(0, 0, 0)" href="/" >Haifa Association</a>
            <img class="logo-light" src="../assets/img/logo-light.png" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link omar" href="#">Home<span class="arrow"></span></a>
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link omar" href="#">SHANTI <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../demo/saas-1.html">SaaS 1</a>
                    <a class="nav-link omar" href="../demo/saas-2.html">SaaS 2</a>
                    <a class="nav-link omar" href="../demo/saas-3.html">SaaS 3</a>
                    <a class="nav-link omar" href="../demo/saas-4.html">SaaS 4</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Software <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../demo/software-1.html">Software 1</a>
                    <a class="nav-link omar" href="../demo/software-2.html">Software 2</a>
                    <a class="nav-link omar" href="../demo/software-3.html">Software 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Marketing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../demo/marketing-1.html">Marketing 1</a>
                    <a class="nav-link omar" href="../demo/marketing-2.html">Marketing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Listing <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../demo/listing-1.html">Listing 1</a>
                    <a class="nav-link omar" href="../demo/listing-2.html">Listing 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="../demo/finance-1.html">Finance</a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link omar" href="#">Programes and Projects<span class="arrow"></span></a>
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link omar" href="../page/how-it-works.html">How it works</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="../page/pricing.html">About us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Portfolio <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/portfolio.html">Potfolio listing</a>
                    <a class="nav-link omar" href="../page/portfolio-single.html">Potfolio single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Careers <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/career.html">Careers listing</a>
                    <a class="nav-link omar" href="../page/career-single.html">Careers single</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Service <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/service-1.html">Service 1</a>
                    <a class="nav-link omar" href="../page/service-2.html">Service 2</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">About <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/about-1.html">About 1</a>
                    <a class="nav-link omar" href="../page/about-2.html">About 2</a>
                    <a class="nav-link omar" href="../page/about-3.html">About 3</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Contact <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/contact-1.html">Contact 1</a>
                    <a class="nav-link omar" href="../page/contact-2.html">Contact 2</a>
                    <a class="nav-link omar" href="../page/contact-3.html">Contact 3</a>
                  </nav>
                </li>

                <li class="nav-divider"></li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Extra <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/demo.html">Request demo</a>
                    <a class="nav-link omar" href="../page/coming-soon.html">Coming soon</a>
                    <a class="nav-link omar" href="../page/terms.html">Terms</a>
                    <a class="nav-link omar" href="../page/error-404.html">Error 404</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">User <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../page/user-login.html">Login</a>
                    <a class="nav-link omar" href="../page/user-register.html">Register</a>
                    <a class="nav-link omar" href="../page/user-recover.html">Recover</a>
                  </nav>
                </li>

                <li class="nav-item">
                  <a class="nav-link omar" href="#">Docs <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link omar" href="../docs/index.html">Support center</a>
                    <a class="nav-link omar" href="../docs/articles.html">Articles</a>
                    <a class="nav-link omar" href="../docs/faq.html">FAQ</a>
                  </nav>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link omar" href="#">About us <span class="arrow"></span></a>
              <nav class="nav">
                <a class="nav-link omar" href="../blog/classic.html">Our Vision</a>
                <a class="nav-link omar" href="../blog/grid.html">Our Aims</a>
              </nav>
            </li>

          </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{route('login')}}">Login</a>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
   @yield('header')

    <!-- Main Content -->

  @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="../index.html"><img src="{{asset('/images/logo.png')}}" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">

            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
          <div class="mt-3 col-6 ">
            <h5 >Haifa Association for the Palestinian Family Care</h5>
          </div>
        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-613f056b2951495c"></script>
    @yield('scripts')
  </body>
</html>
