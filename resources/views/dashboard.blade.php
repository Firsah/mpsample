        @include('layout.header')
        @include('layout.menu')
        <!-- Header-->
        <header class="bg-dark py-3">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Semua Ada Disini!!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Dengan Harga Seduluran</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-stert">
                    @foreach ($data as $d)
                        <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('storage/images/' . $d->imageProduct->first()->image) }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $d->product_name }}</h5>
                                    <!-- Product price-->
                                    Rp. {{ number_format($d->price) }}/<span class=" text-secondary">{{ $d->stok }}</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex flex-col gap-2 m-auto">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add Chart</a></div>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('checkout-detail',$d->id) }}">Detail</a></div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach

                </div>
            </div>
        </section>
        @include('layout.footer')
       