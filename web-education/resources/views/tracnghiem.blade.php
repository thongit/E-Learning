
<script>
	var DEPLOYED_WEB_APP_URL = "https://script.google.com/macros/s/AKfycbwGAOmLhCZNm4lSKif_u7jSXs3nwtaf7h6C4K9vchWkSCtiaGMr/exec";
</script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<!-- <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script> -->
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 
<link rel="shortcut icon" href=" {{ asset ('assets/img/favicon.png') }}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<title>EDUQTTT - Kiểm tra</title>
<style>
	.title-kh{
		text-align: center;
    	color: #002147;
    	font-family: 'Poppins', sans-serif;
    	letter-spacing: 0;
	}

	.dq-test-outer-wrapper{
		margin: 5%;
		margin-top: 0;
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
<link href=" {{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<script src=" {{ asset ('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href='https://fonts.googleapis.com/css?family=Dosis:500,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
var TEST_DETAILS,QUESTIONS,CURRENT_QUES=0,CAUDUNG = 0,CAUBO = 0,SUBMITTED=false, DIEM, BAILAM = "";
var CAUHOI = {!! json_encode($cauHoi) !!};
var BAIKTID = {!! json_encode($chuong) !!};

$(document).ready(function(){
	$('#lamLai').prop("disabled",true);
	$("#testContent").show();
	$(".dq-test-title").html("Tên bài kiểm tra: "+BAIKTID.ten_bai_kt);
	if(BAIKTID.thoi_gian_lam>0){
		$("#testMeta").append("Thời gian làm : "+BAIKTID.thoi_gian_lam+" phút");
	}
	$("#testMeta").append("<br/> Số câu hỏi : "+(CAUHOI.length));

	$("#bat-dau").click(function(){
		$(".start-loader").show();
		QUESTIONS = CAUHOI;
		$(".user").text("{{ Session::get('ho_ten') }}");
		$(".login-section,.instruction-section").remove();
		$(".question-section,.question-navigation").css("display","inline-block");
		for(var i=0;i<QUESTIONS.length;i++){
			$(".question-navigation .num-wrapper").append("<div class='inline-block q-num' index="+i+">"+(i+1)+"</div>");
		}
		$(".q-num[index='0']").trigger("click");
		if(BAIKTID.thoi_gian_lam>0){
			countDown(BAIKTID.thoi_gian_lam);
		}
	});
	
	$("#regnNum,#password").keypress(function(e) {
		if(e.which == 13) {
			$("#bat-dau").trigger("click");
		}
	});

	$(document).on("click",".q-num",function(){
		$(".q-num").css({"border":"1px solid #c0c0c0","fontWeight":"normal"});
		$(".q-num").eq($(this).attr("index")).css({"border":"1px solid #0077A7","fontWeight":"bold"});
		var self = this;
		CURRENT_QUES = parseInt($(self).attr("index"));
		setTimeout(function(){ 
			populateQuestion(QUESTIONS[CURRENT_QUES],parseInt($(self).attr("index")));
		}, 250);
		if(CURRENT_QUES>=QUESTIONS.length-1){
			$("#next").hide();
			$("#submit").show();
		}else{
			$("#next").show();
			$("#submit").hide();
		}
	});
	
	$(document).on("click","input[name='dq-op']",function(){
		if(QUESTIONS[CURRENT_QUES][8]){
			if($(this).is(":checked")){
				QUESTIONS[CURRENT_QUES][8] = $(this).attr("id").replace("dq-op","");
			}
			else{
				QUESTIONS[CURRENT_QUES][8] = null;
			}
		}else{
			QUESTIONS[CURRENT_QUES].push(0);
			QUESTIONS[CURRENT_QUES][8] = $(this).attr("id").replace("dq-op","");
		}
		$('input:checkbox:not("#'+$(this).attr("id")+'")').prop("checked",false);
		
		if($(this).is(":checked")){
			$(".q-num[index='"+(CURRENT_QUES)+"']").css("background","#8CC4DA");
		}else{
			$(".q-num[index='"+(CURRENT_QUES)+"']").css("background","#f0f0f0");
		}
	});
	
	$("#next").click(function(){
		CURRENT_QUES = CURRENT_QUES+1;
		$(".q-num[index='"+CURRENT_QUES+"']").trigger("click");
	});
	
	function populateQuestion(ques,index){
		$(".question").html("<td>Câu "+(index+1)+":</td><td>"+ques[0]+"</td>");
		$(".option1").html("<td><input type='checkbox' id='dq-opA' name='dq-op'/></td><td><label for='dq-opA'>"+ques[2]+"</label></td>");
		$(".option2").html("<td><input type='checkbox' id='dq-opB' name='dq-op'/></td><td><label for='dq-opB'>"+ques[3]+"</label></td>");
		if(ques[4] != null)
		{
			$(".option3").html("<td><input type='checkbox' id='dq-opC' name='dq-op'/></td><td><label for='dq-opC'>"+ques[4]+"</label></td>");
		}
		else
		{
			$(".option3").html("");
		}
		if(ques[5] != null)
		{
			$(".option4").html("<td><input type='checkbox' id='dq-opD' name='dq-op'/></td><td><label for='dq-opD'>"+ques[5]+"</label></td>");
		}
		else
		{
			$(".option4").html("");
		}
		if(ques[6] != null)
		{
			$(".option5").html("<td><input type='checkbox' id='dq-opE' name='dq-op'/></td><td><label for='dq-opE'>"+ques[6]+"</label></td>");
		}
		else
		{
			$(".option5").html("");
		}
		if(ques[7] != null)
		{
			$(".option6").html("<td><input type='checkbox' id='dq-opF' name='dq-op'/></td><td><label for='dq-opF'>"+ques[7]+"</label></td>");
		}
		else
		{
			$(".option6").html("");
		}
		if(ques[8]){
			$("#dq-op"+ques[8]).prop("checked","true");
		}
		$(".question-tbl").fadeTo("fast", 0.33).fadeTo("fast",1);
	}
	
	$(".submit-answers").click(function(){
		$(".q-num[index='"+(QUESTIONS.length-1)+"']").trigger("click");
		$("#submit").css("transform","scale(1.5)");
		$(".q-num[index='"+(QUESTIONS.length-1)+"']").css("transform","scale(1.5)");
		setTimeout(function(){ 
			$("#submit").css("transform","scale(1)");
			$(".q-num[index='"+(QUESTIONS.length-1)+"']").css("transform","scale(1)");
		}, 150);
		return false;
	});
	
	$("#submit").click(function(){
		if(confirm("Are you sure to submit your answers ?")){
			submitAnswers();
		}
	});

	function submitAnswers(){
		SUBMITTED = true;
		$("#submit").prop("disabled",true);
		$("#submitLoader").show().css("top","12px");
		$(".question-section,.question-navigation").remove();
		for(i=0;i<QUESTIONS.length;i++){
			if(QUESTIONS[i][1] == QUESTIONS[i][8]){
				CAUDUNG = CAUDUNG + 1;
			}
			if(QUESTIONS[i][8] == null)
			{
				CAUBO = CAUBO + 1;
				BAILAM += "_";
			}
			else{
				BAILAM += QUESTIONS[i][8];
			}
			console.log(CAUDUNG);
		}
		DIEM = CAUDUNG +"/"+QUESTIONS.length;
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type:'POST',
			url:'{{ route("luu-ket-qua") }}',
			data:
			{
			_token : '<?php echo csrf_token() ?>',
			diem: DIEM,
			bailam: BAILAM,
			baiktid : BAIKTID.id
			},
			success:function(data) { 
				if(BAIKTID.hien_thi==1){
					$(".with-ques").show();
					for(i=0;i<QUESTIONS.length;i++){
						htmlTable="<table id='qwn-"+i+"'><tr class='question'><td class='v-top'>Câu "+(i+1)+":</td><td class='left'>"+QUESTIONS[i][0]+"</td></tr>";
						htmlTable+="<tr class='option optionA'><td class='v-top'><input disabled type='checkbox' id='dq-opA' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][2]+"</label></td></tr>";
						htmlTable+="<tr class='option optionB'><td class='v-top'><input disabled type='checkbox' id='dq-opB' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][3]+"</label></td></tr>";
						if(QUESTIONS[i][4] != null)
						{
							htmlTable+="<tr class='option optionC'><td class='v-top'><input disabled type='checkbox' id='dq-opC' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][4]+"</label></td></tr>";
						}
						if(QUESTIONS[i][5] != null)
						{
							htmlTable+="<tr class='option optionD'><td class='v-top'><input disabled type='checkbox' id='dq-opD' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][5]+"</label></td></tr>";
						}
						if(QUESTIONS[i][6] != null)
						{
							htmlTable+="<tr class='option optionE'><td class='v-top'><input disabled type='checkbox' id='dq-opE' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][6]+"</label></td></tr>";
						}
						if(QUESTIONS[i][7] != null)
						{
							htmlTable+="<tr class='option optionF'><td class='v-top'><input disabled type='checkbox' id='dq-opF' name='dq-op'/></td><td class='left'><label for='dq-op2'>"+QUESTIONS[i][7]+"</label></td></tr>";
						}
						$(".with-ques .only-questions").append(htmlTable);
						$("#qwn-"+i+" #dq-op"+QUESTIONS[i][1]).prop("checked",true);
						$("#qwn-"+i+" .option"+QUESTIONS[i][1]).css("color","green");
						$("#qwn-"+i+" .option"+QUESTIONS[i][8]).css({"font-weight":"bold", "font-size": "x-large"});
						if(QUESTIONS[i][1] != QUESTIONS[i][8]){
							$("#qwn-"+i+" .option"+QUESTIONS[i][8]).css("color","red");
						}
					}
					displayScore(".with-ques .only-scores");
					console.log(QUESTIONS);
				}
				else {
					$(".with-score").show();
					displayScore(".with-score");
					if(data.msg != 0)
					{
						if(BAIKTID.lam_lai==1)
						{
							$('.lam-lai').css("display","inline-block");
							$('#lamLai').prop("disabled",false);
						}
					}
				}
			}
		});
	}

	function submitLamLai(){
		$.ajax({
			type:'POST',
			url:'{{ route("lam-lai") }}',
			data:
			{
			_token : '<?php echo csrf_token() ?>',
			baiktid : BAIKTID.id
			},
			success:function(data) {
				location.reload();
			}
		});
	}

	$("#lamLai").click(function (){
		Swal.fire({
			title: 'Bài làm này sẽ bị hủy! Bạn có muốn tiếp tục?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Làm lại!',
			cancelButtonText:'Không'
			}).then((result) => {
			if (result.value) {
				location.reload();
			}
		})
	});

	function displayScore(placeholder){
		$(placeholder).append("<div>Tên: <span> {{ Session::get('ho_ten') }} </span></div>");
		$(placeholder).append("<div>Điểm: <span>"+DIEM+"</span></div>");
		$(placeholder).append("<div>Tỷ lệ: <span>"+Math.round(((CAUDUNG/QUESTIONS.length) * 100 * 100) / 100).toFixed(2)+"%</span></div>");
		$(placeholder).append("<div>Số câu đúng: <span class='green'>"+ CAUDUNG +"</span></div>");
		$(placeholder).append("<div>Số câu sai: <span class='red'>"+ (QUESTIONS.length - CAUDUNG - CAUBO) +"</span></div>");
		$(placeholder).append("<div>Số câu bỏ qua: <span>"+ CAUBO +"</span></div>");
	}

	function countDown(minutes) {
		$(".timer").show();
		var seconds = 60;
		function tick() {
			var minutesNow = minutes-1
			seconds--;
			$("#timeRemaining").html(minutesNow.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds));
			if( seconds > 0 ) {
				setTimeout(tick, 1000);
			} else {
				if(minutes > 1){
					countDown(minutes-1);
				}else{
					if(!SUBMITTED){
						$(".q-num[index='"+(QUESTIONS.length-1)+"']").trigger("click");
						submitAnswers();
						setTimeout(function(){
							alert("Hết thời gian ! Bài kiểm tra của bạn đã kết thúc!");	
						}, 1000);
					}
				}
			}
		}
		tick();
	}
}); 
window.onbeforeunload = function(event){
	return "All your answers will be reset. Are you sure to refresh the page ?";
};
</script>
<div class="title-kh">
	<h2>Khóa học: {{$chuong->Chuong->khoaHoc->ten_khoa_hoc}}</h2>
	<h3>Chương: {{$chuong->Chuong->ten_chuong}}</h3>
</div>
<div class="dq-test-outer-wrapper">
	<div class="dq-test-title">
	</div>
	<div id="testContent">
	<form method="post" action="{{ route('luu-ket-qua') }}" role="form">
		{!! csrf_field() !!}
		<div class="half-width instruction-section" style="margin:30px 0px;background:#f0f0f0;border-radius:5px;">
			<div id="testMeta" class="chi-tiet-kt"></div>
			<div class="half-width login-section">
			<input type="button" id="bat-dau" value="Bắt đầu" class="btn btn-primary"/>
			<img class="start-loader display-none" src="https://i.imgur.com/urJ99xr.gif"/>
		</div>
		</div>
		<div class="question-section inline-block display-none">
			<table class="question-tbl">
				<tr class="question"></tr>
				<tr class="option option1"></tr>
				<tr class="option option2"></tr>
				<tr class="option option3"></tr>
				<tr class="option option4"></tr>
				<tr class="option option5"></tr>
				<tr class="option option6"></tr>
			</table>
		</div>
		<div class="question-navigation inline-block display-none" style="width:30%;padding: 1% 2% 2% 2%;margin: 2% 0%;vertical-align:top;border-left: 1px solid #c0c0c0;">
			<div class="user right"></div>
			<div class="timer display-none">Thời gian còn lại: <span id="timeRemaining" style="font-weight:bold;"></span></div>
			<div class="num-wrapper"></div>
			<div class="left" style="margin-top: 20px;">
				<input type="button" id="next" value="&#10137;" class="btn btn-primary"/>
				<input type="button" id="submit" value="Nộp bài" class="btn-primary btn-lg display-none"/>
				<img id="submitLoader" src="https://i.imgur.com/urJ99xr.gif"/>
			</div>
			<div class="right" style="font-size:16px;margin: 10px 0px;"><a href="#" class="btn-warning submit-answers">Làm thế nào để nộp bài</a></div>
		</div>
		</form>
		<div class="test-finished no-score display-none">
			<h3>Bạn đã hoàn thành bài kiểm tra?</h3>
		</div>
		<div class="test-finished with-score display-none"></div>
		<form method="post" action="{{ route('lam-lai') }}" role="form">
			{!! csrf_field() !!}
			<div style="text-align:center" class="lam-lai display-none">
				<input type="button" id="lamLai" class="btn-primary btn-lg" value="Làm lại" />
			</div>
		</form>
		<div class="with-ques display-none">
			<div class="half-width only-questions"></div>
			<div class="half-width only-scores"></div>
		</div>
	</div>
</div>