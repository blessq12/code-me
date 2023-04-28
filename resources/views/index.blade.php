@extends('components.front-layout')
@section('content')
<div class="hero-wrap js-fullheight img" style="background-image: url(/assets/images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-center">
          <div class="col-md-10 text-center d-flex align-items-center  js-fullheight">
              <div class="text mt-5">
                  <span class="subheading">Программирование под задачи</span>
              <h1 class="mb-3">Решения для масштабирования бизнеса</h1>
              <p>Get best speed for your website. Don't lose more clients</p>
              <p><a href="#" class="btn btn-secondary px-4 py-3">Get Started Now</a></p>
            </div>
          </div>
          </div>
    </div>
  </div>
  
  {{-- <section class="ftco-domain">
      <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
              <div class="col-lg-10 p-5 ftco-wrap ">
                  <form action="#" class="domain-form d-flex mb-3">
            <div class="form-group domain-name">
              <input type="text" class="form-control name px-4" placeholder="Enter your domain name...">
            </div>
            <div class="form-group domain-select d-flex">
                <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                    <option value="">.com</option>
                  <option value="">.net</option>
                  <option value="">.biz</option>
                  <option value="">.co</option>
                  <option value="">.me</option>
                </select>
              </div>
              <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
              </div>
          </form>
          <p class="domain-price mt-2 text-center">
              <span><small>.com</small> $9.75</span> 
              <span><small>.net</small> $9.50</span> 
              <span><small>.biz</small> $8.95</span> 
              <span><small>.co</small> $7.80</span>
              <span><small>.me</small> $7.95</span>
          </p>
              </div>
          </div>
      </div>
  </section> --}}

  <section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-12 owl-carousel technologies">
                  <div class="item">
                      <object data="{{ asset('/assets/icons/php.svg') }}" type=""></object>
                  </div>
                  <div class="item">
                      <object data="{{ asset('/assets/icons/laravel.svg') }}" type=""></object>
                  </div>
                  <div class="item">
                    <object data="{{ asset('/assets/icons/css.svg') }}" type=""></object>
                  </div>
                  <div class="item">
                    <object data="{{ asset('/assets/icons/html.svg') }}" type=""></object>
                  </div>
                  <div class="item">
                    <object data="{{ asset('/assets/icons/jquery.svg') }}" type=""></object>
                  </div>
                  <div class="item">
                    <object data="{{ asset('/assets/icons/javascript.svg') }}" type=""></object>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section">
          <h2 class="mb-4">Why You Should Choose Us</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex align-self-stretch ">
          <div class="media block-6 services d-flex align-items-start">
              <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-cloud"></span>
              </div>
            <div class="media-body pl-4">
              <h3 class="heading">Super Fast Server</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-lg-4 d-flex align-self-stretch ">
          <div class="media block-6 services d-flex align-items-start">
              <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-server"></span>
              </div>
            <div class="media-body pl-4">
              <h3 class="heading">Daily Backups</h3>
              <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-lg-4 d-flex align-self-stretch ">
          <div class="media block-6 services d-flex align-items-start">
              <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-customer-service"></span>
              </div>
            <div class="media-body pl-4">
              <h3 class="heading">Technical Services</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5 pb-0">
      <div class="container">
          <div class="row d-flex">
              <div class="col-lg-6 order-lg-last d-flex">
                  <div class="bg-primary py-md-5 d-flex align-self-stretch">
                      <div class="main">
                          <img src="/assets/images/undraw_data_report_bi6l.svg" class="img-fluid svg" alt="">
                          <div class="heading-section heading-section-white  mt-5 px-3 px-md-5">
                      <h2 class="mb-4">Our Main Services</h2>
                      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
              </div>
              <div class="col-lg-6 py-5">
                  <div class="row pt-md-5">
                      <div class="col-md-6 ">
                          <div class="media block-6 services text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-cloud-computing"></span>
                      </div>
                    <div class="mt-3 media-body media-body-2">
                      <h3 class="heading">Cloud VPS</h3>
                      <p>Even the all-powerful Pointing has no control about the blind texts</p>
                    </div>
                  </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="media block-6 services text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-cloud"></span>
                      </div>
                    <div class="mt-3 media-body media-body-2">
                      <h3 class="heading">Share</h3>
                      <p>Even the all-powerful Pointing has no control about the blind texts</p>
                    </div>
                  </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="media block-6 services text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-server"></span>
                      </div>
                    <div class="mt-3 media-body media-body-2">
                      <h3 class="heading">VPS</h3>
                      <p>Even the all-powerful Pointing has no control about the blind texts</p>
                    </div>
                  </div>
                      </div>
                      <div class="col-md-6 ">
                          <div class="media block-6 services text-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-database"></span>
                      </div>
                    <div class="mt-3 media-body media-body-2">
                      <h3 class="heading">Dedicated</h3>
                      <p>Even the all-powerful Pointing has no control about the blind texts</p>
                    </div>
                  </div>
                      </div>
                  </div>
        </div>
          </div>
      </div>
  </section>

  <section class="py-5 bg-primary">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section heading-section-white ">
          <h2 class="mb-4">Our Best Pricing</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
        </div>
      </div>
          <div class="row no-gutters d-flex">
          <div class="col-lg-3 col-md-6  d-flex">
            <div class="block-7 bg-light d-flex align-self-stretch">
              <div class="text-center">
                  <h2 class="heading">Free</h2>
                  <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>
                  <span class="excerpt d-block">100% free. Forever</span>
                  <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                  
                  <ul class="pricing-text mb-4">
                    <li><strong>150 GB</strong> Bandwidth</li>
                    <li><strong>100 GB</strong> Storage</li>
                    <li><strong>$1.00 / GB</strong> Overages</li>
                    <li>All features</li>
                  </ul>
                  <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6  d-flex">
            <div class="block-7 d-flex align-self-stretch">
              <div class="text-center">
                  <h2 class="heading">Startup</h2>
                  <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
                  <span class="excerpt d-block">All features are included</span>
                  <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                  
                  <ul class="pricing-text mb-4">
                    <li><strong>450 GB</strong> Bandwidth</li>
                    <li><strong>400 GB</strong> Storage</li>
                    <li><strong>$2.00 / GB</strong> Overages</li>
                    <li>All features</li>
                  </ul>
                  <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6  d-flex">
            <div class="block-7 active d-flex align-self-stretch">
              <div class="text-center">
                  <h2 class="heading">Premium</h2>
                  <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
                  <span class="excerpt d-block">All features are included</span>
                  <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                  
                  <ul class="pricing-text mb-4">
                    <li><strong>250 GB</strong> Bandwidth</li>
                    <li><strong>200 GB</strong> Storage</li>
                    <li><strong>$5.00 / GB</strong> Overages</li>
                    <li>All features</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6  d-flex">
            <div class="block-7 d-flex align-self-stretch">
              <div class="text-center">
                  <h2 class="heading">Pro</h2>
                  <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
                  <span class="excerpt d-block">All features are included</span>
                  <h3 class="heading-2 mb-3">Enjoy All The Features</h3>
                  
                  <ul class="pricing-text mb-4">
                    <li><strong>450 GB</strong> Bandwidth</li>
                    <li><strong>400 GB</strong> Storage</li>
                    <li><strong>$20.00 / GB</strong> Overages</li>
                    <li>All features</li>
                  </ul>
                    <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="py-5 testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ">
          <h2 class="mb-4">Our satisfied customer says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(/assets/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Web</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(/assets/images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Web</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(/assets/images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Web</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(/assets/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Web</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(/assets/images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Web</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ">
          <h2>Recent Blog</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('/assets/images/image_1.jpg');">
            </a>
            <div class="text text-center py-3">
              <div class="meta mb-2">
                <div><a href="#">Aug 5, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="blog-entry" data-aos-delay="100">
            <a href="blog-single.html" class="block-20" style="background-image: url('/assets/images/image_2.jpg');">
            </a>
            <div class="text text-center py-3">
              <div class="meta mb-2">
                <div><a href="#">Aug 5, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="blog-entry" data-aos-delay="200">
            <a href="blog-single.html" class="block-20" style="background-image: url('/assets/images/image_3.jpg');">
            </a>
            <div class="text text-center py-3">
              <div class="meta mb-2">
                <div><a href="#">Aug 5, 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <div class="desc">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection