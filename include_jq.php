<script  src="assets/js/jquery-1.11.2.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/module/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.lazyload.min.js"></script>
<script src="assets/js/BS3JS.min.js"></script> 

<!-- slick  -->
<script src="assets/module/slick/slick.js"></script>
<!-- slick 自訂 -->
<script src="js/slick-addscripts.js"></script> 
<!-- header offcanvas -->	
<script src="assets/js/bootstrap.offcanvas.js"></script>  

<!-- 送select選單內容至select框內 -->	
<script type="text/javascript">
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>  

<!-- Tab-->
<script type="text/javascript">
	$(function () {
          // 預設顯示第一個 Tab
          var _showTab = 0;
          var $defaultDiv = $('div.tabs').eq(_showTab).addClass('active');
          $($defaultDiv.find('a').attr('href')).siblings('div.tab_container').hide();

          // 當 li 頁籤被點擊時...
          // 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
          $('div.tabs').click(function () {
              // 找出 li 中的超連結 href(#id)
              var $this = $(this),
              _clickTab = $this.find('a').attr('href');
              // 把目前點擊到的 li 頁籤加上 .active
              // 並把兄弟元素中有 .active 的都移除 class
              $this.addClass('active').siblings('.active').removeClass('active');
              // 淡入相對應的內容並隱藏兄弟元素
              $(_clickTab).stop(false, true).fadeIn().siblings('div.tab_container').hide();

              return false;
            })
          $("#font_l").trigger('click');
        });
      </script>
      <!-- Tab 自訂-->
      <script type="text/javascript">
      	function Focus(id) {
      		$("#" + id).trigger('click');
      		document.getElementById(id).focus();
      	}
      </script>  
      <!-- scrollUp-->
      <script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script> 
      <!-- scrollUp 自訂-->     
      <script type="text/javascript">
      	$(function () {
      		$.scrollUp({
		    scrollName: 'scrollUp', // Element ID
		    topDistance: '300', // Distance from top before showing element (px)
		    topSpeed: 300, // Speed back to top (ms)
		    animation: 'fade', // Fade, slide, none
		    animationInSpeed: 200, // Animation in speed (ms)
		    animationOutSpeed: 200, // Animation out speed (ms)
		    scrollText: 'Scroll to top', // Text for element
		    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		  });
      	});
      </script>
      <script type="text/javascript">
      	$(function(){
      		$(".FontSmall").click(
      			function(){
      				$(".ContentPage").css({fontSize:"90%"});
      				// $("h1").css({fontSize:"35px"});
      				// $("h2").css({fontSize:"28px"});
      				// $("h3").css({fontSize:"22px"});
      				// $("h4").css({fontSize:"15px"});
      				// $("h5").css({fontSize:"11px"});
      				// $("h6").css({fontSize:"10px"});
      				return false;
      				
      			}
      			)
      		$(".FontMidium").click(
      			function(){
      				$(".ContentPage").css({fontSize:"100%"});
      				// $("h1").css({fontSize:"39px"});
      				// $("h2").css({fontSize:"32px"});
      				// $("h3").css({fontSize:"26px"});
      				// $("h4").css({fontSize:"19px"});
      				// $("h5").css({fontSize:"15px"});
      				// $("h6").css({fontSize:"13px"});
      				return false;
      				
      			}
      			)
      		$(".FontLarge").click(
      			function(){
      				$(".ContentPage").css({fontSize:"110%"});
      				// $("h1").css({fontSize:"43px"});
      				// $("h2").css({fontSize:"36px"});
      				// $("h3").css({fontSize:"30px"});
      				// $("h4").css({fontSize:"23px"});
      				// $("h5").css({fontSize:"19px"});
      				// $("h6").css({fontSize:"17px"});
      				return false;	
      			}
      			)
      	})
      </script>
      <!-- dropdownHover-->
      <script src="js/bootstrap-hover-dropdown.js"></script>
      <script type="text/javascript">
      	$(document).ready(function() {
      		$('.js-activated').dropdownHover().dropdown();
      	});
      </script>
      <script type="text/javascript">
      	$(function () {
		// $('ul.nav li.dropdown').hover(function(){
		// 	$('ul',this).stop(true,true).fadeIn();
		// 	},function(){
		// 	$('ul',this).stop(true,true).fadeOut();
		// 	}
		// );
		// $("ul.nav li.dropdown a").focus(function() {
		// 	$('.dropdown-menu').stop(true, true).fadeOut(300);
	 //    	$(this).parent().find('.dropdown-menu').stop(true, true).fadeIn(300);
		// });

		// $("ul.nav li.dropdown .dropdown-menu li:last-child a").blur(function() {
		//     $('.dropdown-menu').stop(true, true).fadeOut(300);
		// });
		// $(".ul.nav li.dropdown").keyup(function(){
	 //        $(this).children("ul").stop(true,true).fadeIn();
	 //    })
	 //    $(".ul.nav li.dropdown li:last-child").on("focusout",function(){
	 //        $(".ul.nav li.dropdown ul").fadeOut();
	 //    })
		// $('ul.nav').children('li.dropdown').hover(
		// 	function(){$(this).children().stop().fadeIn(200);},
		// 	function(){$(this).children('ul').stop().fadeOut(200);}
		// );
		$('ul.nav').children('li.dropdown').keyup(
			function(){
				$(this).children().show();
				$(this).siblings().focus(function(){
					$(this).hide()
				});
			});
		$('ul.nav').children('li.dropdown').keyup(	
			function(){
				$(this).siblings().children('ul').hide();
			});
		$('ul.nav li.dropdown li:last>a').focusout(
			function(){
				$('ul.nav li.dropdown ul').hide();
			})
	});
</script>
<script type="text/javascript">
	$(function () {
		$('.FAQ dd').hide();
		$('.FAQ dd:first-of-type').show();
		$('.FAQ dt:first-of-type').addClass("Answerclose");

		$('.FAQ dt').click(function() {
			$('.FAQ dd').slideUp();
			$('.FAQ dt').removeClass("Answerclose");

			$(this).next().slideDown();
			$(this).addClass("Answerclose");
			return false;
		});
	});
</script>
