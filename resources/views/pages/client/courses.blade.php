@extends('layouts.clients.client')
@section('title')
    Khóa học online
@endsection

@section('content')
    <section id="courses-part" class="pt-40 pb-60 gray-bg">
        <div class="container container-edit">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid"
                                    role="tab" aria-controls="courses-grid" aria-selected="true"><i
                                        class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab"
                                    aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li>
                            <li class="nav-item">Showning 4 0f 24 Results</li>
                        </ul> <!-- nav -->

                        <div class="courses-search float-right">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- courses search -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-1.jpg') }}" alt="Course">
                                    </div>
                                    <div class="price">
                                        <span>1.500.000d</span>
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img src="{{ asset('client/images/course/teacher/t-1.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-2.jpg') }}" alt="Course">
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img src="{{ asset('client/images/course/teacher/t-2.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-3.jpg') }}" alt="Course">
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img
                                                    src="{{ asset('client/images/course/teacher/t-3.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-4.jpg') }}" alt="Course">
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img
                                                    src="{{ asset('client/images/course/teacher/t-4.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-5.jpg') }}" alt="Course">
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img
                                                    src="{{ asset('client/images/course/teacher/t-5.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('client/images/course/cu-1.jpg') }}" alt="Course">
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
                                    <a href={{ route('courses.courseDetail') }}>
                                        <h4>Learn basis javascirpt from start for beginner</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="#"><img
                                                    src="{{ asset('client/images/course/teacher/t-1.jpg') }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>Mark anthem</h6>
                                            </a>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('client/images/course/cu-1.jpg') }}" alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('client/images/course/teacher/t-1.jpg') }}"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('client/images/course/cu-2.jpg') }}" alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('client/images/course/teacher/t-2.jpg') }}"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('client/images/course/cu-3.jpg') }}" alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('client/images/course/teacher/t-3.jpg') }}"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="{{ asset('client/images/course/cu-4.jpg') }}" alt="Course">
                                            </div>
                                            <div class="price">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviws)</span>
                                            <a href="#">
                                                <h4>Learn basis javascirpt from start for beginner</h4>
                                            </a>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="{{ asset('client/images/course/teacher/t-4.jpg') }}"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name">
                                                    <a href="#">
                                                        <h6>Mark anthem</h6>
                                                    </a>
                                                </div>
                                                <div class="admin">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="fa fa-user"></i><span>31</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-heart"></i><span>10</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--  row  -->
                            </div> <!-- singel course -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- courses pagination -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
