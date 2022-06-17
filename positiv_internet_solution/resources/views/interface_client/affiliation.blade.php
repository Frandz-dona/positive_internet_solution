@extends('layouts/client.client')
@section('title')
Positive Internet Solution | Affiliation
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
                <h2>programme d'affiliation</h2>
                <ul class="bread-list">
                    <li><a href="{{route('home')}}">Accueil<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Programme d'affiliation</a></li>
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
                    <h1>Notre programme d'affiliation</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form class="form" method="post" action="mail/mail.php">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>DES GAINS DE PROMOTION</h3>
                            <p>
                                Dès que quelqu’un intègre l’académie depuis votre code d’affiliation, vous percevez
                                20% ou 80% de ses frais d’inscription payable en cryptomonnaies BTC, ETH ou USDT,
                                selon votre statut d’apprenant/formateur.
                                Faisons un petit calcul !
                                Si une personne s’inscrit à POSITIVE ACADEMY par jour avec votre code d’affiliation,
                                vous gagnez 50€x20%= 10€
                                1mois, cela vous rapporte 30x10€= 300€
                                1 an, c’est 12x300€= 3600€ que vous empochez.
                                Imaginez si 10 personnes utilisent votre code pour s’inscrire chaque jour !
                                A vous de décider combien vous voulez gagner chaque mois. 300€ ; 1000€ ou
                                100000€, tout dépend de vous.
                            </p>
                            <br>
                            <h3>CONTRAT D’AFFILIATION</h3>
                            <p>
                                Le présent Contrat (ci-après dénommé ” le Contrat “) est conclu, entre la société
                                POSITIVE INTERNET SOLUTION, immatriculée au registre du commerce et des
                                sociétés de Lomé sous le numéro TG-LOM 2018 A7130. Siège social : Rue Malfakassa,
                                Qt Kagnikopé Lomé, annexe : Agbodrafo-Lomnava, Commune Lacs 3 Aného ;
                                POSITIVE ACADEMY est un centre de formation de POSITIVE INTERNET SOLUTION
                                commercialisant ses formations par l’intermédiaire de son site Internet
                                (https://www.positiveinternetsolution.com/) ; représentée par MonsieurIniko Kodjo
                                Helle en qualité de Président, ci-après dénommée «POSITIVE ACADEMY », d’une
                                part, <br>
                                et toute personne morale ou physique, se portant acquéreuse de notre programme
                                d’affiliation édité par cette dernière (ci-après « l’Affilié »). <br>
                                POSITIVE INTERNET SOLUTION et l’Affilié sont ci-après individuellement dénommés
                                la ” Partie ” et collectivement les ” Parties “, selon le contexte. <br>
                                <i>Rappelant les éléments suivants</i> <br>
                                POSITIVE INTERNET SOLUTION est l’éditeur d’un site Internet accessible à l’adresse
                                https://www.positiveinternetsolution.com/ (ci-après dénommé «POSITIVE
                                ACADEMY, le tunnel du webmarketing de succès »), qui offre aux internautes des
                                formations autour de la technologie blockchain et des outils marketing pour créer et
                                faire décoller son business en ligne. Le site internet de POSITIVE INTERNET
                                SOLUTION donne la possibilité de souscrire à des formations sponsorisées jusqu’au
                                tiers des frais. <br>
                                POSITIVE ACADEMY, le tunnel du webmarketing de succès, déclaration d’activité
                                enregistrée sous le numéro 072 043 du 09 0ctobre 2020 auprès du Maire de la
                                commune Lacs 3 Agbodrafo, Préfecture des Lacs (Togo) immatriculée au registre du
                                commerce et des sociétés de Lomé sous le numéro TG-LOM 2018 A 7130. Les
                                services mis à disposition sont mis en œuvre par POSITIVE ACADEMY. L’Affilié s’est
                                déclaré intéressé à promouvoir le programme d’affiliation et lesformations proposés
                                par POSITIVE ACADEMY aux internautes et en leur fournissant un accès direct au site
                                par l’intermédiaire du lien d’affiliation. En contrepartie des inscriptions ainsi
                                réalisées à l’académie et aux différentes formations, l’Affilié percevra une
                                rémunération de la part de POSITIVE ACADEMY. <br>

                                <b>Les parties décident que</b> <br>

                                <b>Conformité avec la réglementation applicable</b><br>
                                En utilisant le site https://www.positiveinternetsolution.com/, les produits et
                                services qui y sont disponibles et les outils mis à votre disposition, vous déclarez
                                respecter les conditions d’utilisation du site positiveinternetsolution.com et les
                                textes juridiques et réglementaires des territoires togolais et de votre pays de
                                résidence. <br>
                                En participant à notre programme d’affiliation, l’affilié garantit avoir une situation
                                légale en conformité avec les lois et les règlements en vigueur et notamment que sa
                                participation en tant qu’affilié n’est pas contraire à la réglementation en vigueur au
                                Togo ou dans son pays de résidence.
                            </p>
                            <br>
                            <h3>Obligation de moyens</h3>
                            <p>
                                L’affilié reçoit des commissions sur frais d’inscription des membres (Apprenants et
                                Formateurs) qu’il a dirigés vers le site positiveinternetsolution.com ou vers la page
                                d’inscription à POSITIVE ACADEMY, et que la société POSITIVE INTERNET SOLUTION
                                aura pu détecter comme tel à l’aide des outils techniques mis en place à cette fin.
                                L’affilié reconnaît que le fonctionnement des outils utilisés pour détecter la
                                provenance d’un membre inscrit afin d’en attribuer la venue à tel ou tel affilié
                                peuvent être affectés par la configuration des systèmes d’accès à internet du
                                membre ou toutes autres perturbations techniques dont la société POSITIVE
                                INTERNET SOLUTION ne possède pas la maîtrise.
                            </p>
                            <br>
                            <h3>Montant des commissions </h3>
                            <p>
                                Le montant des commissions par inscription parrainée est fixé en pourcentage des
                                frais d’inscription proposés selon les modalités en vigueur sur le site
                                positiveinternetsolution.com et accessibles directement sur la page personnelle de
                                l’affilié. Sans que cela puisse affecter les commissions déjà gagnées, ce montant est
                                susceptible de fluctuer à la hausse ou à la baisse.
                            </p>
                            <br>
                            <h3>Promotion et lien d’affiliation </h3>
                            <p>
                                La promotion est effectuée par les affiliés à partir des liens d’affiliation, qu’ils ont
                                obtenu lors de leur inscription à POSITIVE ACADEMY et les différentes ressources
                                mises à disposition. Ces liens d’affiliation permettent le suivi et la comptabilisation
                                des inscriptions parrainées. Les statistiques et données affichées sur le site
                                positiveinternetsolution.com sont les seules références possibles et modes de
                                preuves admises.
                                L’affilié peut, lors de sa campagne promotionnelle, faire appel à l’équipe de POSITIVE
                                INTERNET SOLUTION. Cette dernière se mettra à la disposition de l’affilié dans une
                                interview, un live, ou toutes autres stratégies digitales mises en place pour le
                                bénéfice des parties.

                            </p>
                            <br>
                            <h3>Déclaration fiscale </h3>
                            <p>
                                L’affilié reconnaît que les commissions sur inscriptions parrainées devront être
                                déclarés par ses soins aux services fiscaux de son pays de résidence. Il devra donc
                                prendre à sa charge, de fait, le paiement des impôts et taxes dont il paraît être
                                redevable à cet égard. Ces commissions seront également, par obligation, déclarées
                                chaque année aux servicesfiscaux togolais. Vous devez égalementrespecter le statut
                                légal d’exercice de cette activité liée à votre situation personnelle.
                            </p>
                            <br>
                            <h3>Nature de la relation</h3>
                            <p>
                                Les gains qui pourraient être versés par la société POSITIVE INTERNET SOLUTION en
                                tant que commissions sur les inscriptions parrainées résultant des efforts de
                                promotions de POSITIVE ACADEMY et de ses formations, ne matérialisent nullement
                                une relation hiérarchique, ou un contrat de travail, entre l’affilié et la société
                                POSITIVE INTERNET SOLUTION mais simplement une relation financière de
                                fournisseur de service à client.
                            </p>
                            <br>
                            <h3>Modalités de paiement </h3>
                            <p>
                                Le fonctionnement du site positiveinternetsolution.com ne peut nullement assurer
                                un montant minimum de commissions à ses affiliés. Celles-ci dépendent, de fait, des
                                frais d’inscription des membres que l’affilié a parrainés. Sachant que POSITIVE
                                INTERNET SOLUTION accordons à l’affilié, la possibilité de parrainer autant de
                                membres qu’il peut, toutes commissions sera calculé selon les prélèvements
                                effectués et les encaissements effectifs.
                                Le délai de paiement des commissions sur inscription parrainée débutent à partir de
                                l’encaissement effectif du règlement des frais d’inscription par POSITIVE INTERNET
                                SOLUTION. POSITIVE INTERNET SOLUTION s’engage à verser la commission dûe dans
                                un délai de 30 jours directement par cryptomonnaies BTC, ETH ou USDT sur le
                                compte communiqué par l’affilié.
                            </p>
                            <br>
                            <h3>Fraude et nullité du contrat</h3>
                            <p>
                                En cas de fraude ou de tentative de fraude de la part de l’affilié, la relation entre
                                l’affilié et la société POSITIVE INTERNET SOLUTION sera résiliée de plein droit, ainsi
                                que son adhésion, sans préavis ni indemnité. La société POSITIVE INTERNET
                                SOLUTION demandera le cas échéant le remboursement des sommes indûment
                                versées à l’affilié, et se réserve la possibilité d’entamer une procédure civile ou
                                pénale afin d’obtenir réparation de tous préjudicessubis ou à venir, et recouvrement
                                des sommes dues.
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
                    <h2>Rejoignez le programme d'affiliation en cliquant sur le bouton ci-dessous.</h2>
                    <form action="#" method="post" class="form-fields">
                        @csrf
                        <input type="hidden" value="subscription" name="type">
                        <input type="hidden" value="activation" name="type_ask">
                        <input type="hidden" value="32500" name="amount">
                        <input type="hidden" value="XOF" name="currency">
                        <input type="hidden" value="Souscription au programme d'affiliation" name="description">
                        <!-- <input type="text" placeholder="Format PDF" disabled> -->
                        <button type="submit" class="btn">Rejoindre le programme maintenant!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call-To-Action -->

@endsection
