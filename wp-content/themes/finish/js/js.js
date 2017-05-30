// /**
//  * Created by Nikita on 06.11.2016.
//  */
//
// $(document).ready(function () {
//
//         /*fixed scroll*/
//
//         /* var scrollH = $('.fixedMenu').height() + $('.topMenu').height();
//          var h_hght = $('.topMenu').height();
//          var h_mrg = 0;
//
//          if ($(window).width() < 750) {
//          scrollH = $('.fixedMenu').height();
//          h_hght = 0;
//          }
//
//          setTimeout(function () {
//          $('header').css('height', scrollH);
//          }, 40);
//
//          $(window).resize(function () {
//          if ($(window).width() < 750) {
//          scrollH = $('.fixedMenu').height();
//          h_hght = 0;
//          }
//          $('header').css('height', scrollH);
//          if ($(window).width() < 750) {
//          var scrollH = $('.topMenu').height();
//          } else {
//          var scrollH = $('.fixedMenu').height() + $('.topMenu').height();
//          }
//          })
//
//          var elem = $('.fixedMenu');
//          var top = $(this).scrollTop();
//
//          if (top > h_hght) {
//          elem.css('top', 0);
//          }
//          $(window).scroll(function () {
//          top = $(this).scrollTop();
//          if (top + h_mrg < h_hght) {
//          elem.css('top', (h_hght - top));
//          } else {
//          elem.css('top', h_mrg);
//          }
//          });*/
//
//         /*/!*change border-color*!/
//          $(' #phone,  #name, #email, #messeg, #theam, #surname').on('focus', function () {
//          "use strict";
//          $(this).css('border-color', '#cb80dc');
//          $(this).on('blur', function () {
//          $(this).css('border-color', '#bbbbbb');
//          })
//          });
//
//          /!*change input_borderColor*!/
//
//          if ($('#phone, #phone1')) {
//          $('#phone, #phone1').blur(function () {
//          if (!$.isNumeric($(this).val())) {
//          $(this).val('');
//          }
//          })
//
//          }
//
//          if ($('#name, #surname')) {
//          $('#name, #surname').blur(function () {
//          if ($.isNumeric($(this).val())) {
//          $(this).val('');
//          }
//          })
//          }
//
//          var h = 96;
//
//          $(window).resize(function () {
//
//          h = 96;
//
//          if ($(window).width() < 500) {
//          h = 228;
//          }
//          }
//          )
//
//          $('.nav').click(function () {
//          if ($('.mainMenu').css('display') == 'none') {
//          var h = 96;
//          if ($(window).width() < 750) {
//          h = 228;
//          }
//
//
//          $('.mainMenu').css('display', 'block').animate({
//          height: h,
//          top: '100%'
//          });
//          } else {
//          $('.mainMenu').animate({
//          top: '90%',
//          height: '0'
//          }, function () {
//          $(this).css('display', 'none');
//          })
//          }
//          })
//          */
//
//
//         /*mainSlider*/
//
//         var randomSlider = $('.randSlider .slide');
//         var cs = $('.randSlider .active-slide');
//         cs.removeClass('active-slide');
//         var ranNum = 1 - 0.5 + Math.random() * (randomSlider.length - 1 + 1);
//         ranNum = Math.round(ranNum);
//         $(randomSlider.get(ranNum - 1)).addClass('active-slide');
//         console.log(ranNum);
//
//
//         function nSlide() {
//             var currentSlide = $('.active-slide');
//             var nextSlide = currentSlide.next();
//
//             if (nextSlide.length === 0) {
//                 nextSlide = $('.slide').first();
//             }
//
//             currentSlide.fadeOut(700).removeClass('active-slide');
//             nextSlide.fadeIn(700).addClass('active-slide');
//
//         }
//
//         var timer = setInterval(nSlide, 5000);
//         if (screen.width <= 767) {
//             clearInterval(timer);
//         }
//
//         $('#rigthArrow').click(function () {
//             clearInterval(timer);
//             nSlide();
//             timer = setInterval(nSlide, 5000);
//         });
//
//         $('#leftArrow').click(function () {
//             clearInterval(timer);
//             var currentSlide = $('.active-slide');
//             var prevSlide = currentSlide.prev();
//             if (prevSlide.length == 0) {
//                 prevSlide = $('.slide').last();
//             }
//
//             currentSlide.fadeOut(700).removeClass('active-slide');
//             prevSlide.fadeIn(700).addClass('active-slide');
//             timer = setInterval(nSlide, 5000);
//         });
//
//
//         $("#owl-example").owlCarousel({
//             items: 3,
//             itemsCustom: false,
//             itemsDesktop: [1200, 3],
//             itemsDesktopSmall: [1023, 2],
//             itemsTablet: [768, 2],
//             itemsTabletSmall: false,
//             itemsMobile: [568, 1],
//             singleItem: false,
//             itemsScaleUp: false,
//             autoWidth: true,
//             //Basic Speeds
//             slideSpeed: 200,
//             paginationSpeed: 800,
//             rewindSpeed: 1000,
//             pagination: false,
//
//             //Autoplay
//             autoPlay: false,
//             stopOnHover: false,
//
//
//         });
//
//
//         /*currentProduct tab change*/
//
//         $('.tab ').click(function () {
//             var active = $('.activeTab');
//             var next = $(this);
//
//             var activeTab = $('.activeContTab');
//             var nextTab = $('.contTab')[$(this).index()];
//             console.log($(this).index());
//
//             active.removeClass('activeTab');
//             next.addClass('activeTab');
//
//             activeTab.removeClass('activeContTab');
//             $(nextTab).addClass('activeContTab');
//
//         })
//
//         /*mob version*/
//
//         $('.text ').click(function () {
//             var active = $('.activeTextTab');
//             var next = $(this);
//
//             var activeTab = $('.activeContTab');
//             var nextTab = $(this).next();
//
//             active.removeClass('activeTextTab');
//             next.addClass('activeTextTab');
//
//             activeTab.removeClass('activeContTab');
//             $(nextTab).addClass('activeContTab');
//         })
//
//
//         /*openMenu*/
//
//         $('.nav').click(function () {
//             console.log('nav');
//             if ($('.mainMenu ').css('display') == 'none') {
//                 $('.mainMenu ').css('display', 'block');
//                 console.log('if');
//             } else {
//                 $('.mainMenu ').css('display', 'none');
//                 console.log('else');
//             }
//         })
//
//         /*search*/
//
//         $('.openSearch').click(function () {
//             if ($('.search ').css('display') == 'none') {
//                 $('.search ').css('display', 'block');
//             } else {
//                 $('.search ').css('display', 'none');
//             }
//         })
//
//         $(document).mouseup(function (e) {
//             if (okeyBlia) {
//                 var popup = $(".openSearch, .search input");
//                 if (!$('.search').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
//                     $(".search").css('display', 'none');
//                 }
//             }
//
//         });
//         var okeyBlia = false;
//
//
//         function search() {
//             if ($(window).width() < 1023) {
//                 $('.search input').unbind('focus blur');
//                 $('.search ').css('display', 'none');
//                 okeyBlia = true;
//             } else {
//                 $('.search ').css('display', 'block');
//                 $('.search input').focus(function () {
//                     $(this).animate({width: '404px'}, 200).attr('placeholder','Поиск');
//                     $('.search input').blur(function () {
//                         $(this).animate({width: '120px'}, 200).attr('placeholder','');
//
//                     })
//                 })
//                 okeyBlia = false;
//             }
//         }
//
//         search();
//
//         function menuOpen() {
//             if ($(window).width() < 1007) {
//                 $('.mainMenu').css('display', 'none');
//
//                 $('.mainMenu>li').unbind('mouseenter mouseleave click');
//
//                 $('.mainMenu>li').click(function () {
//                     console.log(1);
//                     var submenu = $(this).find('ul');
//                     if (submenu.css('display') == 'none') {
//
//                         $('.subMenu').css('display', 'none');
//
//                         submenu.css('display', 'block')
//                     } else {
//                         submenu.css('display', 'none')
//                     }
//                 })
//                 /*$('.mainMenu>li').mouseenter(function () {
//                     var submenu = $(this).find('ul');
//                     submenu.css('display', 'block');
//                     $(this).mouseleave(function () {
//                         submenu.css('display', 'none');
//                     });
//                 })*/
//             } else {
//                 $('.mainMenu>li').unbind('click');
//                 $('.mainMenu ').css('display', 'block');
//                 $('.mainMenu>li').mouseenter(function () {
//                     var submenu = $(this).find('ul');
//                     submenu.css('display', 'block');
//                     $(this).mouseleave(function () {
//                         submenu.css('display', 'none');
//                     });
//                 })
//             }
//         }
//
//         menuOpen();
//
//         $(window).resize(function () {
//             menuOpen();
//             search();
//
//         })
//
//         /*$(document).mouseup(function (e) {
//          var popup = $(".nav");
//          if (!$('.mainMenu').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
//          $(".mainMenu").css('display','none');
//          }
//          });*/
//
//
//         /*PoP CallBack*/
//
//
//         $('.showPrice').on('click', function (e) {
//             e.preventDefault();
//             $('#overflow').fadeIn(400,
//                 function () {
//                     $('.price')
//                         .css('display', 'block')
//                         .animate({opacity: 1, top: '50%'}, 200);
//                 });
//
//             $('#overflow').click(function () {
//                 $('.price')
//                     .animate({opacity: 0, top: '45%'}, 200,
//                     function () {
//                         $(this).css('display', 'none');
//                         $('#overflow').fadeOut(400);
//                     }
//                 );
//             });
//         });
//
//         /*popUp writeUs*/
//
//         $('.mailTo').on('click', function (e) {
//             e.preventDefault();
//             $('#overflow').fadeIn(400,
//                 function () {
//                     $('.mailForm')
//                         .css('display', 'block')
//                         .animate({opacity: 1, top: '50%'}, 200);
//                 });
//
//             $('#overflow').click(function () {
//                 $('.mailForm')
//                     .animate({opacity: 0, top: '45%'}, 200,
//                     function () {
//                         $(this).css('display', 'none');
//                         $('#overflow').fadeOut(400);
//                     }
//                 );
//             });
//         });
//
//         /*curNews*/
//         $('.curImgNews, .curNewsZoom').on('click', function (e) {
//             if ($(window).width() < 768) return;
//             e.preventDefault();
//             $('#overflow').fadeIn(400,
//                 function () {
//                     $('.popUpNews')
//                         .css('display', 'block')
//                         .animate({opacity: 1, top: '50%'}, 200);
//                 });
//
//             $('#overflow, .close').click(function () {
//                 $('.popUpNews')
//                     .animate({opacity: 0, top: '45%'}, 200,
//                     function () {
//                         $(this).css('display', 'none');
//                         $('#overflow').fadeOut(400);
//                     }
//                 );
//             });
//         });
//
//         /*curNews slider*/
//
//         $('.imgs img ').click(function () {
//             var active = $('.activImg');
//             var next = $(this);
//             var src = $(this).attr("src");
//             var alt = $(this).attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             next.addClass('activImg');
//         })
//
//         $('#poprigthArrow').click(function () {
//             var active = $('.activImg');
//             var next = active.next();
//             if (next.length == 0) {
//                 next = $('.imgs img').first();
//             }
//             var src = next.attr("src");
//             var alt = next.attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             next.addClass('activImg');
//         })
//
//         $('#popleftArrow').click(function () {
//             var active = $('.activImg');
//             var prev = active.prev();
//             if (prev.length == 0) {
//                 prev = $('.imgs img').last();
//             }
//             var src = prev.attr("src");
//             var alt = prev.attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             prev.addClass('activImg');
//         })
//
//         /*curImg*/
//         $('.curImg, .curImgZoom').on('click', function (e) {
//             if ($(window).width() < 768) return;
//             e.preventDefault();
//             $('#overflow').fadeIn(400,
//                 function () {
//                     $('.popUpProd')
//                         .css('display', 'block')
//                         .animate({opacity: 1, top: '50%'}, 200);
//                 });
//
//             $('#overflow, .close').click(function () {
//                 $('.popUpProd')
//                     .animate({opacity: 0, top: '45%'}, 200,
//                     function () {
//                         $(this).css('display', 'none');
//                         $('#overflow').fadeOut(400);
//                     }
//                 );
//             });
//         });
//
//         /*curImg slider*/
//
//         $('.imgs img ').click(function () {
//             var active = $('.activImg');
//             var next = $(this);
//             var src = $(this).attr("src");
//             var alt = $(this).attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             next.addClass('activImg');
//         })
//
//         $('#poprigthArrow').click(function () {
//             var active = $('.activImg');
//             var next = active.next();
//             if (next.length == 0) {
//                 next = $('.imgs img').first();
//             }
//             var src = next.attr("src");
//             var alt = next.attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             next.addClass('activImg');
//         })
//
//         $('#popleftArrow').click(function () {
//             var active = $('.activImg');
//             var prev = active.prev();
//             if (prev.length == 0) {
//                 prev = $('.imgs img').last();
//             }
//             var src = prev.attr("src");
//             var alt = prev.attr("alt");
//
//             $('.largeImg img').attr({src: src, alt: alt});
//             active.removeClass('activImg');
//             prev.addClass('activImg');
//         })
//
//         /*lang*/
//             $('.language li').click(function () {
//                 var actli = $('.activeLang');
//                 actli.removeClass('activeLang');
//                 $(this).addClass('activeLang');
//             })
//         /*if ($(window).width < 1024) {
//             console.log('fuck');
//             $('.language li').click(function () {
//                 var lisp = $('.lang').css('display');
//                 console.log('fuck');
//                 if (lisp == 'none') {
//                     $('.lang').css('dislpay', 'block');
//                 } else {
//                     $('.lang').css('dislpay', 'none');
//                 }
//             })
//         }*/
//
//
//         /*city*/
//         $('.town').click(function () {
//             var disp = $('.city').css('display');
//             if (disp === 'block') {
//                 $(".city").hide();
//                 $(this).next().css('transform', 'none');
//             } else if (disp === 'none') {
//                 $(this).next().css('transform', 'rotate(90deg)');
//                 $(".city").show();
//             }
//         })
//
//         $('.city li').click(function () {
//             $('.town').text($(this).text());
//             $(".city").hide();
//         })
//
//
//         $(document).mouseup(function (e) {
//             var popup = $(".town");
//             if (!$('.city').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
//                 $(".city").hide();
//                 $('.town').next().css('transform', 'none');
//             }
//         });
//
//
//
//         $(':input').focus(function(){
//             $(this).css('color','#000');
//
//                 $(':input').blur(function(){
//                     if($(this).val.length==0){
//                         $(this).css('color','#b4b4b4');
//                     }
//                 })
//         })
//
//         /*COST OTHER*/
//
//         $('#whyBuild').change(function () {
//             console.log($(this).val());
//             if ($(this).val() == 'другое') {
//                 $('#whyBuildOther').css('display', 'block');
//             } else {
//                 $('#whyBuildOther').css('display', 'none');
//             }
//         })
//
//     })
