@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Message
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
                    <th>Name</th>    
                    <td>Sđt</td>
                    <td>Email</td>
                    <td>Nội Dung</td>
                    <td>Ngày Khám</td>

                </tr>
            </thead>
            <tbody>
                @foreach($message as $tt)
                <tr class="odd gradeX" align="center">
                    <td>{{$tt->id}}</td>
                    <td>{{$tt->name}}</td>
                    <td>{{$tt->sdt}}</td>
                    <td>{{$tt->email}}</td>
                    <td>{{$tt->noidung}}</td>
                    <td>{{$tt->ngaykham}}</td>


                    


                    
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