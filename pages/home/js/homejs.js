
$(document).ready(function(){
    //function to send vale to login function
    $('#login').click(function(){
        let email= $('#email_input').val();
        let password= $('#password_input').val();
        console.log(email);
        console.log(password);
        $.ajax({
            url:'./function/loginfun.php',
            method:'POST',
            data:{
                "email":email,
                "password":password
            },
            success:function(resp){
              if(typeof resp!=undefined){
                console.log("entered");
                // console.log(resp);
                resp=JSON.parse(resp);
                if(resp.status==1){
                  console.log(resp);
                  $(".user").css("display", "block");
                 }
                if(resp.status==0){
                  console.log("not found");
                  $(".invalid").css("display","block");
                }    
              }
            }
        })
    })

});