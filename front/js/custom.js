'use strict';
//MATCH MEDIA POINTS
/*
 * Функция получает значения matchMedia для соответствующих ширин экрана
 * @param {array} arr - массив со значениями match points
 * @return возвращается объект с булевыми значениями для матч поинтов
 */
function isMatchMediaArr(arr) {
  if ( !Array.isArray(arr) ) return [];
  var res = {};
  arr.forEach(function(el, i) {
    res[el] = {
    	min: window.matchMedia('(min-width:'+parseInt(el, 10)+'px)').matches,
    	max: window.matchMedia('(max-width:'+parseInt(el, 10)+'px)').matches
    }
  });
  return res;
} 
var matchMediaArr = isMatchMediaArr([430, 560, 780, 990, 1070]);
// console.log(matchMediaArr);

/*
 * Плавный скролл к элементу
 * @prarm {string|jq-object} scroll_el - элемент, к которому скролить
 * @param {number} speed - скорость анимации скрола, мс
 * @param {number} offset - отступ от верха экрана, рх
 */
function scrollTo(scroll_el, speed, offset){
	speed = speed || 800;
	offset = offset || 0;

	if ($(scroll_el).length != 0) {
		$('html, body').animate({ scrollTop: $(scroll_el).offset().top + offset }, speed);
	}
}

/**
 * Функция возвращает число с ведущим нулем, если число меньше 10
 * param {Number} num
 */
function getFirstZeroNumbers(num) {
	return ( num < 10 ) ? '0'+num : num;
}


