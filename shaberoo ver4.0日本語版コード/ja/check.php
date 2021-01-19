<main class="page_main">
	<div class="container">
		<section class="register_page_section">
			<h1 class="page_section_title">無料体験レッスンを始めましょう！</h1>
			<div class="page_section_contents">
				<div class="register_form_block">
					<ol class="register_step">
						<li><i class="step_num">STEP1</i><span class="step_title">会員情報登録</span></li>
						<li class="active"><i class="step_num">STEP2</i><span class="step_title">内容の確認</span></li>
						<li><i class="step_num">STEP3</i><span class="step_title">登録完了</span></li>
					</ol>
					<div id="registerBlock" class="control_block_container">
						<div class="control_block">
							<label class="control_label">お名前</label>
							<div class="controls">
								<span><?php echo $name;?></span>
							</div>
						</div>
						<div class="control_block">
							<label class="control_label">メールアドレス</label>
							<div class="controls">
								<span><?php echo $mail;?></span>
							</div>
						</div>
						<div class="control_block">
							<label class="control_label">パスワード</label>
							<div class="controls">
                                <span>安全のため表示しません</span>
							</div>
						</div>
						<div class="control_block">
							<label class="control_label">国籍<span class="required">*</span></label>
							<div class="controls">
                                <span><?php echo $nation;?></span>
							</div>
						</div>
						<div class="control_block">
							<label class="control_label">居住地<span class="required">*</span></label>
							<div class="controls">
                                <span><?php echo $country;?></span>
							</div>
						</div>

						<div class="control_block">
							<label class="control_label">Skype名<span class="required">*</span></label>
							<div class="controls">
                                <span><?php echo $skype;?></span>
							</div>
						</div>
						<ul class="check_btns">
							<li><a href="javascript:history.back();" class="back_to_btn">入力画面に戻る</a></li>
							<li><a href="./db_regist.php" class="submit_btn">この内容で送信する</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</main>
<?php include($path.'_footer.php'); ?>
<?php include($path.'_foot_script.php'); ?>
</body>
</html>
