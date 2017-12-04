//Este codigo inicializa el js sdk de Facebook
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '148753139087367',
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true,
      version    : 'v2.11'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


   function Login(){
    console.log('Welcome!  Fetching your information.... ');
     FB.login(function(response){
           
        if (response.status === 'connected'){
              if (response.authResponse) {
               // document.getElementById('status').value = 'Bienvenido';
             }
               FB.api('/me','GET', {fields: 'first_name,last_name,name,id,email,birthday,picture'},function(
               response){
               console.log('Successful login for: ' + response.name);
               document.getElementById('Usuario').value=response.id;
               document.getElementById('Password').value=response.id; 
               document.loginForm.submit();

             });

           }else if (response.status === 'not_authorized'){
               // document.getElementById('status').value= 'No esta conectado';

           }else{
               // document.getElementById('status').value='eee';
               }

     },{scope:'email,user_birthday'});
   }


function Registro(){
    console.log('Welcome!  Fetching your information.... ');
     FB.login(function(response){
           
        if (response.status === 'connected'){
           if (response.authResponse) {
               // document.getElementById('status').value = 'Bienvenido';
             }
               FB.api('/me','GET', {fields: 'first_name,last_name,name,id,email,birthday,picture'},function(
               response){
               console.log('Successful login for: ' + response.name);
               document.getElementById('Nombre').value=response.first_name;
               document.getElementById('Apellido').value=response.last_name; 
               document.getElementById('Email').value=response.email; 
                document.getElementById('Usuario').value=response.id;
               document.getElementById('Cedula').value="000000000"; 
               document.getElementById('Telefono').value="0"; 
                document.getElementById('Contrasena').value=response.id; 
               document.regForm.submit();

             });

           }else if (response.status === 'not_authorized'){
               // document.getElementById('status').value= 'No esta conectado';

           }else{
               // document.getElementById('status').value='eee';
               }

     },{scope:'email,user_birthday'});
   }

  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
   

   function getInfo(){

}
