
// Botoes
var addButton = document.getElementById('addButton');
var register_institution = document.getElementById('register_institution');

register_institution.addEventListener('click' , function(){
    'institution_name =' => $institution_name,
    'location' => $location,
    'contact' => $contact,
    'contact ' => $contact ,
    'website' => $website,
    'video_link ' => $video_link ,
    'institution_description ' => $institution_description ,
    'email' => $email,
    'password' => $password
});


addButton.addEventListener('click', function () {
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
var contact = document.getElementById('contact').value;
var genre = document.getElementById('genre').value;
var date_of_birth = document.getElementById('date_of_birth').value;
var category = document.getElementById('category').value;
var residence = document.getElementById('residence').value;
var userId = "aaa";
var imageUrl = "ddd";
create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence)
});

function create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence) {
    var data = {
               userId:userId,
               name:name, 
               email:email, 
               password:password,
               imageUrl:imageUrl, 
               contact:contact,
               genre:genre, 
               date_of_birth:date_of_birth, 
               category:category,
               residence:residence
    };

    return firebase.database().ref().child('users').push(data);
}



// register users
// document.getElementById("form").addEventListener("submit", function(){

//     //
//     //
//     // 
//   //   writeUserData(userId, name, email, password,imageUrl , contact,genre , date_of_birth, category,residence );

//   task = {
//        userId:"userId",
//        name:"name", 
//        email:"email", 
//        password:"password",
//        imageUrl:"imageUrl", 
//        contact:"contact",
//        genre:"genre" , 
//        date_of_birth:"date_of_birth", 
//        category:"category",
//        residence:"residence"
//   }

//   return firebase.database().ref().child('users').push(task);
//   console.log(name);

// //  let db = firebase.database().ref('users/' + userId);
// //  db.set(task);


  
//   });


/*
firebase.database().ref('users').on('value', function(snapshot){
    //userList.innerHTML = '';
    snapshot.forEach(function (item) {
        var li = document.createElement('li');
        li.appendChild(document.createTextNode(item.val().nome + ': ' + item.val().idade));
        userList.appendChild(li);
    });
});

*/



/*

function remover() {
    const key = "-LrQHurF6khXrBwLsRLj";
    console.log("foi")
   firebase.database().ref('users/' + key).remove();
}
*/