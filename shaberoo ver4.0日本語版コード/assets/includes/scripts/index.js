(function($) {
	$.fn.accordion = function() {
		var $title,$contents;
		this.find('dd').hide();
		this.find('dt').on('click',function() {
			$(this).next('dd').slideToggle();
		});
		return this;
	}
	$.fn.modalWindow = function() {
		this.on('click',function(e) {
			if(e) e.preventDefault();
			var self = $(this),
				href = self.attr('href');
			if(self.length < 1) return;
			if($(href).css('display') == 'none') {
				$(href).fadeIn();				
			} else {
				$(href).fadeOut();
			}
		});
		return this;
	}
	$.fn.contentsOverflowHidden = function(target) {		
		var ohxClass = 'oh-x',
			self = this,
			$w = $(window),
			$target = $(target);
		$w.on('load resize',function() {
			if($w.width() > $target.width()) {
				self.addClass(ohxClass);
				$target.removeClass(ohxClass);
			} else {
				self.removeClass(ohxClass);
				$target.addClass(ohxClass);
			}			
		});
		return this;
	}
	$.fn.modal = function() {
	    var $modalContainer = $('#modalContainer'),
	        $modalBlock = $('#modalBlock'),
	        $modalContentsBox = $('.modalContentsBox'),
	        ohClass = 'oh',
	        activeClass = 'active';
	        
        function init() {
            $('a[href^="#"]').on('click',function(e) {
                e.preventDefault();
                var $self = $(this),
                    $href = $($self.attr('href'));
                $('body').addClass(ohClass);
                $modalContainer.addClass(activeClass);
                $href.addClass(activeClass);
                _modalBg();
            });
            $(window).on('resize',_modalBg);
            $modalContainer.on('click',_modalClose);
            $modalContentsBox.on('click',function(e) {
//    		    if(!$(e.target).is('a.modal_contents_close_btn')) {
    			    e.stopPropagation();				
//                }
            });
        }
        init();        
        
        function _modalBg() {
            var bodyH = $('body').height(),
                windowH = $(window).height(),
                maxH;
            maxH = Math.max(bodyH,windowH);
            $modalContainer.height(maxH);
        }
        
        function _modalClose(e) {
            if(e) e.preventDefault();
            $('body').removeClass(ohClass);
            $modalContainer.removeClass(activeClass);
            $modalContentsBox.removeClass(activeClass);
        }
        
    	return this;
	}
	$.fn.inputForm = function() {
	    $('#contactForm').on('submit',inputForm);
        function inputForm(e) {
            // HTMLでの送信をキャンセル		
			e.preventDefault();
			var $inputForm = $(this),
				$submitBtn = $inputForm.find('#modalSubmitBtn'),
				formData = $inputForm.serializeArray();
								
			// エラーチェック
			for(var i = 0; i < formData.length; i++) {
				if(!formData[i].value) {
					alert('必要項目を入力してください');
					return false;
				}
            }

			$.ajax({
				url: './send.php',
				type: $inputForm.attr('method'),
				data: formData,
				beforeSend: function(xhr,settings) {
				    if($submitBtn.next()) {
    				 $submitBtn.next().remove();   
				    }
    				$submitBtn.attr('diabled',true);
				},
				complete: function(xhr,settings) {
    				$submitBtn.attr('disabled',false);
				},
				success: function(data) {
                    $submitBtn.after('<p class="thankyou">お問い合せありがとうございます。送信が完了しました。</p>').remove();
				},
				error: function() {
					alert('通信に失敗しました。再度お試しください。');
				}
			});			
		}
		return this;
	}
	$.fn.resizeHeight = function() {
	    var self = this;
	    var targetArray = [];
	    var maxHeight;
        function init() {
            heightChange();
            $(window).on('resize',heightChange);
        }
        init();
        function heightChange() {

            self.each(function() {
                targetArray.push($(this).height());
                console.log(targetArray);
            });
            maxHeight = Math.max.apply(null,targetArray);                        
        }
    return this;
	}
})(jQuery);
$(function() {
	$('.page_section_accordion').accordion();
	$('.modalTarget').modalWindow();
	$('.page_main').contentsOverflowHidden('.container');
	$(document).modal().inputForm();
	$('.service_feature_list .section_list_title').resizeHeight();
});