document.querySelector('#login').addEventListener('click', login);

function login(e) {
    e.preventDefault();
    
    let email = document.getElementById("email").value;
    let password = document.getElementById("pass").value;

    var form = {
        "email":email,
        "password":password
    };

    $.ajax({
        url:"./Controller/login.php",
        type:"POST",
        data: form,
        success: function (data) {
            alert(data);
        },
        error: function () {
            alert("Eres joto");
        }
    })
    

}