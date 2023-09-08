@extends('product::index')
@section('content')
    @include('product::flashMessages')
    @yield('flashError')
    @yield('flashSuccess')

    <form action="{{route('product-store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Product Title</label>
        <input name="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Short Description</label>
        <textarea name="short_descriptions" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

        <select name="active_status" class="form-select" aria-label="Default select example">
            <option selected>Select Active Status</option>
            <option value="0">Deactivate</option>
            <option value="1">Activate</option>
        </select>


        <div class="modal-footer">
            <a href="{{route('product-list')}}" class="btn btn-secondary" type="button">
                Back
            </a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection


