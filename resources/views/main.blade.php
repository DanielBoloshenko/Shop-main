@extends('layouts.app')

@section('content')

<style>
    #Video {
    width: 100%;
    min-width: 100%;
    max-height: 50%;
    justify-content: center;
}

</style>

<div class="container" style="max-width:1296px;">
    <video  class="rounded " autoplay muted loop id="Video" style="border: radius 20px;">
        <source  src="{{asset('video/preview.mp4')}}" type="video/mp4">
     </video>
</div> 

<div class="container" id="aboutUs">
    <h1 class="d-flex justify-content-center mt-5 mb-5">О компании</h1>
</div>

<div class="container">
    <section class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
          <div class="col-md-6 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{ asset('img/office.jpeg') }}" class="img-fluid" />
              
            </div>
          </div>
  
          <div class="col-md-6 mb-4">
            <h4><strong>Lorem ipsum dolor sit amet</strong></h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <button type="button" class="btn btn-dark">Подробнее</button>
          </div>
        </div>
      </section>
</div>

<div class="container">
    <h1 class="d-flex justify-content-center mt-5 mb-4">Новости</h1>
</div>

<div class="container">
    <section>
        <div class="row gx-lg-5">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div>

              <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                <a href="#!"><img src="{{ asset('img/news2.webp') }}" class="img-fluid"></a>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
  
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-info">
                    Technology
                  </a>
                </div>
  
                <div class="col-6 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>
  
              <a href="" class="text-dark text-decoration-none">
                <h5>This is title of the news</h5>
  
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>
  
              <hr />
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news3.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news2.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>

          </div>
  
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div>

              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <a href="#!"><img src="{{ asset('img/news.webp') }}" class="img-fluid"></a>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
  
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-danger">
                    Business
                  </a>
                </div>
  
                <div class="col-6 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>
  
              <a href="" class="text-dark text-decoration-none">
                <h5>This is title of the news</h5>
  
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>
  
              <hr />
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news3.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news2.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news3.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>

          </div>
  
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div>

              <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                <a href="#!"><img src="{{ asset('img/news3.webp') }}" class="img-fluid"></a>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
  
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="text-info">
                    Technology
                  </a>
                </div>
  
                <div class="col-6 text-end">
                  <u> 15.07.2020</u>
                </div>
              </div>
  
              <a href="" class="text-dark text-decoration-none">
                <h5>This is title of the news</h5>
  
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                  id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                  adipisci iusto nam temporibus modi animi laboriosam?
                </p>
              </a>
  
              <hr />
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news2.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news3.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
  
              <a href="" class="text-dark text-decoration-none">
                <div class="row mb-4 border-bottom pb-2">
                  <div class="col-3">
                    <img src="{{ asset('img/news.webp') }}"
                         class="img-fluid shadow-1-strong rounded" alt="" />
                  </div>
  
                  <div class="col-9">
                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                    <p>
                      <u> 15.07.2020</u>
                    </p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
    </section>
</div>

@endsection
