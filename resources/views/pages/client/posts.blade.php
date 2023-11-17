@extends('layouts.clients.client')
@section('title')
Các bài viết
@endsection
@section('content')
<section id="blog-page" class="pt-40 pb-120">
    <div class="container container-edit">
       <div class="row">


           <div class="col-lg-8">
               <div class="singel-blog mt-80 row">  
                   <div class="blog-cont col-md-8">
                       <a href="{{ route('posts.postDetail') }}"><h3>Few tips for get better results in examination</h3></a>
                       <ul>
                           <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                           <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                           <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                       </ul>
                       <p>@truncate("Lorem gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus", 120, '...')</p>
                       <span class="categories-post-tag mt-3">dfasdfasdfasd</span>
                   </div>
                   <div class="blog-thum col-md-4 pr-6 d-flex align-items-center justify-content-center">
                       <img src="{{asset('client/images/blog/b-1.jpg')}}" alt="Blog">
                   </div>
               </div> <!-- singel blog -->


               <div class="singel-blog mt-30">
                   <div class="blog-thum">
                       <img src="{{asset('client/images/blog/b-2.jpg')}}" alt="Blog">
                   </div>
                   <div class="blog-cont">
                       <a href={{ route('posts.postDetail') }}><h3>Few tips for get better results in examination</h3></a>
                       <ul>
                           <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                           <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                           <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                       </ul>
                       <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       <p>dfasdfasdfasd</p>
                   </div>
               </div> <!-- singel blog -->
               <nav class="courses-pagination mt-50">
                    <ul class="pagination d-flex justify-content-lg-end justify-content-center">
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
           <div class="col-lg-4 mt-50">
               <div class="saidbar">
                   <div class="row ml-4">
                       <div class="col-lg-12 col-md-6 ">
                           <div class="categories mt-30 ">
                               <h4  class="d-flex align-items-center justify-content-center">Categories</h4>
                               <ul>
                                   <li><a href="#">Fronted</a></li>
                                   <li><a href="#">Backend</a></li>
                                   <li><a href="#">Photography</a></li>
                                   <li><a href="#">Teachnology</a></li>
                                   <li><a href="#">GMET</a></li>
                                   <li><a href="#">Language</a></li>
                                   <li><a href="#">Science</a></li>
                                   <li><a href="#">Accounting</a></li>
                               </ul>
                           </div>
                       </div> <!-- categories -->
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post mt-30">
                               <h4 class="d-flex align-items-center justify-content-center">Popular Posts</h4>
                               <ul>
                                   <li>
                                        <a href="#">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('client/images/blog/blog-post/bp-1.jpg')}}" alt="Blog">
                                               </div>
                                               <div class="cont">
                                                   <h6>Introduction to languages</h6>
                                                   <span>20 Dec 2018</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('client/images/blog/blog-post/bp-2.jpg')}}" alt="Blog">
                                               </div>
                                               <div class="cont">
                                                   <h6>How to build a game with java</h6>
                                                   <span>10 Dec 2018</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('client/images/blog/blog-post/bp-1.jpg')}}" alt="Blog">
                                               </div>
                                               <div class="cont">
                                                   <h6>Basic accounting from primary</h6>
                                                   <span>07 Dec 2018</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                               </ul>
                           </div> <!-- saidbar post -->
                       </div>
                   </div> <!-- row -->
               </div> <!-- saidbar -->
           </div>
       </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection