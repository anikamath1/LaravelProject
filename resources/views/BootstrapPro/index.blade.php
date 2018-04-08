<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="stylesheet" href="/css/second.css"/>
  <link rel="stylesheet" href="/css/third.css"/>
  <link rel="stylesheet" href="/css/fourth.css"/>
  <link rel="stylesheet" href="/css/fifth.css"/>
  <link rel="stylesheet" href="/css/bootstrap-grid.css"/>
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css"/>
  <link rel="stylesheet" href="/css/bootstrap-reboot.css"/>
  <link rel="stylesheet" href="/css/bootstrap-reboot.min.css"/>
  <link rel="stylesheet" href="/css/bootstrap.css"/>
  <link rel="stylesheet" href="/css/bootstrap.css.map"/>
  <link rel="stylesheet" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/css/bootstrap.min.css.map"/>
  <script src="js/second.js"></script>
  <script src="js/third.js"></script>
  <script src="js/fifth.js"></script>
  <script src="js/app.js"></script>
  <script src="js/fourth.js"></script>
  <script src="js/styles.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.slim.js"></script>
  
  <script src="js/jquery.slim.js"></script>
  <script src="js/jquery.slim.min.js"></script>




    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">WELCOME TO OUR ESHOPPING COMMUNITY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" >Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">EESHOP</h1>
          <div class="list-group">
            <a href="Watches.html" class="list-group-item">WATCHES</a>
            <a href="#" class="list-group-item">CLOTHING</a>
            <a href="#" class="list-group-item">ELECTRONICS</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="{{asset('carousel-inner')}}" role="listbox">
              <div class="{{asset('carousel-item active')}}">
                <img class="{{asset('d-block img-fluid')}}" src="{{asset('https://assets.tatacliq.com/medias/sys_master/images/9698619228190.png')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="{{asset('d-block img-fluid')}}" src="{{asset('https://content2.jdmagicbox.com/comp/bhopal/p5/0755px755.x755.170913142853.n7p5/catalogue/killer-jeans-new-market-bhopal-t-shirt-retailers-2desrjt.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="{{asset('d-block img-fluid')}}" src="{{asset('https://cnet1.cbsistatic.com/img/t6fSwQ9t39xuKeESe6yqcK_UMcw=/2018/02/21/6d79ffa8-c0ad-4477-90e0-d9c831692b5b/05-samsung-galaxy-s9-and-s9-plus.jpg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		  <div class="container">
			<div class="jumbotron">
				<p id="deals">GET YOUR BEST DEALS HERE</p>
				</div>
				</div>

        <span>
        <form action="/data" method="GET">
        <input type="submit" name="search" value="SEARCH FOR WATCHES HERE" style="padding:20px; />
        </form>
        <form action="/clothing" method="GET">
        </form>  
        <form action="/clothing" method="GET">
        <input type="submit" name="search2" value="SEARCH FOR APPAREL HERE" style="padding:20px;margin:10px;" />
        </form>
        <form action="/mobile" method="GET">
        <input type="submit" name="search2" value="SEARCH FOR MOBILE PHONES HERE" style="padding:20px;margin:10px;" />
        </form>
        </span>
          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://media.sweetwater.com/api/i/q-82__ha-fe6a15ffea2591de__hmac-f8910990dd6d43a86217c2baec1e27979a283467/images/items/750/PRX812W-large.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Speakers</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('https://n1.sdlcdn.com/imgs/c/v/8/Curren-Brown-Analog-Watch-SDL453062312-1-84336.jpg')}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Watch</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="https://image2.geekbuying.com/ggo_pic/2018-02-16/2018021602159281wyqph2e.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Mobile Phones</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>


          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
