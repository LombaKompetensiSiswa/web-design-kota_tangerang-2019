        <div class="sub-footer">
            <a href="https://facebook.com" class="social">Facebook</a>
            <a href="https://twitter.com" class="social">Twitter</a>
            <a href="https://instagram.com" class="social">Instagram</a>
        </div>
        <footer>
            <div class="container">
                Copyright &copy; Reza Juliandri. All Right Reserved
            </div>
        </footer>
        <script>
            jQuery(function($){
                $(document).ready(function(){
                    $(".toggle").click(function(){
                        $(".toggle").toggleClass("active");
                        $(".sidebar").toggleClass("active");
                        $(".toggle .text").toggleClass("active");
                    });
                    $(".toggle-mobile").click(function(){
                        $(".mobile-item").toggleClass("active");
                    });
                    $(".video").hover(function(){
                        console.log($(".video").get().length);
                        for(var i=0; i<$(".video").get().length; i++){
                            $(".video").get(i).pause();
                        }
                        document.querySelector("#main-video").pause();
                        $(this).get(0).play();
                    });
                    $("#comment").attr('rows',2);
                    $(".video").mouseout(function(){
                        for(var i=0; i<$(".video").get().length; i++){
                            $(".video").get(i).pause();
                        }
                        document.querySelector("#main-video").play();
                    });
                });
                var time = "2019-10-19 18:00";
                var timeTimestamp = new Date(time).getTime();
                setInterval(function(){
                    var timeDifferent = timeTimestamp - new Date().getTime();
                    timeDifferents = Math.floor(timeDifferent/1000);
                    $("#day").html(Math.floor(timeDifferents/86400));
                    $("#hour").html(Math.floor(timeDifferents%86400/3600));
                    $("#minute").html(Math.floor(timeDifferents%3600/60));
                    $("#second").html(Math.floor(timeDifferents%60));
                },1);
            });
        </script>
        <?php wp_footer(); ?>
    </body>
</html>