$(function(){

	//FIX_MENU
	const winH = $(window).height(),
				fixMenu = $('#fixmenu'),
				asideWrap = $('#aside'),
				article = $('#article'),
				addToCart = $('#add-to-cart'),
				scrollup = $('#scrollup');
				
	$(fixMenu).css('display', 'block');
	$(asideWrap).css('display', 'block');

	$(window).on('load scroll', function() {

		const top = $(this).scrollTop();
		if ( top > ( winH / 1.5 ) ) {
			$(fixMenu).addClass('active');
			$(addToCart).addClass('offset');
		} else {
			$(fixMenu).removeClass('active');
			$(addToCart).removeClass('offset');
		}

		if(article.length && scrollup.length){
			if(top > 1.5*winH && top < article.height()){
				$(scrollup).addClass('show')
			}else{
				$(scrollup).removeClass('show')
			}
		}
		
	});

	$('.js-aside-toggle').on('click', function() {
		if($(asideWrap).hasClass('active')){
			$(asideWrap).removeClass('active')
			$('html').removeClass('overflow-hidden')
		}else{
			$(asideWrap).addClass('active')
			$('html').addClass('overflow-hidden')
		}
	});

	//scroll menu
	$('.js-scroll-to').click( function(){
		var href = $(this).attr('href');
		scrollTo(href, 800, -($(fixMenu).height()));
		$(asideWrap).removeClass('active');
		return false;
	});


	//Запрет на ввод букв в телефонах
	$('input[type="tel"], input[inputmode="numeric"]').on('keypress', function(e){
		if(/[0-9]/.test(e.key) === false) return false;
	});
	$('input[type="email"]').on('keypress', function(e){
		if(/[0-9a-zA-Z@\.\_]/.test(e.key) === false) return false;
	});
	$('input[data-inputmode="name"]').on('keypress', function(e){
		if(/[a-zA-Zа-яА-ЯёЁ\.\-\s]/.test(e.key) === false) return false;
	});


	//TOP
	const sliderTop = $('#slider-top');
	if(sliderTop.length){
		const slider = $(sliderTop).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			navigation: {
				nextEl: $(sliderTop).find('.js-next')[0],
				prevEl: $(sliderTop).find('.js-prev')[0],
			},
			breakpoints: {
				1070: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
			},
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '#top .js-dots',
				type: 'bullets',
			},
		});
		
	}


	//BENEFITS
	const benefits = $('#benefits');
	if(benefits.length){
		const slider = $(benefits).find('.js-slider')
		const tabs = $(benefits).find('.js-tab')

		const swiper = new Swiper(slider[0], {
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			autoHeight: true,
			on: {
				slideChange: function (swiper) {
					tabs.removeClass('active')
					tabs.eq(swiper.activeIndex).addClass('active')
				}
			}
		});

		tabs.on('click', function(e){
			e.preventDefault()
			if($(this).hasClass('active')) return;

			const idx = $(tabs).index($(this))
			swiper.slideTo(idx)
		})
		
	}
			
	//CAT
	const cat = $('#cat');
	if(cat.length){
		const slider = $(cat).find('.js-slider')

		if(matchMediaArr[1070].max){
			const swiper = new Swiper(slider[0], {
				navigation: {
					nextEl: $(cat).find('.js-next')[0],
					prevEl: $(cat).find('.js-prev')[0],
				},
				loop: true,
				slidesPerView: 'auto',
			});
		}else{
			$(cat).find('.js-nav').hide()
		}
		
	}
	

	//PARTNERS
	const partners = $('#partners');
	if(partners.length){
		const slider = $(partners).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 'auto',
			navigation: {
				nextEl: $(partners).find('.js-next')[0],
				prevEl: $(partners).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(partners).find('.js-scrollbar')[0],
				draggable: true,
			},
		});
		
	}
	const modalDiploms = $('#modal-diploms');
	if(modalDiploms.length){
		const slider = $(modalDiploms).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 1,
			navigation: {
				nextEl: $(modalDiploms).find('.js-next')[0],
				prevEl: $(modalDiploms).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(modalDiploms).find('.js-scrollbar')[0],
				draggable: true,
			},
			breakpoints: {
				1070: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
			},
		});
	}
	

	//READ
	const read = $('#read');
	if(read.length){
		const slider = $(read).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 1,
			navigation: {
				nextEl: $(read).find('.js-next')[0],
				prevEl: $(read).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(read).find('.js-scrollbar')[0],
				draggable: true,
			},
			breakpoints: {
				1070: {
					slidesPerView: 3,
					slidesPerGroup: 3,
				},
			},
		});
		
	}

	//ARTICLES
	const articles = $('#articles');
	if(articles.length){
		const slider = $(articles).find('.js-slider')

		if(matchMediaArr[1070].max){
			const swiper = new Swiper(slider[0], {
				navigation: {
					nextEl: $(articles).find('.js-next')[0],
					prevEl: $(articles).find('.js-prev')[0],
				},
				loop: true,
				slidesPerView: 'auto',
			});
		}else{
			$(articles).find('.js-nav').hide()
		}
	}

	//INFO
	const info = $('#info');
	if(info.length){
		const slider = $(info).find('.js-slider')

		if(matchMediaArr[1070].max){
			const swiper = new Swiper(slider[0], {
				navigation: {
					nextEl: $(info).find('.js-next')[0],
					prevEl: $(info).find('.js-prev')[0],
				},
				loop: true,
				slidesPerView: 'auto',
			});
		}else{
			$(info).find('.js-nav').hide()
		}
	}

	//collapse
	$('.js-collapse').on('click', '.js-collapse-link', function(e){
		e.preventDefault()

		const parent = $(this).closest('.js-collapse')

		if($(this).hasClass('active')){
			$(this).removeClass('active').text('Читать больше...')
			$(parent).find('.js-collapse-wrap').removeClass('active')
		}else{
			$(this).addClass('active').text('Скрыть...')
			$(parent).find('.js-collapse-wrap').addClass('active')
		}
	})

	
	//BUY
	const buy = $('#buy');
	if(buy.length){
		const slider1 = $(buy).find('.js-slider-1')
		const sliderTabs = $(buy).find('.js-slider-tabs li')

		const swiper = new Swiper(slider1[0], {
			slidesPerView: 1,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			navigation: {
				nextEl: $(buy).find('.js-next')[0],
				prevEl: $(buy).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(buy).find('.js-scrollbar')[0],
				draggable: true,
			},
			on: {
				init: function () {
					$(sliderTabs).eq(0).addClass('active')
					$(buy).find('.js-slider-tabs').attr('data-step', 0)
				},
				slideChange: function (swiper) {
					$(sliderTabs).removeClass('active')
					$(sliderTabs).eq(swiper.activeIndex).addClass('active')
					$(buy).find('.js-slider-tabs').attr('data-step', swiper.activeIndex)
				},
			}
		});

		$(sliderTabs).on('click', function(e){
			e.preventDefault()

			if($(this).hasClass('active')) return;

			const idx = $(sliderTabs).index($(this))
			swiper.slideTo(idx)
		})
		
	}


	//SALES
	const sales = $('#sales');
	if(sales.length){
		const slider = $(sales).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			navigation: {
				nextEl: $(sales).find('.js-next')[0],
				prevEl: $(sales).find('.js-prev')[0],
			},
			slidesPerView: 1,
			breakpoints: {
				1070: {
					slidesPerView: 2,
					slidesPerGroup: 2,
				},
			},
		});
	}


	//PAYMENTS CARDs
	const wrapPaymentsCards = $('#get-paments-cards')
	if(wrapPaymentsCards.length){
		const select1 = $(wrapPaymentsCards).find('#select-payments-card-1')
		const select2 = $(wrapPaymentsCards).find('#select-payments-card-2')
		const selectwrap1 = $(wrapPaymentsCards).find('#select-payments-wrap-1')
		const selectwrap2 = $(wrapPaymentsCards).find('#select-payments-wrap-2')

		const apiUrl = window.url_api


		loadCard(select1, selectwrap1)
		loadCard(select2, selectwrap2)

		function loadCard(select, wrapper){

			$(select).selectmenu({
				position: { my : "center top", at: "center bottom+10" },
				change: function( event, ui ) {
					const value = ui.item.value

					const ajax = $.post(apiUrl, {
						action: 'get_payments_card',
						id: +value
					})
					ajax.done(function(data){
						if(data.text.length){
							$(wrapper).html(data.text)
						}
					})
				}
			});

		}
	}


	//PARTNERS
	const parts = $('#parts')
	if(parts.length){
		const ajaxUrl = window.url_api

		const content = $(parts).find('#parts-content')
		const select = $(parts).find('#parts-select-mobile')

		$( select ).selectmenu({
			position: { my : "center top", at: "center bottom+10" },
			// classes: {
			// 	"ui-selectmenu-button": "_theme-target"
			// }
			change: function( event, ui ) {
				const id_parts = ui.item.value

				const ajax = $.get(ajaxUrl+'?action=get_parts&id='+id_parts)

				ajax.done(function(data){
					const item = data
					const html = `<div class="parts__title">${item.title}</div>
					<div class="parts__pic">${item.image ? item.image : ''}</div>
					<div class="parts__desc">${item.description}</div>
					<div class="parts__footer">${item.footer ? item.footer : ''}</div>`

					$(content).html(html)
				})
			}
		});

		$(parts).on('click', '.parts__list li a', function(e){
			e.preventDefault()

			const li = $(this).closest('li')
			const id_parts = $(this).attr('data-id-partner')

			if($(li).hasClass('active')) return

			$(parts).find('.parts__list li').removeClass('active')
			$(li).addClass('active')

			const ajax = $.get(ajaxUrl+'?action=get_parts&id='+id_parts)

			ajax.done(function(data){
				const item = data
				const html = `<div class="parts__title">${item.title}</div>
				<div class="parts__pic">${item.image ? item.image : ''}</div>
				<div class="parts__desc">${item.description}</div>
				<div class="parts__footer">${item.footer ? item.footer : ''}</div>`

				$(content).html(html)
			})
		})
	}


	//CATALOG
	const catalog = $('#catalog')
	if(catalog.length){
		$(catalog).on('click', '.js-catalog-collapse', function(e){
			e.preventDefault()

			if($(this).hasClass('active')){
				$(this).removeClass('active')
				$(this).closest('.catalog__item').find('.js-list-hidden').slideUp(300)
			}else{
				$(this).addClass('active')
				$(this).closest('.catalog__item').find('.js-list-hidden').slideDown(300)
			}
		})
	}


	//FILTERS
	const filters = $('#filters')
	if(filters.length){
		

		//SCALE
		const $priceMin = $(filters).find('#filters-prices-min')
		const $priceMax = $(filters).find('#filters-prices-max')
		const $priceScale = $(filters).find('#filters-prices-scale')
		const minValuePrice = +($priceScale).attr('data-min') || 0
		const maxValuePrice = +($priceScale).attr('data-max') || 1000000
		const limit = 1000

		$($priceScale).slider({
      range: true,
      min: minValuePrice,
      max: maxValuePrice,
      values: [ minValuePrice, maxValuePrice ],
      slide: function( event, ui ) {
				$($priceMin).val(ui.values[ 0 ])
				$($priceMax).val(ui.values[ 1 ])
      }
    });
		$($priceMin).on('change', function(){
			let value = +$(this).val()
			// let min = $($priceScale).slider( "values", 0 )
			let max = +$($priceScale).slider( "values", 1 )

			if(value > max){
				value = max - limit
			}
			if(value < minValuePrice){
				value = minValuePrice
			}

			$($priceMin).val(value)
			$($priceScale).slider('values', 0, value )
		})
		$($priceMax).on('change', function(){
			let value = +$(this).val()
			let min = $($priceScale).slider( "values", 0 )
			// let max = +$($priceScale).slider( "values", 1 )

			if(value < min){
				value = min + limit
			}
			if(value > maxValuePrice){
				value = maxValuePrice
			}

			$($priceMax).val(value)
			$($priceScale).slider('values', 1, value )
		})


		//BRANDS DROPDOWN
		const dropdownWrap = $(filters).find('#filters-brands-wrapper')
		const dropdownLink = $(filters).find('#filters-brands-collapse')

		$(dropdownLink).on('click', function(e){
			e.preventDefault()

			if($(this).hasClass('active')){
				$(this).removeClass('active').find('span').text('Показать все')
				$(dropdownWrap).slideUp(300)
			}else{
				$(this).addClass('active').find('span').text('Скрыть')
				$(dropdownWrap).slideDown(300)
			}
		})


		//MOBILE COLLAPSE
		const dropdownMobileWrap = $(filters).find('#filters-mobile-wrapper')
		const dropdownMobileLink = $(filters).find('#filters-mobile-collapse')

		$(dropdownMobileLink).on('click', function(e){
			e.preventDefault()

			if($(this).hasClass('active')){
				$(this).removeClass('active').find('span').text('Показать Фильтры')
				$(dropdownMobileWrap).slideUp(300)
			}else{
				$(this).addClass('active').find('span').text('Скрыть Фильтры')
				$(dropdownMobileWrap).slideDown(300)
			}
		})

		//BOX DROPDOWNS
		$(filters).on('click', '.js-filters-collapse-link', function(e){
			e.preventDefault()

			if($(this).hasClass('active')){
				$(this).removeClass('active')
				$(this).closest('.js-filters-collapse').find('.js-filters-collapse-wrap').slideUp(300)
				$(this).closest('.js-filters-collapse').find('input').attr('disabled', true)
			}else{
				$(this).addClass('active')
				$(this).closest('.js-filters-collapse').find('.js-filters-collapse-wrap').slideDown(300)
				$(this).closest('.js-filters-collapse').find('input').attr('disabled', false)
			}
		})
	}


	//CART 2
	const cart2 = $('#cart-2')
	if(cart2.length){
		const slider = $(cart2).find('.js-slider-order')
		const btnNext1 = $(cart2).find('.js-cart2-next-1')
		const btnPrev1 = $(cart2).find('.js-cart2-prev-1')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 1,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			allowTouchMove: false,
			autoHeight: true,
			initialSlide: 0,
			on: {
				init: function(){
					$(slider).css({overflow: 'visible'})
				}
			}
		}); 

		$(btnNext1).on('click', function(e){
			e.preventDefault()

			const parentSlide = $(this).closest('.swiper-slide')
			const requiredInputs = $(parentSlide).find('.js-input-required')
			let countFilledInputs = 0

			$(requiredInputs).removeClass('err')

			$.each(requiredInputs, function(i, input){
				if($(input).val().length < 3){
					$(input).addClass('err')
					setTimeout(() => {
						$(input).removeClass('err')
					}, 3000);
				}else{
					countFilledInputs++
				}
			})

			if(countFilledInputs == requiredInputs.length){
				swiper.slideNext()
			}

			scrollTo(cart2)
		})
		$(btnPrev1).on('click', function(e){
			e.preventDefault()
			swiper.slidePrev()
			scrollTo(cart2)
		})


		//PAYMENTS
		const radiosPayment = $(cart2).find('.js-payments-input')
		$(radiosPayment).on('change', function(){
			$.each(radiosPayment, function(i, radio){
				if($(radio).prop('checked')){
					$(radio).closest('.js-payments-item').find('.js-payments-wrap').slideDown(200, function(){
						swiper.updateAutoHeight(200)
					})
				}else{
					$(radio).closest('.js-payments-item').find('.js-payments-wrap').slideUp(200, function(){
						swiper.updateAutoHeight(200)
					})
				}
			})
		})
	}

	

	//GOODS
	const goods = $('#goods')
	if(goods.length){
		const headerDesc = $(goods).find('#goodsMainHeader')
		const headerMobile = $(goods).find('#goodsClonedHeader')
		const sliderMain = $(goods).find('.js-slider-main')
		const sliderThumbs = $(goods).find('.js-slider-thumbs')

		$(headerMobile).html( $(headerDesc).html() )

		const swiperThumbs = new Swiper(sliderThumbs[0], {
			centeredSlides: true,
			centeredSlidesBounds: true,
			slidesPerView: 3,
			watchOverflow: true,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			direction: 'vertical',

		}); 
		const swiperMain = new Swiper(sliderMain[0], {
			slidesPerView: 1,
			watchOverflow: true,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			preventInteractionOnTransition: true,
			// effect: 'fade',
			// fadeEffect: {
			// 	crossFade: true
			// },
			navigation: {
				nextEl: $(goods).find('.js-next')[0],
				prevEl: $(goods).find('.js-prev')[0],
			},
			thumbs: {
				swiper: swiperThumbs
			}
		}); 

		swiperMain.on('slideChangeTransitionStart', function() {
			swiperThumbs.slideTo(swiperMain.activeIndex);
		});
		
		swiperThumbs.on('transitionStart', function(){
			swiperMain.slideTo(swiperThumbs.activeIndex);
		});
	}


	//SAME
	const same = $('#same');
	if(same.length){
		const slider = $(same).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 1,
			navigation: {
				nextEl: $(same).find('.js-next')[0],
				prevEl: $(same).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(same).find('.js-scrollbar')[0],
				draggable: true,
			},
			breakpoints: {
				1070: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
			},
		});
		
	}


	//USE
	const use = $('#use');
	if(use.length){
		const slider = $(use).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: 1,
			navigation: {
				nextEl: $(use).find('.js-next')[0],
				prevEl: $(use).find('.js-prev')[0],
			},
			scrollbar: {
				el: $(use).find('.js-scrollbar')[0],
				draggable: true,
			},
			breakpoints: {
				1070: {
					slidesPerView: 4,
					slidesPerGroup: 4,
				},
			},
		});
		
	}


	//DELIVERY
	const delivery = $('#delivery')
	if(delivery.length){

		const select1 = $(delivery).find('.js-select-delivery-1')
		const select2 = $(delivery).find('.js-select-delivery-2')
		const wrapper = $(delivery).find('.js-delivery-wrapper')
		const items = $(delivery).find('.js-delivery-item')

		$(items).hide()
		$(items).eq(0).show()

		$( select1 ).selectmenu({
			position: { my : "center top", at: "center bottom+4" },
			classes: {
				"ui-selectmenu-menu": "_theme-icon-2"
			},
			change: function( event, ui ) {
				const value = ui.item.value
				get_delivery(value)
				// $.each(items, function(i, item){
				// 	if($(item).attr('data-id') == value){
				// 		$(item).show()
				// 	}else{
				// 		$(item).hide()
				// 	}
				// })
			}
		});
		$( select2 ).selectmenu({
			position: { my : "center top", at: "center bottom+4" },
			classes: {
				"ui-selectmenu-menu": "_theme-icon-2"
			},
			change: function( event, ui ) {
				const value = ui.item.value
				get_delivery(value)
				// $.each(items, function(i, item){
				// 	if($(item).attr('data-id') == value){
				// 		$(item).show()
				// 	}else{
				// 		$(item).hide()
				// 	}
				// })
			}
		});

		function get_delivery(id_delivery){
			const ajaxUrl = window.url_api

			$(wrapper).html('Загрузка...')

			const ajax = $.get(ajaxUrl+'?action=get_delivery&id='+id_delivery)

			ajax.done(function(data){
				if(data.items){
					console.log(data.items);

					const items = data.items || []
					let html = ''

					for(let i = 0; i < items.length; i++){
						const logo = items[i].logo ? `<div class="delivery__logo">${items[i].logo}</div>` : ''

						html += `<div class="delivery__item">
							<div class="delivery__col-2-0">
							${logo}
							<span class="delivery__name">${items[i].region}</span>
							</div>
							<div class="delivery__col-2-1">
								<div class="delivery__box">
								<span class="delivery__label">${items[i].col_1.header}</span>
									<div class="delivery__list">${items[i].col_1.list}</div>
									<div class="delivery__txt">${items[i].col_1.txt}</div>
								</div>
							</div>
							<div class="delivery__col-2-1">
								<div class="delivery__box">
									<span class="delivery__label">${items[i].col_2.header}</span>
									<div class="delivery__list">${items[i].col_2.list}</div>
									<div class="delivery__txt">${items[i].col_2.txt}</div>
								</div>
							</div>
						</div>`
					}

					$(wrapper).html(`<div class="delivery__items">${html}</div>`)
					

				}
				
			})
		}
	}



	$('.js-messengers').on('click', '.js-messengers-btn', function(e){
		e.preventDefault();
		let parent = $(this).closest('.js-messengers');
		let input = $(parent).find('.js-messengers-inp');
		let title = $(this).attr('title');
		$(input).val(title);

		$(parent).find('.js-messengers-btn').removeClass('active');
		$(this).addClass('active');

		const inputEmail = $(parent).closest('.form').find('.js-input-email')
		const inputPhone = $(parent).closest('.form').find('.js-input-phone')

		if(title === 'Email'){
			$(inputEmail).attr('required', 'required')
				.removeAttr('disabled')
				.show()
			$(inputPhone).attr('disabled', 'disabled')
				.removeAttr('required')
				.hide()
		}else{
			$(inputPhone).attr('required', 'required')
				.removeAttr('disabled')
				.show()
			$(inputEmail).attr('disabled', 'disabled')
				.removeAttr('required')
				.hide()
		}
	});


	//Отправка заявок
	$('input[name="agree-policy"]').on('click', function() {
		if ( $(this).prop('checked') ) {
			$(this).closest('form').find('.form__submit').removeAttr('disabled');
		} else {
			$(this).closest('form').find('.form__submit').attr('disabled', 'disabled');
		}
	});


	//ADD TO CART
	$('.js-cart-btn1').on('click', function(e){
		e.preventDefault()

		const wrap = $(this).closest('.js-cart-add')
		$(wrap).find('.js-cart-box-1').hide()
		$(wrap).find('.js-cart-box-2').show()

		$('#add-to-cart').addClass('show')
		let timeout = setTimeout(() => {
			$('#add-to-cart').removeClass('show')
		}, 3000);
		$('#add-to-cart').on('click', 'span[role="button"]', function(e){
			e.preventDefault()
			if(timeout) clearTimeout(timeout)
			$('#add-to-cart').removeClass('show')
		})
	})


	//HIDE PASS
	$('.js-hide-pass').on('click', '.js-hide-pass-btn', function(e){
		e.preventDefault()
		if($(this).hasClass('active')){
			$(this).removeClass('active')
				.closest('.js-hide-pass').find('.js-hide-pass-inp').attr('type', 'password')
		}else{
			$(this).addClass('active')
				.closest('.js-hide-pass').find('.js-hide-pass-inp').attr('type', 'text')
		}
	})


	// const myWidget = new MyWidget('#my-widget');
	// function MyWidget(wrap){
	// 	const btnOpen = $(wrap).find('.js-widget-open'),
	// 		btnClose = $(wrap).find('.js-widget-close'),
	// 		btnInfoClose = $(wrap).find('.js-widget-info-close'),
	// 		wrapInfo = $(wrap).find('.js-widget-info'),
	// 		btns = $(wrap).find('.js-widget-btn'),
	// 		winH = $(window).height();

	// 	$(btnOpen).on('click', function(e){
	// 		e.preventDefault()
	// 		$(wrap).addClass('active')
	// 		$(wrapInfo).fadeOut(200)
	// 	})
	// 	$(btnInfoClose).on('click', function(e){
	// 		e.preventDefault()
	// 		$(wrapInfo).fadeOut(200)
	// 	})
	// 	$(btnClose).on('click', function(e){
	// 		e.preventDefault()
	// 		$(wrap).removeClass('active')
	// 	})
	// 	$(btns).on('click', function(){
	// 		$(wrap).removeClass('active')
	// 	})

	// 	function _init(){
	// 		setTimeout(function(){
	// 			$(wrap).fadeIn(400)
	// 		}, 5000)
	// 	}

	// 	// $(window).on('scroll', function onScroll() {
	// 	//   if ($(window).scrollTop() > winH) {
	// 	//     $(wrap).fadeIn(200);
	// 	//     $(window).off('scroll', onScroll);
	// 	//   }
	// 	// });

	// 	_init()
	// }


	//LIBS
	svg4everybody();//supports svg-sprites in IE/edge

	//ленивая загрузка с viewport-ом   https://github.com/verlok/lazyload
	var lazyLoadInstance = new LazyLoad({
	    elements_selector: ".lazy"
	});

	$('input[type="tel"]').mask('+7 (999) 999-99-99')


	// $.widget( "custom.targetselectmenu", $.ui.selectmenu, {
	// 	_renderButtonItem: function( item ) {
	// 		var buttonItem = $( "<span>", {
	// 			"class": "ui-selectmenu-text _target"
	// 		})
	// 		this._setText( buttonItem, item.label );
		 
	// 		return buttonItem;
	// 	}
	// });
	$( ".js-select" ).selectmenu({
		position: { my : "center top", at: "center bottom+10" },
		// classes: {
		// 	"ui-selectmenu-button": "_theme-target"
		// }
	});
	$( ".js-select-icon" ).selectmenu({
		position: { my : "center top", at: "center bottom+10" },
		// classes: {
		// 	"ui-selectmenu-button": "_theme-target"
		// }
	});
	$( ".js-select-sort" ).selectmenu({
		position: { my : "center top", at: "center bottom+4" },
		classes: {
			"ui-selectmenu-menu": "_fz22"
		}
	});
	$( ".js-select-sort-2" ).selectmenu({
		position: { my : "center top", at: "center bottom+4" },
		classes: {
			"ui-selectmenu-menu": "_fz22"
		}
	});

	$('.js-tooltip').tooltipster({
		theme: 'tooltipster-default',
		trigger: 'click',
		arrow: false,
		// contentAsHTML: true,
		// interactive: true,
		// contentCloning: true,
		side: ['top', 'bottom', 'left', 'right']
	});
	$('.js-tooltip-2').tooltipster({
		theme: 'tooltipster-default-2',
		trigger: 'click',
		arrow: false,
		// contentAsHTML: true,
		// interactive: true,
		// contentCloning: true,
		side: ['left', 'bottom', 'top', 'right']
	});
	$('.js-tooltip-phones').tooltipster({
		theme: 'tooltipster-phones',
		trigger: 'click',
		arrow: false,
		contentAsHTML: true,
		interactive: true,
		contentCloning: true,
		side: ['bottom', 'top', 'right', 'left']
	});
	$('.js-tooltip-phones_aside').tooltipster({
		theme: 'tooltipster-phones _aside',
		trigger: 'click',
		arrow: false,
		contentAsHTML: true,
		interactive: true,
		contentCloning: true,
		side: ['bottom', 'top', 'right', 'left']
	});
	$('.js-tooltip-phones_big').tooltipster({
		theme: 'tooltipster-phones _big',
		trigger: 'click',
		arrow: false,
		contentAsHTML: true,
		interactive: true,
		contentCloning: true,
		side: ['bottom', 'top', 'right', 'left']
	});
	$('.js-tooltip-share').tooltipster({
		theme: 'tooltipster-share',
		trigger: 'click',
		arrow: false,
		contentAsHTML: true,
		interactive: true,
		contentCloning: true,
		side: ['left', 'right', 'bottom', 'top']
	});


	$('#buy').tabs({
		activate: function( event, ui ) {
			AOS.refresh()
		}
	})
	$('#tabs-modal').tabs({})


	Fancybox.bind("[data-fancybox]", {});
	Fancybox.bind("[data-fancybox-modal]", {
		closeButton: false,
		dragToClose: false
	});
	Fancybox.bind("[data-fancybox-modal-2]", {
		closeButton: false,
		dragToClose: false
	});
	$('[data-fancybox-modal-2]').on('click', function(){
		Fancybox.close(true)
	})

	AOS.init({
		once: true
	});
});


$(function(){
	const $map = document.getElementById('map')
	if($map){

		const point = {
			center: [76.889815, 43.274811]
		}
		initMap();


		async function initMap() {
				// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
				await ymaps3.ready;

				const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker} = ymaps3;

				// Иницилиазируем карту
				const map = new YMap(
						// Передаём ссылку на HTMLElement контейнера
						$map,

						// Передаём параметры инициализации карты
						{
								location: {
										// Координаты центра карты
										center: point.center,

										// Уровень масштабирования
										zoom: 10
								}
						},
						[
							// Add a map scheme layer
							new YMapDefaultSchemeLayer({}),
							// Add a layer of geo objects to display the markers
							new YMapDefaultFeaturesLayer({})
						]
				);

				const markerElement = document.createElement('img');
				markerElement.src = 'img/svg/pin-3.svg';
				markerElement.className = 'map__icon';

				// Добавляем слой для отображения схематической карты
				// map.addChild(new YMapDefaultSchemeLayer());
				map.addChild(new YMapMarker({coordinates: point.center}, markerElement));
		}
	}
})