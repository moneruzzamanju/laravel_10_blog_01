<!DOCTYPE html>
<html lang="en">

  <head>
    @include('frontend.includes._head')
  </head>

  <body>

    <!-- Header -->
    @include('frontend.includes._nav')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @yield('banner')
    <!-- Banner Ends Here -->

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @yield('content')
              </div>
            </div>
          </div>
          @include('frontend.includes._right-sidebar')
        </div>
      </div>
    </section>

    
    @include('frontend.includes._footer')
    @include('frontend.includes._scripts')

   

  </body>
</html>