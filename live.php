<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Educa Live Stream</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/educa/logo.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="teste-vocacional/app.css" />
  <link rel="stylesheet" href="css/style.css"> -->

</head>

<body style="background-color: #e9eef4">

  <?php
  include_once('includes/dbconfig.php');         
  $ref = 'livechat/';
  $fetchdata = $database->getReference($ref)->getValue();


?>
  <div id="preloader">
    <div class="loader"></div>
  </div>



  <div class="container-fluid" style="margin-top: 2%;">
    <div class="row align-items-center">
      <div class="col-md-8 col-sm-8">
        <div class="fb-video" data-href="https://www.facebook.com/educamocambique/live/" data-show-text="false"
          data-width="" data-allowfullscreen="true" data-autoplay="true">

        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <!-- <iframe src="https://minnit.chat/EducaMozOnline?embed&dark&language=pt&nickname="
          style="border:none;width:100%;height:550px;" allowTransparency="true"></iframe><br><a
          href="https://minnit.chat/EducaMozOnline" target="_blank">Educa Chat</a> -->
        <div class="container">
          <div class="row clearfix">
           
          </div>

          <div class="chat">
            <div id="chat-window">
              <div class="chat-header clearfix">
                <div class="row">
                  <div class="col-lg-6 justify-content-center">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                      <img src="img/educa/logo.png" alt="avatar">
                    </a>
                    <h6 class="mt-2 ml-2" >  Live Chat</h6>
                    <div class="chat-about">

                      <h6 class="m-b-0" id="user-name2" hidden></h6>
                    </div>
                  </div>

                </div>
              </div>

              <div class="chat-history" id="chat-history">
                <ul class="m-b-0" id="messages">
                  <!-- <li class="clearfix msg">
                     <div class="message-data text-right">
                                <span class="time"></span>
                            </div>
                            <div class="name my-message float-right"> </div> 
                  </li> -->
                  <li class="name msg my">
                    <div class="message-data">
                      <span class="time"></span>
                    </div>
                    <div class="name other-message"></div>
                  </li>

                </ul>
              </div>

              <form id="messageForm" autocomplete="on">
                <div class="chat-message clearfix">
                  <div class="input-group mb-0">

                    <div class="input-group-prepend">
                      <button type="submit" id="msg-btn">
                        <span class="input-group-text"><i class="fa fa-send"></i></span>
                      </button>
                    </div>

                    <input type="text" class="form-control" id="msg-input" placeholder="Escreva a mensagem...">
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- <div class="container" style="margin-left: 0px; padding-right: 0px;">
    <div class="row" >
      <div class="col-12 col-md-9">

        <div class="fb-video" data-href="https://www.facebook.com/educamocambique/live/" data-show-text="false"
          data-width="" data-allowfullscreen="true" data-autoplay="true">

        </div>
        
      </div>
      <div class="col-12 col-md-3">
        <iframe src="https://minnit.chat/EducaMozOnline?embed&dark&language=pt&nickname="
          style="border:none;width:90%;height:550px;" allowTransparency="true"></iframe><br><a
          href="https://minnit.chat/EducaMozOnline" target="_blank">Educa Chat</a>
      </div>

    </div>

  </div> -->


  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0"
    nonce="HdnBKpjV">
    </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <!-- Footer Area End -->

  <!-- **** All JS Files ***** -->
  <!-- jQuery 2.2.4 -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All Plugins -->
  <script src="js/confer.bundle.js"></script>
  <!-- Active -->
  <script src="js/default-assets/active.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
  <script src="js/db/app.js"></script>
  <script src="js/db/real-time-database.js"></script>

  <script>
    var name2 = "";
    firebase.auth().onAuthStateChanged(function (user) {

      if (user) {

        firebase.database().ref('users').on('value', function (snapshot) {
          snapshot.forEach(function (item) {

            if (item.val().userId !== null && item.val().userId !== undefined) {
              var db_uid = item.val().userId.toString().trim();
              var user_uid = user.uid.toString().trim();

              if (db_uid == user_uid) {

                var user_name2 = document.getElementById("user-name2");
                var name = item.val().name;

                if (item.val().name.length > 20) {
                  name = item.val().name.substr(0, 20) + "..";
                } else {
                  name = item.val().name;
                }

                user_name2.innerHTML = name;
                name2 = item.val().name;
                sessionStorage.setItem('usuarioId', item.val().userId);
                localStorage.setItem('usuarioId', item.val().userId);
              }

            }

          });
        });

      } else {
        location.href = 'intro.php';
      }

    });

    function init() {
      msgRef.on("child_added", updateMsgs)
    }

    document.addEventListener('DOMContentLoaded', init);


    const msgScreen = document.getElementById("messages"); //the <ul> that displays all the <li> msgs
    const msgForm = document.getElementById("messageForm"); //the input form
    const msgInput = document.getElementById("msg-input"); //the input element to write messages
    const msgBtn = document.getElementById("msg-btn");
    const datanow = new Date().toLocaleString();


    const db = firebase.database();
    const msgRef = db.ref("livechat");
    // const nameuser = item.val().name;

    msgForm.addEventListener('submit', enviarMensagem);



    function enviarMensagem(e) {
      e.preventDefault();

      const text = msgInput.value;

      if (!text.trim()) return alert('Porfavor, escreve uma mensagem'); //no msg submitted
      const msg = {
        name: name2,
        text: text,
        time: datanow
      };

      msgRef.push(msg);
      msgInput.value = "";

    }


    const updateMsgs = data => {
      const {
        name,
        text,
        time
      } = data.val(); //get name and text

      //load messages, display on left if not the user's name. Display on right if it is the user.
      const msg = `<li class="${name == name ? "msg my" : "msg"}"><span class = "msg-span">
    <i class = "name"></i><strong>${name}</strong>: ${text}
    </span>
    <div class="message-data">
    <span class="time">${time}</span>
    </div>
  </li>`

      msgScreen.innerHTML += msg; //add the <li> message to the chat window

      //auto scroll to bottom
      
    }

    var x = 0;
