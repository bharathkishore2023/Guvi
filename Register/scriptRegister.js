// function submitForm(){
//     var email = $('#email').val();
//     var password=$('#password').val();
//     var confirmPassword=$('#confirm_password').val();
//     if(password!=confirmPassword){
//         alert("invalid credentials");
//     }
//     else {
//     var formData={email:email,password:password};
//     $.ajax({url:"http://localhost/api/index.php",type:'POST',data:formData,success:function(response)
// {
//  console.log(response);
// }
// });
//     }
// }
$("#register").on('click',function(){

    $('#register').click(function(){
        $('#loginPage').attr("action","login.html");
    });
    $.ajax({
        url : 'http://localhost/Guvi/api/data.php',
        type : 'POST',
        data : $("input_form").serialize(),
        success : function(response){
            $("#success").text("Form submit success");
        }
    })
})