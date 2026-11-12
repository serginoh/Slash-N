<?php require __DIR__ . "/../elements/navbar.php"; ?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>04 - Conditions</title>
    <link rel="stylesheet" href="../css/styleChapitres.css">
  </head>

  <body>
    <main>
      <h1>Chapitre 04 – Les conditions</h1>

      <section>
        <h2>Introduction</h2>
        <p>
          Les conditions permettent à PHP de prendre des décisions en fonction
          de certaines situations. Elles permettent d'exécuter un morceau de
          code uniquement si une condition est remplie.
        </p>
        <p>
          Par exemple, on peut vérifier si une personne est majeure, si un
          utilisateur possède un mot de passe correct ou si une note est
          suffisante pour réussir un examen.
        </p>
      </section>

      <section>
        <h2>La condition if</h2>
        <p>
          La structure <code>if</code> permet d'exécuter du code uniquement
          lorsqu'une condition est vraie.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 20;

if ($age >= 18) {
    echo "Vous êtes majeur.";
}
?&gt;</code></pre>

        <p>
          Dans cet exemple, PHP vérifie si la variable <code>$age</code> est
          supérieure ou égale à 18. Si c'est le cas, le message est affiché.
        </p>
        <p>
          Si la condition est fausse, le contenu du bloc <code>if</code>
          n'est tout simplement pas exécuté.
        </p>
      </section>

      <section>
        <h2>La condition else</h2>
        <p>
          La structure <code>else</code> permet d'exécuter un autre morceau
          de code lorsque la condition du <code>if</code> est fausse.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 16;

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
?&gt;</code></pre>

        <p>
          Ici, la variable <code>$age</code> vaut 16. La condition est donc
          fausse et PHP exécute le bloc <code>else</code>.
        </p>
      </section>

      <section>
        <h2>La condition elseif</h2>
        <p>
          Lorsque plusieurs possibilités existent, on peut utiliser
          <code>elseif</code>. Cette instruction permet de tester une nouvelle
          condition si les précédentes sont fausses.
        </p>

        <pre><code class="language-php">&lt;?php
$note = 14;

if ($note >= 16) {
    echo "Très bien !";
} elseif ($note >= 10) {
    echo "Vous avez réussi.";
} else {
    echo "Vous avez échoué.";
}
?&gt;</code></pre>

        <p>
          Dans cet exemple :
        </p>
        <ul>
          <li>Si la note est supérieure ou égale à 16, on affiche « Très bien ! ».</li>
          <li>Si elle est supérieure ou égale à 10, on affiche « Vous avez réussi. ».</li>
          <li>Dans tous les autres cas, on affiche « Vous avez échoué. ».</li>
        </ul>
        <p>
          PHP s'arrête dès qu'une condition est vraie. Les conditions suivantes
          ne sont donc pas vérifiées.
        </p>
      </section>

      <section>
        <h2>Les opérateurs de comparaison</h2>
        <p>
          Les opérateurs de comparaison permettent de comparer deux valeurs.
          Le résultat d'une comparaison est toujours un booléen :
          <code>true</code> ou <code>false</code>.
        </p>

        <pre><code class="language-php">&lt;?php
$a = 10;
$b = 20;

var_dump($a == $b);  // false
var_dump($a != $b);  // true
var_dump($a > $b);   // false
var_dump($a < $b);   // true
var_dump($a >= $b);  // false
var_dump($a <= $b);  // true
?&gt;</code></pre>

        <p>Voici les principaux opérateurs :</p>

        <ul>
          <li><code>==</code> : égal à (compare les valeurs).</li>
          <li><code>===</code> : strictement égal (compare la valeur et le type).</li>
          <li><code>!=</code> : différent de.</li>
          <li><code>!==</code> : strictement différent.</li>
          <li><code>&gt;</code> : supérieur à.</li>
          <li><code>&lt;</code> : inférieur à.</li>
          <li><code>&gt;=</code> : supérieur ou égal à.</li>
          <li><code>&lt;=</code> : inférieur ou égal à.</li>
        </ul>
      </section>

      <section>
        <h2>La différence entre == et ===</h2>
        <p>
          Il est important de comprendre la différence entre ces deux
          opérateurs.
        </p>

        <pre><code class="language-php">&lt;?php
$nombre = 10;
$texte = "10";

var_dump($nombre == $texte);  // true
var_dump($nombre === $texte); // false
?&gt;</code></pre>

        <p>
          Avec <code>==</code>, PHP compare les valeurs et peut convertir
          automatiquement les types.
        </p>
        <p>
          Avec <code>===</code>, PHP vérifie également que les deux valeurs
          possèdent le même type. Ici, l'une est un entier et l'autre une
          chaîne de caractères.
        </p>
        <p>
          Il est généralement préférable d'utiliser <code>===</code> lorsque
          l'on souhaite effectuer une comparaison stricte.
        </p>
      </section>

      <section>
        <h2>Les opérateurs logiques</h2>
        <p>
          Les opérateurs logiques permettent de combiner plusieurs conditions
          dans une seule instruction.
        </p>

        <h3>L'opérateur AND (&&)</h3>
        <p>
          L'opérateur <code>&&</code> signifie « ET ». Toutes les conditions
          doivent être vraies pour que le résultat soit vrai.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 20;
