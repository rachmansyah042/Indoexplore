
function register() {
    if ($('#name').val()=="") {alert("Nama harus diisi");}
    if ($('#email').val()=="") {alert("Email harus diisi");}
    if ($('#password').val()=="") {alert("Password harus diisi");}
    if ($('#contact_phone').val()=="") {alert("Nomor Telepon harus diisi");}
    if ($('#name').val()!=""&&$('#email').val()!=""&&$('#password').val()!=""&&$('#contact_phone').val()!="") {
    $.ajax({
        url:'http://yippytech.com:3000/user/register',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'POST',
        dataType:'json',
        data: JSON.stringify({name:$('#name').val(),email:$('#email').val(), password:$('#password').val(), contact_phone:('#contact_phone').val}),
        success:function(response) {
            console.log(response); 
            if (response.status==200) {
                
                window.location.replace("/login");
            } else alert(response.message)
        }
    });
  }
}
