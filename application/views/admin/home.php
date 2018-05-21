<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Doanh thu hằng tháng từng mặt hàng"
	},
	axisX: {
		valueFormatString: "DD MMM,YY"
	},
	axisY: {
		title: "Nghìn đồng",
		includeZero: false,
		suffix: ".000 VND"
	},
	legend:{
		cursor: "pointer",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	toolTip:{
		shared: true
	},
	data: [{
		name: "Đồ điện/ gia dụng",
		type: "spline",
		yValueFormatString: "#### .000VND",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2018,3,24), y: 31 },
			{ x: new Date(2018,3,25), y: 31 },
			{ x: new Date(2018,3,26), y: 29 },
			{ x: new Date(2018,3,27), y: 29 },
			{ x: new Date(2018,3,28), y: 31 },
			{ x: new Date(2018,3,29), y: 30 },
			{ x: new Date(2018,3,30), y: 29 }
		]
	},
	{
		name: "Thời trang",
		type: "spline",
		yValueFormatString: "#### .000VND",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2018,3,24), y: 20 },
			{ x: new Date(2018,3,25), y: 20 },
			{ x: new Date(2018,3,26), y: 25 },
			{ x: new Date(2018,3,27), y: 25 },
			{ x: new Date(2018,3,28), y: 25 },
			{ x: new Date(2018,3,29), y: 25 },
			{ x: new Date(2018,3,30), y: 25 }
		]
	},
	{
		name: "Thực phẩm",
		type: "spline",
		yValueFormatString: "#### .000VND",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2018,3,24), y: 22 },
			{ x: new Date(2018,3,25), y: 19 },
			{ x: new Date(2018,3,26), y: 23 },
			{ x: new Date(2018,3,27), y: 24 },
			{ x: new Date(2018,3,28), y: 24 },
			{ x: new Date(2018,3,29), y: 23 },
			{ x: new Date(2018,3,30), y: 23 }
		]
	}]
});
chart.render();

function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "Số lượng hàng bán được từng quý"
	},
	axisX: {
		minimum: new Date(2017, 01, 1),
		maximum: new Date(2018, 01, 1),
		valueFormatString: "MMM YY"
	},
	axisY: {
		title: "Số lượng bán",
		titleFontColor: "#4F81BC",
		suffix: ""
	},
	data: [{
		indexLabelFontColor: "darkSlateGray",
		name: "views",
		type: "area",
		yValueFormatString: "####",
		dataPoints: [
			{ x: new Date(2017, 02, 1), y: 744, label: "Q1-2017" },
			{ x: new Date(2017, 05, 1), y: 611, label: "Q2-2017" },
			{ x: new Date(2017, 08, 1), y: 470, label: "Q3-2017" },
			{ x: new Date(2017, 11, 1), y: 480, label: "Q4-2017" },
			{ x: new Date(2018, 02, 1), y: 748, label: "Q1-2018" },
		]
	}]
});
chart2.render();

}

</script>
<style>
.admin-container{
    width:100%;
    margin:10px auto;
}
.admin-container .left{
    width:200px;
    float:left;
}
.admin-container .right{
    width:calc(100% - 200px);
    float:left;
    padding:10px;
}
.admin-container .left a{
    display:block;
    text-decoration:none;
    
}
.btn-group-vertical{
    width:calc(100% - 20px);
    min-height:calc(80vh - 20px);
}
.flex-contain > div {
    width:300px;
}
.flex-contain > div hr{
    background:white;
}
.flex-contain > div p{
    color:white;
}
.glyph-icon svg {
width:16px;
height:16px;
}
@media only screen and (max-width: 800px){
.admin-container .left{
    width:90%;
    margin:10px auto;
    float:none;
}
.admin-container .right{
    width:90%;
    min-height:100px;
    padding:10px;
    margin:10px auto;
    float:none;
}
}
.btn-group-vertical{
    margin:10px;
    width:calc(100% - 20px);
    min-height:calc(80vh - 20px);
}
.btn-group-vertical > button{float:left;}

}
</style>
<div class='admin-container'>
    <div class='left'>
    <nav class="navbar navbar-expand-lg-vertical navbar-dark bg-dark">
        <p class='text-primary'>MENU</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Trang chủ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin/thanhvien">Quản lý thành viên<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Sản phẩm<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Thông báo<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>admin">Đơn hàng<span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav>
    
    </div>
    <div class='right bg-light'>
        <div class='flex-contain'>
            <div class='bg-primary'>
                <img src="https://png.icons8.com/office/40/000000/administrator-male.png" style='width:50px;'>
                <p><b>THÀNH VIÊN</b></p>
                <hr>
                <p>Tổng số thành viên:12345<p>
                <p>Số lượt đăng kí trong ngày:123</p>
            </div>
            <div class='bg-warning'>
                <img src="https://png.icons8.com/dotty/40/000000/purchase-order.png" style='width:50px'>
                <p><svg-icon><src href="svg/si-glyph-bed.svg"/></svg>ĐƠN HÀNG</p>
                <hr>
                <p>Tổng số đơn hàng:12345<p>
                <p>Đơn hàng mới trong ngày:123</p>
            </div>
            <div class='bg-success'>
                <img src="https://png.icons8.com/ios/40/000000/visible.png" style='width:50px'>
                <p>VIEW</p>
                <hr>
                <p>Tổng số lượt xem:12345<p>
                <p>Lượt xem trong ngày:123</p>
        </div>
        </div>
        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </div>
    <br style='clear:both'>
</div>
