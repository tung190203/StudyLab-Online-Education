@extends('index')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span>Study</span>Lab</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>
 
    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="course.html" class="nav-link">Course</a></li>
          <li class="nav-item"><a href="instructor.html" class="nav-link">Instructor</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
      </ul>
  </div>
 </div>
 </nav>
 <!-- END nav -->
 
 <div class="hero-wrap js-fullheight" style="background-image: url('./assets/images/bg_1.jpg');">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
       <div class="col-md-7 ftco-animate">
         <span class="subheading">Chào mừng đến với StudyLab</span>
         <h1 class="mb-4">Chúng tôi là nền tảng học trực tuyến dành cho bạn</h1>
         <p class="caps">Học khóa học online mang lại trải nghiệm học tập linh hoạt, giúp bạn tiếp cận kiến thức mới từ mọi lúc, mọi nơi.</p>
         <p class="mb-0"><a href="#" class="btn btn-primary">Khóa học của chúng tôi</a> <a href="#" class="btn btn-white">Xem thêm</a></p>
     </div>
 </div>
 </div>
 </div>
 
 <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
       <div class="row">
          <div class="col-md-7"></div>
          <div class="col-md-5 order-md-last">
           <div class="login-wrap p-4 p-md-5">
               <h3 class="mb-4">Đăng kí ngay</h3>
               <form action="#" class="signup-form">
                  <div class="form-group">
                     <label class="label" for="name">Họ và tên</label>
                     <input type="text" class="form-control" placeholder="Nguyễn Văn A">
                 </div>
                 <div class="form-group">
                     <label class="label" for="email">Địa chỉ email</label>
                     <input type="text" class="form-control" placeholder="nguyenvana@gmail.com">
                 </div>
                 <div class="form-group">
                  <label class="label" for="password">Số điện thoại</label>
                  <input  type="text" class="form-control" placeholder="0123456789">
              </div>
              <div class="form-group d-flex justify-content-end mt-4">
                  <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
              </div>
          </form>
          <p class="text-center">Bắt đầu một cuộc khởi đầu mới ngay nào !!</p>
         
      </div>
  </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-section">
    <div class="container">
       <div class="row justify-content-center pb-4">
           <div class="col-md-12 heading-section text-center ftco-animate">
               <span class="subheading">Bắt đầu học ngay hôm nay</span>
             <h2 class="mb-4">Danh mục khóa học trực tuyến</h2>
         </div>
     </div>
     <div class="row justify-content-center">
      <div class="col-md-3 col-lg-2">
         <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-1.jpg);">
            <div class="text w-100 text-center">
               <h3>CNTT &amp; Phần mềm</h3>
               <span>100 khóa</span>
           </div>
       </a>
   </div>
   <div class="col-md-3 col-lg-2">
     <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-9.jpg);">
        <div class="text w-100 text-center">
           <h3>Âm nhạc</h3>
           <span>100 khóa</span>
       </div>
   </a>
 </div>
 <div class="col-md-3 col-lg-2">
     <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-3.jpg);">
        <div class="text w-100 text-center">
           <h3>Chụp ảnh</h3>
           <span>100 khóa</span>
       </div>
   </a>
 </div>
 <div class="col-md-3 col-lg-2">
     <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-5.jpg);">
        <div class="text w-100 text-center">
           <h3>Marketing</h3>
           <span>100 khóa</span>
       </div>
   </a>
 </div>
 <div class="col-md-3 col-lg-2">
     <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-8.jpg);">
        <div class="text w-100 text-center">
           <h3>Sức khỏe</h3>
           <span>100 khóa</span>
       </div>
   </a>
 </div>
 <div class="col-md-3 col-lg-2">
     <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/work-6.jpg);">
        <span class="text w-100 text-center">
           <h3>Trí tuệ nhân tạo</h3>
           <span>100 khóa</span>
       </span>
   </a>
 </div>
 <div class="col-md-12 text-center mt-5">
     <a href="#" class="btn btn-secondary">Xem tất cả khóa học</a>
 </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-section bg-light">
    <div class="container">
       <div class="row justify-content-center pb-4">
           <div class="col-md-12 heading-section text-center ftco-animate">
               <span class="subheading">Bắt đầu ngay hôm nay</span>
             <h2 class="mb-4">Lựa chọn khóa học </h2>
         </div>
     </div>
     <div class="row">
        <div class="col-md-4 ftco-animate">
           <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(./assets/images/work-1.jpg);">
                 <span class="price">Software</span>
             </a>
             <div class="text p-4">
                 <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                 <p class="advisor">Advisor <span>Tony Garret</span></p>
                 <ul class="d-flex justify-content-between">
                    <li><span class="flaticon-shower"></span>2300</li>
                    <li class="price">$199</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 ftco-animate">
       <div class="project-wrap">
          <a href="#" class="img" style="background-image: url(./assets/images/work-2.jpg);">
             <span class="price">Software</span>
         </a>
         <div class="text p-4">
             <h3><a href="#">Design for the web with adobe photoshop</a></h3>
             <p class="advisor">Advisor <span>Tony Garret</span></p>
             <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>2300</li>
                <li class="price">$199</li>
            </ul>
        </div>
    </div>
 </div>
 <div class="col-md-4 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url(./assets/images/work-3.jpg);">
         <span class="price">Software</span>
     </a>
     <div class="text p-4">
         <h3><a href="#">Design for the web with adobe photoshop</a></h3>
         <p class="advisor">Advisor <span>Tony Garret</span></p>
         <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
 </div>
 </div>
 
 <div class="col-md-4 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url(./assets/images/work-4.jpg);">
         <span class="price">Software</span>
     </a>
     <div class="text p-4">
         <h3><a href="#">Design for the web with adobe photoshop</a></h3>
         <p class="advisor">Advisor <span>Tony Garret</span></p>
         <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
 </div>
 </div>
 <div class="col-md-4 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url(./assets/images/work-5.jpg);">
         <span class="price">Software</span>
     </a>
     <div class="text p-4">
         <h3><a href="#">Design for the web with adobe photoshop</a></h3>
         <p class="advisor">Advisor <span>Tony Garret</span></p>
         <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
 </div>
 </div>
 <div class="col-md-4 ftco-animate">
   <div class="project-wrap">
      <a href="#" class="img" style="background-image: url(./assets/images/work-6.jpg);">
         <span class="price">Software</span>
     </a>
     <div class="text p-4">
         <h3><a href="#">Design for the web with adobe photoshop</a></h3>
         <p class="advisor">Advisor <span>Tony Garret</span></p>
         <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(./assets/images/bg_4.jpg);">
  <div class="overlay"></div>
  <div class="container">
     <div class="row">
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 d-flex align-items-center">
             <div class="icon"><span class="flaticon-online"></span></div>
             <div class="text">
              <strong class="number" data-number="400">0</strong>
              <span>Online Courses</span>
          </div>
      </div>
  </div>
  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 d-flex align-items-center">
         <div class="icon"><span class="flaticon-graduated"></span></div>
         <div class="text">
          <strong class="number" data-number="4500">0</strong>
          <span>Students Enrolled</span>
      </div>
  </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex align-items-center">
     <div class="icon"><span class="flaticon-instructor"></span></div>
     <div class="text">
      <strong class="number" data-number="1200">0</strong>
      <span>Experts Instructors</span>
  </div>
 </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex align-items-center">
     <div class="icon"><span class="flaticon-tools"></span></div>
     <div class="text">
      <strong class="number" data-number="300">0</strong>
      <span>Hours Content</span>
  </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-section ftco-about img">
    <div class="container">
       <div class="row d-flex">
          <div class="col-md-12 about-intro">
             <div class="row">
                <div class="col-md-6 d-flex">
                   <div class="d-flex about-wrap">
                      <div class="img d-flex align-items-center justify-content-center" style="background-image:url(./assets/images/about-1.jpg);">
                      </div>
                      <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(./assets/images/about.jpg);">
                      </div>
                  </div>
              </div>
              <div class="col-md-6 pl-md-5 py-5">
               <div class="row justify-content-start pb-3">
                   <div class="col-md-12 heading-section ftco-animate">
                      <span class="subheading">Nâng cao kĩ năng của bạn</span>
                      <h2 class="mb-4">Học mọi thứ bạn muốn ngay hôm nay</h2>
                      <p>Mỗi khoảnh khắc học tập là một bước tiến quan trọng, định hình tương lai và xây dựng nền tảng vững chắc cho sự thành công. Đầu tư thời gian vào việc học là đầu tư vào bản thân và sự phát triển toàn diện từ những kiến thức cơ bản đến những kỹ năng phức tạp.</p>
                      <p><a href="#" class="btn btn-primary">Liên hệ với chúng tôi</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(./assets/images/bg_2.jpg);"></div>
    <div class="container">
     <div class="row pb-4">
       <div class="col-md-7 heading-section ftco-animate">
          <span class="subheading">Bằng chứng</span>
          <h2 class="mb-4">Học viên họ nói gì</h2>
      </div>
  </div>
 </div>
 <div class="container container-2">
     <div class="row ftco-animate">
       <div class="col-md-12">
         <div class="carousel-testimony owl-carousel">
           <div class="item">
             <div class="testimony-wrap py-4">
               <div class="text">
                 
                 <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                 <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(./assets/images/person_1.jpg)"></div>
                    <div class="pl-3">
                       <p class="name">Roger Scott</p>
                       <span class="position">Marketing Manager</span>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="item">
     <div class="testimony-wrap py-4">
       <div class="text">
         
         <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
         <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(./assets/images/person_2.jpg)"></div>
            <div class="pl-3">
               <p class="name">Roger Scott</p>
               <span class="position">Marketing Manager</span>
           </div>
       </div>
   </div>
 </div>
 </div>
 <div class="item">
     <div class="testimony-wrap py-4">
       <div class="text">
         
         <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
         <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(./assets/images/person_3.jpg)"></div>
            <div class="pl-3">
               <p class="name">Roger Scott</p>
               <span class="position">Marketing Manager</span>
           </div>
       </div>
   </div>
 </div>
 </div>
 <div class="item">
     <div class="testimony-wrap py-4">
       <div class="text">
         
         <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
         <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(./assets/images/person_1.jpg)"></div>
            <div class="pl-3">
               <p class="name">Roger Scott</p>
               <span class="position">Marketing Manager</span>
           </div>
       </div>
   </div>
 </div>
 </div>
 <div class="item">
     <div class="testimony-wrap py-4">
       <div class="text">
         
         <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
         <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(./assets/images/person_2.jpg)"></div>
            <div class="pl-3">
               <p class="name">Roger Scott</p>
               <span class="position">Marketing Manager</span>
           </div>
       </div>
   </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 
 <section class="ftco-intro ftco-section ftco-no-pb">
  <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-12 text-center">
           <div class="img"  style="background-image: url(./assets/images/bg_4.jpg);">
              <div class="overlay"></div>
              <h2>We Are StudyLab An Online Learning Center</h2>
              <p>We can manage your dream building A small river named Duden flows by their place</p>
              <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
          </div>
      </div>
  </div>
 </div>
 </section>
 
 <section class="ftco-section services-section">
   <div class="container">
     <div class="row d-flex">
       <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
          <div class="w-100 mb-4 mb-md-0">
             <span class="subheading">Welcome to StudyLab</span>
             <h2 class="mb-4">We Are StudyLab An Online Learning Center</h2>
             <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
             <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
             <div class="d-flex video-image align-items-center mt-md-4">
               <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(./assets/images/about.jpg);">
                  <span class="fa fa-play-circle"></span>
              </a>
              <h4 class="ml-4">Learn anything from StudyLab, Watch video</h4>
          </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="row">
         <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
           <div class="services">
             <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
             <div class="media-body">
               <h3 class="heading mb-3">Top Quality Content</h3>
               <p>A small river named Duden flows by their place and supplies</p>
           </div>
       </div>      
   </div>
   <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
       <div class="services">
         <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
         <div class="media-body">
           <h3 class="heading mb-3">Highly Skilled Instructor</h3>
           <p>A small river named Duden flows by their place and supplies</p>
       </div>
   </div>    
 </div>
 <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
   <div class="services">
     <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
     <div class="media-body">
       <h3 class="heading mb-3">World Class &amp; Quiz</h3>
       <p>A small river named Duden flows by their place and supplies</p>
   </div>
 </div>      
 </div>
 <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
   <div class="services">
     <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
     <div class="media-body">
       <h3 class="heading mb-3">Get Certified</h3>
       <p>A small river named Duden flows by their place and supplies</p>
   </div>
 </div>      
 </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 
 
 <section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
       <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Our Blog</span>
          <h2 class="mb-4">Recent Post</h2>
      </div>
  </div>
  <div class="row d-flex">
   <div class="col-lg-4 ftco-animate">
     <div class="blog-entry">
       <a href="blog-single.html" class="block-20" style="background-image: url('./assets/images/image_1.jpg');">
       </a>
       <div class="text d-block">
          <div class="meta">
           <p>
              <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
              <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
              <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
          </p>
      </div>
      <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
      <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
  </div>
 </div>
 </div>
 
 <div class="col-lg-4 ftco-animate">
     <div class="blog-entry">
       <a href="blog-single.html" class="block-20" style="background-image: url('./assets/images/image_2.jpg');">
       </a>
       <div class="text d-block">
          <div class="meta">
           <p>
              <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
              <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
              <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
          </p>
      </div>
      <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
      <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
  </div>
 </div>
 </div>
 <div class="col-lg-4 ftco-animate">
     <div class="blog-entry">
       <a href="blog-single.html" class="block-20" style="background-image: url('./assets/images/image_3.jpg');">
       </a>
       <div class="text d-block">
          <div class="meta">
           <p>
              <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
              <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
              <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
          </p>
      </div>
      <h3 class="heading"><a href="#">I'm not creative, Should I take this course?</a></h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...</p>
      <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
  </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 
@endsection