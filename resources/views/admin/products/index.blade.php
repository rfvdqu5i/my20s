@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<!-- Content Header -->
{{-- <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <button type="button" class="btn btn-block btn-secondary mt-2" data-toggle="modal" data-target="#create-product" style="width: 100px;">Thêm mới</button>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right m-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div> --}}<!-- /.container-fluid -->
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered" id="getListProduct" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Tên sản phẩm</th>
                                <th class="align-middle">Danh mục</th>
                                <th class="align-middle">Giá gốc</th>
                                <th class="align-middle">Giá bán</th>
                                <th class="align-middle">Nội dung</th>
                                <th class="align-middle">Trạng thái</th>
                                <th class="align-middle">Người tạo</th>
                                <th class="align-middle">Hành động</th>
                            </tr>
                        </thead>
                    </table> 
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @include('admin.products.show')
    @include('admin.products.edit')

    <!-- /.row (main row) -->
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
  </a>
</div><!-- /.container-fluid -->
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#getListProduct').DataTable({
            "language": {
                processing:     "Đang xử lý...",
                search:         "Tìm kiếm: &nbsp;:",
                lengthMenu:    "Xem _MENU_ mục",
                info:           "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                infoEmpty:      "Đang xem 0 đến 0 trong tổng số 0 mục",
                infoFiltered:   "(được lọc từ _MAX_ mục)",
                infoPostFix:    "",
                loadingRecords: "Đang tải...",
                zeroRecords:    "Không tìm thấy dòng nào phù hợp",
                emptyTable:     "Không có dữ liệu trong bảng",
                paginate: {
                    first:      "Đầu",
                    previous:   "Trước",
                    next:       "Tiếp",
                    last:       "Cuối"
                },
                aria: {
                    sortAscending:  ": Sắp xếp cột theo thứ tự tăng dần",
                    sortDescending: ": Sắp xếp cột theo thứ tự giảm dần"
                }
            },
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url : '{{ route('admin.products.list') }}',
                type: "POST"
            },
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
            {data: 'name', name: 'name'},
            {data: 'category_id', name: 'category_id'},
            {data: 'origin_price', name: 'origin_price'},
            {data: 'sale_price', name: 'sale_price'},
            {data: 'content', name: 'content'},
            {data: 'status', name: 'status'},
            {data: 'user_id', name: 'user_id'},
            {data: 'action', name: 'action', orderable: false,searchable: false}
            ],
        });
    });
</script>
@endsection