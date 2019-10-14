@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">bacsi
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
               @if(session('thongbao'))
               <div class="alert alert-success">{{session('thongbao')}}</div>
               @endif
               <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên</th>    
                    <td>Hình</td>
                    <td>Nội dung</td>
                    <td>Chuyên khoa</td>
                    <td>XÓA</td>
                    <td>Sửa</td>
                </tr>
            </thead>
            <tbody>
                @foreach($bacsi as $bacsi)
                <tr class="odd gradeX" align="center">
                    <td>{{$bacsi->id}}</td>
                    <td>{{$bacsi->name}}</td>
                    
                    <td><img src="upload/khoa/{{$bacsi->image}}" width="600px" height="200px" alt=""></td>

                    <td>{{$bacsi->noidung}}</td>
                    <td>{{$bacsi->chuyenkhoa}}</td>
                    


                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bacsi/xoa/{{$bacsi->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bacsi/sua/{{$bacsi->id}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection