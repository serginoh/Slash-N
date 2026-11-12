<?php require __DIR__ . "/../elements/navbar.php"; ?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>06 - Fonctions</title>
    <link rel="stylesheet" href="../css/styleChapitres.css">
  </head>

  <body>
    <main>
      <h1>Chapitre 06 – Les fonctions</h1>

      <section>
        <h2>Introduction</h2>
        <p>
          Les fonctions permettent de regrouper plusieurs instructions dans
          un même bloc de code afin de pouvoir les réutiliser facilement.
          Elles permettent d'éviter de répéter plusieurs fois les mêmes
          instructions et rendent le code plus organisé.
        </p>
        <p>
          Par exemple, si l'on souhaite afficher un message de bienvenue
          à plusieurs endroits de notre programme, il est plus pratique
          de créer une fonction que de réécrire le même code à chaque fois.
        </p>
        <p>
          PHP possède de nombreuses fonctions intégrées, mais il est également
          possible de créer ses propres fonctions.
        </p>
      </section>

      <section>
        <h2>Déclarer et appeler une fonction</h2>
        <p>
          Pour créer une fonction en PHP, on utilise le mot-clé
          <code>function</code>, suivi du nom de la fonction et de parenthèses.
          Les instructions sont ensuite placées entre accolades.
        </p>

        <pre><code class="language-php">&lt;?php
function direBonjour() {
    echo "Bonjour tout le monde !";
}
?&gt;</code></pre>

        <p>
          Dans cet exemple, nous avons créé une fonction appelée
          <code>direBonjour</code>. Cependant, sa création ne suffit pas
          pour exécuter son contenu.
        </p>
        <p>
          Pour exécuter une fonction, il faut l'appeler en utilisant son nom
          suivi de parenthèses.
        </p>

        <pre><code class="language-php">&lt;?php
function direBonjour() {
    echo "Bonjour tout le monde !";
}

direBonjour();
?&gt;</code></pre>

        <p>
          Il est possible d'appeler une même fonction plusieurs fois dans
          le programme sans devoir réécrire son contenu.
        </p>

        <pre><code class="language-php">&lt;?php
function direBonjour() {
    echo "Bonjour !&lt;br&gt;";
}

direBonjour();
direBonjour();
direBonjour();
?&gt;</code></pre>
      </section>

      <section>
        <h2>Les paramètres d'une fonction</h2>
        <p>
          Une fonction peut recevoir des informations grâce aux paramètres.
          Ces derniers sont indiqués entre les parenthèses lors de la
          déclaration de la fonction.
        </p>

        <pre><code class="language-php">&lt;?php
function direBonjour($prenom) {
    echo "Bonjour " . $prenom . " !";
}

direBonjour("Sophie");
?&gt;</code></pre>

        <p>
          Dans cet exemple, <code>$prenom</code> est un paramètre.
          Lorsque nous appelons la fonction, nous lui transmettons
          la valeur <code>"Sophie"</code>.
        </p>
        <p>
          La fonction peut ainsi utiliser cette valeur pour afficher
          un message personnalisé.
        </p>

        <h3>Plusieurs paramètres</h3>
        <p>
          Une fonction peut recevoir plusieurs paramètres. Il suffit
          de les séparer par des virgules.
        </p>

        <pre><code class="language-php">&lt;?php
function presenterPersonne($prenom, $age) {
    echo "Je m'appelle " . $prenom;
    echo " et j'ai " . $age . " ans.";
}

presenterPersonne("Marc", 25);
?&gt;</code></pre>

        <p>
          Ici, la fonction reçoit deux paramètres : le prénom et l'âge.
          Les valeurs sont transmises dans le même ordre que les paramètres
          déclarés.
        </p>
      </section>

      <section>
        <h2>Les valeurs de retour avec return</h2>
        <p>
          Jusqu'à présent, nos fonctions utilisaient principalement
          <code>echo</code> pour afficher des informations.
          Cependant, une fonction peut également renvoyer un résultat
          grâce à l'instruction <code>return</code>.
        </p>

        <pre><code class="language-php">&lt;?php
function addition($a, $b) {
    return $a + $b;
}

$resultat = addition(10, 5);

