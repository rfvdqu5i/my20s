@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<!-- Content Header -->
<div class="container-fluid">
    <div class="row mb-2 pt-1">
     <div class="col-sm-2">
        <button type="button" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#create-product">Thêm mới</button>
    </div><!-- /.col --> 

</div><!-- /.row -->
</div><!-- /.container-fluid -->
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered" id="getListProduct">
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
                        {{-- <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><a href="{{ route('admin.product.show', $product->id) }}">{{ $product->name }}</a></td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->origin_price }}</td>
                                <td>{{ $product->sale_price }}</td>
                                <td>{{ $product->content }}</td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#show-product"><i class="fas fa-eye"></i></button>
                                    <button type="button" class="btn btn-block btn-outline-secondary" data-toggle="modal" data-target="#edit-product"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table> 
                </div>
                <div class="card-footer clearfix">
                    <div class="pagination m-0 float-right">
                        {{ $products->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @include('admin.products.create')
    @include('admin.products.show')
    @include('admin.products.edit')

    <!-- /.row (main row) -->
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
  </a>
</div><!-- /.container-fluid -->
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        var t = $('#getListProduct').DataTable({
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
            ajax: {
                url : '/admin/dashboard/products/getlistproduct',
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