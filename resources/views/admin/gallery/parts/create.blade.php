<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('gallery.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">الصورة</label>
                    <input type="file" require class="dropify" name="image" data-default-file="{{asset('assets/uploads/post.png')}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" />
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">الاسم</label>
                    <input class="form-control" type="text" name="name" require>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