echo $resultat;
?&gt;</code></pre>

        <p>
          Dans cet exemple, la fonction calcule la somme des deux nombres
          et renvoie le résultat.
        </p>
        <p>
          La valeur retournée est ensuite stockée dans la variable
          <code>$resultat</code>.
        </p>

        <h3>Différence entre echo et return</h3>
        <p>
          Il est important de comprendre que ces deux instructions
          n'ont pas le même rôle :
        </p>

        <ul>
          <li><code>echo</code> : affiche directement une information.</li>
          <li><code>return</code> : renvoie une valeur que l'on peut réutiliser.</li>
        </ul>

        <pre><code class="language-php">&lt;?php
function multiplier($a, $b) {
    return $a * $b;
}

$resultat = multiplier(4, 5);

echo "Le résultat est : " . $resultat;
?&gt;</code></pre>

        <p>
          L'instruction <code>return</code> met également fin à l'exécution
          de la fonction. Les instructions placées après un
          <code>return</code> ne seront donc pas exécutées.
        </p>
      </section>

      <section>
        <h2>Les paramètres par défaut</h2>
        <p>
          Il est possible de donner une valeur par défaut à un paramètre.
          Cette valeur sera utilisée si aucun argument n'est transmis
          lors de l'appel de la fonction.
        </p>

        <pre><code class="language-php">&lt;?php
function direBonjour($prenom = "Visiteur") {
    echo "Bonjour " . $prenom . " !";
}

direBonjour("Sophie");
echo "&lt;br&gt;";
direBonjour();
?&gt;</code></pre>

        <p>
          Dans cet exemple :
        </p>

        <ul>
          <li>Le premier appel affiche « Bonjour Sophie ! ».</li>
          <li>Le deuxième appel affiche « Bonjour Visiteur ! ».</li>
        </ul>

        <p>
          Les paramètres possédant une valeur par défaut doivent généralement
          être placés après les paramètres obligatoires.
        </p>
      </section>

      <section>
        <h2>Le typage des paramètres</h2>
        <p>
          PHP permet de préciser le type de données attendu pour les
          paramètres d'une fonction. Cela permet de mieux contrôler
          les informations transmises.
        </p>

        <pre><code class="language-php">&lt;?php
function addition(int $a, int $b) {
    return $a + $b;
}

echo addition(10, 5);
?&gt;</code></pre>

        <p>
          Ici, les paramètres <code>$a</code> et <code>$b</code> doivent
          être des entiers grâce au type <code>int</code>.
        </p>

        <p>Voici quelques types que l'on peut utiliser :</p>

        <ul>
          <li><code>int</code> : nombre entier.</li>
          <li><code>float</code> : nombre décimal.</li>
          <li><code>string</code> : chaîne de caractères.</li>
          <li><code>bool</code> : valeur booléenne.</li>
          <li><code>array</code> : tableau.</li>
        </ul>
      </section>

      <section>
        <h2>Le type de retour</h2>
        <p>
          Il est également possible de préciser le type de valeur qu'une
          fonction doit retourner. On utilise pour cela deux-points
          suivis du type souhaité après les parenthèses.
        </p>

        <pre><code class="language-php">&lt;?php
function addition(int $a, int $b): int {
    return $a + $b;
}

echo addition(10, 5);
?&gt;</code></pre>

        <p>
          Dans cet exemple, <code>: int</code> indique que la fonction
          doit retourner un entier.
        </p>

        <h3>Le type void</h3>
        <p>
          Le type <code>void</code> indique qu'une fonction ne retourne
          aucune valeur.
        </p>

        <pre><code class="language-php">&lt;?php
function afficherMessage(): void {
    echo "Bienvenue sur notre site !";
}

afficherMessage();
?&gt;</code></pre>

        <p>
          Cette fonction affiche un message mais ne renvoie aucune valeur.
        </p>
      </section>

      <section>
        <h2>La portée des variables</h2>
        <p>
          La portée d'une variable correspond à l'endroit du programme
          où cette variable peut être utilisée.
        </p>

        <h3>Les variables locales</h3>
        <p>
          Une variable créée à l'intérieur d'une fonction est généralement
          accessible uniquement dans cette fonction.
        </p>

        <pre><code class="language-php">&lt;?php
