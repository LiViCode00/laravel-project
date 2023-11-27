@extends('layouts.clients.client')
@section('title')
    Chi tiết các tiết học
@endsection

@section('content')
<section id="corses-singel" class="pt-40 pb-120">
    <div class="title mt-50">
         <h3 class="lesson-course p-4"><a href="" class="pr-3"></a>{{$course_name}}</h3>
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
                                <a class="active show" id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false" style="border-top-right-radius: 20px; border-top-left-radius: 20px;" >chương trình học</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content content-edit" id="myTabContent">
                            <div class="tab-pane fade  show active" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                <div class="curriculam-cont">
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($lessons as $lesson)
                                        <div class="card">
                                            <div class="card-header" id="heading-{{$lesson->id}}">
                                                <a href="" data-toggle="collapse" data-target="#collapse-{{$lesson->id}}" aria-expanded="true" aria-controls="collapse-{{$lesson->id}}">
                                                    <ul>
                                                        <li><i class="fa fa-file-o"></i></li>
                                                        <li><span class="lecture">Lecture {{$lesson->id}}.</span></li>
                                                        <li><span class="head">{{$lesson->name}}</span></li>
                                                        <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span>{{number_format($lesson->durations, 2, '.', '')}}</span></span></li>
                                                    </ul>
                                                </a>
                                            </div>

                                            <div id="collapse-{{$lesson->id}}" class="collapse" aria-labelledby="heading-{{$lesson->id}}" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>{{$lesson->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div> <!-- curriculam cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div>
                </div> <!-- corses singel left -->
                
            </div>

        </div> <!-- row -->
       
    </div> <!-- container container-edit -->
</section>
@endsection


