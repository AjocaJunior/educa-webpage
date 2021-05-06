



var firebaseConfig = {
    apiKey: "AIzaSyCcU1JVVV7WU1vvlsKN-12_z80U-ncDsoI",
    authDomain: "educa-mozambique.firebaseapp.com",
    databaseURL: "https://educa-mozambique.firebaseio.com",
    projectId: "educa-mozambique",
    storageBucket: "educa-mozambique.appspot.com",
    messagingSenderId: "812293792882",
    appId: "1:812293792882:web:2cb3eb0096285cfdec0eeb",
    measurementId: "G-29BMBQ8P6Y"
};

// Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();



//FACEBOOK AUTH

window.fbAsyncInit = function() {
  FB.init ({
     appId      : '1030424060700290',
     xfbml      : true,
     version    : 'v2.6'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
} (document, 'script', 'facebook-jssdk'));




function facebookSignin() {

   var provider = new firebase.auth.FacebookAuthProvider();

   provider.addScope('user_birthday,email');
   firebase.auth().useDeviceLanguage();
   firebase.auth().signInWithPopup(provider).then(function(result) {
    var token = result.credential.accessToken;
    var user = result.user;


   //  var userimage = document.querySelector('#user-image');
   //  var userpic = document.createElement('#img');
   //  userpic.src = user.photoURL;
   //  userimage.append(userpic);

    console.log(token)
    console.log(user)
    console.log(user.email)
    console.log(user.user_birthday)
    location.href = "index.php";
 }).catch(function(error) {
    console.log(error.code);
    console.log(error.message);
 });
}

function facebookSignout() {
 firebase.auth().signOut()
 
 .then(function() {
    console.log('Signout successful!')
 }, function(error) {
    console.log('Signout failed')
 });
}


//GOOGLE AUTH



function googleSignin() {
   var provider = new firebase.auth.GoogleAuthProvider();
   

   firebase.auth().useDeviceLanguage();
   firebase.auth().signInWithPopup(provider).then(function(result) {
      var token = result.credential.accessToken;
      var user = result.user;
		
// function onSignin(googleUser){
//    var profile  = googleUser.getBasicProfile();
//    console.log("Nome"+profile.getName());
//    console.log("IMAGE:"+profile.getImageUrl());
//    console.log("EMAIL:" +profile.getEmail());

// }
// onSignin();

      console.log(token)
      console.log(user)
      
      
      // location.href = "index.php";
   }).catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
		
      console.log(error.code)
      console.log(error.message)
   });
}

function googleSignout() {
   firebase.auth().signOut()
	
   .then(function() {
      console.log('Signout Succesfull')
   }, function(error) {
      console.log('Signout Failed')  
   });
}