function afficherNom() {
    $nom = "Sophie";
    echo $nom;
}

afficherNom();

// Cette instruction provoquerait une erreur :
echo $nom;
?&gt;</code></pre>

        <p>
          La variable <code>$nom</code> est locale à la fonction.
          Elle ne peut donc pas être utilisée directement en dehors
          de celle-ci.
        </p>

        <h3>Les variables globales</h3>
        <p>
          Une variable déclarée en dehors d'une fonction n'est pas
          automatiquement accessible à l'intérieur de celle-ci.
          Pour y accéder, on peut utiliser le mot-clé <code>global</code>.
        </p>

        <pre><code class="language-php">&lt;?php
$nom = "Marc";

function afficherNom() {
    global $nom;
    echo $nom;
}

afficherNom();
?&gt;</code></pre>

        <p>
          Le mot-clé <code>global</code> permet ici d'utiliser la variable
          <code>$nom</code> déclarée en dehors de la fonction.
        </p>
      </section>

      <section>
        <h2>Les fonctions natives de PHP</h2>
        <p>
          PHP possède déjà de nombreuses fonctions intégrées qui permettent
          d'effectuer des opérations courantes sans devoir les programmer
          soi-même.
        </p>

        <h3>strlen()</h3>
        <p>
          La fonction <code>strlen()</code> permet de connaître le nombre
          d'octets d'une chaîne de caractères.
        </p>

        <pre><code class="language-php">&lt;?php
$texte = "Bonjour";

echo strlen($texte); // Affiche 7
?&gt;</code></pre>

        <h3>strtoupper()</h3>
        <p>
          La fonction <code>strtoupper()</code> transforme une chaîne
          de caractères en majuscules.
        </p>

        <pre><code class="language-php">&lt;?php
$texte = "bonjour";

echo strtoupper($texte); // Affiche BONJOUR
?&gt;</code></pre>

        <h3>strtolower()</h3>
        <p>
          La fonction <code>strtolower()</code> transforme une chaîne
          de caractères en minuscules.
        </p>

        <pre><code class="language-php">&lt;?php
$texte = "BONJOUR";

echo strtolower($texte); // Affiche bonjour
?&gt;</code></pre>

        <h3>count()</h3>
        <p>
          La fonction <code>count()</code> permet de connaître le nombre
          d'éléments présents dans un tableau.
        </p>

        <pre><code class="language-php">&lt;?php
$fruits = ["Pomme", "Banane", "Orange"];

echo count($fruits); // Affiche 3
?&gt;</code></pre>

        <h3>date()</h3>
        <p>
          La fonction <code>date()</code> permet d'obtenir une date ou
          une heure selon le format souhaité.
        </p>

        <pre><code class="language-php">&lt;?php
echo date("d/m/Y");
?&gt;</code></pre>

        <p>
          Dans cet exemple, PHP affiche la date actuelle sous la forme
          jour/mois/année.
        </p>
      </section>

      <section>
        <h2>Conclusion</h2>
        <p>
          Les fonctions sont essentielles en PHP. Elles permettent de
          structurer un programme, d'éviter les répétitions et de rendre
          le code plus facile à comprendre et à maintenir.
        </p>

        <p>Voici les principales notions à retenir :</p>

        <ul>
          <li><code>function</code> : permet de déclarer une fonction.</li>
          <li>Les paramètres : permettent de transmettre des informations à une fonction.</li>
          <li><code>return</code> : permet de retourner une valeur.</li>
          <li>Les paramètres par défaut : permettent de définir une valeur utilisée si aucun argument n'est fourni.</li>
          <li>Le typage : permet de préciser les types attendus.</li>
          <li>La portée : définit où une variable peut être utilisée.</li>
          <li>Les fonctions natives : permettent d'utiliser des fonctionnalités déjà présentes dans PHP.</li>
        </ul>

        <p>
          Dans le prochain chapitre, nous découvrirons les fonctions
          utilisateurs, afin d'approfondir la création et l'organisation
          de nos propres fonctions.
        </p>
      </section>
    </main>
    <?php require_once __DIR__ . "/../elements/footer.php"; ?>

  </body>
</html>
