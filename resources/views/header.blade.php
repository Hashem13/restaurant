<!DOCTYPE html>
<html>
<head>
    
    <!-- Include CSS styles or link to external CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    <div>
        <div class="header-container">
          <div class="header-header">
            <div class="header-top-bar">
              <div class="header-social">
                <div class="header-frame1">
                    <a href="#"> <img src="{{asset('images\header\top-bar\1.png')}}" alt="BG8195" class="header-bg" /></a>
                </div>
                <div class="header-frame2">
                    <a href="#"> <img src="{{asset('images\header\top-bar\2.png')}}" alt="BG8195" class="header-bg1" /></a>
                </div>
                <div class="header-frame3">
                    <a href="#"> <img src="{{asset('images\header\top-bar\3.png')}}" alt="BG8196" class="header-bg2" /></a>
                </div>
                <div class="header-frame4">
                    <a href="#"> <img src="{{asset('images\header\top-bar\4.png')}}" alt="BG8197" class="header-bg3" /></a>
                </div>
              </div>
              <div class="header-info">
                <div class="header-call">
                  <img
                    src="{{asset('images\header\top-bar\phone.png')}}"
                    alt="IconOutlinephone8197"
                    class="header-icon-outlinephone"
                  />
                  <span class="header-text Body16pxRegular">
                    <span>(414) 857 - 0107</span>
                  </span>
                </div>
                <div class="header-mail">
                  <img
                    src="{{asset('images\header\top-bar\mail.png')}}"
                    alt="IconOutlinemail8197"
                    class="header-icon-outlinemail"
                  />
                  <span class="header-text02 Body16pxRegular">
                    <span>yummy@bistrobliss</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="header-frame21">
              <div class="header-header1">
                <div class="header-logo">
                  <img
                    src="{{asset('images\header\nav-bar\japanese-food.png')}}"
                    alt="japanesefood8198"
                    class="header-japanesefood"
                  />
                  <div class="header-original-logo">
                    <span class="header-text04"><span>Bistro Bliss</span></span>
                  </div>
                </div>
                <div class="header-menu">
                  <div class="header-menu1">
                    <span class="header-text06 Body16pxMedium">
                      <a href="{{url('/')}}"><span>Home</span></a>
                    </span>
                  </div>
                  <div class="header-menu2">
                    <span class="header-text08 Body16pxMedium">
                     <a href="{{url('about')}}"> <span>About</span></a>
                    </span>
                  </div>
                  <div class="header-menu3">
                    <span class="header-text10 Body16pxMedium">
                        <a href="{{url('menu')}}"> <span>Menu</span></a>
                    </span>
                  </div>
                  <div class="header-menu4">
                    <span class="header-text12 Body16pxMedium">
                        <a href="#"> <span>Pages</span></a>
                    </span>
                  </div>
                  <div class="header-menu5">
                    <span class="header-text14 Body16pxMedium">
                        <a href="#"> <span>Contact</span></a>
                    </span>
                  </div>
                </div>
                <div class="header-button">
                  <a href="{{ URL('booking') }}"><button class="header-button1">
                    <span class="header-text16 Body16pxBold">
                      <span>Book A Table</span>
                    </span>
                  </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</body>
</html>