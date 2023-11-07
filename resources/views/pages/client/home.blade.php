@extends('layouts.clients.client')
@section('title')
LiViCode - Học lập trình trực tuyến
@endsection
@section('content')


<body>
   
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(client/images/slider/s-1.jpg)" data-overlay="4">
            <div class="container container-edit">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">LiViCode - Học lập trình trực tuyến</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Mới ghé thăm LiViCode? Bạn thật may mắn!
                                Các khóa học có giá từ ₫ 279.000. Nhận ưu đãi học viên mới trước khi ưu đãi hết hạn.</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Học thử</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container container-edit -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover pt-150" style="background-image: url(client/images/slider/s-2.jpg)" data-overlay="4">
            <div class="container container-edit">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">LiViCode - Học lập trình trực tuyến</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">Tuyển tập khóa học rộng lớn - 
                                Lựa chọn trong số hơn 210000 khóa học video online với nhiều nội dung bổ sung mới được xuất bản hàng tháng</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Học thử</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Đăng ký</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container container-edit -->
        </div> <!-- single slider -->
        
       
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
 

   
    <!--====== COURSE PART START ======-->
    
    {{-- <section id="course-part" class="pt-60 pb-20 gray-bg">
        <div class="container container-edit">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-10">
                        <h3>Khóa học miễn phí</h3>
                        <a href="">Xem tất cả</a>
                      
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                    
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset($course->image_path)}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="{{ route('courses.courseDetail') }}"><h4> {{$course->name}}</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-1.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            @endforeach 
                
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-3.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-3.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                <!-- </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-4.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-4.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                <!-- </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-5.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-5.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container container-edit -->
    </section>
    <section id="course-part" class="pt-60 pb-20 gray-bg">
        <div class="container container-edit">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-10">
                        <h3>Khóa học Pro</h3>
                        <a href="">Xem tất cả</a>
                      
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row mt-30">
                
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-2.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-2.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-3.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-3.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-4.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-4.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('client/images/course/cu-5.jpg')}}" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href={{ route('courses.courseDetail') }}><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('client/images/course/teacher/t-5.jpg')}}" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container container-edit -->
    </section> --}}

  
    <!--====== COURSE PART ENDS ======-->

   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-70 pb-100">
        <div class="container container-edit">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-10">
                       
                        <h3>Giảng viên</h3>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Giảng viên tại LiviCode là những chuyên gia hàng đầu trong ngành công nghiệp công nghệ. Với nền tảng kiến thức sâu rộng và nhiều năm kinh nghiệm thực tế, họ đem đến cho học viên sự hướng dẫn chân thành và động lực mạnh mẽ để khám phá thế giới mã nguồn mở. <br> <br> Chúng tôi tự hào có đội ngũ giảng viên xuất sắc, luôn cống hiến hết mình để hỗ trợ sự phát triển của cộng đồng học viên trong hành trình khám phá lập trình.</p>
                        <br>
                        <br>
                        <h4>Bạn muốn trở thành giảng viên tại LiViCode?</h4>
                        <a style="margin-top: 60px" href="#" class="main-btn mt-55">Bắt đầu dạy học ngay hôm nay</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('client/images/teachers/t-1.jpg')}}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href={{ route('teachers.teacherDetail') }}><h6>Mark alen</h6></a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('client/images/teachers/t-2.jpg')}}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href={{ route('teachers.teacherDetail') }}><h6>David card</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('client/images/teachers/t-3.jpg')}}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href={{ route('teachers.teacherDetail') }}><h6>Rebeka alig</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('client/images/teachers/t-4.jpg')}}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href={{ route('teachers.teacherDetail') }}><h6>Hanna bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container container-edit -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
  

   
    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-60 pb-110 gray-bg">
        <div class="container container-edit">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                       
                        <h3>Bài viết nổi bật</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="{{asset('client/images/news/n-1.jpg')}}" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href={{ route('posts.postDetail') }}><h3>Tips to grade high cgpa in university life</h3></a>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{asset('client/images/news/ns-1.jpg')}}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href={{ route('posts.postDetail') }}><h3>Intellectual communication</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{asset('client/images/news/ns-2.jpg')}}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href={{ route('posts.postDetail') }}><h3>Study makes you perfect</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{asset('client/images/news/ns-3.jpg')}}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href={{ route('posts.postDetail') }}><h3>Technology edcution is now....</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container container-edit -->
    </section>
    
    <!--====== NEWS PART ENDS ======-->
   
 

    

</body>


    
@endsection