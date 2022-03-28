<style>
   .img{
        position: relative;
        animation-name: anim;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }
    @keyframes anim {

    0% {
       top:0;
       left:0;
    }
    50%  {
       top:95px;
       left:0;
       opacity: 0.5;
    }
    100%  {
       top:-25;
       left:0;
    }

}


</style>
<!-- Portfolio Section-->
    <section class="page-section bg-success portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-light mb-0">{{$dev->name}}</h2>
            <br>
            <h2 class="page-section-heading text-center text-uppercase text-warning mb-0 profession">{{$dev->profession}}</h2>
            <br/>
            <h4 class="text-center text-lowercace text-light mb-0 animation">{{$dev->short_description}}</h4>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row">
                <div class="col-lg-12 text-center fly-in-up" >
                    <img  src="{{asset('upload/user_images/'.$dev->image)}}" width="500px" height="500px" class="rounded-circle img" alt="Cinque Terre">
                </div>
            </div>
       </div>
    {{-- end container --}}
    </section>



