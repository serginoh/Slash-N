const switchbox = document.querySelector('.switch');
const icone = document.querySelector('.btn i');

// 1. Appliquer le mode sauvegardé au chargement (Mode Clair par défaut)
if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
    icone.className = 'fa-solid fa-moon'; // Icône lune pour le mode sombre
} else {
    icone.className = 'fa-solid fa-sun';  // Icône soleil par défaut
}

// 2. Basculer le mode au clic
switchbox.addEventListener('click', () => {
    const isDarkMode = document.body.classList.toggle('dark-mode');
    
    // Sauvegarder le choix dans le stockage du navigateur
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    
    // Modifier l'icône à la volée
    if (isDarkMode) {
        icone.className = 'fa-solid fa-moon';
    } else {
        icone.className = 'fa-solid fa-sun';
    }
});