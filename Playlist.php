<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click','.view_data', function() {
            var seqno = $ (this).attr("seqno");
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {seqno: seqno},
                dataType: "json",
                success:function(data) {
                    $('#txtidnumber').val(data.sidn);
                }
            })
        })
    })
</script>