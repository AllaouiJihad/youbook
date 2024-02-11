@extends('layouts/main')
@section('content')
{{-- books disponibles --}}




    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
    
          <div class="section-header">
            <h2>Books</h2>
          </div>
          @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
    
          <div class="portfolio-isotope" >
    
           
    
            <div class="row gy-4 portfolio-container">
                @if ($books_disponible)

                @foreach ($books_disponible as $book)
              <div class="col-xl-4 col-md-6 portfolio-item filter-app" >
                <div class="portfolio-wrap" >
                  <a href="assets/img/portfolio/app-1.jpg"  data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('images/1.jpg')}}" class="img-fluid" alt="" style="height: 400px; width:450px"></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">{{$book->title}}</a></h4>
                    <p>{{$book->author}}</p>
                  </div>
                  <div class="d-flex justify-content-around ">


                  <form action="{{ route('reserve.book', $book->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-dark"><i class="fa-solid fa-store"></i></button>
                </form>
                @php
                $user = session('user');
                @endphp
                @if($user->id_role == 1)
                <a href="{{route('books.edit',  $book->id)}}"><i class="fa-solid fa-pen-nib" style="color: #72a5fd;"></i></a>

                  <form action="{{ route("books.destroy", $book->id) }}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button class="border-none"  type="submit"><i class="fa-regular fa-trash-can" style="color: #f97da5;"></i></button>
                  </form>
                  @endif
                </div>
                </div>
              </div><!-- End Portfolio Item -->
    
              @endforeach
              @endif
              
    
            
    
            </div><!-- End Portfolio Container -->
    
          </div>
    
        </div>
      </section><!-- End Portfolio Section -->
    


@endsection