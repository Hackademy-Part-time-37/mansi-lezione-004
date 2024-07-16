 <x-main>
     <section class="py-5">
         <div class="container px-5 my-5">
             <div class="row gx-5 justify-content-center">
                 <div class="col-lg-8 col-xl-6">
                     <div class="text-center">
                         <h2 class="fw-bolder">From our blog</h2>
                         <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur
                             adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                     </div>
                 </div>
             </div>
             <div class="row gx-5">
                 @foreach ($articles as $article)
                     <x-card :ciao="$article" :stringa="'ciao'" />
                 @endforeach
             </div>
             <!-- Call to action-->
             <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                 <div
                     class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                     <div class="mb-4 mb-xl-0">
                         <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                         <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                     </div>
                     <div class="ms-xl-4">
                         <div class="input-group mb-2">
                             <input class="form-control" type="text" placeholder="Email address..."
                                 aria-label="Email address..." aria-describedby="button-newsletter" />
                             <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign
                                 up</button>
                         </div>
                         <div class="small text-white-50">We care about privacy, and will never share your data.
                         </div>
                     </div>
                 </div>
             </aside>
         </div>
     </section>
 </x-main>
