@extends('admin.layouts.app')

@section('content')
<!-- Page Title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Products</div>
    </div>
</div>
<!-- /Page Title -->

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="my-account-content account-order">
                    <div class="wrap-account-order">
                        <a href="#" class="btn btn-primary mb-2">Add Product</a>
                        <table id="datatable-products" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="fw-6">Title</th>
                                    <th class="fw-6">Price</th>
                                    <th class="fw-6">Discount</th>
                                    <th class="fw-6">Status</th>
                                    <th class="fw-6">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

@endsection

@section('page-scripts')
<script>
    $(document).ready(() => {
        $('#datatable-products').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.products.index') }}",
                type: 'GET', // Ensure the request type is specified
                data: function (d) {
                    d._token = "{{ csrf_token() }}"; // CSRF token for security
                }
            },
            columns: [
                { data: 'title', name: 'title' }, // Update column names according to your data
                { data: 'price', name: 'price' },
                { data: 'discount', name: 'discount' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            // Enable row selection and add class to <tr>
                searching: true,
                rowCallback: function(row, data) {
                $(row).addClass('tf-order-item'); // Add the class to the <tr>
                $(row).find('input[type="checkbox"]').on('change', function() {
                    const selectedCount = $('input[type="checkbox"]:checked').length;
                    $('#deleteButton').prop('disabled', selectedCount === 0);
                });
            }
        });

        $('#addButton').on('click', function () {

        });
    });
</script>
@endsection