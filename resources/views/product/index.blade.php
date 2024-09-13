@include('layout.header')
@include('layout.menu')

<!-- Section-->
<section class="py-5">            
    <div class="container px-4 px-lg-5 mt-3">
        <div class="row mb-5">
            <div class="col">
                <a href="{{ route('productController-create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah Product</a>
            </div>
        </div>

        <div class="row ">
            <!-- Table -->
                <table id="table-produkList" class="display wrap table-sm" style="width:100%">
                    <thead>
                        <tr style="font-size: 90%;">
                            <th>No</th>
                            <th style="width:13%;text-align: center;">Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stok</th>
                            <th>Weight</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $d)
                            <tr style="font-size: 90%;">
                                <td>{{ $no++ }}</td>
                                <td style="width:13%;text-align: center;">
                                    @if ($d->imageProduct->isNotEmpty())
                                        <img src="{{ asset('storage/images/' . $d->imageProduct->first()->image) }}" alt="Product Image" style="width: 150px; height: auto;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $d->product_name }}</td>
                                <td>{{ $d->price }}</td>
                                <td>{{ $d->stok }}</td>
                                <td>{{ $d->weight }}</td>
                                <td>{{ $d->category->category_name }}</td>
                                <td>{{ $d->description }}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-success btn-sm">Detail</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /Table -->
        </div>
    </div>
</section>
@include('layout.footer')

<script>
    new DataTable('#table-produkList', {
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        }
    });
</script>