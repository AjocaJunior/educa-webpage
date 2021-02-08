// var firebaseConfig = {
//     apiKey: "AIzaSyCcU1JVVV7WU1vvlsKN-12_z80U-ncDsoI",
//     authDomain: "educa-mozambique.firebaseapp.com",
//     databaseURL: "https://educa-mozambique.firebaseio.com",
//     projectId: "educa-mozambique",
//     storageBucket: "educa-mozambique.appspot.com",
//     messagingSenderId: "812293792882",
//     appId: "1:812293792882:web:2cb3eb0096285cfdec0eeb",
//     measurementId: "G-29BMBQ8P6Y"
// };

// // Initialize Firebase
//   firebase.initializeApp(firebaseConfig);
//   //firebase.analytics();


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


var provider = new firebase.auth.FacebookAuthProvider();

function facebookSignin() {
 firebase.auth().signInWithPopup(provider)
 
 .then(function(result) {
    var token = result.credential.accessToken;
    var user = result.user;
  
    console.log(token)
    console.log(user)
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

var provider = new firebase.auth.GoogleAuthProvider();

function googleSignin() {
   firebase.auth()
   
   .signInWithPopup(provider).then(function(result) {
      var token = result.credential.accessToken;
      var user = result.user;
		
      console.log(token)
      console.log(user)
      location.href = "index.php";
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