$(document).ready(()=>{

    load = ()=>{
        $.ajax({
            url: "core/loadMessages.php",
            dataType: "JSON",
            success: (data)=>{
                let html = "";

                $.each(data, (index)=>{
                    let colour = data[index].colour; 
                    html += "<div style='color:"+ colour +"'>"+ data[index].date +" " + data[index].name + "<br> "+ data[index].message + "</div>";
                })

                $('#messages').html(html)
            }
        })
    };

    load();

    setInterval(()=>{
        load();
    }, 2000)


    $("#sendMsg").click(()=>{
        let msg = $('#messageInput').val();
        $.ajax({
            type: "POST",
            url: "core/sendMessage.php",
            dataType: "text",
            data: 'message=' + msg,
            success: (yeet)=>{
                console.log('yeet');
            }
        })
    })




})