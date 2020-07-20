
<script>
	var DEPLOYED_WEB_APP_URL = "https://script.google.com/macros/s/AKfycbwGAOmLhCZNm4lSKif_u7jSXs3nwtaf7h6C4K9vchWkSCtiaGMr/exec";
</script>


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
var TEST_DETAILS,QUESTIONS,CURRENT_QUES=0,USERNAME,PASSWORD,SUBMITTED=false;
var CAUHOI = 2;
$(document).ready(function(){
	
    $.ajax({
        type: "GET", 
        url: DEPLOYED_WEB_APP_URL+"?action=testDetails", 
        success:function(response){
			$("#testContent").show();
        	TEST_DETAILS = JSON.parse(response);
        	$(".dq-test-title").html(TEST_DETAILS.title);
        	if(TEST_DETAILS.timeAlotted>0){
        		$("#testMeta").append("Thời gian làm : "+TEST_DETAILS.timeAlotted+" phút");
        	}
			$("#testMeta").append("<br/> Số câu hỏi : "+(CAUHOI.length-1));
        }, 
		error: function(xhr, textStatus, errorThrown) {
            alert("Some error occured while loading the test, please refresh the page.");
        }
    });
	$("#bat-dau").click(function(){
		$(".start-loader").show();
		
		USERNAME = $("#regnNum").val();
		PASSWORD = $("#password").val();
		QUESTIONS = CAUHOI;
		$(".user").text("Minh Tân");
		$(".login-section,.instruction-section").remove();
		$(".question-section,.question-navigation").css("display","inline-block");
		for(var i=0;i<QUESTIONS.length;i++){
			$(".question-navigation .num-wrapper").append("<div class='inline-block q-num' index="+i+">"+(i+1)+"</div>");
		}
		$(".q-num[index='0']").trigger("click");
		if(TEST_DETAILS.timeAlotted>0){
			countDown(TEST_DETAILS.timeAlotted);
		}
	});
	
	$("#regnNum,#password").keypress(function(e) {
		if(e.which == 13) {
			$("#bat-dau").trigger("click");
		}
	});

	//Hiển thị nút submit và nút tiếp theo

	$(document).on("click",".q-num",function(){
		$(".q-num").css({"border":"1px solid #c0c0c0","fontWeight":"normal"});
		$(".q-num").eq($(this).attr("index")).css({"border":"1px solid #0077A7","fontWeight":"bold"});
		var self = this;
		CURRENT_QUES = parseInt($(self).attr("index"));
		setTimeout(function(){ 
			populateQuestion(QUESTIONS[$(self).attr("index")],parseInt($(self).attr("index")));
		}, 250);
		if(CURRENT_QUES>=QUESTIONS.length-1){
			$("#next").hide();
			$("#submit").show();
		}else{
			$("#next").show();
			$("#submit").hide();
		}
	});
	
	//đổi màu câu đã tick
	
	$(document).on("click","input[name='dq-op']",function(){
		if(QUESTIONS[CURRENT_QUES][7]){
			if($(this).is(":checked")){
				QUESTIONS[CURRENT_QUES][7] = parseInt($(this).attr("id").replace("dq-op",""));
			}else{
				QUESTIONS[CURRENT_QUES][7] = 0;
			}
		}else{
			QUESTIONS[CURRENT_QUES].push(0);
			QUESTIONS[CURRENT_QUES][7] = parseInt($(this).attr("id").replace("dq-op",""));
		}
		$('input:checkbox:not("#'+$(this).attr("id")+'")').prop("checked",false);
		
		if($(this).is(":checked")){
			$(".q-num[index='"+CURRENT_QUES+"']").css("background","#8CC4DA");
		}else{
			$(".q-num[index='"+CURRENT_QUES+"']").css("background","#f0f0f0");
		}
	});
	
	// tiếp tục
	
	$("#next").click(function(){
		CURRENT_QUES = CURRENT_QUES+1;
		$(".q-num[index='"+CURRENT_QUES+"']").trigger("click");
	});
	
	// lấy câu hỏi
	
	function populateQuestion(ques,index){
		$(".question").html("<td>Câu số "+(index+1)+"</td><td>"+ques[0]+"</td>");
		$(".option1").html("<td><input type='checkbox' id='dq-op1' name='dq-op'/></td><td><label for='dq-op1'>"+ques[1]+"</label></td>");
		$(".option2").html("<td><input type='checkbox' id='dq-op2' name='dq-op'/></td><td><label for='dq-op2'>"+ques[2]+"</label></td>");
		$(".option3").html("<td><input type='checkbox' id='dq-op3' name='dq-op'/></td><td><label for='dq-op3'>"+ques[3]+"</label></td>");
		$(".option4").html("<td><input type='checkbox' id='dq-op4' name='dq-op'/></td><td><label for='dq-op4'>"+ques[4]+"</label></td>");
		if(ques[7]){
			$("#dq-op"+ques[7]).prop("checked","true");
		}
		$(".question-tbl").fadeTo("fast", 0.33).fadeTo("fast",1);
	}
	
	// how to submit
	
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
	
	//nộp bài
	
	$("#submit").click(function(){
		console.log("TEST_DETAILS",TEST_DETAILS);
		if(confirm("Are you sure to submit your answers ?")){
			submitAnswers();
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
							alert("Time up ! Your answers have been submitted.");	
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
<div class="dq-test-outer-wrapper">
	<div class="dq-test-title">
	</div>
	<div id="testContent">
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
			</table>
		</div>
		<div class="question-navigation inline-block display-none" style="width:30%;padding: 1% 2% 2% 2%;margin: 2% 0%;vertical-align:top;border-left: 1px solid #c0c0c0;">
			<div class="user right"></div>
			<div class="timer display-none">Time remaining: <span id="timeRemaining" style="font-weight:bold;"></span></div>
			<div class="num-wrapper"></div>
			<div class="left" style="margin-top: 20px;">
				<input type="button" id="next" value="&#10137;" class="btn btn-primary next"/>
				<input type="button" id="submit" value="Submit" class="btn btn-submit display-none"/>
				<img id="submitLoader" src="https://i.imgur.com/urJ99xr.gif"/>
			</div>
			<div class="right" style="font-size:14px;margin: 10px 0px;"><a href="#" class="submit-answers">Làm thế nào để nộp bài</a></div>
		</div>
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