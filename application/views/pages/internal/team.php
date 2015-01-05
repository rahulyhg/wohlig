<div class="circles" id="">
    <a href="<?php echo site_url('/site/chintan') ;?>">
        <div class="internalcircle" image="chintan">
        </div>
    </a>
    <a href="<?php echo site_url('/site/dhruv') ;?>">
        <div class="internalcircle" image="dhruv">
        </div>
    </a>
    <a href="<?php echo site_url('/site/omar') ;?>">
        <div class="internalcircle" image="omar">
        </div>
    </a>
    <a href="<?php echo site_url('/site/tushar') ;?>">
        <div class="internalcircle" image="tushar">
        </div>
    </a>
    <a href="<?php echo site_url('/site/chirag') ;?>">
        <div class="internalcircle" image="chirag">
        </div>
    </a>
    <a href="<?php echo site_url('/site/avinash') ;?>">
        <div class="internalcircle" image="avinash">
        </div>
    </a>
    <a href="<?php echo site_url('/site/jagruti') ;?>">
        <div class="internalcircle" image="jagruti">
        </div>
    </a>
    <a href="<?php echo site_url('/site/mahesh') ;?>">
        <div class="internalcircle" image="mahesh">
        </div>
    </a>
    <a href="<?php echo site_url('/site/sohan') ;?>">
        <div class="internalcircle" image="sohan">
        </div>
    </a>
    <a href="<?php echo site_url('/site/shrutika') ;?>">
        <div class="internalcircle" image="Shrutika">
        </div>
    </a>

</div>


<script>
    $(document).ready(function (e) {
        var j = 0;
        setInterval(function () {
            makeinternalcircular(j++);
        }, 100);

    });

    function makeinternalcircular(deg) {
        var total = $('.internalcircle').length;
        console.log(total);
        var xaxis = 0;
        var yaxis = 0;
        internalwidth = $('.internalcircle').css('width');
        radius = 320;
        /*
            var first=$('.internalcircle').get(0)
            $(first).css('left','50%');
        */
        var angle2 = 2 / total * Math.PI;
        //angle=Math.PI/2;
        console.log(Math.sin(angle));
        for (var i = 0; i < total; i++) {

            var angle = angle2 * i + (deg * Math.PI / 180);
            console.log(angle * 180 / Math.PI);
            yaxis = radius - (Math.cos(angle) * radius);
            xaxis = (Math.sin(angle) * radius);

            var element = $('.internalcircle').get(i);
            $(element).css({
                'left': xaxis,
                'top': yaxis
            });
            console.log(xaxis);

        }
        for (var i = 0; i < total; i++) {
            var element = $('.internalcircle').get(i);
            var image2 = $(element).attr('image');
            var image = "url(<?php echo base_url();?>assets/img/circles/" + image2 + ".png)";
            $(element).css('background', image);

        }

    };
</script>
