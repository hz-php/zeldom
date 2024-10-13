'use strict';
$(function(){

	//TOP
	const homeSliders = $('.js-home-slider');
	$.each(homeSliders, function(i, wrapper){
		const slider = $(wrapper).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			navigation: {
				nextEl: $(wrapper).find('.js-next')[0],
				prevEl: $(wrapper).find('.js-prev')[0],
			},
			slidesPerView: 1,
			loop: matchMediaArr[1070].min ? true : false,
			on: {
				init: function(swiper){
					if(matchMediaArr[1070].min && swiper.slides.length < 4){
						$(wrapper).find('.js-next').hide()
					}
				}
			},
			breakpoints: {
				1070: {
					slidesPerView: 3,
				},
			},
		});
		
	})


  $('#curordrs').tabs()


  $('.js-order-copy').on('click', function(e){
    e.preventDefault()

    const title = $(this).attr('data-order')
    const th = $(this)

    if(title && navigator.clipboard){
      navigator.clipboard.writeText(title)
      .then(() => {
        
        $(th)
          .tooltipster({
            theme: 'tooltipster-default-3',
            trigger: 'click',
            arrow: false,
            content: 'Скопировано!',
            side: ['top', 'bottom', 'left', 'right']
          })
          .tooltipster('open')

        setTimeout(() => {
          $(th).tooltipster('close')
        }, 3000);

      })
      .catch(err => {
        console.log('copying wrong', err);
      });
    }
  })


  //
  const infoorder = $('#slider-infoorder')
  if(infoorder.length){
    const slider = $(infoorder).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 'auto',
			scrollbar: {
				el: $(infoorder).find('.js-scrollbar')[0],
				draggable: true,
			},
		});
  }

  //
  $('#form-settings').on('change', 'input', function(){
    const form = $(this).closest('form')
    const btnSubmit = $(form).find('.settings__submit')

    $(btnSubmit).removeAttr('disabled')
  })
  

  //
  const compra = $('#compra')
  if(compra.length){
    const slider = $(compra).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 'auto',
			scrollbar: {
				el: $(compra).find('.js-scrollbar'),
				draggable: true,
			},
		});

    const compraChars = $(compra).find('.compra__list')

    for(let n = 0; n < $(compraChars).eq(0).find('li').length; n++){
      let AllHeight = 0;

      for(let m = 0; m < compraChars.length; m++){
        const liHeight = $(compraChars).eq(m).find('li').eq(n).height()
        if( $(compraChars).eq(m).find('li').eq(n).height() > AllHeight ){
          AllHeight = liHeight
        }
      }

      for(let m = 0; m < compraChars.length; m++){
        $(compraChars).eq(m).find('li').eq(n).height(AllHeight)
      }
    }
  }


  //comprasion tabs
  const tabsCompra = $('#cat-types')
  if(tabsCompra.length){
    const slider = $(tabsCompra).find('.js-slider')

    const swiper = new Swiper(slider[0], {
			slidesPerView: 'auto',
      mousewheel: true
		});
  }

});
