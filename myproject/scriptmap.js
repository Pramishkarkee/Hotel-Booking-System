
function onSignIn(googleUser)
{
    
    var profile=googleUser.getBasicProfile();
    $(".g-signin2").css("display","none");
    $(".data").css("display","block");
    $("#pic").attr('src',profile.getImageUrl());
    $("#email").text(profile.getEmail());
}
function signout()
{
    var auth2=gapi.auth2.getAuthInstance();
    auth2.signOut().then(function(){
        alert("you have been successfully signout");
       
        $(".g-signin2").css("display","block");
        $(".data").css("display","block");
    });
}