$(document).ready(function(){
    $("#recherche").keyup(function(){
        let text = $("#recherche").val()
        if(text == ""){

            alert("Veuillez entrez un nom");
            $("#data").empty();
        }
        else{
            $.ajax({
                url: "research.php",
                data: {"recherche":text},
                method:"GET",
                success: (data) => {
                    $("#data").empty();
                    $("#data").append(data);
                }
            })
        }
    })
})