@extends('product::index')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-6">
                <a href="{{route('product-create')}}" class="btn btn-primary" type="button">
                    Add New Product
                </a>

            </div>
        </div>
        <br>
    @include('product::flashMessages')
    @yield('flashError')
    @yield('flashSuccess')
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Product name</th>
                            <th>Short Description</th>
                            <th>Active Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($products) > 0 )
                            @foreach($products as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{ $item->title }} </th>
                                    <th>{{ $item->short_descriptions }}</th>
                                    <th>
                                        <?php
                                        $status = $item->active_status == true ? 'active' : 'not active'
                                        ?>
                                        {{ $status }}
                                    </th>
                                    <th>
                                        <a title="Edit" class="btn btn-sm btn-primary"
                                           href="{{ route('product-edit', $item->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

{{--                                        <a title="Details" class="btn btn-sm btn-primary"--}}
{{--                                           href="{{ route('product-details', $item->id) }}">--}}
{{--                                            <i class="fas fa-info-circle" title="{{__('design.DETAILS')}}"></i>--}}
{{--                                        </a>--}}

                                        <a
                                            data-trash-id="{{ $item->id }}"
                                            class="btn btn-sm btn-danger trash-record"
                                            href="">
                                            <i class="fa fa-trash" title="Soft Delete"></i>
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        {{$products->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <form id="trash-form" action="{{route('trash-product')}}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" id="record_id" name="record_id" value="">
    </form>
@endsection
@section('footer')
    <script>
        function submitTrashForm() {
            $(document).on('click', '.trash-record', function () {
                if (confirm("Are you sure want to delete this item") == true) {
                    record_id = $(this).attr('data-trash-id');
                    form = $('#trash-form');
                    $("#record_id").val(record_id);
                    $(form).submit()
                }
                return false
            });
        }

        submitTrashForm();
    </script>
@endsection
@section('head')
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
@endsection


