@extends('product::index')
@section('content')
    @include('product::flashMessages')
    @yield('flashError')
    @yield('flashSuccess')

    <form action="{{url('product/update/'.$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <input name="title" type="text" class="form-control" value="{{$product->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_descriptions" class="form-control" id="exampleFormControlTextarea1" rows="3">
                {{$product->short_descriptions}}
            </textarea>
        </div>

        <label class="form-label">Select Active Status</label>
        <select name="active_status" class="form-select" aria-label="Default select example">
                <option {{ $product->active_status == 1 ? 'selected' : '' }} value="1">Activate</option>
                <option {{ $product->active_status == 0 ? 'selected' : '' }} value="0">Deactivate</option>

        </select>

        <div class="modal-footer">
            <a href="{{route('product-list')}}" class="btn btn-secondary" type="button">
                Back
            </a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection


