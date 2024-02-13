<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('gallery.update', $gallery->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" value="{{asset( $gallery->image)}}"
                 class="dropify" name="image" data-default-file="{{asset( $gallery->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الاسم</label>
                <input class="form-control" type="text" name="name" value="{{ $gallery->name }}" require>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>

<script>
    $('.dropify').dropify()
</script>
