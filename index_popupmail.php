<!DOCTYPE html>
<html lang="no">
    <head>
        <title>juss.ai</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/78355c383a5f5507a1eba592ee9f2c0a?family=Automate" rel="stylesheet" type="text/css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/site.webmanifest">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="resources/img/jai_logo_header.png" alt="juss.ai logo" class="jussai-logo-img">
            </div>
            <div class="header-menu">
                <p><a target="_blank" href="https://test.juss.ai/explorer/">Prøv Lexplo.re</a></p>
                <p><a href="#js-about">Om juss.ai</a></p>
                <p><a href="#js-partners">Samarbeidspartnere</a></p>
                <p id="myBtn" href="#">Kontakt</p>
            </div>
        </header>
        <section class="main">
            <section class="lexplore">
                    <div class="lexplore-box__left">
                        <h3>Finn rettskildene<span class="typer" data-words=" raskere, enklere,. Punktum." data-delay="50" data-deleteDelay="2000" data-colors="#00FFFF"></span><span class="cursor" data-owner="main"></span></h3>
                            <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
                    </div>
                    <div class="lexplore-box__right">
                        <h3><a class="demo-buttn" target="_blank" href="https://test.juss.ai/explorer/"><img src="resources/img/lexplore-transp.png" alt="lexplo.re logo" class="lexplore-logo-img"></a></h3>
                    </div>
                </section>
                <section class="about" id="js-about">
                    <div class="about-box__left">
                        <h3>Om juss.ai</h3>
                        <img src="resources/img/jai-rubix_farger.png" class="logo2" alt="juss.ai logo">
                    </div>
                    <div class="about-box__right">
                        <p>Hvordan kan vi redusere tiden jurister bruker på å finne relevante rettskilder?
                            Da vi vant Oslo Legal Hackathon i 2019 var dette problemstillingen vi valgte å finne en løsning på.
                            Programvaren vår lar brukeren navigere gjennom rettskilder basert på likhetsmålinger i tematikk og meningsinnhold. Denne likhetsmålingen passer godt med hva jurister
                            oppfatter å ha «relevans» etter juridisk metode. Dette forenkler en jobb som jurister i dag bruker timevis på hver uke; å søke i rettskilder for å finne relevante argumenter for den aktuelle saken.
                            Under panseret er likhetene kartlagt gjennom et skreddersydd utvalg av tilpassede maskinlæringsalgoritmer og egenutviklede språkmodeller.
                            Løsningen vår er beregnet på alle aktører som utforsker rettskilder for å besvare juridiske spørsmål. Dette gjelder spesielt advokatselskaper, men også andre rettsanvendere, for eksempel dommere og forvaltningsjurister.</p>
                        <br>
                        <p>Å finne gode svar på en juridisk problemstilling fordrer at juristen har god og mest mulig komplett kjennskap hva som er de relevante rettskildene. 
                            Rettskildetilfanget til selv enkle spørsmål kan være enormt. Slik komplett kjennskap tar derfor årevis å opparbeide seg, og er ett av konkurransefortrinnene spesialister 
                            med lang erfaring har. Uten denne erfaringen er alternativet å bruke nøkkelordsøk og timesvis (i noen tilfeller dages- og ukesvis) på gjennomlesning av store mengder rettskilder.
                            Juss.ai forenkler og effektiviserer denne tidkrevende og kjedelige jobben på to måter:</p>
                        <ul>
                            <li>Vår søkemotor bruker en logikk som baserer seg på grafikk, lenker og assosiasjoner. Det passer bedretil menneskelig kognisjon enn søkeord.</li>
                            <li>Vi bruker logikk fra ulike maskinlæringsalgoritmer for å finne avsnitt i rettskilder som likner på hverandre. At algoritmene har kartlagt alle tilgjengelige rettskilder gir også høyere trygghet for at juristen har et komplett rettskildebilde.</li>
                        </ul>
                    </div>
                </section>
                <section class="pictures">
                    <ul class="pic-history">
                        <li>
                            <figure>
                                <img src="resources/img/olh-final.jpg" height="400" width="600" alt="olh-final">
                                <figcaption>Vinnere av Oslo Legal Hackathon 2019</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="resources/img/stand.jpg" height="400" width="300" alt="stand">
                                <figcaption>Stand på TechTorget</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="resources/img/olh-hack-2019.jpg" height="400" width="300" alt="stand">
                                <figcaption>Arbeid under Oslo Legal Hackathon</figcaption>
                            </figure>
                        </li>
                    </ul>
                </section>
                <section class="partners" id="js-partners">
                    <h3>Samarbeidspartnere</h3>
                    <div class="partners-box">
                        <figure>
                            <a target="_blank" href="https://www.rettsdata.no/">
                            <img src="resources/img/rettsdata.png" class="rettsdata" height="50" width="250" alt="rettsdata-logo"></a>
                        </figure>
                        <figure>
                            <a target="_blank" href="https://www.gyldendal.no/">
                            <img src="resources/img/gyldendal.png" class="gyldendal" height="100" width="200" alt="rettsdata-logo"></a>
                        </figure>
                        <figure>
                            <a target="_blank" href="https://www.innovasjonnorge.no/">
                            <img src="resources/img/innovasjon-norge.png" class="innovasjp" height="100" width="400" alt="rettsdata-logo"></a>
                        </figure>
                        <figure>
                            <h3>Takk til:</h3>
                            <p>Jari Bakken</p>
                            <p>Nikolai Røed Kristiansen</p>
                            <p>Arne Hassel</p>
                            <p>Vincent Olislagers</p>
                            <p>Alex Moltzau</p>
                            <p>Nikolas Papaioannou</p>
                        </figure>
                    </div>
                </section>
        </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="contact-form" action="" id="contact-form"
                method="post" enctype="multipart/form-data">
                    <?php
                    if (! empty($_POST["send"])) {
                        $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
                        $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
                        $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
                        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
                        
                        $toEmail = "to_email@gmail.com";
                        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
                        
                        if (mail($toEmail, $subject, $message, $mailHeaders)) {
                    ?>
                        <div id="success">Your contact information is received successfully!</div>
                    
                <h3>Kontakt oss</h3>
                <div>
                    <div>
                        <label>Navn: </label><span id="userName-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="userName" name="userName"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Epost: </label><span id="userEmail-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="userEmail" name="userEmail"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Emne: </label><span id="subject-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="subject" name="subject"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Melding: </label><span id="userMessage-info"
                            class="info"></span>
                    </div>
                    <div>
                        <textarea id="message" name="message"
                            class="inputBox"></textarea>
                    </div>
                </div>
                <div>
                    <input type="submit" id="send" name="send" value="Send" />
                </div>
                <br>
                <div>
                    <p>Eventuelt send oss en mail her.</p>
                </div>
            </form>
        </div>
    </div>
        <footer class="foot">
            <img src="https://www.transparentpng.com/thumb/copyright-symbol/bTcLl9-copyright-symbol-wonderful-picture-images.png" height="50" alt="Copyright Symbol">
            <p>juss.ai</p>
        </footer>
    </div>
    <script async src="script.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    </body>
</html>
