<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - Chat</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>


    <?php
  include_once('includes/dbconfig.php');         
  $ref = 'chat/';
  $fetchdata = $database->getReference($ref)->getValue();


?>


    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off" style="background:#414c52">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="./img/educa/Simboloeduca-01.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="evento.php">Evento</a>
                                    <ul class="dropdown">
                                        <li><a href="evento.php#abertura">Abertura</a></li>
                                        <li><a href="evento.php#conferencias">Conferências</a></li>
                                        <li><a href="evento.php#webinares">Webinares</a></li>
                                        <li><a href="evento.php#encerramento">Encerramento</a></li>

                                    </ul>
                                </li>
                                <li><a href="feira.php">Feira</a>
                                    <ul class="dropdown">
                                        <li><a href="feira.php#testes">Testes</a></li>
                                    </ul>
                                </li>
                                <li><a href="actividades-culturais.php">Cultura</a>
                                    <ul class="dropdown">
                                        <li><a href="actividades-culturais.php#novidade">Novidades</a></li>
                                        <li><a href="actividades-culturais.php#pontos">Turismo</a></li>
                                        <li><a href="actividades-culturais.php#jogos">Jogos</a></li>
                                        <li><a href="raffle.php">Sorteio</a></li>
                                    </ul>
                                </li>
                                <li><a href="informacoes-diversas.php">Informações</a>
                                    <ul class="dropdown">
                                        <li><a href="informacoes-diversas.php#blog">Blog</a></li>
                                        <li><a href="informacoes-diversas.php#calendario">Calendário</a></li>
                                        <li><a href="informacoes-diversas.php#bolsas">Bolsas</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php#contact">Contactos</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="perfil/profile.php" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5"
                                id="user-name">Perfil<i class="zmdi zmdi-sign-in"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->



    <!-- Our Ticket Pricing Table Area Start -->

    <section id="tickets" class="our-ticket-pricing-table-area section-padding-150 jarallax">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p id="chat">CHAT ENTRE ESTUDANTES</p>

                    </div>
                </div>
            </div>




            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card chat-app">
                            <div id="plist" class="people-list">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Pesquisar...">
                                </div>
                                <ul class="list-unstyled chat-list mt-2 mb-0">
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix active">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Aiden Chavez</div>
                                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Mike Thomas</div>
                                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Christian Kelly</div>
                                            <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Monica Ward</div>
                                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                        <div class="about">
                                            <div class="name">Dean Henry</div>
                                            <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct
                                                28 </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                    alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="m-b-0" id="user-name2"></h6>
                                                <small>Last seen: 2 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 hidden-sm text-right">
                                            <a href="javascript:void(0);" class="btn btn-outline-secondary"><i
                                                    class="fa fa-camera"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                                    class="fa fa-image"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-info"><i
                                                    class="fa fa-cogs"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-warning"><i
                                                    class="fa fa-question"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="m-b-0" id="messages">
                                        <li class="clearfix msg">
                                            <div class="message-data text-right">
                                                <span class="time"></span>

                                            </div>
                                            <div class="name my-message float-right"> </div>
                                        </li>
                                        <li class="name msg my">
                                            <div class="message-data">
                                                <span class="time"></span>
                                            </div>
                                            <div class="name other-message"></div>
                                        </li>

                                    </ul>
                                </div>
                                <form id="messageForm" autocomplete="off">
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">

                                            <div class="input-group-prepend">
                                                <button type="submit" id="msg-btn">
                                                    <span class="input-group-text"><i class="fa fa-send"></i></span>
                                                </button>
                                            </div>

                                            <input type="text" class="form-control" id="msg-input"
                                                placeholder="Escreva a mensagem...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-100-0" style="background-color: #414c52;">
        <!-- Main Footer Area -->


        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p style="color: white;">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear());
                                </script> <i class="fa fa-heart-o" aria-hidden="true"></i> EDUCA MOÇAMBIQUE</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Menu -->

                </div>
            </div>
        </div>
    </footer>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>



    <script>
    var name2 = "";
    firebase.auth().onAuthStateChanged(function(user) {

        if (user) {

            firebase.database().ref('users').on('value', function(snapshot) {
                snapshot.forEach(function(item) {

                    if (item.val().userId !== null && item.val().userId !== undefined) {
                        var db_uid = item.val().userId.toString().trim();
                        var user_uid = user.uid.toString().trim();

                        if (db_uid == user_uid) {
                            var user_name = document.getElementById("user-name");
                            var user_name2 = document.getElementById("user-name2");
                            var name = item.val().name;

                            if (item.val().name.length > 20) {
                                name = item.val().name.substr(0, 20) + "..";
                            } else {
                                name = item.val().name;
                            }
                            user_name.innerHTML = name;
                            user_name2.innerHTML = name;
                            name2 = item.val().name;
                            sessionStorage.setItem('usuarioId', item.val().userId);
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
    const msgRef = db.ref("chat");
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
        const msg = `<li class="${name == name ? "msg my": "msg"}"><span class = "msg-span">
    <i class = "name"></i><strong>${name}</strong>: ${text}
    </span>
    <div class="message-data">
    <span class="time">${time}</span>
    </div>
  </li>`

        msgScreen.innerHTML += msg; //add the <li> message to the chat window

        //auto scroll to bottom
        document.getElementById("chat-window").scrollTop = document.getElementById("chat-window").scrollHeight;
    }
    </script>





</body>

<style>
.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.fill a img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
    width: 90%;
    height: 200px;
    object-fit: cover;
}

.fill img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
    width: 90%;
    height: 250px;
    object-fit: cover;
}

body {
    background-color: #f4f7f6;

}

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
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
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
    background: #efefef
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

.chat .chat-message {
    padding: 20px
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
        height: 600px;
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

</style>

</html>
