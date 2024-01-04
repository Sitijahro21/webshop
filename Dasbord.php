<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Daily hijab</title>
  </head>

  <body>
    <div class="header">
      <div class="container">
        <!-- navbar  -->
        <div class="navbar d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <span>Jual</span>
            <div class="hr1 mx-2"></div>
            <span>Download</span>
            <div class="hr1 mx-2"></div>
            <span>Ikuti kami di</span>
            <img
              class="icon-media mr-2 ml-2"
              src="asets/tokopedia-svgrepo-com.svg"
              alt=""
            />
            <img class="icon-media mr-2" src="asets/instagram-1-svgrepo-com.svg" alt="" />
            <img class="icon-media mr-2" src="asets/facebook-color-svgrepo-com.svg" alt="" />
            <img class="icon-media mr-2" src="asets/twitter-logo-svgrepo-com.svg" alt="" />
          </div>
          <div class="d-flex align-items-center">
            <img class="icon-media mr-2" src="asets/notification-bell-svgrepo-com.svg" alt="" />
            <span class="mr-4">Notifikasi</span>
            <img class="icon-media mr-2" src="asets/help-circle-svgrepo-com.svg" alt="" />
            <span class="mr-4">Bantuan</span>
            <div class="hr1 mx-2"></div>
            <img class="icon-media mr-2" src="asets/logout-icon.svg" alt="Logout" />
                <a href="logout.php" class="mr-4">Logout</a>
                <div class="hr1 mx-2"></div>
                      </div>
        </div>
        
        <!-- input search brand -->
        <div class="d-flex align-items-center mt-4">
          <div class="d-flex align-items-center">
            <img class="brand-img mr-2" src="asets/logo.png" alt="" />
            <span class="text-brand">Daily hijab</span>
          </div>
          <div class="wrap-navbar-input">
         
            <div class="under-input d-flex mt-2">
              <span class="mr-3">Bella Square</span>
              <span class="mr-3">Bergo jersey</span>
              <span class="mr-3">Jibab Rabbani</span>
              <span class="mr-3">Jilbab Instan</span>
              <span class="mr-3">Phasmina inner</span>
              <span class="mr-3">Phasmina silk</span>
              <span class="mr-3">Jilbab Sport</span>
              <span class="mr-3">Phasmina kaos</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
      <img class="shape1" src="assets/shape1.png" alt="" />
      <img class="shape2" src="assets/shape2.png" alt="" />
      <img class="shape3" src="assets/shape1.png" alt="" />
      <img class="shape4" src="assets/shape2.png" alt="" />

      <div class="container"></div>
    </div>

    <script>
      function performSearch() {
        var searchTerm = document.getElementById('searchInput').value;
        alert('Performing search for: ' + searchTerm);
        // Add your search logic or redirection here
      }
    </script>
  </body>
