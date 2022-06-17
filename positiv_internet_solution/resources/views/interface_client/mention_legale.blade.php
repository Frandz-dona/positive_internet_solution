@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Mention Legale
@endsection

@section('property')
<meta property="og:url" content='https://positiveinternetsolution.com/'>
<meta property="og:type" content="website">
<meta property="og:title" content="Positive Internet Solution | En savoir plus sur nous">
<meta property="og:description" content="Si vous souhaitez développer vos propres compétences en crypto-investissement et exploiter tout le potentiel de la technologie blockchain, c'est l'endroit qu'il vous faut.
   nous vous souhaitons une belle expérience.">
<meta property="og:image" content='{{asset("client/images/img/logo/lg.png")}}'>
@endsection


@section('content')

 <!-- Start Breadcrumbs -->
 <section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Mention Légale</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="{{route('mention_legale')}}">Mention Légale</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h1>Mention Légale</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form class="form" method="post" action="mail/mail.php">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Droit de propriété intellectuelle</h3>
                            <p>
                                Toute reproduction, modification partielle ou totale, conservation en mémoire
                                dans un système d’extraction ou transmission sous une forme ou par quelque
                                procédé que se soit de ce site, sans l’accord de son fondateur est interdite. Le site
                                internet positiveinternetsolution.com et tout son contenu (informations, données,
                                texte, sons, images, dessins, graphismes, signes distinctifs, logos, marques,…) sontprotégés par les lois sur la protection des droits d’auteurs et de la propriété
                                intellectuelle de tout pays. Le fondateur se réserve le droit de réclamer des
                                dommages et intérêts si ces termes ne sont pas respectés.
                            </p>
                            <br>
                            <h3>Avertissement</h3>
                            <p>
                                L’acquisition de nos produits et services que nous offrons sur le site ne constitue
                                pas une garantie de gains, réussite, ou de succès de votre part. Vos résultats
                                dépendront de plusieurs facteurs, y compris et pas seulement : vos expériences,
                                motivation, antécédent et vos valeurs. Le succès en webmarketing est le fruit de
                                plusieurs années de persévérance, de recherche minutieuse, de décisions
                                rationnelles, d’approches réalistes et d'investissement en temps et en patience. Si
                                vous n’êtes pas prêts à accepter cela, alors merci de ne pas faire l’acquisition de
                                nos produits et services.
                            </p>
                            <br>
                            <h3>Conditions générales d’utilisation</h3>
                            <p>
                                L’accès au site, sa consultation et son utilisation, ainsi que toutes les transactions
                                effectuées par le biais du site sont subordonnés à l’acceptation sans réserve des
                                présentes Conditions Générales de vente et de services. Ces conditions générales
                                de vente et de services sont susceptibles d’être modifiées ou complétées à tout
                                moment. De la même façon, les mentions légales peuvent être modifiées à tout
                                moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le
                                plus souvent possible afin d’en prendre connaissance.
                            </p>
                            <br>
                            <h3>Tarification</h3>
                            <p>
                                L’accès à ce site est normalement gratuit à tout moment aux utilisateurs. Le site
                                www.positiveinternetsolution.com est mis à jour régulièrement par Iniko K.
                                Helle. Une interruption pour raison de maintenance technique peut être décidée
                                par POSITIVE INTERNET SOLUTION, qui s’efforcera alors de communiquer
                                préalablement aux utilisateurs les dates et heures de l’intervention.
                            </p>
                            <br>
                            <h3> Description des services fournis</h3>
                            <p>
                                www.positiveinternetsolution.com a pour objet de fournir une information
                                concernant l’ensemble des activités de la société à savoir :
                                 Permettre aux investisseurs sur le marché des cryptomonnaies, d'être à
                                l'avant - garde des innovations majeures concernant la blockchain,
                                 Partager des livres papiers et des Ebooks sur le web marketing et la
                                blockchain, Donner des formations sponsorisées en webmarketing et à l'écosystème de
                                la blockchain.
                                 Créer un espace dédié au web entreprenariat.
                                POSITIVE INTERNET SOLUTION s’efforce de fournir sur le site
                                www.positiveinternetsolution.com des informations aussi précises que possible.
                                Toutefois, elle ne pourra être tenue responsable des omissions, des inexactitudes
                                et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers
                                partenaires qui lui fournissent ces informations.
                                Tous les informations indiquées sur le site www.positiveinternetsolution.com sont
                                données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les
                                renseignements figurant sur le site ne sont pas exhaustifs. Ils sont donnés sous
                                réserve de modifications ayant été apportées depuis leur mise en ligne.
                            </p>
                            <br>
                            <h3>Limitations contractuelles sur les données techniques.</h3>
                            <p>
                                Le site utilise la technologie JavaScript.
                                Le site Internet ne pourra être tenu responsable de dommages matériels liés à
                                l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en
                                utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de
                                dernière génération mis-à-jour.
                            </p>
                            <br>
                            <h3>Limitations de responsabilité.</h3>
                            <p>
                                POSITIVE INTERNET SOLUTION ne pourra être tenue responsable des
                                dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès
                                au site www.positiveinternetsolution.com, et résultant soit de l’utilisation d’un
                                matériel ne répondant pas aux spécifications indiquées au point 6, soit de
                                l’apparition d’un bug ou d’une incompatibilité.
                                POSITIVE INTERNET SOLUTION ne pourra également être tenue responsable
                                des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une
                                chance) consécutifs à l’utilisation du site www.positiveinternetsolution.com
                            </p>
                            <br>
                            <h3>Gestion des données personnelles</h3>
                            <p>
                                A l'occasion de l'utilisation du site www.positiveinternetsolution.com, peuvent
                                êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé
                                au site, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP)
                                de l'utilisateur.
                                En tout état de cause POSITIVE INTERNET SOLUTION ne collecte des
                                informations personnelles relatives à l'utilisateur que pour le besoin de certainsservices proposés par le site. L'utilisateur fournit ces informations en toute
                                connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il
                                est alors précisé à l'utilisateur du site, l’obligation ou non de fournir ces
                                informations.
                                Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6
                                janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur
                                dispose d’un droit d’accès, de rectification et d’opposition aux données
                                personnelles le concernant, en effectuant sa demande écrite et signée,
                                accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce,
                                en précisant l’adresse à laquelle la réponse doit être envoyée.
                                Aucune information personnelle de l'utilisateur du site
                                www.positiveinternetsolution.com n'est publiée à l'insu de l'utilisateur, échangée,
                                transférée, cédée ou vendue sur un support quelconque à des tiers. Seule
                                l'hypothèse du rachat de POSITIVE INTERNET SOLUTION et de ses droits
                                permettrait la transmission des dites informations à l'éventuel acquéreur qui serait
                                à son tour tenu de la même obligation de conservation et de modification des
                                données vis à vis de l'utilisateur du site.
                            </p>
                            <br>
                            <h3>Liens hypertextes et cookies.</h3>
                            <p>
                                Le site www.positiveinternetsolution.com contient un certain nombre de liens
                                hypertextes vers d’autres sites, mis en place avec l’autorisation de POSITIVE
                                INTERNET SOLUTION. Cependant, POSITIVE INTERNET SOLUTION n’a
                                pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en
                                conséquence aucune responsabilité de ce fait.
                                La navigation sur le site www.positiveinternetsolution.com est susceptible de
                                provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie
                                est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur,
                                mais qui enregistre des informations relatives à la navigation d’un ordinateur sur
                                un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le
                                site, et ont également vocation à permettre diverses mesures de fréquentation. Le
                                refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains
                                services. L’utilisateur peut toutefois configurer son ordinateur de la manière
                                suivante, pour refuser l’installation des cookies :
                                Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut à
                                droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous
                                les cookies. Validez sur Ok.
                                Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox,
                                puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés
                                pour l'historique. Enfin décochez-la pour désactiver les cookies.
                                Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu
                                (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les
                                paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de
                                contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.
                                Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu
                                (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur
                                Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur
                                préférences. Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!--/ End Contact Form -->
            <!-- Contact Address -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-address">
                    <div class="contact">
                        <h2>Informations légales </h2>
                        <p>Le site internet positiveinternetsolution.com est édité et diffusé par la société <br>
                            POSITIVE INTERNET SOLUTION immatriculée au registre du commerce et <br>
                            des sociétés de Lomé sous le numéro TG-LOM 2018 A 7130. Siège social : Rue <br>
                            Malfakassa, Qt Kagnikopé, Lomé. <br></p>
                        <!-- Single Address -->
                        <div class="single-address">
                            <p>
                                Directeur de la publication : Iniko K. Helle <br>
                                Contacts : <br>
                                <span>E-mail :</span> <a href="mailto:contact@positiveinternetsolution.com">contact@positiveinternetsolution.com</a> <br>
                                <span>Whatapp :</span> <a href="https://wa.me/22891325637">(+228) 91325637</a><br>
                                <span>Telegram :</span> <a href="https://t.me/joinchat/dvWirhWMXqI4MWU0">Rejooignez-nous sur Télégram</a> <br>
                                <span>Facebook:</span> <a href="https://www.facebook.com/228PIS">Rejooignez-nous sur Facebook @228pis</a> <br><br>
                                Le site est hébergé par <br>
                                PlanetHoster <br>
                                4416 Louis-B.-Mayer <br>
                                Laval, Québec <br>
                                Canada <br>
                                H7P 0G1 <br><br>
                                Crédits
                                <span>Hil Expertiz</span> - <a href="https://www.hilexpertiz.com">hilexpertiz.com</a> <br>
                                Luz Koumedzro <br>
                                Ghislain Atayi <br>
                                Jeannot K. Kotitko <br>
                                André K. M. Segla <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Contact Address -->
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Start Call-To-Action -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="call-to-main">
                    <h2>Acheter et vendre <span>Bitcoin et Altcoins</span> auprès de nos partenaires</h2>
                    <a href="{{route('achat_vente_crypto')}}" class="btn"><i class="fa fa-send"></i>Commencer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->


@endsection
