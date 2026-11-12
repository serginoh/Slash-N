/* ==========================================================
   carousel.js — carrousel des chapitres (page d'accueil)
   La piste reste défilable à la main / au doigt même sans JavaScript ;
   les flèches ne s'affichent que si ce script s'exécute.
   ========================================================== */
(function () {
    'use strict';

    var racine = document.querySelector('[data-carrousel]');
    if (!racine) return;

    var piste = racine.querySelector('.carrousel-piste');
    var prec = racine.querySelector('[data-carrousel-prec]');
    var suiv = racine.querySelector('[data-carrousel-suiv]');
    if (!piste || !prec || !suiv) return;

    function largeurCarte() {
        var carte = piste.querySelector('li');
        if (!carte) return piste.clientWidth;
        var ecart = parseFloat(window.getComputedStyle(piste).columnGap) || 0;
        return carte.getBoundingClientRect().width + ecart;
    }

    function aller(sens) {
        var pas = largeurCarte();
        var visibles = Math.max(1, Math.floor(piste.clientWidth / pas));
        var reduit = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        piste.scrollBy({ left: sens * visibles * pas, behavior: reduit ? 'auto' : 'smooth' });
    }

    function majFleches() {
        var max = piste.scrollWidth - piste.clientWidth - 2;
        prec.disabled = piste.scrollLeft <= 1;
        suiv.disabled = piste.scrollLeft >= max;
    }

    prec.hidden = false;
    suiv.hidden = false;

    prec.addEventListener('click', function () { aller(-1); });
    suiv.addEventListener('click', function () { aller(1); });
    piste.addEventListener('scroll', majFleches, { passive: true });
    window.addEventListener('resize', majFleches);
    majFleches();
})();
