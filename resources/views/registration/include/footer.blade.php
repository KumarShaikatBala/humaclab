</div> <!-- ./container -->
<script src="{{asset('humaclab/js/main.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script type="text/javascript">
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to delete!!", function(confirmed){
            if (confirmed) {
                window.location.href = link;
            };
        });
    });
</script>
</body>
</html>