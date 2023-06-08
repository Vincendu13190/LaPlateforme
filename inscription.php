<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Laplateforme VENEZ NOMBREUX !</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <div>
        <header>
            <div>
                <img class="logolaplateforme" src="https://laplateforme.io/wp-content/uploads/2021/07/logo_laplateforme_bleu3.png" alt="Ecole La Plateforme">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Qui sommes-nous ?<a></li>
                    <li><a href="#">Cursus</a></li>
                    <li><a href="#">Spécialisation</a></li>
                    <li><a href="#">Entreprise</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Français</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h2 class="leftitle">Campus méditéranéen du numérique</h2>
                <p>Formez-vous efficacement à tous les métiers du numérique et au monde de l’entreprise. Déposez votre candidature au cursus de votre choix.</p>
                <img src="https://laplateforme.io/wp-content/uploads/2023/03/HP_visual_light.webp" alt="Les gens de la plateforme">
            </section>
            <section>
                <h2 class="rightitle">Choisissez votre projet de formation</h2>
                <form action="/my-handling-form-page" method="post">
                    <label for="obligation">« * » indique les champs nécessaires</label>
                    <div>
                        <select name="alias" id="alias-select">
                            <option value="prefix">Prefixe</option>
                            <option value="monsieur">Mr</option>
                            <option value="madame">Mme</option>
                            <option value="nonbinaire">Mx</option>
                        </select>
                        <input type="text" placeholder="Prénom*" id="prenom">
                        <input type="text" placeholder="Nom*" id="nom">
                    </div>
                    <div>
                        <input type="text" placeholder="Email*" id="email">
                        <input type="text" placeholder="Téléphone Mobile*" id="telmobile">
                    </div>
                    <div>
                        <input type="text" placeholder="Ville*" id="ville">
                        <input type="text" placeholder="Code Postal" id="codepostal">
                    </div>
                    <select name="pays" id="pays-select">
                        <option value="prefix">Pays*</option>
                        <option value="france">France</option>
                        <option value="madame">Allemagne</option>
                        <option value="nonbinaire">Angleterre</option>
                    </select>
                    <select name="cursus" id="cursus-select">
                        <option value="prefix">Cursus souhaité*</option>
                        <option value="aws_restart">Aws/reStart - Metiers du cloud</option>
                        <option value="start">La plateforme/Start</option>
                        <option value="bachelor">Bachelor IT (Niv. Bac+3)</option>
                        <option value="master">Master (Niv. Bac+5)</option>
                        <option value="postgraduate">Post-Graduate</option>
                    </select>
                    <select name="campus" id="campus-select">
                        <option value="prefix">Campus souhaité*</option>
                        <option value="marseille">Marseille</option>
                        <option value="cannes">Cannes</option>
                        <option value="toulon">Toulon</option>
                        <option value="martigues">Martigues</option>
                    </select>
                    <select name="niveau" id="niveau-select">
                        <option value="prefix">Niveau actuel*</option>
                        <option value="aws_restart">Sans diplôme</option>
                        <option value="start">Niveau BAC</option>
                        <option value="nonbinaire">Bac</option>
                        <option value="nonbinaire">Bac+1</option>
                        <option value="nonbinaire">Bac+2</option>
                        <option value="nonbinaire">Bac+3</option>
                        <option value="nonbinaire">Bac+4</option>
                        <option value="nonbinaire">Bac+5</option>
                        <option value="nonbinaire">> Bac+5</option>
                    </select>
                    <textarea name="motivationalswords" id="motivations" cols="30" rows="10" placeholder="Quelques mots sur votre parcours et motivations*"></textarea>
                    <div>
                        <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
                        <label for="subscribeNews">Souhaitez-vous vous abonner à la newsletter ?</label>
                    </div>
                    <button type="submit" class="envoyer">Envoyer</button>
                </form>
            </section>
        </main>
        <footer>
            <img src="https://laplateforme.io/wp-content/uploads/2022/05/Logo_LaPLateforme_footer.svg" alt="la plateforme footer">
        </footer>
    </div>
</body>
<?php ?>
</html>