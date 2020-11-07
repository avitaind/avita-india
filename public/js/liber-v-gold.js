var controller = new ScrollMagic.Controller();

/** 
 * dynamic-performance-banner
 * 
*/
var scene = new ScrollMagic.Scene({
    triggerElement:'.screen1',
})

.setClassToggle('.screen1', 'screen1-1')
.addTo(controller);    

var scene = new ScrollMagic.Scene({
    triggerElement:'.screen2',
})

.setClassToggle('.screen2', 'screen2-2')
.addTo(controller);   


/** 
 * light-weight-banner
 * 
*/
var scene = new ScrollMagic.Scene({
    triggerElement:'.light-weight-thin',
})

.setClassToggle('.light-weight-thin', 'thin')
.addTo(controller);    

var scene = new ScrollMagic.Scene({
    triggerElement:'.light-weight-light',
})

.setClassToggle('.light-weight-light', 'light')
.addTo(controller);   


/** 
 * Keyboard and Fingerprint
 * 
*/
var scene = new ScrollMagic.Scene({
    triggerElement:'.keyboard-fingerprint-light',
})

.setClassToggle('.keyboard-fingerprint-light', 'off')
.addTo(controller);    


var scene = new ScrollMagic.Scene({
    triggerElement:'.keyboard-fingerprint-light',
})

.setClassToggle('.keyboard-fingerprint-light', 'off')
.addTo(controller);    

