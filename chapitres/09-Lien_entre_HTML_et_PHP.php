<?php require __DIR__ . "/../elements/navbar.php"; ?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>09 - Lien entre PHP et HTML</title>
    <link rel="stylesheet" href="../css/styleChapitres.css">
  </head>

  <body>
    <main>
      <h1>Chapitre 09 – Le lien entre PHP et HTML</h1>

      <section>
        <h2>Introduction</h2>
        <p>
          HTML et PHP sont deux langages qui fonctionnent très bien ensemble.
          HTML permet de structurer et de présenter le contenu d'une page web,
          tandis que PHP permet de rendre cette page dynamique.
        </p>

        <p>
          Grâce à PHP, il est possible de modifier le contenu HTML en fonction
          des informations reçues, des variables utilisées ou des actions
          effectuées par un utilisateur.
        </p>

        <p>
          Contrairement au HTML, qui est interprété directement par le
          navigateur, le PHP est exécuté sur le serveur avant que la page
          soit envoyée au navigateur.
        </p>
      </section>

      <section>
        <h2>Intégrer du PHP dans une page HTML</h2>
        <p>
          Pour utiliser PHP dans une page HTML, il suffit d'enregistrer
          le fichier avec l'extension <code>.php</code> et d'insérer
          les balises PHP à l'endroit où l'on souhaite exécuter du code.
        </p>

        <pre><code class="language-php">&lt;!DOCTYPE html&gt;
&lt;html lang="fr"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ma première page PHP&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

    &lt;h1&gt;Bienvenue sur mon site !&lt;/h1&gt;

    &lt;?php
        echo "Ceci est un message généré avec PHP.";
    ?&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

        <p>
          Dans cet exemple, le titre est écrit directement en HTML,
          tandis que le message est généré par PHP grâce à
          l'instruction <code>echo</code>.
        </p>

        <p>
          Le navigateur reçoit uniquement le résultat HTML généré
          par le serveur. Il ne reçoit pas le code PHP lui-même.
        </p>
      </section>

      <section>
        <h2>Afficher des variables dans HTML</h2>
        <p>
          L'un des principaux avantages de PHP est de pouvoir afficher
          des informations stockées dans des variables directement
          dans une page HTML.
        </p>

        <pre><code class="language-php">&lt;?php
$prenom = "Sophie";
$age = 22;
?&gt;

&lt;h1&gt;Bonjour &lt;?php echo $prenom; ?&gt; !&lt;/h1&gt;

&lt;p&gt;Tu as &lt;?php echo $age; ?&gt; ans.&lt;/p&gt;</code></pre>

        <p>
          Le résultat affiché dans le navigateur sera :
        </p>

        <pre><code class="language-html">&lt;h1&gt;Bonjour Sophie !&lt;/h1&gt;
&lt;p&gt;Tu as 22 ans.&lt;/p&gt;</code></pre>

        <p>
          Il est également possible d'utiliser la syntaxe raccourcie
          <code>&lt;?= ?&gt;</code> pour afficher directement une valeur.
          Cette syntaxe est équivalente à <code>&lt;?php echo ...; ?&gt;</code>.
        </p>

        <pre><code class="language-php">&lt;?php
$prenom = "Marc";
?&gt;

&lt;p&gt;Bonjour &lt;?= $prenom ?&gt; !&lt;/p&gt;</code></pre>
      </section>

      <section>
        <h2>Utiliser des conditions dans HTML</h2>
        <p>
          PHP permet également d'afficher du contenu HTML uniquement
          lorsque certaines conditions sont respectées.
        </p>

        <p>
          Par exemple, nous pouvons afficher un message différent
          selon l'âge d'un utilisateur.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 20;
?&gt;

&lt;div&gt;
    &lt;?php if ($age &gt;= 18) { ?&gt;

        &lt;p&gt;Vous êtes majeur.&lt;/p&gt;

    &lt;?php } else { ?&gt;

        &lt;p&gt;Vous êtes mineur.&lt;/p&gt;

    &lt;?php } ?&gt;
