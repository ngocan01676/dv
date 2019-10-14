@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khoa
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
                    <td>Title</td>
                    <td>XÓA</td>
                    <td>Sửa</td>
                </tr>
            </thead>
            <tbody>
                @foreach($khoa as $khoa)
                <tr class="odd gradeX" align="center">
                    <td>{{$khoa->id}}</td>
                    <td>{{$khoa->Name}}</td>
                    
                    <td><img src="upload/khoa/{{$khoa->image}}" width="600px" height="200px" alt=""></td>

                    <td>{{$khoa->noidung}}</td>
                    <td>{{$khoa->Names}}</td>


                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khoa/xoa/{{$khoa->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khoa/sua/{{$khoa->id}}">Edit</a></td>
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