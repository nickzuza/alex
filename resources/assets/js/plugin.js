'use strict';
// import gmap from './components/googlemap';
Vue.component('modal', {
    template: `<transition name="modal">
   <div class="modal-mask" @click="$emit(\'close\')">
      <div class="modal-wrapper">
         <div class="modal-container">
            <div class="modal-close" @click="$emit(\'close\')">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 348.333 348.334" xml:space="preserve">
                   <g>
	                    <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85   c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563   c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85   l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554   L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
                   </g>
               </svg>
            </div>
            <div class="modal-body" @click.stop>
               <slot></slot>
            </div>
         </div>
      </div>
   </div>
</transition>`
});
import Multiselect from 'vue-multiselect';

function wordend(num, words) {
    return words[((num = Math.abs(num % 100)) > 10 && num < 15 || (num %= 10) > 4 || num === 0) + (num !== 1)];
}



window.proj = function(id){
    $('#'+id).slick({
        centerMode:true,
        slidesToShow:3,
        focusOnSelect:true,
        prevArrow:
        '<div class="slick-arrow prevArrow">'+
        '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"x="0px" y="0px" width="20px" height="20px" viewBox="0 0 459 459"  xml:space="preserve"><g><g ><polygon points="459,204 96.9,204 188.7,112.2 153,76.5 0,229.5 153,382.5 188.7,346.8 96.9,255 459,255   " /></g></g>'+
        '</div>',
        nextArrow:'<div class="slick-arrow nextArrow">'+
        '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"x="0px" y="0px" width="20px" height="20px" viewBox="0 0 459 459"  xml:space="preserve"><g><g ><polygon points="459,204 96.9,204 188.7,112.2 153,76.5 0,229.5 153,382.5 188.7,346.8 96.9,255 459,255   " /></g></g>'
        +'</div>',
        arrows:true,
        centerPadding:'270px',
        dots:true,
        responsive:[
            {

                breakpoint:1305,
                settings:{
                    slidesToShow:3,
                    centerPadding:'0px',
                }

            },
            {
                breakpoint:1270,
                settings:{
                    slidesToShow:3,
                    dots:false,
                    centerPadding:'0px',
                }

            },
            {
                breakpoint:900,
                settings:{
                    slidesToShow:1,
                    centerPadding:'200px',
                }

            },
            {
                breakpoint:800,
                settings:{
                    slidesToShow:1,
                    centerPadding:'150px',
                }

            },
            {
                breakpoint:700,
                settings:{
                    slidesToShow:1,
                    centerPadding:'50px',
                }

            },
            {
                breakpoint:550,
                settings:{
                    slidesToShow:1,
                    centerPadding:'0px',
                }

            }
        ]
    });

};


window.page = new Vue({
    el:'#main',
    data:{
        call:{
            name:'',
            email:'',
            s:false
        },
        callBack:false,
        block4:{
            slid:1
        },
        maps:{
            tab:0,
        }

    },
    methods:{
        moveTo(id){
            $('html, body').animate({
                scrollTop: $("."+id).offset().top -65
            }, 2000);

        },
        closeMod(){
            this.call.name = '';
            this.call.email = '';
            this.callBack = false;
            this.call.s=false;
        },
        removeError(name){
            this.errors.remove(name);
        },
        validate(){
            this.$validator.validateAll().then((result) => {
                if(result){
                    this.call.name = '';
                    this.call.email = '';
                    this.callBack = true;
                    this.call.s=true;
                    console.log('go');
                }
            }).catch(() => {});
        },
        initMap(id) {

            setTimeout(function(){
                console.log(window.markers[id])
                var map = new google.maps.Map(document.getElementById('place'+id), {
                    zoom: 1,
                    center: window.markers[id]
                });
                var marker = new google.maps.Marker({
                    position: window.markers[id],
                    map:map,
                    icon: '/img/pin.png'
                });
                console.log(marker)
            },300);

        },
        changeMap(id){
            this.maps.tab =id;
            if(window.innerWidth > 1270){
                var place =window.markers[id];
                window.mapGoogle.panTo(new google.maps.LatLng(place.lat , place.lng));
            }
            else{

                if(!(document.getElementById('place'+id).querySelector('.gm-style'))){
                    this.initMap(id);
                }

            }

        },
        changeSlid(id){
            var id1 , id2 , n;
            if(this.block4.slid != id){
                if(this.block4.slid === 1){
                    id1 = 'sales'; id2 = 'restaurants';
                    n=2;
                }else{
                    id1 = 'restaurants'; id2='sales';
                    n=1
                }
                $('#'+id1).slick('unslick');
                this.block4.slid=n;
                setTimeout(function(){proj(id2)},10);
            }

        }
    },
    mounted(){
        $('.home-slider').not('.slick-initialized').slick({
            lazyLoad: 'ondemand',
            slidesToShow:1,
            arrows:true,
            prevArrow:
            '<div class="slick-arrow slickPrev">'+
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="80px" height="55px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve"><g><g id="keyboard-backspace"><polygon points="459,204 96.9,204 188.7,112.2 153,76.5 0,229.5 153,382.5 188.7,346.8 96.9,255 459,255   " fill="#FFFFFF"/></g></g>'+
            '</div>',
            nextArrow:'<div class="slick-arrow slickNext">'+
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="80px" height="55px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve"><g><g id="keyboard-backspace"><polygon points="459,204 96.9,204 188.7,112.2 153,76.5 0,229.5 153,382.5 188.7,346.8 96.9,255 459,255   " fill="#FFFFFF"/></g></g>'
            +'</div>',
            responsive:[
                {
                    breakpoint:1280 ,
                    settings:{
                        dots:true ,
                        arrows:false
                    }
                }
            ]
        });
        window.proj('sales');
        $('.ourItems .slider').not('.slick-initialized').slick({
            slidesToShow:4,
            arrows:true,
            dots:true,
            prevArrow:
            '<div class="slick-arrow slickPrev">'+
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="28px" height="42px" viewBox="0 0 444.819 444.819" xml:space="preserve"><g><path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264   c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168   c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413   c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864   c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/> </g></svg>'+
            '</div>',
            nextArrow:'<div class="slick-arrow slickNext">'+
            '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="28px" height="42px" viewBox="0 0 444.819 444.819" xml:space="preserve"><g><path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264   c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168   c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413   c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864   c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z"/> </g></svg>'+
            '</div>',
            responsive:[
                {
                    breakpoint:1000 ,
                    settings:{
                        dots:true ,
                        arrows:false,
                        slidesToShow:3,
                    }
                },
                {
                    breakpoint:800 ,
                    settings:{
                        slidesToShow:2,
                    }
                },
                {
                    breakpoint:550 ,
                    settings:{
                        slidesToShow:1,
                    }
                }

            ]
        });
        $('.parteners .slider').not('.slick-initialized').slick({
            slidesToShow:6,
            arrows:false,
            autoplay: true,
            pauseOnHover:true,
            autoplaySpeed: 2000,
            responsive:[
                {
                    breakpoint:1270 ,
                    settings:{
                        arrows:false,
                        slidesToShow:5,
                    }
                },
                {
                    breakpoint:1000 ,
                    settings:{
                        slidesToShow:4,
                    }
                },
                {
                    breakpoint:800 ,
                    settings:{
                        slidesToShow:3,
                    }
                },
                {
                    breakpoint:600 ,
                    settings:{
                        slidesToShow:2,
                    }
                },
                {
                    breakpoint:500 ,
                    settings:{
                        slidesToShow:1,
                    }
                }

            ]
        });
    }
});
$(window).resize(function(){
    initMap();

});