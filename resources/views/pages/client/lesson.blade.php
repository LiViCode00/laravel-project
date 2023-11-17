@extends('layouts.clients.client')
@section('title')
    Chi tiết các tiết học
@endsection

@section('content')
<section id="corses-singel" class="pt-40 pb-120">
    <div class="title mt-50">
         <h3 class="lesson-course p-4"><a href="" class="pr-3">></a>Tên khóa học</h3>
    </div> 
    <div class="container container-edit">
        <div class="row">

            <div class="col-lg-8 lesson-frame mt-80 ">
                <iframe  src="https://www.youtube.com/embed/nXABbT68y3A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-4">
                <div class="corses-singel-left mt-30 p-0">
                    <div class="corses-tab mt-30">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active show" id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false" style="border-top-right-radius: 20px; border-top-left-radius: 20px;" >Curriculam</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content content-edit" id="myTabContent">
                            <div class="tab-pane fade  show active" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                <div class="curriculam-cont">
                                    <div class="accordion" id="accordionExample">

                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.1</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                            <div class="card-header" id="headingTow">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.2</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>

                                            <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.3</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingFore">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.4</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.5</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                            <div class="card-header" id="headingSix">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.6</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card">
                                            <div class="card-header" id="headingSeven">
                                                <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture 1.7</span></li>
                                                        <li><span class="head">What is javascirpt</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies luctus augue, eget maximus felis laoreet quis. Maecenasbibendum tempor eros.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- curriculam cont -->
                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                <div class="instructor-cont">
                                    <div class="instructor-author">
                                        <div class="author-thum">
                                            <img src="" alt="Instructor">
                                        </div>
                                        <div class="author-name">
                                            <a href="#"><h5>ten giao vien</h5></a>
                                            <span>Senior WordPress Developer</span>
                                            <ul class="social">
                                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="instructor-description pt-25">
                                      agdsafadsfas
                                    </div>
                                </div> <!-- instructor cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div>
                </div> <!-- corses singel left -->
                
            </div>

        </div> <!-- row -->
       
    </div> <!-- container container-edit -->
</section>
@endsection


