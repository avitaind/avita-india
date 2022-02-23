$(document).ready(function () {
  $(function () {

    TweenLite.defaultEase = Linear.easeNone;
    var controller = new ScrollMagic.Controller();

    $(".section").each(function (i) {
      var target = $(this).find(".box");
      var tl = new TimelineMax();

      tl.from(target, 0.25, {
        opacity: 0
      });
      tl.to(target, 0.25, {
        opacity: 0
      }, 0.75);

      new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: 0.2,
          duration: '150%'
        })
        .setPin(this)
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
  });
});