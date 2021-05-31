
@if(session()->has('canbo'))
@extends('quantri')
@section('content')
<title>Người Dùng</title>
<link rel="stylesheet" type="text/css" href="source/css/sttTable.css">
@if(Session::has('themthanhcong'))
<div class="alert pull-right" id="thongbao" role="alert" style="color: green;font-size: 25px;right: 0px;top:0px;display: block;position: fixed; background: white">{{Session::get('themthanhcong')}}
</div>
@endif
@if(Session::has('capnhatthanhcong'))
<div class="alert pull-right" id="thongbao" role="alert" style="color: green;font-size: 25px;right: 0px;top:0px;display: block;position: fixed; background: white;z-index: 2">
  {{Session::get('capnhatthanhcong')}}
</div>
@endif
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: white">
  <div class="pannel panel-default">
    <div class="panel-heading">
      <center><h3>Người Dùng</h3></center>
    </div>
  </div>
  <button type="button" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px;" data-toggle="modal" data-target="#themnguoidung">
  <i class="glyphicon glyphicon-plus-sign"></i> Thêm
  </button>
  <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-striped" id="table_danhmuc">
        <thead >
          <tr style="background-color:#337ab7;color: white; font-size: 12px">
            <th hidden="true"></th>
            <th>STT</th>
            <th>Tài Khoản</th>
            <th>Chức Vụ</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Thao Tác</th>
          </tr>
        </thead>
        <tbody id="myTable">
          @foreach($nguoidung as $nd)
          <tr class="onRow">
            <td style="border: 2px solid rgba(192,192,192,0.8)" hidden="true">{{$nd->ID}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)"></td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->TaiKhoan}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->TenCV}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->HoTenCB}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->GioiTinh}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->SDT}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->DiaChi}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">{{$nd->Email}}</td>
            <td style="border: 2px solid rgba(192,192,192,0.8)">
              <center>
                <a href=""><i class="glyphicon glyphicon-edit"></i>&nbsp;</a> &nbsp
                <a href="" onclick="return confirm ('Bạn chắc chắn muốn xóa?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;</a>
                </center>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--                   <div style="border-bottom: 2px solid lightgray;font-size: 18px; color: blue; background: white" > Thông Tin Chung</div>
  <div class="pannel pannel-default" style="background: white">
    <div class="panel-body">
      <form class="form-horizontal" action="" method="post" role="form" id="thongtin">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group" hidden="true">
          <label class="col-lg-2 control-label">ID</label>
          <div class="col-lg-4">
            <input type="text" name="thongtin_id_dotcap" id="idcc" class="form-control id_chungchi">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Tên Giảng Viên</label>
          <div class="col-lg-4" >
            <div class="col-lg-4">
              <input type="text" name="tengiangvien" id="tdc" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Giới Tính</label>
          <div class="col-lg-4">
            <input type="text" name="gioitinh" id="tdc" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Ngày Sinh</label>
          <div class="col-lg-4">
            <input type="text" name="ngaysinh" id="tdc" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Địa Chỉ</label>
          <div class="col-lg-4">
            <input type="text" name="diachi" id="tdc" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">SĐT</label>
          <div class="col-lg-4">
            <input type="text" name="sdt" id="tdc" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-2 control-label">Email</label>
          <div class="col-lg-4">
            <input type="text" name="email" id="tdc" class="form-control">
          </div>
        </div>
        <div class="form-group pull-right">
          <input type="submit" formaction="{{route('cap-nhat-dot-cap')}}" value="Lưu" class="btn btn-primary">
          <input type="submit" formaction="{{route('xoa-dot-cap')}}" value="Xóa" class="btn btn-danger" onclick=" return confirm('Bạn có chắc chắn muốn xóa?');">
          <button type="reset" class="btn btn-default" id="btn_Huybo">Hủy Bỏ</button>
        </div>
      </form>
    </div>
  </div> -->
</div>
<!-- Bắt đầu modal-->
<div class="modal fade" id="themnguoidung">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h2 class="modal-title">Thêm Người Dùng</h2></center>
        <hr>
        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-horizontal" action="{{route('post-nguoi-dung')}}" method="post" role="form" id='form-danh-muc'>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <label class="col-lg-4 control-label">Tài Khoản</label>
              <div class="col-lg-8 ">
                <input type="text" name="taikhoan" class="form-control"  required="required"   placeholder='Tài khoản'>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Họ Tên</label>
              <div class="col-lg-8 ">
                <input type="text" name="hoten" class="form-control"  required="required"   placeholder='Họ tên'>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Chức Vụ</label>
              <div class="col-lg-8 ">
                <select class="form-control" name="chucvu">
                  @foreach($chucvu as $cv)
                  <option value="{{$cv->ID}}">{{$cv->TenCV}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Giới Tính</label>
              <div class="col-lg-8 ">
               <select class="form-control" name="gioitinh">
                 <option value="Nam">Nam</option>
                 <option value="Nữ">Nữ</option>
               </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Ngày Sinh</label>
              <div class="col-lg-8 ">
               <input type="text" name="ngaysinh" class="form-control" id="ngaysinh">
              </div>
            </div>
             <div class="form-group">
              <label class="col-lg-4 control-label">Địa Chỉ</label>
              <div class="col-lg-8 ">
                <input type="text" name="diachi" class="form-control"  required="required"   placeholder='Địa chỉ'>
              </div>
            </div>
             <div class="form-group">
              <label class="col-lg-4 control-label">SĐT</label>
              <div class="col-lg-8 ">
                <input type="number" name="sdt" class="form-control"  required="required"   placeholder='Số điện thoại'>
              </div>
            </div>
             <div class="form-group">
              <label class="col-lg-4 control-label">Email</label>
              <div class="col-lg-8 ">
                <input type="email" name="email" class="form-control"  required="required"   placeholder='Email'>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Mật Khẩu</label>
              <div class="col-lg-8 ">
                <input type="password" name="matkhau" class="form-control"  required="required"   placeholder='Mật khẩu'>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nhập lại mật khẩu</label>
              <div class="col-lg-8 ">
                <input type="password" name="nhaplaimatkhau" class="form-control"  required="required"   placeholder='Nhập lại mật khẩu'>
              </div>
            </div>
            <div class="form-group pull-right">
              <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
          </form>
          <br/>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết Thúc Modal-->
<script type="text/javascript">
  $('#ngaysinh').datepicker({format: 'dd/mm/yyyy'});
  $("#thongbao").fadeOut(10000);
    $("#thongbaoloi").fadeOut(10000);
     $("#table_nguoidung").DataTable({
              "language": {
                 "lengthMenu": "Xem _MENU_ mục",
                "zeroRecords": "Không tìm thấy dòng nào phù hợp",
                "info": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sSearch":       "Tìm kiếm :",
                "infoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                "infoFiltered": "(được lọc từ _MAX_ mục)",
                "oPaginate":{
                      "sFirst":    "Đầu",
                      "sPrevious": "Trước",
                      "sNext":     "Tiếp",
                      "sLast":     "Cuối",
                }
                          },
                "pagingType": "full_numbers",
                 "displayLength": 10,
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Tất cả"]]
            });
</script>
@endsection
@endif