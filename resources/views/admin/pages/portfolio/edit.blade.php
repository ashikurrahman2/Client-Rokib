<form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label>Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}">
    </div>
    <div class="form-group mb-3">
        <label>Sub Title</label>
        <input type="text" name="sub_title" class="form-control" value="{{ $portfolio->sub_title }}">
    </div>
    <div class="form-group mb-3">
        <label>Project Link</label>
        <input type="url" name="pro_link" class="form-control" value="{{ $portfolio->pro_link }}">
    </div>
      <div class="form-group">
            <label for="brand_logo" class="col-form-label pt-0">Current Slider Image</label>
            <br>
            @if($portfolio->image)
            <img src="{{ asset($portfolio->image) }}" alt="Brand Logo" class="img-fluid" style="max-width: 100px;">
            @else
            <p>No logo uploaded.</p>
            @endif
        </div>
       <div class="form-group">
             <label for="image" class="col-form-label pt-0">Image<sup class="text-size-20 top-1">*</sup></label>
                <input type="file" class="dropify" id="image" name="image" value= "{{ $portfolio->image }}">
        </div>  
    <div class="modal-footer px-0">
        <button type="submit" class="btn btn-primary">Update Portfolio</button>
    </div>
</form>
{{-- For file upload script --}}
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
