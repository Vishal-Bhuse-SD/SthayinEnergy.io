<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
    <img src="img/favicon.jpeg" alt="" style="height:40px;width:40px;"><span class="text-dark">STHAYIN ENERGY</span></a>
    <!-- <img src="img/favicon.jpeg" alt="" style="height:80px;width:250px;"> </a> -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->

    <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" onclick="openNav()"></span>
    </button>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn text-white" onclick="closeNav()">&times;</a>
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item  mt-3">
          <a class="nav-link text-white" href="index">Home</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-white" href="product">Product</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-white" href="service">Service</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-white" href="about">About us</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-white" href="franchise">Franchise</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link text-white" href="contacts">Contact</a>
        </li>              
      </ul>
    </div>
     
    <div class="collapse navbar-collapse" id="navbarSupportedContent ">
      <ul class="navbar-nav ml-auto mt-3 mb-3 mr-3" >
        <li class="nav-item <?php if($page =='index'){echo 'active';} ?>">
          <a class="nav-link" href="index">Home</a>
        </li>
         <!-- <li class="nav-item">
              <div class="dropdown">
                <a class="dropbtn nav-link">About-Company <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                  <a href="#">Prices</a>
                  <a href="#"> Contact</a>
                  <a href="#">E-commercel</a>
                  <a href="#">Privacy Policy</a>
                  <a href="#">Cookies policy</a>
                  <a href="#">legal-Notice</a>
                  <a href="#">Sitemap</a>
                </div>
              </div>
        </li> -->
        <li class="nav-item <?php if($page =='product'){echo 'active';} ?>">
          <a class="nav-link" href="product">Product</a>
        </li>
        <li class="nav-item <?php if($page =='service'){echo 'active';} ?>">
          <a class="nav-link" href="service">Service</a>
        </li>
        <li class="nav-item <?php if($page =='about'){echo 'active';} ?>">
          <a class="nav-link" href="about">About us</a>
        </li>
        <li class="nav-item <?php if($page =='franchise'){echo 'active';} ?>">
          <a class="nav-link" href="franchise">Franchise</a>
        </li> 
        <li class="nav-item <?php if($page =='contacts'){echo 'active';} ?>">
          <a class="nav-link" href="contacts">Contact</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>

