﻿var danhsach_datmua = [];
GetCookie();
CapNhatGioHang();

$(document).ready(function(){
	$(".pro_cart").click(function(){
		var parent = $(this).parent();
		
		var id_sanpham = $(parent).children(".pro_id").text();
		var ten_sanpham = $(parent).children(".pro_title").text();
		var sotien_sanpham = $(parent).children(".pro_money").text();
		
		var sanpham = {
			"id":id_sanpham,
			"ten":ten_sanpham,
			"giatien":parseInt(sotien_sanpham),
			"soluong":1
		};
		ThemVaoGioHang(sanpham);
		CapNhatGioHang();
		CapNhatCookie();
	});
	
	$(".link-thanhtoan").click(function(){
		HienThiDanhSach();
	});
	
	$(".btn-thanhtoan").click(function(){
		alert('Thanh toán thành công !');
		danhsach_datmua = [];
		CapNhatCookie();
		location.reload();
	});
	$(".btn-xoadon").click(function(){
		alert('Đã làm trống giỏ hàng :(');
		danhsach_datmua = [];
		CapNhatCookie();
		location.reload();
	});
});

function ThemVaoGioHang(obj){
	if(danhsach_datmua==null)
		danhsach_datmua = obj;
	else
	{
		for(i=0;i<danhsach_datmua.length;i++)
		{
			if(danhsach_datmua[i].id==obj.id)
			{
				danhsach_datmua[i].soluong += 1;
				return false;
			}
		}
		danhsach_datmua.push(obj);
	}
}

function CapNhatGioHang()
{
	var formatter = new Intl.NumberFormat('en-US', {
	  style: 'currency',
	  currency: 'USD',
	  minimumFractionDigits: 0,
	  // the default value for minimumFractionDigits depends on the currency

	});
	var sosanpham = 0;
	var sotien = 0;
	for(i=0;i<danhsach_datmua.length;i++)
	{
		sosanpham += danhsach_datmua[i].soluong;
		sotien += 	danhsach_datmua[i].giatien*danhsach_datmua[i].soluong;
	}
	$(".giohang_count").text(sosanpham);
	$(".giohang_money").text(formatter.format(sotien));
}

function HienThiDanhSach()
{
	var formatter = new Intl.NumberFormat('en-US', {
	  style: 'currency',
	  currency: 'USD',
	  minimumFractionDigits: 0,
	
	});
	var innerHtml = '<table class="ds_donhang w3-table w3-striped" width="100%" border="0"> <tr> <td>Mã Sản Phẩm</td> <td>Tên Sản Phẩm</td> <td>Giá Tiền</td> <td>Số lượng</td> </tr>';
	
	for(i=0;i<danhsach_datmua.length;i++){
		var sanpham = danhsach_datmua[i];
		innerHtml += '<tr> <td>'+sanpham.id+'</td> <td>'+sanpham.ten+'</td> <td>'+formatter.format(sanpham.giatien)+'</td> <td>'+sanpham.soluong+'</td> </tr>';
	}
	innerHtml += '</table>';
	$(".ds_giohang").html(innerHtml);
}
function CapNhatCookie()
{
	var str_object = JSON.stringify(danhsach_datmua);
	document.cookie = "cookie_object="+str_object;
}

function GetCookie()
{
	try{
	doc_ds_tu_cookie = doc_Cookie("cookie_object");
	danhsach_datmua = doc_ds_tu_cookie==""?[]:JSON.parse(doc_ds_tu_cookie);
	}catch(e)
	{
	}
}

function doc_Cookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
