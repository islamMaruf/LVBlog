<section class="post-area">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="single-post-item">
                <div class="post-thumb">
                    <img class="img-fluid" src="{{ asset('asset/frontend') }}/img/archive/c1.jpg" alt="">
                </div>
                <div class="post-details">
                    <h4><a href="#">An Stormy Evening</a></h4>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
                        exciting to think about setting up your own viewing station.</p>
                    <div class="blog-meta">
                        <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March 14, 2018</a>
                        <a href="#" class="m-gap"><span class="lnr lnr-bubble"></span>05</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
           @include('frontend.partials.main-body.post-list.pagination')
        </div>
    </div>
</section>
