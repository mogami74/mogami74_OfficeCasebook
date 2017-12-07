		<footer id="l-blog-container__footer" class="l-contents">
		<?php wp_footer(); ?>
			<small>&copy;mogami74;</small>
		</footer>
    <script>
/*
      jQuery(function($){
        var doc=$(document);
        var lmain=$('.l-main__wrapper');
        var lblogcontainer=$('#l-blog-container');
        console.log(window.innerWidth);
        doc.on('click', '#sidebar a', function(){　event.stopPropagation();　});
        doc.on('click', '#sidebar', function(){
          if(window.innerWidth < 768){
            var lmain_width=parseInt(lmain.css('width'));
            var moveNecessary=320+lmain_width-parseInt(lblogcontainer.css('width'));
            var tglMargin=-moveNecessary-parseInt(lmain.css('margin-left'));
            lmain.animate({marginLeft:tglMargin+'px'},500);
					}
        });
      });
*/
        /* ▼ココカラ スワイプ検知*/
      jQuery(function($) {
        var doc=$(document);
        var lmain=$('.l-main__wrapper');
        var lblogcontainer=$('#l-blog-container');
        $('body').on('touchstart', onTouchStart); //指が触れたか検知
        $('body').on('touchmove', onTouchMove); //指が動いたか検知
        $('body').on('touchend', onTouchEnd); //指が離れたか検知
        var direction, position;

        //スワイプ開始時の横方向の座標を格納
        function onTouchStart(event) {
          position = getPosition(event);
          direction = ''; //一度リセットする
        }

        //スワイプの方向（left／right）を取得
        function onTouchMove(event) {
          if (position - getPosition(event) > 70) { // 70px以上移動しなければスワイプと判断しない
            direction = 'left'; //左と検知

          } else if (position - getPosition(event) < -70){  // 70px以上移動しなければスワイプと判断しない
            direction = 'right'; //右と検知
          }
        }

        function onTouchEnd(event) {
          if (direction == 'right'){
            if(window.innerWidth < 768){
              var lmain_width=parseInt(lmain.css('width'));
              var moveNecessary=320+lmain_width-parseInt(lblogcontainer.css('width'));
              var tglMargin=-moveNecessary-parseInt(lmain.css('margin-left'));
              lmain.animate({marginLeft:tglMargin+'px'},500);
            }
          } else if (direction == 'left'){
            if(window.innerWidth < 768){
              var lmain_width=parseInt(lmain.css('width'));
              var moveNecessary=320+lmain_width-parseInt(lblogcontainer.css('width'));
              var tglMargin=-moveNecessary-parseInt(lmain.css('margin-left'));
              lmain.animate({marginLeft:tglMargin+'px'},500);
            }
          }
        }

        //横方向の座標を取得
        function getPosition(event) {
          return event.originalEvent.touches[0].pageX;
        }
      });
        /* ▲ココマデ スワイプ検知*/
    </script>
	</div> <!--full-wrap-->
	<div class="l-ad-full">
		<p class="c-ad-wrap__sponsored">sponsored link</p>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- OfficeCasebook Responsive -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-6797100308681073"
         data-ad-slot="7596323228"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
</body>
</html>