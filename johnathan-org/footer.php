<!-- footer -->

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