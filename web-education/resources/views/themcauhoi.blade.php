
<script>
	var DEPLOYED_WEB_APP_URL = "https://script.google.com/macros/s/AKfycbwGAOmLhCZNm4lSKif_u7jSXs3nwtaf7h6C4K9vchWkSCtiaGMr/exec";
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Kiểm tra</title>
<style>
	.dq-test-outer-wrapper{
		margin: 5%;
		border: 1px solid #0F6190;
		border-radius: 10px;
		font-family: 'Dosis', sans-serif;
	}
	.dq-test-title{
		text-align: center;
		background: #297FB0;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		color: white;
		font-size: 24px;
		padding: 8px 8px;
	}
	.half-width{

		padding: 2%;
		text-align:center;
		vertical-align:top;
	}
	.auth-inputs{
		width: 90%;
		max-width: 300px;
		height: 40px;
		border-radius: 7px;
		border: 1px solid #c0c0c0;
		padding: 5px;
		outline: none;
		margin: 10px 0px;
	}
	.btn{
		width: 96px;
		height: 40px;
		outline: none;
		cursor: pointer;
		margin-top: 10px;
	}
	.btn-primary{
		border:1px solid #25729a; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 5px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
		background-color: #3093c7; background-image: -webkit-gradient(linear, left top, left bottom, from(#3093c7), to(#1c5a85));
		background-image: -webkit-linear-gradient(top, #3093c7, #1c5a85);
		background-image: -moz-linear-gradient(top, #3093c7, #1c5a85);
		background-image: -ms-linear-gradient(top, #3093c7, #1c5a85);
		background-image: -o-linear-gradient(top, #3093c7, #1c5a85);
		background-image: linear-gradient(to bottom, #3093c7, #1c5a85);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#3093c7, endColorstr=#1c5a85);
	}
	.btn-primary:hover {
		border:1px solid #1c5675;
		background-color: #26759e; background-image: -webkit-gradient(linear, left top, left bottom, from(#26759e), to(#133d5b));
		background-image: -webkit-linear-gradient(top, #26759e, #133d5b);
		background-image: -moz-linear-gradient(top, #26759e, #133d5b);
		background-image: -ms-linear-gradient(top, #26759e, #133d5b);
		background-image: -o-linear-gradient(top, #26759e, #133d5b);
		background-image: linear-gradient(to bottom, #26759e, #133d5b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#26759e, endColorstr=#133d5b);
	}
	.btn-submit{
		transition: all .2s ease-in-out;
		border:1px solid #df0909; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
		background-color: #f62b2b; background-image: -webkit-gradient(linear, left top, left bottom, from(#f62b2b), to(#d20202));
		background-image: -webkit-linear-gradient(top, #f62b2b, #d20202);
		background-image: -moz-linear-gradient(top, #f62b2b, #d20202);
		background-image: -ms-linear-gradient(top, #f62b2b, #d20202);
		background-image: -o-linear-gradient(top, #f62b2b, #d20202);
		background-image: linear-gradient(to bottom, #f62b2b, #d20202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#f62b2b, endColorstr=#d20202);
	}
	.btn-submit:hover{
		border:1px solid #b30808;
		background-color: #e40a0a; background-image: -webkit-gradient(linear, left top, left bottom, from(#e40a0a), to(#9f0202));
		background-image: -webkit-linear-gradient(top, #e40a0a, #9f0202);
		background-image: -moz-linear-gradient(top, #e40a0a, #9f0202);
		background-image: -ms-linear-gradient(top, #e40a0a, #9f0202);
		background-image: -o-linear-gradient(top, #e40a0a, #9f0202);
		background-image: linear-gradient(to bottom, #e40a0a, #9f0202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#e40a0a, endColorstr=#9f0202);
	}
	.btn:active {
		position:relative;
		top:1px;
	}
	.left{
		text-align:left!important;
	}
	.right{
		text-align:right;
	}
	.chi-tiet-kt{
		text-align:center;
		font-size:23px;
	}
	.center{
		text-align:center;
	}
	.negative-marking{
		font-size: 14px;
		padding-left: 0px;
	}
	.inline-block{
		display:inline-block;
	}
	.display-none{
		display: none;
	}
	.q-num{
		transition: all .2s ease-in-out;
		border: 1px solid #c0c0c0;
		background: #f0f0f0;
		text-align: center;
		width: 30px;
		height:30px;
		margin: 5px;
		line-height: 30px;
		cursor: pointer;
		border-radius: 2px;
	}
	.q-num:hover{
		background: #c0c0c0!important;
	}
	.question-section{
		width:60%;
		padding: 2%;
		vertical-align:top;
	}
	.question-tbl{
		font-size: 20px;
	}
	.question-tbl td{
		vertical-align: top;
	}
	input[name='dq-op']{
		width: 17px;
		height: 17px;
		position: relative;
		top: 3px;
	}
	.option{
		margin: 10px 0px;
		font-size: 19px;
	}
	.timer{
		font-size: 20px;
	}
	.next{
		font-size: 32px;
		line-height: 31px;
	}
	.weightage{
		background: #F1F1F1;
		color: #a0a0a0;
		white-space: nowrap;
		padding: 3px 5px;
		border-radius: 3px;
		letter-spacing: 1px;
	}
	.user{
		font-weight: bold;
	}
	.user:before{
		content: url('https://i.imgur.com/SQRreHE.png');
		margin-right: 10px;
		position: relative;
		top: 2px;
		opacity: 0.5;
	}
	.start-loader{
		position: relative;
		top: 12px;
		left: 13px;
	}
	.test-finished{
		padding: 10px 20px;
		margin: 69px 0px;
		background-color: #D9F0FD;
		border: 1px solid #297FB0;
		width: 40%;
		margin-left: auto;
		margin-right: auto;
		border-radius: 3px;
		font-size: 25px;
	}
	.display-score{
		background-color: #D9F0FD;
		border: 1px solid #297FB0;
	}
	.with-score div{
		padding: 5px 50px;
	}
	#wrongAns{
		color: red;
	}
	#correctAns{
		color: green;
	}
	.only-questions{
		width: 56%!important;
	}
	.only-scores{
		margin:30px 0px;
		background:#D9F0FD;
		width: 31%!important;
		font-size: 25px;
		border-radius: 3px;
		border: 1px solid #297FB0;
		font-weight: bold;
		text-align: left;
		line-height: 42px;
	}
	.green{
		color: green;
	}
	.red{
		color: red;
	}
	.v-top{
		vertical-align: top;
	}
	.question{
		font-size: 20px;
		font-weight: bold;
	}
	#submitLoader{
		top: 4px;
	    position: relative;
	    left: 8px;
	    display: none;
	}
	input#submit:disabled {
	    background: #df0909!important;
		color: #EFA2A2;
		cursor: default;
	}
	table.question-tbl td{
    	padding-top: 8px;
	}
	.num-wrapper{
		margin-top: 20px;
	}
</style>
<link href='https://fonts.googleapis.com/css?family=Dosis:500,700' rel='stylesheet' type='text/css'>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
@if (session('success'))
	<script>
		Swal.fire(
		'{{ session("success") }}',
		'',
		'success'
		)
	</script>
@endif
<script>
var TEST_DETAILS,CURRENT_QUES=1,SOCAU,SUBMITTED=false, THEMDAPAN = new Array();
var CAUHOI, DAPANA, DAPANB, DAPANC = "", DAPAND = "", DAPANE = "", DAPANF = "", DAPANDUNG;
var QUESTIONS = new Array();
$(document).ready(function(){

	$("#thoi-gian-cong-bo").click(function(){
		$(".thoi-gian-hien-thi").css("display","inline-block");
		$("#thoi-gian-cong-bo").hide();
	});

	$("#tao-cau-hoi").click(function(){
		if(document.getElementById("TenBaiKT").value == '')
		{
			swal.fire("Bạn chưa nhập tên bài kiểm tra","" , "error")
		}
		else if(document.getElementById("soCauHoi").value == '')
		{
			swal.fire("Bạn chưa nhập số câu hỏi","" , "error")
		}
		else if(document.getElementById("soCauHoi").value <10 || document.getElementById("soCauHoi").value>50)
		{
			swal.fire("Số câu hỏi phải trong khoảng 10 đến 50 câu!","" , "error")
		}
		else if(document.getElementById("thoiGianLam").value == '')
		{
			swal.fire("Bạn chưa nhập thời gian làm bài","" , "error")
		}
		else if(document.getElementById("thoiGianLam").value <1 || document.getElementById("thoiGianLam").value>180)
		{
			swal.fire("Thời gian làm trong khoảng từ 1 đến 180 phút!","" , "error")
		}
		else
		{
			$(".start-loader").show();
			$(".user").text("Minh Tân");
			$(".login-section,.instruction-section").hide();
			$(".question-section,.question-navigation").css("display","inline-block");
			SOCAU = parseInt(document.getElementById("soCauHoi").value);
			QUESTIONS = new Array(SOCAU);
			THEMDAPAN = new Array(SOCAU);
			for (var i = 0; i < SOCAU; i++) {
				QUESTIONS[i] = new Array(8);
				THEMDAPAN[i] = 0;
			}
			for(var i=0;i<SOCAU;i++){
				$(".question-navigation .num-wrapper").append("<div class='inline-block q-num' index="+i+">"+(i+1)+"</div>");
			}
			$(".cau-hoi").html('<label for="tenchuong">Câu 1:</label> <input type="text" name="noiDung1" id="noiDung1" class="form-control m-input" placeholder="Nhập câu hỏi" autocomplete="off">');
			$(".dap-an-a").html('<input type="text" id="dapAnA1" name="dapAnA1" class="form-control m-input" placeholder="Nhập Đáp Án A" autocomplete="off">');
			$(".dap-an-b").html('<input type="text" id="dapAnB1" name="dapAnB1" class="form-control m-input" placeholder="Nhập Đáp Án B" autocomplete="off">');
			$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung1" name="dapAnDung1">  <option>A</option><option>B</option></select>');
			$(".q-num[index='0']").trigger("click");
		}
	});

	$("#them-dap-an").click(function(){
		if(THEMDAPAN[CURRENT_QUES-1] == 0)
		{
			$(".dap-an-c").html('<input type="text" id="dapAnC'+CURRENT_QUES+'" name="dapAnC'+CURRENT_QUES+'" class="form-control m-input" placeholder="Nhập Đáp Án C" autocomplete="off">');
			$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+CURRENT_QUES+'" name="dapAnDung'+CURRENT_QUES+'">  <option>A</option> <option>B</option> <option>C</option></select>');
			THEMDAPAN[CURRENT_QUES-1] = 1;
		}
		else if (THEMDAPAN[CURRENT_QUES-1] == 1)
		{
			$(".dap-an-d").html('<input type="text" id="dapAnD'+CURRENT_QUES+'" name="dapAnD'+CURRENT_QUES+'" class="form-control m-input" placeholder="Nhập Đáp Án D" autocomplete="off">');
			$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+CURRENT_QUES+'" name="dapAnDung'+CURRENT_QUES+'">  <option>A</option> <option>B</option> <option>C</option> <option>D</option></select>');
			THEMDAPAN[CURRENT_QUES-1] = 2;
		}
		else if (THEMDAPAN[CURRENT_QUES-1] == 2)
		{
			$(".dap-an-e").html('<input type="text" id="dapAnE'+CURRENT_QUES+'" name="dapAnE'+CURRENT_QUES+'" class="form-control m-input" placeholder="Nhập Đáp Án E" autocomplete="off">');
			$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+CURRENT_QUES+'" name="dapAnDung'+CURRENT_QUES+'">  <option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option></select>');
			THEMDAPAN[CURRENT_QUES-1] = 3;
		}
		else if (THEMDAPAN[CURRENT_QUES-1] == 3)
		{
			$(".dap-an-f").html('<input type="text" id="dapAnF'+CURRENT_QUES+'" name="dapAnF'+CURRENT_QUES+'" class="form-control m-input" placeholder="Nhập Đáp Án F" autocomplete="off">');
			$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+CURRENT_QUES+'" name="dapAnDung'+CURRENT_QUES+'">  <option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option> <option>F</option></select>');
			THEMDAPAN[CURRENT_QUES-1] = 4;
			$("#them-dap-an").hide();
		}
		$('#dapAnDung'+ CURRENT_QUES +'').val(QUESTIONS[(CURRENT_QUES-1)][1]);
	});

	//Hiển thị nút submit và nút tiếp theo, câu hỏi

	$(document).on("click",".q-num",function(){
		$(".q-num").css({"border":"1px solid #c0c0c0","fontWeight":"normal"});
		$(".q-num").eq($(this).attr("index")).css({"border":"1px solid #0077A7","fontWeight":"bold"});
		var self = this;
		CAUHOI = document.getElementById("noiDung"+CURRENT_QUES).value;
		DAPANA = document.getElementById("dapAnA"+CURRENT_QUES).value;
		DAPANB = document.getElementById("dapAnB"+CURRENT_QUES).value;
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 1)
		{
			DAPANC = document.getElementById("dapAnC"+CURRENT_QUES).value;
			if(DAPANC == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 0;
			}
		}
		else
		{
			DAPANC = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 2)
		{
			DAPAND = document.getElementById("dapAnD"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 1;
			}
		}
		else
		{
			DAPAND = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 3)
		{
			DAPANE = document.getElementById("dapAnE"+CURRENT_QUES).value;
			if(DAPANE == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 2;
			}
		}
		else
		{
			DAPANE = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 4)
		{
			DAPANF = document.getElementById("dapAnF"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 3;
			}
		}
		else
		{
			DAPANF = "";
		}
		DAPANDUNG = document.getElementById("dapAnDung"+CURRENT_QUES).value;
		QUESTIONS[(CURRENT_QUES-1)]= new Array(
			CAUHOI,
			DAPANDUNG,
			DAPANA,
			DAPANB, 
			DAPANC, 
			DAPAND,
			DAPANE,
			DAPANF
		);
		if(CAUHOI != "" && DAPANA != "" && DAPANB != "" && DAPANDUNG != ""){
			$(".q-num[index='"+(CURRENT_QUES-1)+"']").css("background","#8CC4DA");
		}else{
			$(".q-num[index='"+(CURRENT_QUES-1)+"']").css("background","#f0f0f0");
		}
		CURRENT_QUES = parseInt($(self).attr("index")) + 1;
		setTimeout(function(){ 
			populateQuestion(parseInt($(self).attr("index")));
		}, 250);
		if(CURRENT_QUES>=SOCAU){
			$("#next").hide();
			$("#submit").show();
		}else{
			$("#next").show();
			$("#submit").hide();
		}
	});
	
	// tiếp tục
	
	$("#next").click(function(){
		CAUHOI = document.getElementById("noiDung"+CURRENT_QUES).value;
		DAPANA = document.getElementById("dapAnA"+CURRENT_QUES).value;
		DAPANB = document.getElementById("dapAnB"+CURRENT_QUES).value;
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 1)
		{
			DAPANC = document.getElementById("dapAnC"+CURRENT_QUES).value;
			if(DAPANC == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 0;
			}
		}
		else
		{
			DAPANC = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 2)
		{
			DAPAND = document.getElementById("dapAnD"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 1;
			}
		}
		else
		{
			DAPAND = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 3)
		{
			DAPANE = document.getElementById("dapAnE"+CURRENT_QUES).value;
			if(DAPANE == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 2;
			}
		}
		else
		{
			DAPANE = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 4)
		{
			DAPANF = document.getElementById("dapAnF"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 3;
			}
		}
		else
		{
			DAPANF = "";
		}
		DAPANDUNG = document.getElementById("dapAnDung"+CURRENT_QUES).value;
		QUESTIONS[(CURRENT_QUES-1)]= new Array(
			CAUHOI,
			DAPANDUNG,
			DAPANA,
			DAPANB, 
			DAPANC, 
			DAPAND,
			DAPANE,
			DAPANF
		);
		if(CAUHOI != "" && DAPANA != "" && DAPANB != "" && DAPANDUNG != ""){
			$(".q-num[index='"+(CURRENT_QUES-1)+"']").css("background","#8CC4DA");
		}else{
			$(".q-num[index='"+(CURRENT_QUES-1)+"']").css("background","#f0f0f0");
		}
		$(".q-num[index='"+(CURRENT_QUES)+"']").trigger("click");
	});
	
	// lấy câu hỏi
	
	function populateQuestion(index){
		if((QUESTIONS[index][0])!= null)
		{
			$(".cau-hoi").html('<label for="tenchuong">Câu '+ (index+1) +':</label> <input type="text" name="noiDung'+ (index+1) +'" id="noiDung'+ (index+1) +'" class="form-control m-input" placeholder="Nhập câu hỏi" autocomplete="off" value="'+QUESTIONS[index][0]+'">');
		}
		else{
			$(".cau-hoi").html('<label for="tenchuong">Câu '+ (index+1) +':</label> <input type="text" name="noiDung'+ (index+1) +'" id="noiDung'+ (index+1) +'" class="form-control m-input" placeholder="Nhập câu hỏi" autocomplete="off">');
		}
		if((QUESTIONS[index][2])!= null)
		{
			$(".dap-an-a").html('<input type="text" id="dapAnA'+ (index+1) +'" name="dapAnA'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án A" autocomplete="off" value="'+QUESTIONS[index][2]+'">');
		}
		else{
			$(".dap-an-a").html('<input type="text" id="dapAnA'+ (index+1) +'" name="dapAnA'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án A" autocomplete="off">');
		}
		if((QUESTIONS[index][3])!= null)
		{
			$(".dap-an-b").html('<input type="text" id="dapAnB'+ (index+1) +'" name="dapAnB'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án B" autocomplete="off" value="'+QUESTIONS[index][3]+'">');
		}
		else{
			$(".dap-an-b").html('<input type="text" id="dapAnB'+ (index+1) +'" name="dapAnB'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án B" autocomplete="off">');
		}
		$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+ (index+1) +'" name="dapAnDung1"> <option>A</option> <option>B</option></select>');
		if(THEMDAPAN[index] >= 1)
		{
			if((QUESTIONS[index][4])!= "")
			{
				$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+ (index+1) +'" name="dapAnDung1"> <option>A</option> <option>B</option> <option>C</option></select>');
				$(".dap-an-c").html('<input type="text" id="dapAnC'+ (index+1) +'" name="dapAnC'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án C" autocomplete="off" value="'+QUESTIONS[index][4]+'">');
			}
			else{
				$(".dap-an-c").html('');
			}
		}
		else
		{
			$(".dap-an-c").html('');
		}
		if(THEMDAPAN[index] >= 2)
		{
			if((QUESTIONS[index][5])!= "")
			{
				$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+ (index+1) +'" name="dapAnDung1"> <option>A</option> <option>B</option> <option>C</option> <option>D</option></select>');
				$(".dap-an-d").html('<input type="text" id="dapAnD'+ (index+1) +'" name="dapAnD'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án D" autocomplete="off" value="'+QUESTIONS[index][5]+'">');
			}
			else{
				$(".dap-an-d").html('');
			}
		}
		else
		{
			$(".dap-an-d").html('');
		}
		if(THEMDAPAN[index] >= 3)
		{
			if((QUESTIONS[index][6])!= "")
			{
				$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+ (index+1) +'" name="dapAnDung1"> <option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option></select>');
				$(".dap-an-e").html('<input type="text" id="dapAnE'+ (index+1) +'" name="dapAnE'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án E" autocomplete="off" value="'+QUESTIONS[index][6]+'">');
			}
			else{
				$(".dap-an-e").html('');
			}
		}
		else
		{
			$(".dap-an-e").html('');
		}
		if(THEMDAPAN[index] >= 4)
		{
			if((QUESTIONS[index][7])!= "")
			{
				$(".dap-an-dung").html('<label for="sel1">Đáp án đúng</label> <select class="form-control" id="dapAnDung'+ (index+1) +'" name="dapAnDung1"> <option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option> <option>F</option></select>');
				$(".dap-an-f").html('<input type="text" id="dapAnF'+ (index+1) +'" name="dapAnF'+ (index+1) +'" class="form-control m-input" placeholder="Nhập Đáp Án F" autocomplete="off" value="'+QUESTIONS[index][7]+'">');
			}
			else{
				$(".dap-an-f").html('');
			}
		}
		else
		{
			$(".dap-an-f").html('');
			$("#them-dap-an").show();
		}
		if((QUESTIONS[index][1])!= null)
		{
			$('#dapAnDung'+ (index+1) +'').val(QUESTIONS[index][1]);
		}
		$(".question-tbl").fadeTo("fast", 0.33).fadeTo("fast",1);
	}
	
	// how to submit
	
	$(".submit-answers").click(function(){
		$(".q-num[index='"+(SOCAU-1)+"']").trigger("click");
		$("#submit").css("transform","scale(1.5)");
		$(".q-num[index='"+(SOCAU-1)+"']").css("transform","scale(1.5)");
		setTimeout(function(){ 
			$("#submit").css("transform","scale(1)");
			$(".q-num[index='"+(SOCAU-1)+"']").css("transform","scale(1)");
		}, 150);
		return false;
	});
	
	//nộp bài
	
	$("#submit").click(function(e){
		CAUHOI = document.getElementById("noiDung"+CURRENT_QUES).value;
		DAPANA = document.getElementById("dapAnA"+CURRENT_QUES).value;
		DAPANB = document.getElementById("dapAnB"+CURRENT_QUES).value;
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 1)
		{
			DAPANC = document.getElementById("dapAnC"+CURRENT_QUES).value;
			if(DAPANC == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 0;
			}
		}
		else
		{
			DAPANC = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 2)
		{
			DAPAND = document.getElementById("dapAnD"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 1;
			}
		}
		else
		{
			DAPAND = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 3)
		{
			DAPANE = document.getElementById("dapAnE"+CURRENT_QUES).value;
			if(DAPANE == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 2;
			}
		}
		else
		{
			DAPANE = "";
		}
		if(THEMDAPAN[(CURRENT_QUES-1)] >= 4)
		{
			DAPANF = document.getElementById("dapAnF"+CURRENT_QUES).value;
			if(DAPAND == "")
			{
				THEMDAPAN[(CURRENT_QUES-1)] = 3;
			}
		}
		else
		{
			DAPANF = "";
		}
		DAPANDUNG = document.getElementById("dapAnDung"+CURRENT_QUES).value;
		QUESTIONS[(CURRENT_QUES-1)]= new Array(
			CAUHOI,
			DAPANDUNG,
			DAPANA,
			DAPANB, 
			DAPANC, 
			DAPAND,
			DAPANE,
			DAPANF
		);
		for(var j =0; j<SOCAU; j++)
		{
			for (var l = 0; l < 8; l++)
			{
				if(l<4 && QUESTIONS[j][l] == "")
				{
					swal.fire("Bạn chưa nhập đủ thông tin câu hỏi!","" , "error")
					$(".list-cau-hoi").html('');
					e.preventDefault();
					break;
				}
				$(".list-cau-hoi").append('<input type="hidden" id="dscauhoi" name="dscauhoi['+j+']['+l+']" value="'+ QUESTIONS[j][l] +'">');
			}
		}
	});

	function submitAnswers(){
		SUBMITTED = true;
		$("#submit").prop("disabled",true);
		$("#submitLoader").show().css("top","12px");
		var answers="";
		QUESTIONS.sort(function (a, b) {
			if (a[6] > b[6]) {
				return 1;
			}
			if (a[6] < b[6]) {
				return -1;
			}
			return 0;
		});
		for(var i=0;i<QUESTIONS.length;i++){
			answers+=(i+1)+"-"+(QUESTIONS[i][7] ? QUESTIONS[i][7] : "0")+",";
		}
		answers = answers.slice(0, -1);	
	}
}); 
window.onbeforeunload = function(event){
	return "All your answers will be reset. Are you sure to refresh the page ?";
};
</script>
<div class="dq-test-outer-wrapper">
	<div class="dq-test-title">{{$khoaHoc->ten_khoa_hoc}}
	</div>
	<div id="testContent">
		<!-- <div class="half-width instruction-section" style="margin:30px 0px;background:#f0f0f0;border-radius:5px;">
			<div id="testMeta" class="chi-tiet-kt"></div>
                <div class="half-width login-section">
                <input type="button" id="bat-dau" value="Bắt đầu" class="btn btn-primary"/>
                <img class="start-loader display-none" src="https://i.imgur.com/urJ99xr.gif"/>
		    </div>
		</div> -->
        <form method="post" action="{{ route('export') }}" role="form" id="formCauHoi">
            {!! csrf_field() !!}
			<div class="instruction-section">
				<div>
					<label for="chuong">Chọn chương:</label>
					<select id="chuong" name="chuong">
						@foreach($chuong as $Chuong)
					  		<option value="{{$Chuong->id}}">{{$Chuong->ten_chuong}}</option>
					  	@endforeach
					</select>
					
				</div>
				<div>
					<label for="TenBaiKT">Tên bài kiểm tra:</label>
					<input type="text" name="TenBaiKT" id="TenBaiKT" class="form-control m-input" placeholder="Nhập ten bai kt" autocomplete="off" required>
					<br/>
					<label for="soCauHoi">Số câu hỏi:</label>
					<input type="number" id="soCauHoi" name="soCauHoi" min="1" max="50" required>
					<br/>
					<label for="soCauHoi">Thời gian làm (phút):</label>
					<input type="number" id="thoiGianLam" name="thoiGianLam" min="1" max="180" required>
				</div>
				<br/>
				<button type="button" id="thoi-gian-cong-bo" class="btn-primary">Thêm thời gian bắt đầu và kết thúc bài kiểm tra</button>
				<div class="thoi-gian-hien-thi inline-block display-none">
					<label for="birthdaytime">Thời gian bắt đầu bài kiểm tra (bỏ trống nếu không sử dụng)</label>
					<br/>
					<input type="datetime-local" id="batDauKT" name="batDauKT">
					<br/>
					<label for="birthdaytime">Thời gian kết thúc bài kiểm tra (bỏ trống nếu không sử dụng)</label>
					<br/>
					<input type="datetime-local" id="ketThucKT" name="ketThucKT">
				</div>
				<br/>
				<input type="radio" id="hienthi" name="hienThiKQ" value="HienThi">
				<label for="hienthi">Hiển Thị kết quả khi hoàn thành bài kiểm tra</label><br>
				<input type="radio" id="lamlai" name="hienThiKQ" value="LamLai">
				<label for="lamlai">Cho phép làm lại bài kiểm tra</label><br>
				<input type="radio" id="khong" name="hienThiKQ" value="0" checked>
				<label for="khong">Không hiển thị và không cho phép làm lại</label><br>
				<br/>
				<button type="button" id="tao-cau-hoi" class="btn btn-primary">Tạo câu hỏi</button>
			</div>
            <div class="question-section inline-block display-none">
                <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2"></div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div id="inputFormRow">
                            <div class="form-group cau-hoi">
                                
                            </div>
                            <div class="form-group dap-an-a">
                                
                            </div>
                            <div class="form-group dap-an-b">
                                
                            </div>
                            <div class="form-group dap-an-c">
                                
                            </div>
                            <div class="form-group dap-an-d">
                                
                            </div>
							<div class="form-group dap-an-e">
                                
                            </div>
							<div class="form-group dap-an-f">
                                
                            </div>
							<div>
								<button type="button" id="them-dap-an" class="btn btn-primary">Thêm đáp án</button>
							</div>
                            <div class="form-group dap-an-dung">
                                
                            </div>
							<div class="form-group list-cau-hoi">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="question-navigation inline-block display-none" style="width:30%;padding: 1% 2% 2% 2%;margin: 2% 0%;vertical-align:top;border-left: 1px solid #c0c0c0;">
                <div class="user right"></div>
                <div class="timer display-none">Time remaining: <span id="timeRemaining" style="font-weight:bold;"></span></div>
                <div class="num-wrapper"></div>
                <div class="left" style="margin-top: 20px;">
                    <button type="button" id="next" class="btn btn-primary next">&#10137;</button>
                    <button type="submit" id="submit" class="btn btn-submit display-none">Hoàn tất </button>
                    <img id="submitLoader" src="https://i.imgur.com/urJ99xr.gif"/>
                </div>
                <div class="right" style="font-size:14px;margin: 10px 0px;"><a href="#" class="submit-answers">Làm thế nào để nộp bài</a></div>
            </div>           
        </form>
		<div class="test-finished no-score display-none">
			<h3>Bạn đã hoàn thành bài kiểm tra?</h3>
		</div>
		<div class="test-finished with-score display-none"></div>
		<div class="with-ques display-none">
			<div class="half-width only-questions"></div>
			<div class="half-width only-scores"></div>
		</div>
	</div>
</div>