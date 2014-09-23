<?php include_once './head.html'; ?>

<body>
    <?php headerTop('Chat-Roulette', $retPage); ?>

    <div class="contact">
        <p>Charles</p>
        <img src="resources/icones/forward.png"/>
    </div>
    <a href="index.php?page=chatroulette">
        <div class="contact">
            <p>Pierre</p>
            <img src="resources/icones/forward.png"/>
        </div>
    </a>
    <div class="contact">
        <p>Herv&eacute;</p>
        <img src="resources/icones/forward.png"/>
    </div>
    <div class="contact">
        <p>Yves</p>
        <img src="resources/icones/forward.png"/>
    </div>

    <footer>
        <input type="text" placeholder="Message &agrave; envoyer ..."/>
        <button>Envoyer</button>
    </footer>
</body>