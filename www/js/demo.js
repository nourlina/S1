$(function(){

    $("#btn-reverse").on("click",function(e){
        $(".flipbox").flippyReverse();
        e.preventDefault();
    });
        
    $("#btn-left").on("click",function(e){
	if(document.getElementById('fliper').value==1) {
	document.getElementById('fliper').value=0;
        $(".flipbox").flippy({
            color_target: "white",
            direction: "right",
            duration: "750",
            verso: document.getElementById('flipbox1s').innerHTML,
         });
         e.preventDefault();
		 document.getElementById('fliper').value=0;
		
		   document.getElementById('btn-left').innerHTML="Not yet a member?<br /><u>Sign up</u>";
		  }
		 else {
		 document.getElementById('flipbox1s').innerHTML=document.getElementById('flipbox1').innerHTML;
        $(".flipbox").flippy({
            color_target: "white",
            direction: "left",
            duration: "750",
           // verso: "<div style='width:100%;clear:both;padding-top:200px;'><div id='login-form' class='x-plain-body'><div style='width:70%;float:left;'><div class='username'><input type='text' id='login_username' name='login_username' placeholder='Utilisateur' onclick='taco(1)' ></div><div class='passwd'><input type='password' id='login_passwd' name='login_passwd' placeholder='Mot de passe' onclick='taco(2)'></div></div><div style='width:30%;float:left;text-align:center;padding-top:15px' ><img src='img/go1.png' /></div></div></div><div style='clear:both;padding-left:30%;'><a href='#' class='lien1'>Forgot your password?</a></div><div style='clear:both;padding-top:10px;text-align:center;'><img src='img/twitter.png' /></div><div style='clear:both;padding-top:10px;text-align:center;'><img src='img/facebook.png' /></div>",
			verso: "<div style='height:343px; overflow-y: scroll;-webkit-overflow-scrolling: touch;'><div style='width:100%;clear:both;padding-top:20px;'><img src='pictures/profil.jpg' style='width:100%;height:100%;' /><img src='pictures/profil.jpg' style='width:100%;height:100%;' /></div></div>",
         });
		 document.getElementById('fliper').value=1;
		  document.getElementById('btn-left').innerHTML="Retour";
		 }
		 
		 
         e.preventDefault();
    });
    
    $("#btn-right").on("click",function(e){
	if(document.getElementById('fliper').value==1) {
	document.getElementById('fliper').value=0;
        $(".flipbox").flippy({
            color_target: "white",
            direction: "right",
            duration: "750",
            verso: document.getElementById('flipbox1s').innerHTML,
         });
         e.preventDefault();}
    });
    
    $("#btn-top").on("click",function(e){
        $(".flipbox").flippy({
            color_target: "#b6d635",
            direction: "top",
            duration: "750",
            verso: "<span class=\"big\">Great !</span>",
         });
         e.preventDefault();
    });
    
    $("#btn-bottom").on("click",function(e){
        $(".flipbox").flippy({
            color_target: "#03588C",
            direction: "bottom",
            duration: "750",
            verso: "<span class=\"big\">Flip !</span>",
         });
         e.preventDefault();
    });
    
    SyntaxHighlighter.all();
});