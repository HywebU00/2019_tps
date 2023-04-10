<!DOCTYPE html>
<html lang="zh-TW">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>		
	<!-- Content -->
	<section id="MainContent">
		<div class="container">
			<!-- Content -->
			<div class="row">					
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- function -->
					<?php require_once('include_function.php'); ?>						
					<!-- content -->											
					<div class="ContentPage Forward">									
						<h2 class="PageTitle">轉寄友人</h2>	
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inputName" class="col-md-2 control-label">您的姓名</label>
								<div class="col-md-9">
									<input type="name" class="form-control" id="inputName" placeholder="您的姓名">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-md-2 control-label"><span class="required">*</span>您的電子信箱</label>
								<div class="col-md-9">
									<input type="email" class="form-control" id="inputEmail1" placeholder="您的電子信箱">
								</div>
							</div>
							<div class="form-group">
								<label for="inputName" class="col-md-2 control-label">好友姓名</label>
								<div class="col-md-9">
									<input type="name" class="form-control" id="inputName" placeholder="好友姓名">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail2" class="col-md-2 control-label"><span class="required">*</span>好友的電子信箱</label>
								<div class="col-md-9">
									<input type="email" class="form-control" id="inputEmail2" placeholder="好友的電子信箱">
									<span class="hint">Email以逗號「，」區隔，可同時發信給多位收件人。</span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputName" class="col-md-2 control-label">標題</label>
								<div class="col-md-9">
									<input type="name" class="form-control" id="inputName" placeholder="標題">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-md-2 control-label"><span class="required">*</span>請寫下您的訊息</label>
								<div class="col-md-9">
									<textarea class="form-control" rows="3" placeholder="請寫下您的訊息"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><span class="required">*</span>驗證碼</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="inputPassword3" placeholder="驗證碼：">
								</div>
								<div class="col-sm-5">
									<span class="captcha"><img src="images/basic/code.bmp"></span>
									<button type="submit" class="btn btn-gray">重新產生</button>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-10">
									<button type="submit" class="btn btn-orange">寄出</button>
									<button type="clear" class="btn btn-gray">重填</button>
								</div>
							</div>
						</form>							
					</div>
					<!-- function -->
					<?php require_once('include_functionbottom.php'); ?>
				</article>
			</div>
		</div>
	</section>		
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>	
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
	
</body>
</html>