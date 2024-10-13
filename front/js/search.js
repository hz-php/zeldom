'use strict';
$(function(){

  const searches = $('.js-search')
  // const searchModal = $('#modal_search-mobile')

  const api_url = window.url_api


  function delay(callback, ms) {
    var timer = 0;
    return function() {
      var context = this, args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        callback.apply(context, args);
      }, ms || 0);
    };
  }

  

  //DESKTOP
  $.each(searches, function(i, search){
    const $input = $(search).find('.js-search-input')
    const $result = $(search).find('.js-search-result')
    const $list = $('<div />', {class: 'search__list'})
    
    const htmlEmpty = '<span class="search__empty">По вашему запросу ничего не найдено.</span>'
    let htmlItems = ''

    $($input).on('focus', function(){
      $($result).fadeIn()
    })
    $($input).on('blur', function(){
      setTimeout(() => {
        $($result).fadeOut()
      }, 500);
    })

    // $($input).on('keyup', delay(function(){
    //   const val = $.trim($(this).val())

    //   if(val.length < 2){
    //     $($list).html(htmlEmpty)
    //     return;
    //   }

    //   const ajax = $.get(api_url, 
    //     {
    //       action: 'search',
    //       q: val
    //     }, 
    //     'json'
    //   )

    //   ajax.done(function( data ) {
    //     let results = data

    //     // console.log(results);

    //     if(results.length > 0){

    //       htmlItems = results.map((item, i) => {
    //         return  i < 50 ? `<div class="search__item"><a href="${item.link}">${item.title}</a></div>` : ''
    //       })

    //       $($list).html(htmlItems)
    //       $($result).html($list)
  
    //     }else{
    //       $($result).html(htmlEmpty)
    //     }

        
    //   });

    //   $($list).on('click', 'a', function(){
    //     $($mobile).removeClass('show')
    //   })
      
    // }, 500))

  })


  //MOBILE
  // const $btnSearchShow = $('.js-search-open')
  // const $btnSearchHide = $('.js-search-hide')

  // if(window.matchMedia('(max-width:1070px)').matches && searchModal.length){
  //   $($btnSearchShow).on('click', function(){
  //     $(searchModal).addClass('show')
  //     $('html').css({overflow: 'hidden'})
  //   })
  //   $($btnSearchHide).on('click', function(){
  //     $(searchModal).removeClass('show')
  //     $('html').css({overflow: ''})
  //   })

    
  //   const $input = $(searchModal).find('.js-search-input')
  //   const $result = $(searchModal).find('.js-search-result')
  //   const $list = $('<div />', {class: 'search__list'})
    
  //   const htmlEmpty = '<span class="search__empty">Ничего не найдено. <br>Попробуйте поменять запрос.</span>'
  //   let htmlItems = []

  //   $($input).on('keyup', delay(function(){
  //     const val = $.trim($(this).val())

  //     if(val.length < 2){
  //       $($list).html(htmlEmpty)
  //       return;
  //     }

  //     const ajax = $.get(api_url, 
  //       {
  //         action: 'search',
  //         q: val
  //       }, 
  //       'json'
  //     )

  //     ajax.done(function( data ) {
  //       let results = data

  //       // console.log(results);

  //       if(results.length > 0){

  //         htmlItems = results.map((item, i) => {
  //           return  i < 50 ? `<div class="search__item"><a href="${item.link}">${item.title}</a></div>` : ''
  //         })

  //         $($list).html(htmlItems)
  //         $($result).html($list)

  //       }else{
  //         $($result).html(htmlEmpty)
  //       }

  //     });

  //     $($list).on('click', 'a', function(){
  //       $($mobile).removeClass('show')
  //     })

  //   }, 500))

  //   $($list).on('click', 'a', function(){
  //     $($mobile).removeClass('show')
  //     $('html').css({overflow: ''})
  //   })

  // }


})