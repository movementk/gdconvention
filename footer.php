	<!-- FOOTER -->
	<div class='footer-wrapper footer'>
		<footer>
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-12 col-md-8">
						<ul class="fl-wrapper">
							<li><a href="#"><img src="../img/common/f-logo.jpg" class="f-logo-img img-responsive" alt=""></a></li>
							<li>
								<ul class="f-nav">
									<li><a href="#">빠른상담문의</a></li>
									<li><a href="../about/contact.php">오시는길</a></li>
									<li><a href="#">예약상담</a></li>
									<li><a href="#">전화상담</a></li>
								</ul>
								<div class="clearfix"></div>
								<div class="f-address">
									<p><span>주소 :</span> 경기도 안산시 단원구 광덕4로 140 GD팰리스타워</p>
									<p>
										<span>대표 :</span> 황수원
										<span>사업자번호 :</span> 134-85-56764
										<span>대표전화 :</span> 031-487-8100
										<span>팩스 :</span> 031-413-0606
									</p>
									<p>COPYRIGHT(C) 2015 GD STYLE ALL RIGHT RESERVED. Site by Movement K Group.</p>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="fr-wrapper">
							<div class="dropup">
								<button class="btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownMenu" aria-haspopup="true" aria-expanded="false">
									<label for="">관련사이트</label>
									<span class="caret"><!-- <i class="fa fa-angle-up"></i> --></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu">
									<li><a href="#">site1</a></li>
									<li><a href="#">site2</a></li>
									<li><a href="#">site3</a></li>
								</ul>
							</div>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
						</div>
					</div>

				</div>
			</div>
		<footer>
	</div><?//.footer-wrapper?>

</div><?//.site-wrapper?>

<script>
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){            
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});
});
</script>
</body>
</html>