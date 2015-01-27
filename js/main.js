function configurer(){
	
	
		$('#btMenuMobile').on('click', ouvrirFermerMenu);
		$('.menu-item-has-children').find('a:first').append(' <span class="flecheMenu"></span>');

		//alert(navigator.userAgent);
		//alert(navigator.platform);
		var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
		
		$('ul.sub-menu').hide();
		
		if(mobile || $(window).width() < 768){
			$('#menu-menu-principal li').on('click', function(e){
			
				
				$('.flecheMenu').toggleClass('rotated');
				
				var contenuHtml = $(this).html();
				if(contenuHtml.indexOf('sub-menu') != -1){
					if( $(window).width() < 768){
						$(this).find('ul').toggle();
					}else{
						$(this).find('ul').show();
					}
								
					return false;
				}
				e.stopPropagation();		
						
			})
		}

		$('.menu-menu-principal-container > ul > li').addClass('premierNiveau');
		
		
		
		
			
			$('.premierNiveau > a').mouseover(function(e){				
				if($(window).width() > 768){						
					$('ul.sub-menu').hide();												
				}
				
			});	
			
			$('.menu-menu-principal-container  ul  li').mouseenter(function(e){
					if($(window).width() > 768){
						var classes = $(this).attr('class');
							
							if(classes.indexOf('menu-item-has-children') == -1){
								//alert($(this).parent().html());
								
								$(this).parent().find('.sub-menu').hide();
							}
					}						
				
			});
			
			$('#menu-menu-principal li').mouseover(function(e){
				
				if($(window).width() > 768){
				
					var contenuHtml = $(this).html();
					if(contenuHtml.indexOf('sub-menu') != -1){
						$(this).find('ul').first().show();
						
					}
				}
			});


			
			$('#container').mouseover(function(e){
				if($(window).width() > 768){	
					$('ul.sub-menu').hide();
				}	
			});	
			
			$('#backgroundVisionneuse').mouseover(function(e){
				if($(window).width() > 768){	
					$('ul.sub-menu').hide();
				}
			});		
			
			$('#PIV').mouseover(function(e){
				if($(window).width() > 768){	
					$('ul.sub-menu').hide();
				}
			});
			
		
			
		
	
		
		
}


function ouvrirFermerMenu(e){
	$('#containerMenu').slideToggle();
}



window.onload = configurer;