<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Home</title>
</head>
<body>
    @extends('layout')

    @section('content')
    <div>
        <div class="hero-container">
          <div class="hero-hero">
            <div class="hero-content">
              <div class="hero-hero1">
                <div class="hero-bg">
                  <div class="hero-maskgroup">
                    <img src="{{asset('images\home\hero\image 110.png')}}" alt="Rectangle4700126" class="hero-rectangle470" />
                    {{-- <img src="{{asset('images\home\hero\image 110.png')}}" alt="image1100127" class="hero-image110" /> --}}
                    <img src="{{asset('images\home\hero\Ellipse 43.png')}}" alt="Ellipse430127" class="hero-ellipse43" />
                  </div>
                </div>
                <div class="hero-title">
                  <div class="hero-text">
                    <span class="hero-text01 HeadlineH1">
                      <span>
                        <span>Best food for</span>
                        <br />
                        <span>your taste</span>
                      </span>
                    </span>
                    <span class="hero-text06 Body20pxRegular">
                      <span>
                        Discover delectable cuisine and unforgettable moments in our
                        welcoming, culinary haven.
                      </span>
                    </span>
                  </div>
                  <div class="hero-buttons">
                    <a href="{{ URL('booking') }}"><button class="hero-button">
                      <span class="hero-text08 Body16pxBold">
                        <span>Book A Table</span>
                      </span>
                    </button></a>
                      <a href="{{ URL('menu') }}"><button class="hero-button1">
                      <span class="hero-text10 Body16pxBold">
                        <span>Explore Menu</span>
                      </span>
                    </button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Menu Html --}}
      <div>

        <div class="menu-container">
          <div class="menu-menu">
            <div class="menu-content">
              <div class="menu-card">
                <div class="menu-frame1">
                  <div class="menu-text">
                    <div class="menu-icon">
                      <div class="menu-icon1">
                        {{-- <img alt="Ellipse420123" src="{{asset('images\home\menu\Ellipse 42.png')}}" class="menu-ellipse421" /> --}}
                        <img
                          alt="Vector0123"
                          src="{{asset('images\home\menu\icon.png')}}"
                          class="menu-vector07"
                        />
                      </div>
                    </div>
                    <div class="menu-text01">
                      <span class="menu-text02 HeadlineH3">
                        <span>Breakfast</span>
                      </span>
                      <span class="menu-text04 Body16pxRegular">
                        <span>
                          In the new era of technology we look in the future with
                          certainty and pride for our life.
                        </span>
                      </span>
                    </div>
                    <button class="menu-button-base">
                      <span class="menu-text06 Body16pxBold">
                        <span>Explore Menu</span>
                      </span>
                    </button>
                  </div>
                </div>
                <div class="menu-frame2">
                  <div class="menu-text08">
                    <div class="menu-icon1">
                      {{-- <img alt="Ellipse420123" src="{{asset('images\home\menu\icon.png')}}" class="menu-ellipse421" /> --}}
                      <img
                        alt="Vector0123"
                        src="{{asset('images\home\menu\icon (1).png')}}"
                        class="menu-vector07"
                      />
                    </div>
                    <div class="menu-text09">
                      <span class="menu-text10 HeadlineH3">
                        <span>Main Dishes</span>
                      </span>
                      <span class="menu-text12 Body16pxRegular">
                        <span>
                          In the new era of technology we look in the future with
                          certainty and pride for our life.
                        </span>
                      </span>
                    </div>
                    <button class="menu-button-base1">
                      <span class="menu-text14 Body16pxBold">
                        <span>Explore Menu</span>
                      </span>
                    </button>
                  </div>
                </div>
                <div class="menu-frame3">
                  <div class="menu-text16">
                    <div class="menu-icon2">
                      {{-- <img alt="Ellipse420124" src="." class="menu-ellipse422" /> --}}
                      <img
                        alt="Vector0124"
                        src="{{asset('images\home\menu\icon (3).png')}}"
                        class="menu-vector07"
                      />
                    </div>
                    <div class="menu-text17">
                      <span class="menu-text18 HeadlineH3"><span>Drinks</span></span>
                      <span class="menu-text20 Body16pxRegular">
                        <span>
                          In the new era of technology we look in the future with
                          certainty and pride for our life.
                        </span>
                      </span>
                    </div>
                    <button class="menu-button-base2">
                      <span class="menu-text22 Body16pxBold">
                        <span>Explore Menu</span>
                      </span>
                    </button>
                  </div>
                </div>
                <div class="menu-frame4">
                  <div class="menu-text24">
                    <div class="menu-icon3">
                      <img alt="Ellipse420125" src="." class="menu-ellipse423" />
                      <div class="menu-icon2">
                        <img
                        alt="Vector0124"
                        src="{{asset('images\home\menu\icon (2).png')}}"
                        class="menu-vector07"
                        />
                      </div>
                    </div>
                    <div class="menu-text25">
                      <span class="menu-text26 HeadlineH3">
                        <span>Desserts</span>
                      </span>
                      <span class="menu-text28 Body16pxRegular">
                        <span>
                          In the new era of technology we look in the future with
                          certainty and pride for our life.
                        </span>
                      </span>
                    </div>
                    <button class="menu-button-base3">
                      <span class="menu-text30 Body16pxBold">
                        <span>Explore Menu</span>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="menu-title">
                <span class="menu-text32 HeadlineH2">
                  <span>Browse Our Menu</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      

    @endsection
</body>
</html>
