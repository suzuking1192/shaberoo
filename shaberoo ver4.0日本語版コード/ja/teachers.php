<main class="page_main">
	<div class="container">
	    <div id="free_talking_lesson" class="details_contents_block">
    	    <h3 class="details_contents_block_title">講師紹介</h3>
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/suzukiyuto.jpg" alt="このレッスンはそんな機会がなかった人に向けの、会話することに特化したレッスンです。日本語を実際に話すことに焦点を当てており、話題などに特に指定はありません。日常会話がメインで友達や同僚と話すようなイメージで会話を進めていきます。話したい話題などがあったらどんどん話してみてください。講師がどんな話題でも対応します。">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">鈴木悠人　先生</h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">こんにちは。現在は東京大学の4年生です。工学部化学システム工学科に所属しており、水素の着火について研究しています。
趣味はテニスとカフェ巡りとパーティーとビジネスです。アクティブに活動しているので幅広い話題に対応できると思います。楽しく日本語を勉強していきましょう！！</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">レッスン予約はこちらから</a>
            <p class="annotation lesson_annotation">料金はレッスンに満足していただいた場合にのみいただきます</p>
	    </div>
          <div id="free_talking_lesson" class="details_contents_block">
    	    
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/sugamura.jpg" alt="このレッスンはそんな機会がなかった人に向けの、会話することに特化したレッスンです。日本語を実際に話すことに焦点を当てており、話題などに特に指定はありません。日常会話がメインで友達や同僚と話すようなイメージで会話を進めていきます。話したい話題などがあったらどんどん話してみてください。講師がどんな話題でも対応します。">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">菅村俊一郎　先生</h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">東京大学工学部システム創成学科4年生です。学科では環境やエネルギーについて勉強しています。
最近趣味でプログラミングの勉強を始めました。好きな言葉はウォルト・ディズニーの「If you can dream it, you can do it.」です。日本語勉強頑張っていきましょう！</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">レッスン予約はこちらから</a>
            <p class="annotation lesson_annotation">料金はレッスンに満足していただいた場合にのみいただきます</p>
	    </div>
          <div id="free_talking_lesson" class="details_contents_block">
    	    
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/noface.png" alt="このレッスンはそんな機会がなかった人に向けの、会話することに特化したレッスンです。日本語を実際に話すことに焦点を当てており、話題などに特に指定はありません。日常会話がメインで友達や同僚と話すようなイメージで会話を進めていきます。話したい話題などがあったらどんどん話してみてください。講師がどんな話題でも対応します。">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">N.I　先生</h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">こんにちは。私は日本の大学に通っている4年生です。専攻は文化人類学で日本語教員の授業もとっています。
外国の料理を食べることが好きなので、あなたの国の食べ物について教えてください(^O^)
楽しく日本語を勉強しましょう。</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">レッスン予約はこちらから</a>
            <p class="annotation lesson_annotation">料金はレッスンに満足していただいた場合にのみいただきます</p>
	    </div>
            
	</div>    
</main>
<?php include($path.'_footer.php'); ?>
<?php include($path.'_foot_script.php'); ?>
<script>
$(function() {
  if(location.hash) {        
    var $id = $(location.hash);
    
    if($id.length > 0) {
      $('html,body').animate({
        scrollTop: $(location.hash).offset().top - $('.page_header').innerHeight()
      },500,'swing');      
    }
  }
});
</script>
</body>
</html>