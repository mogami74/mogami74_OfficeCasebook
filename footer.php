		<footer id="l-blog-container__footer" class="l-contents">
		<?php wp_footer(); ?>
			<small>&copy;mogami74;</small>
		</footer>
    <script>
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