$permis = true;

if ($age >= 18 && $permis === true) {
    echo "Vous pouvez conduire.";
}
?&gt;</code></pre>

        <h3>L'opérateur OR (||)</h3>
        <p>
          L'opérateur <code>||</code> signifie « OU ». Au moins une des
          conditions doit être vraie.
        </p>

        <pre><code class="language-php">&lt;?php
$weekend = true;
$vacances = false;

if ($weekend === true || $vacances === true) {
    echo "Vous pouvez vous reposer !";
}
?&gt;</code></pre>

        <h3>L'opérateur NOT (!)</h3>
        <p>
          L'opérateur <code>!</code> permet d'inverser une condition.
          Une valeur vraie devient fausse et inversement.
        </p>

        <pre><code class="language-php">&lt;?php
$connecte = false;

if (!$connecte) {
    echo "Veuillez vous connecter.";
}
?&gt;</code></pre>
      </section>

      <section>
        <h2>Les conditions imbriquées</h2>
        <p>
          Il est possible de placer une condition à l'intérieur d'une autre.
          On parle alors de conditions imbriquées.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 20;
$inscrit = true;

if ($age >= 18) {

    if ($inscrit === true) {
        echo "Bienvenue sur le site !";
    } else {
        echo "Vous devez vous inscrire.";
    }

} else {
    echo "Vous devez être majeur.";
}
?&gt;</code></pre>

        <p>
          Dans cet exemple, PHP vérifie d'abord si la personne est majeure.
          Si c'est le cas, il vérifie ensuite si elle est inscrite.
        </p>
      </section>

      <section>
        <h2>La structure switch</h2>
        <p>
          La structure <code>switch</code> permet de comparer une variable
          à plusieurs valeurs possibles. Elle constitue une alternative
          pratique à plusieurs <code>elseif</code>.
        </p>

        <pre><code class="language-php">&lt;?php
$jour = "lundi";

switch ($jour) {

    case "lundi":
        echo "Début de semaine.";
        break;

    case "vendredi":
        echo "Bientôt le week-end !";
        break;

    case "samedi":
    case "dimanche":
        echo "C'est le week-end !";
        break;

    default:
        echo "Bonne journée !";
        break;
}
?&gt;</code></pre>

        <p>
          Chaque <code>case</code> représente une valeur possible.
          Lorsque PHP trouve une correspondance, il exécute le code associé.
        </p>
        <p>
          L'instruction <code>break</code> permet de sortir du
          <code>switch</code> afin d'éviter de continuer vers les cas suivants.
        </p>
        <p>
          Le bloc <code>default</code> est exécuté lorsqu'aucun des cas
          précédents ne correspond.
        </p>
      </section>

      <section>
        <h2>L'opérateur ternaire</h2>
        <p>
          L'opérateur ternaire permet d'écrire une condition simple sur une
          seule ligne. Il constitue une alternative raccourcie à
          <code>if / else</code>.
        </p>

        <pre><code class="language-php">&lt;?php
$age = 20;

$message = ($age >= 18)
    ? "Vous êtes majeur."
    : "Vous êtes mineur.";

echo $message;
?&gt;</code></pre>

        <p>
          Le point d'interrogation <code>?</code> sépare la condition du
          résultat si elle est vraie. Les deux-points <code>:</code>
          introduisent le résultat si elle est fausse.
        </p>
      </section>

      <section>
        <h2>Conclusion</h2>
        <p>
          Les conditions sont indispensables en PHP. Elles permettent
          d'adapter le comportement d'un programme en fonction des données
          et des situations rencontrées.
        </p>
        <p>
          Voici les principales structures à retenir :
        </p>
        <ul>
          <li><code>if</code> : exécuter du code si une condition est vraie.</li>
          <li><code>else</code> : exécuter du code si la condition est fausse.</li>
          <li><code>elseif</code> : tester une autre condition.</li>
          <li><code>switch</code> : comparer une variable à plusieurs valeurs.</li>
          <li><code>&&</code> et <code>||</code> : combiner plusieurs conditions.</li>
          <li><code>!</code> : inverser une condition.</li>
          <li><code>?:</code> : écrire une condition simple de manière raccourcie.</li>
        </ul>
        <p>
          Dans le prochain chapitre, nous découvrirons les boucles, qui
          permettent de répéter automatiquement des instructions.
        </p>
      </section>
    </main>
    <?php require_once __DIR__ . "/../elements/footer.php"; ?>

  </body>
</html>
