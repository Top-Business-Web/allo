<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{route('jobs.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">الصورة</label>
                    <input type="file" class="dropify" name="image" data-default-file="" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">العنوان بالعربي</label>
                    <input type="text" class="form-control" name="title_ar" id="title_ar">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                    <input type="text" class="form-control" name="title_en" id="title_en">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sub_title_ar" class="form-control-label">التفاصيل بالعربي</label>
                    <textarea type="text" class="form-control" name="description_ar" id="description_ar" rows="15"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sub_title_en" class="form-control-label">التفاصيل بالانجليزي</label>
                    <textarea type="text" class="form-control" name="description_en" id="description_en" rows="15"></textarea>
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
