<main class="page_main">
    <div class="container">
        <section class="register_page_section">
            <h1 class="page_section_title">Start a free trial lesson!!</h1>
            <div class="page_section_contents">
                <div class="register_form_block">
                    <ol class="register_step">
                        <li><i class="step_num">STEP1</i><span class="step_title">Comfirmation of your information</span></li>
                        <li class="active"><i class="step_num">STEP2</i><span class="step_title">Confirmation</span></li>
                        <li><i class="step_num">STEP3</i><span class="step_title">Completion</span></li>
                    </ol>
                    <div id="registerBlock" class="control_block_container">
                        <div class="control_block">
                            <label class="control_label">Name</label>
                            <div class="controls">
                                <span><?php echo $name;?></span>
                            </div>
                        </div>
                        <div class="control_block">
                            <label class="control_label">Mail address</label>
                            <div class="controls">
                                <span><?php echo $mail;?></span>
                            </div>
                        </div>
                        <div class="control_block">
                            <label class="control_label">Password</label>
                            <div class="controls">
                                <span>We don`t show your password here because of your safty.</span>
                            </div>
                        </div>                                                                            	
                        <div class="control_block">
                            <label class="control_label">Skype id<span class="required">*</span></label>
                            <div class="controls">
                                <span><?php echo $skype;?></span>
                            </div>
                        </div>
                        <ul class="check_btns">
                            <li><a href="javascript:history.back();" class="back_to_btn">back</a></li>
                            <li><a href="./db_regist.php" class="submit_btn">submit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php include('footer.php'); ?>
<?php include($path.'_foot_script.php'); ?>
</body>
</html>
