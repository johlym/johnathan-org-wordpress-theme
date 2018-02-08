<!-- footer -->
<div class="container">
    <div class="footer-columns">
        <div class="footer-column column-powered">
        Powered by: <br />
        <a class="pb-link" href="https://link.johnathan.org/linode"><i class="fab fa-linode"></i></a>
        <a class="pb-link" href="https://wordpress.org"><i class="fab fa-wordpress"></i></a>
        <a class="pb-link" href="https://letsencrypt.org"><i class="fal fa-lock"></i></a>
        <a class="pb-link" href="https://dnsimple.com"><img class="pb-small" src="<?php echo get_bloginfo('template_directory'); ?>/assets/svg/dnsimple.com.svg" /></a>
        <a class="pb-link" href="https://link.johnathan.org/keycdn"><i class="fab fa-keycdn"></i></a>
        <a href="https:////fontawesome.com" class="pb-link"><i class="fab fa-font-awesome-flag"></i></a>
        </div>
        <div class="footer-column column-copyright">
        <i class="fal fa-copyright"></i> 
        2014 – <?php echo date('Y'); ?> Johnathan Lyman. 
        <br /><br />
        All 
        <?php echo wp_count_posts( 'post' )->publish; ?> posts and 
        <?php echo wp_count_posts( 'page' )->publish; ?> pages were made with 
        <i class="far fa-heart"></i> and <i class="far fa-coffee"></i> in Seattle.<br /><br />
        </div>
        <div class="footer-column column-stats">
        <i class="fal fa-tachometer-alt"></i> Uptime: <span class="uptime-number"><i class="fal fa-sync fa-spin"></i></span> <a href="//status.johnathan.org"><i class="fal fa-external-link"></i></a>
        </div>
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

    

    <script src="/wp-content/themes/johnathan-org/assets/js/highlight.min.js"></script>
    <script>
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
    </script>
    <?php wp_footer(); ?> 
</body>

</html>
<!-- / footer -->