</html>


      <div class="container">
        
        <!-- carousel -->
        <div class="row wrap-carousel">
          <div class="col-8 h-100 pr-1">
            <div
              id="carouselExampleIndicators"
              class="carousel slide h-100"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="2"
                ></li>
              </ol>
              <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                  <img
                  src="asets/buat landscape1.jpeg"
                  class="d-block w-100 h-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item h-100">
                <img
                  src="asets/buat landscape2.jpeg"
                  class="d-block w-100 h-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item h-100">
                <img
                  src="asets/Buat bg2.jpeg"
                  class="d-block w-100 h-100"
                  alt="..."
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
              >
              <span
              class="carousel-control-next-icon"
              aria-hidden="true"
            ></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-4 h-100 pl-0">
        <div class="h-50">
          <img class="w-100 h-100" src="asets/buat bg 1.jpeg" alt="" />
        </div>
        <div class="h-50 pt-1">
          <img class="w-100 h-100" src="asets/Buat bg2.jpeg" alt="" />
        </div>
      </div>
    </div>
        <!-- jenis sale -->
        <div class="row mx-0 jenis-sale">
          <div class="d-flex justify-content-between w-100">
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/phasmina inner.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Phasmina inner</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/phasmina kaos.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">phasmina kaos</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/jilbab sport.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Jilbab Sport</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/Bella square.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Bella Square</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/Hijab Bergo Jersey Tali Instan Jersey….jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Bergo Jersey</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/Pasmina Silk Mewah.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Phasmina silk</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <div class="wrap-img">
                <img src="asets/Rabbani.jpeg" alt="" />
              </div>
              <p class="mb-0 mt-2">Kerudung Rabbani</p>
            </div>
          </div>
        </div>
        <!-- flash sale -->
        <div class="row mx-0 sale mt-4">
          <div class="d-flex px-4 pt-4">
            <h5 class="mr-5">DAILY HIJAB FLASH SALE</h5>
          </div>
          <div class="row mx-0 mt-4 row-card">
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #ffffff"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/Bella square.jpeg" alt="" />
                </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>25.000</span>
                  </div>
                  <div class="progresss">
                    <span> 1K TERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #68b0cc"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/ceruty.jpeg" alt="" />
                </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>35.000</span>
                  </div>
                  <div class="progresss">
                    <span> 275 TERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #f7b5f9"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/Hijab Bergo Jersey Tali Instan Jersey….jpeg" alt="" />
                </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>20.000</span>
                  </div>
                  <div class="progresss">
                    <span> 1K TERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #68b0cc"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/jilbab instan.jpeg" alt="" />
                </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>50.000</span>
                  </div>
                  <div class="progresss">
                    <span> 450 TERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #68b0cc"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/jilbab sport.jpeg" alt="" />
                </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>35.000</span>
                  </div>
                  <div class="progresss">
                    <span> 1K TERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2 h-100 position-relative">
              <div
                class="d-flex align-items-center justify-content-center h-100"
              >
                <div class="diskon">
                  <span class="font-weight-bold" style="color: #68b0cc"
                    >35%</span
                  >
                  <span class="text-white font-weight-bold">OFF</span>
                </div>
                <div class="wrap-img-sale">
                  <img class="w-100 h-100" src="asets/Pasmina Silk Mewah.jpeg" alt="" />
                > </div>
                <div class="total w-100">
                  <div class="text">
                    <span>Rp</span>
                    <span>45.000</span>
                  </div>
                  <div class="progresss">
                    <span> 2KTERJUAL</span>
                    <div class="progress-on"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
              <h4 class="mb-0" style="color: #fc8d8d">DAILY HIJAB MALL</h4>
              <div class="hr1 mx-4"></div>
              <img src="asets/Baground.png" alt="Shopee Mall Image" style="max-width: 100%; height: auto;">
          </div>
            </div>
            </div>
          </div>
        <div
        class="row mx-0 py-2" style="height: 200px; background-color: #ffffff;">
        </div>
      </div>
        <h2 style="color: #ab2bd2;">Pencarian Teratas</h2>
          </div>
        </div>
        </div>
      </div>
    </div>
            <div class="col-8 h-100">
              <div id="carouselExampleIndicators2" class="carousel slide h-100" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  </div>
                <ol class="carousel-indicators">
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="1"
                  ></li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="2"
                  ></li>
                </ol>
                <div class="carousel-inner h-100">
                  <div class="carousel-item h-100 active">
                    <div class="row">

                      </div>
                    </div>
                  </div>
                  </div>
                      <div class="col-3 d-flex flex-column align-items-center">
                        <img
                          src="assets/poipoi.png"
                          alt=""
                          style="height: 67%"
                        />
                      
                
                  <img src="assets/222.png" alt="" style="width: 50%" />
                </a>
                <a
                  class="carousel-control-next"
                  href="#carouselExampleIndicators2"
                  role="button"
                  data-slide="next"
                >
                  <img
                    src="assets/333.png"
                    alt=""
                    style="width: 50%; position: relative; left: 70px"
                 </a>
                </a>
              </div>
            </div>
          </div>
        </div>

            <!-- carousel -->
            <div
              id="carouselExampleControls3"
              class="carousel slide"
              data-ride="carousel"
              style="height: 300px"
            >
              <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                  <div
                    class="row h-100 mx-0"
                    style="border-top: 2px solid #f2f2f2"
                  >
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #f2f2f2"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: rgb(249, 249, 249)"
                        >
                          <img class="w-100 h-100" src="asets/foto 2.jpeg" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="asets/foto 4.jpeg"
                              alt=""
                            />
                          </div>
                          <div class="mt-2" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="asets/foto 5.jpeg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >PHASMINA CERUTY</span
                      >
                    </div>
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #852121"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: rgb(255, 255, 252)"
                        >
                          <img class="w-100 h-100" src="asets/foto 6.jpeg" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="asets/foto 7.jpeg"
                              src="asets/foto 9.jpeg"
                              alt=""
                            />
                          </div>
                          
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >PHASMINA KAOS</span
                      >
                    </div>
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #f2f2f2"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: yellow"
                        >
                          <img class="w-100 h-100" src="asets/Foto 11.jpeg" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="asets/foto 7.jpeg"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >PHASMINA INNER</span
                      >
                    </div>
                  </div>
                </div>
                <div class="carousel-item h-100">
                  <div
                    class="row h-100 mx-0"
                    style="border-top: 2px solid #f2f2f2"
                  >
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #f2f2f2"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: yellow"
                        >
                          <img class="w-100 h-100" src="assets/55.png" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                          <div class="mt-2" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >Masker Kain Karakter</span
                      >
                    </div>
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #f2f2f2"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: yellow"
                        >
                          <img class="w-100 h-100" src="assets/55.png" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                          <div class="mt-2" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >Masker Kain Karakter</span
                      >
                    </div>
                    <div
                      class="col-4 h-100 pt-4"
                      style="border-right: 2px solid #f2f2f2"
                    >
                      <div class="d-flex w-100" style="height: 87%">
                        <div
                          class="h-100 mr-2"
                          style="width: 60%; background-color: yellow"
                        >
                          <img class="w-100 h-100" src="assets/55.png" alt="" />
                        </div>
                        <div class="h-100" style="width: 40%">
                          <div class="" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                          <div class="mt-2" style="height: 48%">
                            <img
                              class="w-100 h-100"
                              src="assets/55.png"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                      <span
                        class="position-relative h5"
                        style="color: #888; top: 10px"
                        >Masker Kain Karakter</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleControls3"
                role="button"
                data-slide="prev"
              >
                <img
                  src="assets/222.png"
                  alt=""
                  style="width: 50px; left: -90px; position: relative"
                />
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleControls3"
                role="button"
                data-slide="next"
              >
                <img
                  src="assets/333.png"
                  alt=""
                  style="width: 50px; right: -90px; position: relative"
                />
              </a>
            </div>
          </div>
        </div>
        <!-- rekomendasi -->

        <div class="row mx-0 flex-column mt-4">
          <nav style="background-color: #ffffff">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a
                class="nav-link active"
                id="nav-home-tab"
                data-toggle="tab"
                href="#nav-home"
                role="tab"
                aria-controls="nav-home"
                aria-selected="true"
                style="color: #f53d2d; border-right: none"
              >
                <h6>REKOMENDASI</h6>
              </a>
              <a
                class="
                  nav-link
                  d-flex
                  justify-content-center
                  align-items-centerf
                "
                id="nav-profile-tab"
                data-toggle="tab"
                href="#nav-profile"
                role="tab"
                aria-controls="nav-profile"
                aria-selected="false"
                style="color: #f53d2d; border-right: none; width: 100px"
              >
              </a>
            </div>
          </nav>
          <div class="tab-content mt-2" id="nav-tabContent">
            <div
              class="tab-pane fade show active"
              id="nav-home"
              role="tabpanel"
              aria-labelledby="nav-home-tab"
            >
              <div class="row mx-0 mt-2" style="height: 200px">
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 1.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Ceruty</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 35.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #ffffff"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 2.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Bella Square</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 15.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 3.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Crinkle</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 35.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 4.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Kaos</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 35.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 5.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina spandek</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 40.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 6.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Paris Premium</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 25.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mx-0 mt-2" style="height: 200px">
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 7.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Jilbab Blus Adem</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 26.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 9.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Corn Skin</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 50.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 8.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Jilbab Rabbani</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 65.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 10.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Voal</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 45.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 9.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Inner</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 40.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 12.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Phasmina Katun</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 45.000</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="w-100 d-flex justify-content-center mt-4">
                <button
                  class="btn w-50"
                  style="
                    color: #888;
                    border: 1px solid #888;
                    background-color: #ffffff;
                  "
                >
                  Lihat Lainnya
                </button>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-profile"
              role="tabpanel"
              aria-labelledby="nav-profile-tab"
            >
              <div class="row mx-0 mt-2" style="height: 200px">
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 11.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 12.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/foto 9.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #e6e6e6"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span>
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mx-0 mt-2" style="height: 200px">
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #fbfafa"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 10.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 11.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="asets/Rec 12.jpeg"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >1k Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 pl-0">
                  <div
                    class="d-flex flex-column h-100"
                    style="background-color: #ffffff"
                  >
                    <div
                      class="w-100 h-75 position-relative"
                      style="background-color: #f53d2d"
                    >
                      <img
                        class="w-100 h-100 position-absolute"
                        src="assets/55.png"
                        alt=""
                      />
                    </div>
                    <div class="w-100 d-flex flex-column px-2">
                      <span>Total Bag Alice Mini</span>
                      <div
                        class="
                          w-100
                          pb-2
                          d-flex
                          justify-content-between
                          align-items-center
                          mt-2
                        "
                      >
                        <span style="color: #f53d2d; font-size: 14px"
                          >Rp 4.900</span
                        >
                        <span style="color: #888; font-size: 12px"
                          >10+ Terjual</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container pt-5">
        <p class="title font-weight-bold">
          Daili Hijab - Jual Beli di Ponsel
        </p>
        <p class="desc">
          Aplikasi "Daily Hijab" adalah sebuah platform berbasis web yang dirancang khusus untuk memudahkan pengguna dalam membeli jilbab dengan pengalaman belanja yang nyaman dan aman. Dengan antarmuka yang ramah pengguna, aplikasi ini memberikan akses cepat dan intuitif untuk menjelajahi berbagai koleksi jilbab terbaru dan terkini.
        </p>

        <p class="title font-weight-bold mt-5">Pembeli Suka Belanja Online</p>
        <p class="desc">
          Temukan kebutuhan jilbabmu dengan harga terbaik hanya di "HijabStyle Online". "HijabStyle Online" adalah platform perbelanjaan jilbab berbasis web, di mana kamu dapat memperoleh pembaruan terbaru dari penjual yang kamu ikuti, sekaligus dari pengguna favoritmu. Berbelanja dan berjualan jilbab menjadi lebih menyenangkan dengan fitur sosial, di mana kamu dapat membagikan produk jilbab yang kamu jual atau jilbab favoritmu hanya dengan satu klik saja! Beli semua kebutuhan jilbabmu di "HijabStyle Online" dengan hati yang tenang! Cek rating dan ulasan toko-toko yang ada dan temukan penjual jilbab yang terpercaya dengan mudah. Kami selalu mengutamakan keamanan transaksi untuk para pembeli kami! Dengan Garansi "HijabStyle Online", kamu akan mendapatkan uangmu kembali jika kamu tidak menerima pesanan jilbab dengan baik.
        </p>
        </div>
      </div>
      </div>
      </body>
      </html>
      

       