&lt;/div&gt;</code></pre>

        <p>
          Ici, PHP vérifie si la variable <code>$age</code> est supérieure
          ou égale à 18.
        </p>

        <p>
          Si la condition est vraie, le premier paragraphe est affiché.
          Dans le cas contraire, c'est le deuxième paragraphe qui apparaît.
        </p>

        <h3>Utiliser elseif</h3>
        <p>
          Il est également possible d'utiliser <code>elseif</code>
          pour gérer plusieurs situations.
        </p>

        <pre><code class="language-php">&lt;?php
$note = 15;
?&gt;

&lt;div&gt;
    &lt;?php if ($note &gt;= 16) { ?&gt;
        &lt;p&gt;Très bien !&lt;/p&gt;

    &lt;?php } elseif ($note &gt;= 10) { ?&gt;
        &lt;p&gt;Vous avez réussi !&lt;/p&gt;

    &lt;?php } else { ?&gt;
        &lt;p&gt;Vous devez recommencer.&lt;/p&gt;

    &lt;?php } ?&gt;
&lt;/div&gt;</code></pre>
      </section>

      <section>
        <h2>Utiliser des boucles dans HTML</h2>
        <p>
          Les boucles PHP permettent de générer plusieurs éléments HTML
          automatiquement. Cela est particulièrement pratique pour
          afficher des listes, des tableaux ou des menus.
        </p>

        <h3>La boucle for</h3>
        <p>
          Voici un exemple qui permet de générer automatiquement
          une liste de cinq nombres :
        </p>

        <pre><code class="language-php">&lt;ul&gt;
    &lt;?php for ($i = 1; $i &lt;= 5; $i++) { ?&gt;

        &lt;li&gt;Nombre &lt;?= $i ?&gt;&lt;/li&gt;

    &lt;?php } ?&gt;
&lt;/ul&gt;</code></pre>

        <p>
          PHP répète le code HTML situé à l'intérieur de la boucle
          jusqu'à ce que la condition ne soit plus respectée.
        </p>

        <h3>La boucle foreach</h3>
        <p>
          La boucle <code>foreach</code> est particulièrement utile
          pour parcourir un tableau et afficher chacun de ses éléments.
        </p>

        <pre><code class="language-php">&lt;?php
$fruits = ["Pomme", "Banane", "Orange", "Fraise"];
?&gt;

&lt;ul&gt;
    &lt;?php foreach ($fruits as $fruit) { ?&gt;

        &lt;li&gt;&lt;?= $fruit ?&gt;&lt;/li&gt;

    &lt;?php } ?&gt;
&lt;/ul&gt;</code></pre>

        <p>
          Dans cet exemple, chaque fruit du tableau est affiché
          dans un élément <code>&lt;li&gt;</code>.
        </p>
      </section>

      <section>
        <h2>Générer des attributs HTML avec PHP</h2>
        <p>
          PHP peut également être utilisé pour modifier les attributs
          HTML d'un élément.
        </p>

        <p>
          Par exemple, nous pouvons modifier la couleur d'un texte
          en fonction de la valeur d'une variable.
        </p>

        <pre><code class="language-php">&lt;?php
$couleur = "red";
?&gt;

&lt;p style="color: &lt;?= $couleur ?&gt;;"&gt;
    Ce texte possède une couleur dynamique.
&lt;/p&gt;</code></pre>

        <p>
          Dans cet exemple, la couleur du texte est définie grâce
          à la variable <code>$couleur</code>.
        </p>

        <p>
          Il est également possible de modifier les classes CSS
          d'un élément :
        </p>

        <pre><code class="language-php">&lt;?php
$actif = true;
?&gt;

&lt;button class="&lt;?= $actif ? 'actif' : 'inactif' ?&gt;"&gt;
    Mon bouton
&lt;/button&gt;</code></pre>

        <p>
          Si la variable <code>$actif</code> vaut <code>true</code>,
          le bouton reçoit la classe CSS <code>actif</code>.
          Sinon, il reçoit la classe <code>inactif</code>.
        </p>
      </section>

      <section>
        <h2>Créer une page dynamique</h2>
        <p>
          En combinant les variables, les conditions et les boucles,
          il devient possible de créer des pages entièrement dynamiques.
        </p>

        <p>
          Prenons l'exemple d'une page qui affiche une liste de membres
          d'un site internet.
        </p>

        <pre><code class="language-php">&lt;?php
