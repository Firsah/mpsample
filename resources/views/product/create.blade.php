        @include('layout.header')
        @include('layout.menu')

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-2">
                <div class="row">
                    <div class="header mb-5">
                        <h2> Add New Product</h2>
                    </div>
                    <form action="{{ route('productController-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <label for="">Category Product</label>
                            <select class="form-select mt-3" name="category_id" aria-label="">
                                <option selected>-- pilih category --</option>
                                @foreach ($dataCategory as $dc)
                                    <option value="{{ $dc->id }}">{{ $dc->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">Name Product</label>
                            <input class="form-control mt-3" name="product_name" type="text" placeholder="Input Name Product">
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Price</label>
                                <input class="form-control mt-3" name="price" type="number" placeholder="Input Prace">
                            </div>
                            <div class="col-md-6">
                                 <label for="">Stok</label>
                                <input class="form-control mt-3" name="stok" type="number" placeholder="Input Stok">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="">Weight/Gram</label>
                            <input class="form-control mt-3" name="weight" type="number" placeholder="Input Weight">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="">Image Product</label>
                            <input class="form-control mt-3" type="file" name="image" id="formFile">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="">Description </label>
                            <textarea class="form-control mt-3" name="description" id="" cols="30" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @include('layout.footer')

        <script>
            new DataTable('#table-category', {
                responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                }
            });
        </script>