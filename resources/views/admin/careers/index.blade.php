@extends('admin/layouts/master')
@section('title')
    حياة مهنية
@endsection
@section('page_name')
    حياة مهنية
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">قائمة المهن</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th>#</th>
                                <th>ملف</th>
                                <th>الاسم</th>
                                <th>الايميل</th>
                                <th>السن</th>
                                <th>هاتف</th>
                                <th>الوظيفة</th>
                                <th>مرتب</th>
                                <th>الوصف</th>
                                <th class="rounded-end">العمليات</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Delete MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">حذف بيانات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>هل انت متأكد من حذف البيانات التالية <span id="title" class="text-danger"></span>؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">
                            الغاء
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_btn">حذف !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

    </div>
    @include('admin/layouts/myAjaxHelper')

@endsection
@section('ajaxCalls')
    <script>
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'file', name: 'file'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'age', name: 'age'},
            {data: 'phone', name: 'phone'},
            {data: 'job', name: 'job'},
            {data: 'salary', name: 'salary'},
            {data: 'desc', name: 'desc'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('careers.index')}}', columns);
        // Delete Using Ajax

        deleteAny('{{route('careers.destroy', ':id')}}');

    </script>
@endsection


