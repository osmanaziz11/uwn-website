  <header>
      <div class="container-fluid">
          <!-- top bar  -->
          <div class="row">
              <div class="col-12 top_bar p-2">

              </div>
          </div>
          <!-- top bar end -->

          <!-- search logo info  -->
          <div class="row bottom_bar">
              <div class="col-3 d-flex justify-content-md-center align-items-center information_container d-flex">
                  <span class="iconify menu d-md-none d-block" data-icon="ci:menu-alt-03"></span>
                  <div class="weather_update d-md-flex d-none h-100">
                      <div id="weather-icon">
                          <!-- <img src="" alt="weather-icon" srcset=""> -->
                      </div>
                      <div class="ms-2">
                          <p id="temp" class="p-0 m-0">32 &deg; C</p>
                          <p id="location" class="p-0 m-0">Rawalpindi</p>
                      </div>
                      <div id="country-flag">
                      </div>
                  </div>

              </div>
              <div class="col-6 d-md-flex d-none searchbar_container d-flex justify-content-center align-items-center">
                  <div class="search d-sm-flex d-none shadow rounded">
                      <input type="text" name="" id=""
                          placeholder="&#1740;&#1729;&#1575;&#1722; &#1578;&#1604;&#1575;&#1588; &#1705;&#1585;&#1740;&#1722; ...."
                          dir="rtl">
                      <span class="iconify" data-icon="fluent:search-square-24-filled"></span>
                  </div>
              </div>
              <div class="col-md-3 col-9 d-flex justify-content-end h-100 logo_container">
                  <div class="logo">
                      <img src="assects/img/Logo.jpg" alt="Logo">
                  </div>
              </div>
          </div>
          <!-- search logo info end  -->
          <!-- navbar  -->
          <div class="row">
              <div class="col navbar d-flex justify-content-md-end justify-content-center">
                  <ul class="d-flex m-md-0 mt-5 p-0 flex-md-row flex-column list-unstyled text-white">
                      <a href="">
                          <li class="mx-4 my-md-1 my-4 text-center">
                              &#x627;&#x645;&#x6cc;&#x6af;&#x631;&#x6cc;&#x634;&#x646;</li>
                      </a>
                      <a href="weather.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1605;&#1608;&#1587;&#1605;</li>
                      </a>
                      <a href="artist.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1578;&#1601;&#1585;&#1740;&#1581;</li>
                      </a>
                      <a href="business.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1705;&#1575;&#1585;&#1608;&#1576;&#1575;&#1585;
                          </li>
                      </a>
                      <a href="sports.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1705;&#1726;&#1740;&#1604;</li>
                      </a>
                      <a href="pakistan.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1662;&#1575;&#1705;&#1587;&#1578;&#1575;&#1606;
                          </li>
                      </a>
                      <a href="international.php">
                          <li class="mx-4 my-md-1 my-4 text-center">&#1576;&#1740;&#1606;
                              &#1575;&#1604;&#1575;&#1602;&#1608;&#1575;&#1605;&#1740;
                          </li>
                      </a>
                      <a href="index.php">
                          <li class="mx-4">&#1662;&#1729;&#1604;&#1575; &#1589;&#1601;&#1581;&#1729;</li>
                      </a>
                  </ul>
              </div>
          </div>
          <!-- navbar end -->
      </div>
  </header>
  <!-- Weather Api Script  -->
  <script src="assects/Js/nav-weather.js"></script>