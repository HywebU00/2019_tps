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
					<div class="ContentPage">									
						<div class="Search">
							<form>
								<div class="input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<button type="button" class="btn btn-info">
											<span class="glyphicon glyphicon-search"></span> 搜尋
										</button>
									</span>
								</div>
							</form>
						</div>
						<div class="GoogleSearch">
							搜尋放這
						</div>							
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