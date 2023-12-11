<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <title>about</title>
</head>
<body>
    @extends('layout')

    @section('content')
    <div class="content">
        <div class="content-container">
          <div class="content-content">
            <div class="content-img">
              <div class="content-image">
                <img src="{{asset('images\About\image 111.png')}}" alt="image1110931" class="content-image111" />
              </div>
              <div class="content-card">
                <div class="content-text">
                  <span class="content-text01 HeadlineH3">
                    <span>Come and visit us</span>
                  </span>
                  <div class="content-info">
                    <div class="content-call">
                      <img
                        src="{{asset('images\About\phone.png')}}"
                        alt="IconOutlinephone0938"
                        class="content-icon-outlinephone"
                      />
                      <span class="content-text03 Body16pxRegular">
                        <span>(414) 857 - 0107</span>
                      </span>
                    </div>
                    <div class="content-mail">
                      <img
                        src="{{asset('images\About\mail.png')}}"
                        alt="IconOutlinemail0941"
                        class="content-icon-outlinemail"
                      />
                      <span class="content-text05 Body16pxRegular">
                        <span>happytummy@restaurant.com</span>
                      </span>
                    </div>
                    <div class="content-location">
                      <img
                        src="{{asset('images\About\location-marker.png')}}"
                        alt="IconOutlinelocationmarker0944"
                        class="content-icon-outlinelocationmarker"
                      />
                      <span class="content-text07 Body16pxRegular">
                        <span>
                          837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-text09">
              <div class="content-title">
                <span class="content-text10 HeadlineH2">
                  <span>We provide healthy food for your family.</span>
                </span>
                <span class="content-text12 Body18pxMedium">
                  <span>
                    Our story began with a vision to create a unique dining experience
                    that merges fine dining, exceptional service, and a vibrant
                    ambiance. Rooted in city&apos;s rich culinary culture, we aim to
                    honor our local roots while infusing a global palate.
                  </span>
                </span>
                <span class="content-text14 Body16pxRegular">
                  <span>
                    At place, we believe that dining is not just about food, but also
                    about the overall experience. Our staff, renowned for their warmth
                    and dedication, strives to make every visit an unforgettable
                    event.
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    @endsection
</body>
</html>