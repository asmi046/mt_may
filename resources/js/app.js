import './bootstrap';


import {createApp} from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import TourPrice from "./components/TourPrice.vue"
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'

import fslightbox from 'fslightbox'

const global_app = createApp({
    components:{
        ModalWindow,
    },
    setup() {}
})


global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");


const price_app = createApp({
    components:{
        TourPrice,
    },
    setup() {}
})

price_app.use(VueAxios, axios)
price_app.directive('mask', VMaskDirective)
price_app.mount("#price_app");


import SideMenu from './menues.js';

let side_menue = new SideMenu('#main_side_menue', '.show_menue_button')

import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";


gsap.registerPlugin(TextPlugin, ScrollTrigger, ScrollSmoother, ScrollToPlugin);

ScrollTrigger.normalizeScroll(true)

let smoother = ScrollSmoother.create({
    smooth: 2,
    effects: true,
    normalizeScroll: true
});


let img_object_from =  {
    opacity:0,
}
let img_object_to = {
    opacity:1,
    duration:.2
}

let tl = gsap.timeline({delay:1})
    // .from('.about', { opacity:0, scale:0})
    // .from('.location_section', { opacity:0, scale:0})

tl.fromTo('header .container',
    {
        opacity:0,
    },
    {
        opacity:1,
        duration:.5
    }
)
.fromTo('.bnr_text',
    {
        opacity:0,
        x:-300
    },
    {
        opacity:1,
        x:0,
        duration:.5
    }
)
.fromTo('.page_top_galery', img_object_from, img_object_to )
.fromTo('.param_blk_1', img_object_from, img_object_to )
.fromTo('.param_blk_2', img_object_from, img_object_to )
.fromTo('.param_blk_3', img_object_from, img_object_to )
.to('.about',
    {
        opacity:1,
        scale: 1,
        duration:.5
    }
)


let tl1 = gsap.timeline({
    delay:2,
    scrollTrigger: {
        trigger: ".about_tours",
        // markers:true,
        start:'top bottom-=10%',
        end: 'bottom 50%',
        scrub:true,
    }
})

tl1.fromTo( ".turists",
    {
        xPercent: 150,
        opacity: 0,
    },
    {
        xPercent: 0,
        opacity: 1,
        duration:1.5,
        ease: "power1.out"
    }
)
.fromTo( ".buss",
    { xPercent: -20, opacity: 0, scaleX: -0.3, scaleY: 0.3 },
    {  xPercent: 0, opacity: 1, scaleX: -1, scaleY: 1, duration:1.5, ease: "power1.out" }
)

gsap.to( ".obl_1",
    {
        delay:1,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
        },
        xPercent: 120,
        duration:1.5
    },
)

gsap.to( ".obl_2",
    {
        delay:1.5,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
        },
        xPercent: -120,
        duration: 1.5
    },
)


gsap.to( ".obl_3",
    {
        delay:1.5,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
            // markers:true,
        },
        xPercent: 120,
        duration: 1.5
    },
)

// ScrollTrigger.create({
//     trigger: ".about_tours",
//     markers:true,
//     start:'top bottom',
//     end: 'bottom 50%',
//     scrub:true,
//     animation: gsap.fromTo( ".turists",
//         { xPercent: 250 },
//         {  xPercent: -50, duration:1, ease: "power1.out" }
//     ),
// })




const locations = Array.from(document.querySelectorAll(".location_wrapper .location"))
locations.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})

const deys = Array.from(document.querySelectorAll(".programm_wrapper .dey_element"))
deys.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})


// .to('.location_wrapper', {
//         scrollTrigger:
//          {
//             trigger: '.location_wrapper',
//             markers:true,
//             start:'bottom bottom',
//             // end:'bottom top',
//             // // scrub:true
//         },
//         opacity:1,
//         scale: 1,
//         duration:2
//     }

// )


const items = document.querySelectorAll(".c_blk .c span");

gsap.from(items, {
    delay:2,
    textContent: 0,
    duration: .5,
    snap: { textContent: 1 },
    stagger: 1,
});

const anchors = document.querySelectorAll('a[href*="#"].yakor')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    main_side_menue.classList.remove('active');
    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
