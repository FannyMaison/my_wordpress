import {TimelineMax, Power4, Expo} from 'gsap';
export default class Preloader{
    constructor() {
        this.initsEls();
        this.initEvents(); 
    }
    initsEls() {
        this.$textContainerOverlay = $('section .py-5 .text');
        this.list_feature = ['pêcheur du dimanche', 'joueur de bilboquet', 'danseur de salon'];
    }
    initEvents() { 
        this.preloadAnimation();
        this.randomFeature();
    }

    randomFeature() {
        let randIndex = Math.floor(Math.random() * this.list_feature.length);
        return this.list_feature[randIndex];
    }

    preloadAnimation() {
        $(window).on('load', ()=> {
            let text_feature = this.randomFeature();
            $('#feature').text(`${text_feature} et`)
            let tl = new TimelineMax();
            tl
            .staggerTo(this.$textContainerOverlay, 3, {
                y: '0%',
                stagger: 0.8,
                ease: Expo.easeOut,
            }, '+=1')
             .from($('.item-keyword'), 1.5, {
                y: '-5%',
                opacity: 0,
                 ease: Power4.easeInOut,
             })
        });
    }
}