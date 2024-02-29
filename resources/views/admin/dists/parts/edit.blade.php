<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('dist.update',$partners_success->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <input type="hidden" name="type" value="dist">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image" data-default-file="{{asset($partners_success->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="url" class="form-control-label">اللينك</label>
                <input type="url" class="form-control" name="url" id="url" value="{{ $partners_success->url }}">
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
