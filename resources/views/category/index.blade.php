        @include('layout.header')
        @include('layout.menu')

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row">
                    <!-- Table -->
                        <table id="table-category" class="display wrap table-sm" style="width:100%">
                            <thead>
                                <tr style="font-size: 90%;">
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr style="font-size: 90%;">
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{  $item->updated_at }}</td>
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
            new DataTable('#table-category', {
                responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                }
            });
        </script>