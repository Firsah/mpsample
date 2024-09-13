    @include('layout.header')
    @include('layout.menu')
    <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-4"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/images/'. $data->imageProduct->first()->image) }}" alt="Product Image" /></div>
                    <div class="col-md-6">
                        <h1 class=" fw-bolder">{{ $data->product_name }}</h1>
                        <div class="fs-5 mb-3">
                            <span class=" display-5">Rp.{{ number_format($data->price) }}</span>/<span>Stok : {{ $data->stok }} pcs</span> 
                        </div>
                        <div class="small mb-4">Category : {{ $data->category->category_name }}, Berat : {{ $data->weight }} Gram</div>
                        <p class="lead"> {{ $data->description }} </p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-bag-check-fill"></i>
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Checkout --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Atur Pengiriman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <label class=" fw-bold">Cek Alamat</label>
                        </div>
                        <form action="{{ route('productController-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 mb-2">
                                <label for="">Province</label>
                                <select class="form-select mt-2" name="category_id" aria-label="">
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="">Distrik</label>
                                <select class="form-select mt-2" name="category_id" aria-label="">
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Full Address </label>
                                <textarea class="form-control mt-2" name="description" id="" cols="30" rows="2"></textarea>
                            </div>
                            <div class="row mt-2">
                                <label class=" fw-bold">Atur Pengiriman</label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="">Gudang</label>
                                <select class="form-select mt-2" name="category_id" aria-label="">
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label for="">Ekspedisi</label>
                                    <select class="form-select mt-2" name="category_id" aria-label=""></select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Paket</label>
                                    <select class="form-select mt-2" name="category_id" aria-label=""></select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class=" fw-bold">Metode Pembayaran</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">COD</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">NON COD</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <span style="font-weight:600;font-size:20px;">Total : Rp.250.000</span>
                        <button type="submit" class="btn btn-outline-dark">Gass Tuku <i class="bi bi-box-arrow-right"></i> </button>
                    </div>
                    </div>
                </div>
            </div>

        </section>
    @include('layout.footer')