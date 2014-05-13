</div>
                </div>
                <!-- END Main Content -->
                <footer>
                    <p><?php //include '../resources/footers.php'; ?></p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <iframe id="iframe" name="iframe" width="0px" allowtransparency frameborder="0" height="0px" style="display:none"> </iframe>
            <!-- END Content -->
        </div>
        <!-- END Container -->

        <!--page specific plugin scripts-->
        <script>
            //for theming
            function getCookie(cname)
            {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++)
                {
                    var c = ca[i].trim();
                    if (c.indexOf(name) == 0)
                        return c.substring(name.length, c.length);
                }
                return "";
            }

            var e = $("#theme-setting ul.colors a").parent().get(0);
            var t = $(e).parent().get(0);
            var n = $(t).data("target");
            $(t).children("li").removeClass("active");
            $(e).addClass("active");
            if ($(n).attr("class") != undefined) {
                $(n).attr("class", $(n).attr("class").replace(s, "").trim())
            }
            $(n).addClass("skin-" + getCookie("skin-"));

            if (n == "body") {
                var o = $(t).parent().get(0);
                var u = $(o).nextAll("li:lt(2)");

                $(u).find("li.active").removeClass("active");

                /*$(u).find("a." + i).parent().addClass("active");*/

                $("#navbar").attr("class", $("#navbar").attr("class").replace(/\bnavbar-.*\b/g, "").trim());

                $("#main-container").attr("class", $("#main-container").attr("class").replace(/\bsidebar-.*\b/g, "").trim())

            }



            $("#sidebar").toggleClass("sidebar-collapsed");
            if (getCookie("sidebar-collapse") == "icon-double-angle-right") {
                $("#sidebar-collapse > i").attr("class", "icon-double-angle-right");
                $("#sidebar").addClass("sidebar-collapsed");

            } else {
                $("#sidebar-collapse > i").attr("class", "icon-double-angle-left");
                $("#sidebar").removeClass("sidebar-collapsed");
            }

            $(".nice-scroll").getNiceScroll().resize();
        </script>
        <script>
            $("a[data-ajax]").click(function(event){
                event.preventDefault();
                var urlPart = $(this).attr('href');
                var furl=makeCiUrl(urlPart,'<?php echo base_url();?>');
                loadContent(furl,'scrollcontent');
                history.pushState(null,null,furl);
                return false;
            });
            //for ajax requests of menu's
            function makeCiUrl(part,baseUrl)
            {
                var url=null;
                var currentLocation = $(location).attr('href');
                //var urls = currentLocation.split(baseUrl);
                url = baseUrl + "index.php" + part;
                return url;
            }
            function loadContent(path,loaderdiv)
            {
                $('#'+loaderdiv).load(path);
            }
            function backForward()
            {
                $(window).bind('popstate',function()
                {
                   loadContent(location.pathname,'scrollcontent');
                });
            }
        </script>

    </body>
</html>