<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="source/image/logo.jpg" alt="">
      </div>
      <div class="col-md-6">
       <ul class="nav">
         <li><i class="fas fa-phone"></i>&nbsp;Hotline:19008083</li>
         <li><i class="fas fa-envelope-open"></i>&nbsp;137 Nguyễn Văn Cừ,Long Biên,Hà Nội</li>

       </ul>
     </div>
   </div>
 </div>
</div>
<div class="menu-header">
  <div class="container">
    <div class="row">
      <div class="nav-menu">
       <ul class="nav">
        <li><a href="">Trang Chủ</a></li>
        <li><a href="">Giới Thiệu</a></li>
        <li><a href="">Dịch Vụ</a></li>
        <li><a href="">Chuyên Khoa</a></li>
        <li><a href="">Tư Vấn</a></li>
        <li><a href="">Tin Tức</a></li>
        <li><a href="">Liên Hệ</a></li>


      </ul>
    </div>
  </div>
</div>
</div>
<div id="owl-demo" class="owl-carousel owl-theme">

 @foreach($slide as $slide)
 <div class="item"><img src="upload/slide/{{$slide->Hinh}}"  alt="The Last of us"></div>

 @endforeach
</div>
<div class="content text-center">
  <h1>CÁC KHOA VÀ CHUYÊN KHOA</h1>
  <hr style="text-align: center;width: 300px;background: blue;height: 3px" />
</div>
<section class="new">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>Khoa</p>
        <h2>Khám bệnh</h2>
        <h4>Khoa Khám bệnh Khoa Khám bệnh của Bệnh viện Đa khoa Quốc tế Bắc Hà có đầy đủ các phòng khám chuyên khoa, từ phòng Khám Nội, Khám Ngoại, Khám Nhi, Khám Sản phụ, Khám Tai Mũi Họng, Khám Răng, Khám Da liễu, Khám Mắt, sẵn sàng đáp ứng mọi nhu cầu chăm sóc sức khỏe và khám chữa bệnh của Quý khách hàng.Đội ...</h4>

      </div>
      <div class="col-md-6">
        <img src="source/image/x.jpg" alt="" class="img-responsive">
      </div>
    </div>
  </div>

</section>
<section class="tt">
  <div class="container">
    <div class="row">
      @foreach($khoa as $khoa)
      <div class="col-md-3">
        <div class="image">
          <img src="upload/khoa/{{$khoa->image}}" alt="" class="img-responsive">
          <div class="tittle">
            <p>{{$khoa->Names}}</p>
          </div>
        </div>

      </div>
      @endforeach

    </div>
  </div>
</div>
</section>
<section class="dv">
  <div class="content text-center">
    <h1 style="padding-top:20px">ĐỘI NGŨ BÁC SĨ</h1>
    <hr style="text-align: center;width: 300px;background: blue;height: 3px" />
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img">
            <img src="source/image/dv.jpg" alt="" class="img-responsive">
          </div>
          <div class="contents">
            <p>Chuyên Khoa Ngoại - Gây mê hồi sức</p>
            <h3>BS.CKII. LÊ TUYÊN HỒNG DƯƠNG</h3>
            <p>Giám đốc chuyên môn – Gây mê hồi sức cấp cứu   Khen thưởng, danh hiệu Bằng khen của Đảng ủy khối cơ quan Trung ương năm 2011 – 2015 Bằng khen Bộ y tế năm 2002, 2006 Bằng khen Bộ Giao thông vận tải các năm 2000, 2001, 2007, 2010, 2011, 2012, 2014. Bằng […]</p>
          </div>
        </div>
        <div class="col-md-5">
          <form action="message"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <p>ĐẶT LỊCH KHÁM NGAY</p>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ tên" name="name">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Điện thoại" name="sdt">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <label for="">Ngày Khám</label>

              <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                <input class="form-control" size="35" type="text" value="" readonly name="ngaykham">
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
              </div>
              <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>  



            <div class="form-group">
              <textarea name="noidung" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Lời nhắn
              "></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Đăng Ký</button>
            </div>
            <div class="form-group">
              @if(session('thongbao'))
              <div class="alert alert-success">{{session('thongbao')}}</div>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
