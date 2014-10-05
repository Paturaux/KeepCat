<?php
    if(!isset($_SESSION)){
        session_start();
    }
        
    if(isset($_POST['screen'])){
      $_SESSION['screen'] = $_POST['screen'];
      header('location: index.php');
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="CSS/commonWS.css" media="screen"/>
        <title>Choisissez votre écran - KeepCat</title>
    </head>
    <body id="choice_screen">
        <img src="resources/logo.png" alt="Logo KeepCat" class="logo"/>
        <p>
            Cette application est acutellement en développement.
            Vous pouvez la tester statiquement, en mode téléphone ou en mode site web.
        </p>
        <form id="formScreen" method="post" action="choiceScreen.php">
            <div class="container">
                <img src="resources/screen_phone.png" alt="KeepCat mode téléphone" class="img_left" onclick="submitForm('phone');"/>
                <img src="resources/screen_web.png" alt="KeepCat mode site Web" class="img_right" onclick="submitForm('web');"/>
            </div>
            <input name="screen" value="" type="hidden">
        </form>
        
        <script type="text/javascript">
            var input;
            window.onload = function(){
                input = document.getElementsByName('screen')[0];
            };
            function submitForm(value){
                input.value = value;
                document.getElementById('formScreen').submit();
            }
        </script>
    </body>
</html>