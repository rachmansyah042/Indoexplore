
function login() {
    if ($('#email').val()=="") {alert("Email harus diisi");}
    if ($('#password').val()=="") {alert("Password harus diisi");}
    if ($('#email').val()!=""&&$('#password').val()!="") {
        $.ajax({
            url:'http://yippytech.com:3000/user/auth',
            headers: {
                'Content-Type':'application/json'
            },
            method: 'POST',
            dataType:'json',
            data: JSON.stringify({email:$('#email').val(), password:$('#password').val(), login_type:2}),
            success:function(response) {
                console.log(response); 
                if (response.status==200) {
                    localStorage.setItem('token', response._token);

                    if(response.data.id_role==2) {

                        window.location.replace("/provider");
                    }
                     else window.location.replace("/homeupdate");
                } 
                else alert(response.message);
            }
        });
    }
}
