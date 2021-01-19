<main class="page_main">
	<div class="container">
	    <div id="free_talking_lesson" class="details_contents_block">
    	    <h3 class="details_contents_block_title">Who are teachers??</h3>
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/suzukiyuto.jpg" alt="This course is suitable for people who have no chance to speak Japanese.We make much of speaking Japanese and we don`t decide a topic in this course.You can practice speaking Japanese as if you talked with your friends or colleagues daily. If you have some topics you want to talk, you should talk about it!! ">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">Yuto Suzuki</h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">Nice to meet you!! I am a student of University of Tokyo. My major is chemistry system engineering.
I am studying about ignition of hydrogen. My hobbies are playing tennis, going to cafeteria, making business, and enjoying parties. I am active and interested in many things, so I can talk about many topics. Let`s enjoy studying Japanese.
</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">please start the lesson!!</a>
    	    <p class="annotation lesson_annotation">You have to pay after lesson if you are satisfied with your lesson</p>
	    </div>	
	    <div id="free_talking_lesson" class="details_contents_block">
    	    
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/sugamura.jpg" alt="This course is suitable for people who have no chance to speak Japanese.We make much of speaking Japanese and we don`t decide a topic in this course.You can practice speaking Japanese as if you talked with your friends or colleagues daily. If you have some topics you want to talk, you should talk about it!! ">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">Syunichiro Sugamura</h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">Hi!! I am a student of University of Tokyo. My major is systems innovation.
My hobbies are programming, playing the guitar, and drinking alcohol.My favorite words are "If you can dream it, you can do it.". I am happy to help you learn Japanese.I am looking forward to talking with you in Japanese!!
</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">please start the lesson!!</a>
    	    <p class="annotation lesson_annotation">You have to pay after lesson if you are satisfied with your lesson</p>
	    </div>
            <div id="free_talking_lesson" class="details_contents_block">
    	    
              <div class="details_contents_img">
                        <img src="./assets/images/teachers/noface.png" alt="This course is suitable for people who have no chance to speak Japanese.We make much of speaking Japanese and we don`t decide a topic in this course.You can practice speaking Japanese as if you talked with your friends or colleagues daily. If you have some topics you want to talk, you should talk about it!! ">
                    </div>
    	    <div class="details_contents">
        	    <h4 class="details_contents_subtitle">Ms. N.I </h4>
    	        <div class="details_contents_text_block">
                    <p class="details_contents_text">Hello everyone! I'm a university student. My major is humanities and cultures. I also have taken a course of teaching Japanese as a foreign language. I like eating foreign foods so please tell me your country’s famous foods, snacks, and something to eat! J
Let’s study Japanese with having fun.
</p>
                    
    	        </div>        	    
    	    </div>
    	    <a class="shaberoo_register_btn" href="https://coubic.com/shaberoo/181921/express" target="_blank">please start the lesson!!</a>
    	    <p class="annotation lesson_annotation">You have to pay after lesson if you are satisfied with your lesson</p>
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