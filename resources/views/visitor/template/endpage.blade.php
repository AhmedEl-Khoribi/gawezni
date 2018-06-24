
<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script>

    $(".toggle").click(function(){
        $(".navcollaps").toggleClass("show");
    });
</script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>




<script>

    var nexusratio = 0.5628415300546448;
    //43.4512445,-80.498576

    $(document).ready(function(){
        //Resize();
    });

    function Resize(){
        var h = $(document).height();
        console.log(h);
        if(h > 512){
            $("#nexus6p").css('height', 512);
            $("#nexus6p").css('width', 512 * nexusratio);
        }
        else{
            var w = h * nexusratio;
            $("#nexus6p").css('height', h);
            $("#nexus6p").css('width', w);
        }
    }

    $(".menu").on("click", function(e){
        $(this).toggleClass("on");
    });


    $(".menu-item").on("click", function(e){
        $(".profile-bottom .profile-container").removeClass("open");
        var c = $(this).attr('menu-data');
        console.log(c);
        $("."+c).addClass('open');
    });

</script>




