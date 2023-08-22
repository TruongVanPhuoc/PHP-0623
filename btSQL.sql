/*1*/
select MaSP,TenSP,NuocSX
from sanpham
where NuocSX LIKE 'Trung Quoc';
/*2*/
select MaSP,TenSP, DVT
from sanpham
where DVT LIKE 'cay' or DVT LIKE 'quyen';
/*3*/
select MaSP,TenSP
from sanpham
where MaSP like	'B%01';
/*4*/
select MaSP, TenSP, Gia , NuocSX
from sanpham
where NuocSX LIKE 'Trung Quoc' and  Gia >20000 and Gia < 30000;
/*5*/
select MaSP, TenSP, Gia , NuocSX
from sanpham
where (NuocSX like 'Trung Quoc' or  NuocSX like 'Thai Lan') and Gia >= 20000 and Gia <= 30000;
/*7*/
select SoHoaDon, TriGia 
from hoadon
where Ngaymuahang like '2007-01-%%'
order by TriGia; 
/*10*/
select HD.SoHoaDon, HD.TriGia
from nhanvien NV join hoadon HD on NV.MaNV = HD.MaNV
where NV.HoTen Like 'Nguyen Van B' and NgayMuaHang like '2006-10-%';
/*13*/
SELECT *
FROM hoadon h
JOIN cthd c1 ON h.SoHoaDon = c1.SoHD
JOIN cthd c2 ON h.SoHoaDon = c2.SoHD
WHERE c1.MaSp = 'BB01' AND c2.MaSp = 'BB02';
/*13*/
SELECT *
FROM hoadon h
JOIN cthd c ON h.SoHoaDon = c.SoHD
WHERE c.MaSP = 'BB01'
  AND EXISTS (
    SELECT *
    FROM cthd c2
    WHERE c2.SoHD = h.SoHoaDon AND c2.MaSP = 'BB02'
  );

/*15*/
select *
From sanpham sp 
where sp.MaSP not in (select MaSP from cthd);  

/*18*/
select count(*) as soluong
from hoadon hd 
where hd.MaKH is null;

/*35*/
select hd.MaKH, count(hd.MaKH) as soluong
from hoadon hd
where hd.MaKH is not null 
group by hd.MaKH
having soluong >= all (select  count(hd1.MaKH)
from hoadon hd1
where hd1.MaKH is not null
group by hd1.MaKH );

/*38*/
select *
from sanpham sp2 join
(select NuocSX, max(sp.Gia) as maxgia
from sanpham sp
group by sp.NuocSX) as tb_temp 
on sp2.Gia =tb_temp.maxgia and tb_temp.NuocSX = sp2.NuocSX;

/*38*/
SELECT NUOCSX,MASP, TENSP
FROM  sanpham A
WHERE GIA=(SELECT MAX(GIA)
   FROM  sanpham B
   WHERE A.NUOCSX=B.NUOCSX)
GROUP BY NUOCSX,MASP,TENSP;


select * ,(select count(*) from hoadon hd where kh.MaKH = hd.MaKH ) as soluong
from khachhang kh;

delimiter //spLaythongtinspLaythongtin
create procedure spLaythongtin(
	In Ptennhanvien varchar(255),
    In PNgay_lap_hoa_doi date
    )
    Begin
		select HD.SoHoaDon, HD.TriGia
		from nhanvien NV join hoadon HD on NV.MaNV = HD.MaNV
		where NV.HoTen Like Ptennhanvine and NgayMuaHang like concat( year(PNgay_lap_hoa_don),'-',month(PNgay_lap_hoa_don),'%');
    END;
//










