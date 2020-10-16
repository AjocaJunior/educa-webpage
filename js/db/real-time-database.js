
function loginUser(name , password){
    console.log(name);
}



//add institution
function register_institution(){
    var institution_name = document.getElementById('institution_name').value;
    var location = document.getElementById('location').value;
    var contact  = document.getElementById('contact').value;
    var website  = document.getElementById('website').value;
    var video_link = document.getElementById('video_link').value;
    var institution_description = document.getElementById('institution_description').value;
    var email      = document.getElementById('email').value;
    var password   = document.getElementById('password').value;
    var uid        = uuidv4();
    addInstitution(institution_name ,location , contact , website , video_link , institution_description , email , password , uid);
}

function addInstitution(institution_name ,location , contact , website , video_link , institution_description , email , password , uid){

    var data = {
        institution_name : institution_name ,
        location : location ,
        contact  : contact,
        website  : website,
        video_link : video_link,
        institution_description : institution_description ,
        email:email,
        password: password,
        uid:uid
    }

    firebase.database().ref().child('institution').child(uid).set(data , function(error){
        if (error) {
            alert("Data could not be saved." + error);
        } else {
            location.href="index.php";
     }
    });
    }


    function uuidv4() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
        });
    }
