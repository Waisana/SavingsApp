<script>

$(document).ready(function(){



    @foreach($clients as $client)
        $("#client{{$client->id}}").click(function(){
            var clId= $("#client{{$client->id}}").val();
            alert(clId);
        });
    @endforeach

   

        alert('clicked');

    
});
$('.form-group').on('input','.amt', function(){
    var minmum =0;
    $('.form-group .amt').each(function(){
        var inputval =$(this).val();
        if($.isNumeric(inputval)){
            minmum  += parseFloat(inputval);
        }
    })
    $('#result').text(minmum);
});



</script>