function myFunction() {
  document.getElementById("demo").innerHTML = x += 1;
}
document.addEventListener('DOMContentLoaded', myFunction);




  </script>

</body>
<style>
 

  .card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
  }

  .chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
  }

  .chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
  }

  .people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
  }

  .people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
  }

  .people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
  }

  .people-list .chat-list li.active {
    background: #efefef
  }

  .people-list .chat-list li .name {
    font-size: 15px
  }

  .people-list .chat-list img {
    width: 45px;
    border-radius: 50%
  }

  .people-list img {
    float: left;
    border-radius: 50%
  }

  .people-list .about {
    float: left;
    padding-left: 8px
  }

  .people-list .status {
    color: #999;
    font-size: 13px
  }

  .chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
  }

  .chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
  }

  .chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
  }

  .chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
  }

  .chat .chat-history ul {
    padding: 0
  }

  .chat .chat-history ul li {
    list-style: none;
    margin-bottom: 10px
  }

  .chat .chat-history ul li:last-child {
    margin-bottom: 0px
  }

  .chat .chat-history .message-data {
    margin-bottom: 10px
  }

  .chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
  }

  .chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
  }

  .chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
  }

  .chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
  }

  .chat .chat-history .my-message {
  
    background-color: white;
  }

  .chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
  }

  .chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
  }

  .chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
  }

  

  .online,
  .offline,
  .me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
  }

  .online {
    color: #86c541
  }

  .offline {
    color: #e47297
  }

  .me {
    color: #1d8ecd
  }

  .float-right {
    float: right
  }

  .clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
  }

  @media only screen and (max-width: 767px) {
    .chat-app .people-list {
      height: 465px;
      width: 100%;
      overflow-x: auto;
      background: #fff;
      left: -400px;
      display: none
    }

    .chat-app .people-list.open {
      left: 0
    }

    .chat-app .chat {
      margin: 0
    }

    .chat-app .chat .chat-header {
      border-radius: 0.55rem 0.55rem 0 0
    }

    .chat-app .chat-history {
      height: 300px;
      overflow-x: auto
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
      height: 650px;
      overflow-x: auto
    }

    .chat-app .chat-history {
      height: 480px;
  
      overflow-x: auto
    }
  }

  @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
      height: 480px;
      overflow-x: auto
    }

    .chat-app .chat-history {
      height: calc(100vh - 350px);
      overflow-x: auto
    }
  }

  #chat-history{
    height: 480px; 
    overflow-y: scroll;
  }

  #msg-btn{
    border: none;
  }

  .time{
    font-size: 12px;
    opacity: 0.9;
  }

</style>

</html>
