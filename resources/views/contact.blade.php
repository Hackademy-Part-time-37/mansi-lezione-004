<x-main>
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">Get in touch</h1>
            <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <form action="{{ route('send') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" name="fullname" type="text" placeholder="Enter your name..."
                            value="{{ old('fullname') }}">
                        <label for="fullname">Full name</label>

                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" value="{{ old('email') }}" name="email" type="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>

                    </div>

                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..."
                            style="height: 10rem">ciccio</textarea>
                        <label for="message">Message</label>
                    </div>



                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg " type="submit">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
