$(document).ready(()=>{

    load = ()=>{
        $.ajax({
            url: "core/loadgroups.php",
            dataType: "JSON",
            success: (data)=>{
                $.each(data, (index)=>{
                    $('#groups').append("<div class='group'>" + data[index].name + "<a href='chat.php?id=" + data[index].idGroup +  "' class='join'>Join</a>" + "<div>");
                })
            }
        });
    }

    load();


    $("#makeGrp").click(()=>{
        let chatName = prompt("Please enter chat name");

        if(chatName == null || chatName == ""){
            alert("Please enter a chat name");
            chatName = prompt("Please enter chat name");
        } else {
            $.ajax({
                type: "POST",
                url: "core/createGrp.php",
                dataType: "text",
                data: {name : chatName},
                success: (yeet)=>{
                    $("#groups").empty();
                    load();
                    console.log(yeet);
                }
            })

            
        }
    })


});