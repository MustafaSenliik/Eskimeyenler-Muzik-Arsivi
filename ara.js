$(function(){
    $("#arama-cubugu").keyup(function(){                    //Arama kısmında kaç kelimeye basılırsa arama yapılır
        if($("#arama-cubugu").val().length>=3){
            var i=$(this).val();
            var s;
            if($("#customRadioInline1").prop("checked")){s=1;}
            if($("#customRadioInline2").prop("checked")){s=2;}
            if($("#customRadioInline3").prop("checked")){s=3;}
            var bilgi="aranan="+i+"&sec="+s;
            $.ajax({
                url:"ara.php",
                type:"POST",
                data:bilgi,
                success:function (sonuc) {
                    $("#sonuclar").html(sonuc);
                },
                error:function(hata){
                    $("#sonuclar").html(hata);
                }
            });
        }
    });    
});