@extends('layouts.clients.client')
@section('title')
    Khóa học online
@endsection

@section('content')
    <section id="courses-part" class="pt-70 pb-60">
        <div class="container container-edit">
            <div class="row ">
                <div class="col-lg-12 pt-5 ">
                    <div class="courses-top-search d-flex justify-content-between align-items-center">
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
                            <div class="d-flex justify-content-between align-items-center">
                                <li class="nav-item">Hiển thị {{$count}} kết quả </li>
                            </div>
                        </ul> <!-- nav -->

                        <div class="courses-search float-right d-inline pb-3 ">
                            <form action="#" >
                                <input type="text" placeholder="Search" class="p-3">
                                <button type="button" class="fa fa-search align-middle""></button>
                            </form>
                        </div> <!-- courses search -->
                    </div> <!-- courses top search -->
                </div>
            </div>
             <!-- row -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                        <div class="row">

                        @foreach ($courses as $course)
                        <div class="col-lg-3 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                       <a href="{{ route('courses.courseDetail',  ['id' => $course->id]) }}" style="width: 100%; height: 100%;"> <img src="/{{$course->image_path }}" alt="Course"></a>
                                    </div>
                                    <div class="price">
                                        @if($course->sale_price == 0)
                                            <span>Free</span>
                                        @else
                                            <span><del>{{ number_format($course->price, 0, '', '.') }} đ</del> {{ number_format($course->sale_price, 0, '', '.') }} đ</span>
                                        @endif
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
                                    <span>(20 Reviews)</span>
                                    <a href="{{ route('courses.courseDetail',  ['id' => $course->id]) }}">
                                        <h4>{{$course->name}}</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="{{ route('courses.courseDetail',  ['id' => $course->id]) }}">
                                                <img src="/{{$course->teacher_img }}" alt="teacher">
                                            </a>
                                        </div>
                                        <div class="name">
                                            <a href="#">
                                                <h6>{{$course->teacher_name}}</h6>
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
                        @endforeach
                    </div> <!-- row -->
                </div>
                <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">

                        @foreach ($courses as $course)
                        <div class="col-lg-12">
                            <div class="singel-course mt-30">
                                <div class="row no-gutters">
                                    <div class="col-md-3 mr-5">
                                        <div class="thum">
                                            <div class="image">
                                                <img src="/{{$course->image_path}}" alt="Course" style="height: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cont p-0">
                                             <a href="#">
                                                <h4 class="pt-0 pb-3">{{$course->name}} </h4>
                                            </a> <br>
                                            <ul class="mb-3">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>(20 Reviews)</span>
                                            <div class="price">
                                                @if($course->sale_price == 0)
                                                    <span>Free</span>
                                                @else
                                                    <span><del>{{ number_format($course->price, 0, '', '.') }} đ</del> {{ number_format($course->sale_price, 0, '', '.') }} đ</span>
                                                @endif
                                                </div>
                                            <div class="course-teacher">
                                                <div class="thum">
                                                    <a href="#"><img
                                                            src="/{{ $course->teacher_img }}"
                                                            alt="teacher"></a>
                                                </div>
                                                <div class="name pr-3 pt-2">
                                                    <a href="#" >
                                                        <h6>{{$course->teacher_name}}</h6>
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
                        @endforeach
                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="{{$courses->previousPageUrl()}}" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="{{ $courses->currentPage() == 1 ? 'active' : '' }}" href="{{$courses->url(1)}}">1</a></li>

                            @for ($i = 2; $i <= $courses->lastPage(); $i++)
                                <li class="page-item">
                                    <a href="{{ $courses->url($i) }}" class="{{ $courses->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item">
                                <a href="{{$courses->nextPageUrl()}}" aria-label="Next">
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


