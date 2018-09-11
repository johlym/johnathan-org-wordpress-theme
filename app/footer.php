<!-- footer -->
<div class="footer container-object">
  <div class="footer-text">
  <i class="far fa-copyright"></i> 
  2014 – <?php echo date('Y'); ?> Johnathan Lyman.<br /><br />Uptime: <span class="uptime-number"><i class="far fa-sync fa-spin"></i></span> <a href="//status.johnathan.org"><i class="far fa-external-link"></i></a><br /><br />
  An IndieWeb Webring<br />
  <a href="https://xn--sr8hvo.ws/🐴📗/previous">←</a>
  🕸💍
  <a href="https://xn--sr8hvo.ws/🐴📗/next">→</a>
  </div>
</div>
<div style="display: none"><address id="hcard-Johnathan-Lyman" class="vcard">
 <a class="url lead fn" href="https://johnathan.org">Johnathan Lyman</a>
 <div class="adr">
  <span class="locality"><small>Kenmore</small></span>,

  <span class="region"><small>WA</small></span>,

  <div class="country-name"><small>United States</small></div>

 </div>
 <a class="email" href="mailto:email@johnathan.org"><i class="fa fa-fw fa-envelope-o"></i>&nbsp;email@johnathan.org</a>&nbsp;
<div><span class="category">blogging</span>, <span class="category">design</span>, <span class="category">technology</span>, <span class="category">software</span>, <span class="category">development</span>, <span class="category">gaming</span>, <span class="category">photography</span></div>
</address></div>

<script src="/wp-content/themes/jorgredux/assets/js/highlight.min.js"></script>
<?php wp_footer(); ?> 
<script>
  // updates uptime counter at the bottom of the page. 
  hljs.initHighlightingOnLoad();
  var uptimeElement = document.querySelector(".uptime-number");
  checkAndDisplayUptime = function() {
    var e1 = new XMLHttpRequest;
    e1.open("get", "https://updown.io/api/checks?api-key=ro-aNa87VGVKAjK8d9qa8Dk", !0), e1.responseType = "json", e1.onload = function() {
      if (200 === e1.status) {
      var a1 = e1.response;
        if (null !== a1[0].uptime) {
            uptimeElement.innerHTML = a1[0].uptime + "%"
        }
        else {
            uptimeElement.innerHTML = "unknown %";
        }
      }
    }, e1.send()
  };
  null !== uptimeElement && setTimeout(function() { checkAndDisplayUptime() }, 5e3);

  // makes the post meta zone sticky when a user scrolls past a certain point.
  $(function(){
    if ($(window).width() >= 980) {
      // Check the initial Poistion of the Sticky Header
      if ($('.sticky-meta-wrap').length != 0) {
        var stickyAdTop = $('.sticky-meta-wrap').offset().top - 20;
        var stickyAdBottom = $('.main').height() - $('.sticky-meta-wrap').height();
        $(window).scroll(function(){
          // we don't want this behavior if the window hasn't scrolled far enough
          // nor if the window is less than 980px wide. At 979px, we start
          // implementing breakpoints that require the meta to be in a different
          // spot not suitable for sticky scrolling.
          if ( $(window).scrollTop() >= stickyAdTop && $(window).width() > 980) {
            $('.sticky-meta-wrap').css({position: 'fixed', float: 'right', top: '40px'});
          }
          else {
            $('.sticky-meta-wrap').css({position: '', float: '', top: ''});
          }
        });
      };      
    };
  });
</script>
</body>
</html>
<!-- / template: footer -->