$membres = [
    "Sophie",
    "Marc",
    "Thomas",
    "Julie"
];
?&gt;

&lt;h1&gt;Liste des membres&lt;/h1&gt;

&lt;ul&gt;
    &lt;?php foreach ($membres as $membre) { ?&gt;

        &lt;li&gt;
            Bienvenue &lt;?= $membre ?&gt; !
        &lt;/li&gt;

    &lt;?php } ?&gt;
&lt;/ul&gt;</code></pre>

        <p>
          Grâce à la boucle <code>foreach</code>, chaque membre
          est automatiquement ajouté à la liste HTML.
        </p>

        <p>
          Si nous ajoutons un nouveau membre dans le tableau PHP,
          il apparaîtra automatiquement sur la page sans devoir
          modifier le HTML.
        </p>
      </section>

      <section>
        <h2>Sécuriser les données affichées</h2>
        <p>
          Lorsque des informations proviennent d'un utilisateur,
          il est important de ne pas les afficher directement dans
          une page HTML.
        </p>

        <p>
          Un utilisateur malveillant pourrait essayer d'injecter
          du code HTML ou JavaScript dans une page.
          Cela peut notamment provoquer une faille appelée XSS
          (Cross-Site Scripting).
        </p>

        <p>
          Pour éviter ce problème, PHP propose la fonction
          <code>htmlspecialchars()</code>, qui transforme certains
          caractères spéciaux en entités HTML.
        </p>

        <pre><code class="language-php">&lt;?php
$nom = '&lt;script&gt;alert("Bonjour");&lt;/script&gt;';
?&gt;

&lt;p&gt;
    Bonjour
    &lt;?= htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') ?&gt;
&lt;/p&gt;</code></pre>

        <p>
          Grâce à <code>htmlspecialchars()</code>, le contenu est affiché
          comme du texte et non interprété comme du code HTML.
        </p>

        <p>
          Il est recommandé d'utiliser cette fonction pour les données
          dynamiques affichées dans du contenu HTML.
        </p>
      </section>

      <section>
        <h2>La différence entre PHP et HTML</h2>
        <p>
          Pour terminer, il est important de bien comprendre le rôle
          de chacun de ces deux langages.
        </p>

        <ul>
          <li>
            <strong>HTML :</strong> permet de structurer le contenu
            d'une page web.
          </li>
          <li>
            <strong>PHP :</strong> permet de générer du contenu dynamique
            et de traiter des informations sur le serveur.
          </li>
        </ul>

        <p>
          PHP ne remplace donc pas HTML. Les deux langages travaillent
          ensemble pour créer des sites web dynamiques.
        </p>
      </section>

      <section>
        <h2>Conclusion</h2>
        <p>
          PHP et HTML sont complémentaires. En intégrant du PHP dans
          une page HTML, nous pouvons afficher des informations
          personnalisées, créer des listes automatiquement et adapter
          le contenu en fonction de différentes conditions.
        </p>

        <p>Voici les notions principales à retenir :</p>

        <ul>
          <li>Un fichier contenant du PHP utilise généralement l'extension <code>.php</code>.</li>
          <li>Le PHP peut être intégré directement dans le HTML.</li>
          <li><code>echo</code> et <code>&lt;?= ?&gt;</code> permettent d'afficher des valeurs.</li>
          <li>Les conditions permettent d'afficher du contenu selon certaines situations.</li>
          <li>Les boucles permettent de générer automatiquement des éléments HTML.</li>
          <li><code>htmlspecialchars()</code> permet de sécuriser les données affichées.</li>
        </ul>

        <p>
          Dans le prochain chapitre, nous découvrirons le traitement
          des formulaires, afin de permettre aux utilisateurs d'envoyer
          des informations à notre site grâce à PHP.
        </p>
      </section>
    </main>
    <?php require_once __DIR__ . "/../elements/footer.php"; ?>

  </body>
</html>
