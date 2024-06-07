'use strict';

let $ = document;

// hamberger menu

let svg111 = $.querySelector('#svg111');
let menuContainer = $.querySelector('#menu-nav-container');
let hamberger = $.querySelector('#hamberger-menu');
let back_svg = $.querySelector('#back-svg');

svg111.addEventListener('click', function(){
    menuContainer.classList.remove('hidden');
    console.log("asaadads")
})

back_svg.addEventListener('click', function(){
    menuContainer.classList.add('hidden');
    console.log("asaadads")
})


// //////////////////////////////////////////////////////////////////
// for question box

// child span
let des_1 = $.querySelector('#description-question-1');
let des_2 = $.querySelector('#description-question-2');
let des_3 = $.querySelector('#description-question-3');
let des_4 = $.querySelector('#description-question-4');

// first svg
let svgDown_1 = $.querySelector('#arrow-down1');
let svgDown_2 = $.querySelector('#arrow-down2');
let svgDown_3 = $.querySelector('#arrow-down3');
let svgDown_4 = $.querySelector('#arrow-down4');

// second svg
let svgUp_1 = $.querySelector('#arrow-up1');
let svgUp_2 = $.querySelector('#arrow-up2');
let svgUp_3 = $.querySelector('#arrow-up3');
let svgUp_4 = $.querySelector('#arrow-up4');

// container div all
let desDiv_1 = $.querySelector('#des-div-1');
let desDiv_2 = $.querySelector('#des-div-2');
let desDiv_3 = $.querySelector('#des-div-3');
let desDiv_4 = $.querySelector('#des-div-4');

// click function
desDiv_1.addEventListener('click', ()=> {
    des_1.classList.toggle('hidden');
    svgUp_1.classList.remove('hidden');
    svgDown_1.classList.add('hidden');   
})

desDiv_2.addEventListener('click', ()=> {
    des_2.classList.toggle('hidden');
    svgUp_2.classList.remove('hidden');
    svgDown_2.classList.add('hidden');   
})

desDiv_3.addEventListener('click', ()=> {
    des_3.classList.toggle('hidden');
    svgUp_3.classList.remove('hidden');
    svgDown_3.classList.add('hidden');   
})

desDiv_4.addEventListener('click', ()=> {
    des_4.classList.toggle('hidden');
    svgUp_4.classList.remove('hidden');
    svgDown_4.classList.add('hidden');   
})

// ///////////////////////////////////////////////////////////////


// $(document).ready(function(){

//        $("#live_search").keyup(function(){

//            var input = $(this).val();
//                  alert (input);
//        });
//    });