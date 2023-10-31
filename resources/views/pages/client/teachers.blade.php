@extends('layouts.clients.client')
@section('title')
    Giao vien
@endsection

@section('content')
<section id="teachers-page" class="pt-40 pb-120 gray-bg">
    <div class="container container-edit">
       <div class="row">
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-1.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>MarkMark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-2.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>David card </h6></a>
                        <span>Pro chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
           <div class="col-lg-3 col-sm-6">
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
           <div class="col-lg-3 col-sm-6">
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
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-5.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>David card </h6></a>
                        <span>Pro chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-6.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>Mark alen</h6></a>
                        <span>Vice chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-7.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>Rebeka alig</h6></a>
                        <span>Pro chencelor</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
           <div class="col-lg-3 col-sm-6">
               <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('client/images/teachers/t-8.jpg')}}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href={{ route('teachers.teacherDetail') }}><h6>Hanna bein</h6></a>
                        <span>Aerobics head</span>
                    </div>
                </div> <!-- singel teachers -->
           </div>
       </div> <!-- row -->
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
                </nav>  <!-- courses pagination -->
            </div>
        </div>  <!-- row -->
    </div> <!--  container-edit -->
</section>
@endsection