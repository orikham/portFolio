




//   $(document).ready(function() { // $ remplace/equivaut a ecrire jquery
//     // Ajouter la classe 'active' au premier élément carouselItem
//     $('.carouselItem').first().addClass('active');
  
//     setInterval(function() {
//       // Retirer la classe 'active' de l'élément actif actuel et ajouter la classe 'active' à l'élément suivant
//       $('.active').removeClass('active').next('.carouselItem').addClass('active');
  
//       // Si aucun élément n'est actif, ajouter la classe 'active' au premier élément
//       if ($('.active').length == 0) {
//         $('.carouselItem').first().addClass('active');
//       }
//     }, 1500); 
//   });
  




  // menus borne d'arcade 
  document.addEventListener('DOMContentLoaded', () => {
    const dateList = document.querySelectorAll('#date-list li');
    const popupContent = document.getElementById('popup-content');
    const contentDiv = document.getElementById('content');
    const closeBtn = document.querySelector('.close-btn');
    const banditManchotBefore = document.getElementById('bandit-manchot-before');
    const banditManchotAfter = document.getElementById('bandit-manchot-after');
    let currentIndex = 0;

    const datesContent = {
        '2007': 'Niveau CAP Boulanger 2 ans CFA Ker lann',
        '2008': 'Prestation d\'Orientation Professionnelle 3 mois CLPS Fougères',
        '2013': 'Compétences Clés3 mois CLPS Fougères',
        '2014': 'Action Territoriale d\'Insertion 5 mois AREP de Fougères',
        '2019': 'developpeur web stagiaire (stage de decouverte)\ 3 semaine ATI informatique-St Aubin du Cormiers puis MOOC developpeur web junior via Openclassroom ',
        
        '2023': 'Developpeur Web et Web Mobile'
    };

    // Tableau des symboles
    const symbols = ['SVG/behance.svg','SVG/css3.svg', 'SVG/discord.svg', 'SVG/dribbble.svg', 'SVG/notion.svg', 'SVG/figma.svg', 'SVG/git.svg', 'SVG/html5.svg', 'SVG/js.svg', 'SVG/php.svg', 'SVG/vs_code.svg']; // Mettez ici les noms de vos images

    // Fonction pour générer un symbole aléatoire
    function randomSymbol() {
        return symbols[Math.floor(Math.random() * symbols.length)];
    }

    // Fonction pour générer le bandit manchot
    function generateBanditManchot(container) {
        container.innerHTML = ''; // Réinitialise le contenu

        // Génère deux cases avec des symboles aléatoires
        for (let i = 0; i < 1; i++) {
            const symbol = randomSymbol();
            const image = document.createElement('img');
            image.src = symbol;
            container.appendChild(image);
        }
    }

    // Génère le bandit manchot au chargement de la page
    generateBanditManchot(banditManchotBefore);
    generateBanditManchot(banditManchotAfter);

    const highlightDate = (index) => {
        dateList.forEach((li, i) => {
            li.classList.toggle('highlight', i === index);
        });
    };

    const clickSound = new Audio(); // Crée un nouvel objet Audio
    clickSound.src = 'clicsong.mp3';

    const selectSound = new Audio(); // Crée un nouvel objet Audio
    selectSound.src = 'selectsong.mp3';
    selectSound.volume = 1.0;

    const playClickSound = () => {
        clickSound.currentTime = 0; // Remet le son au début
        clickSound.play(); // Joue le son
    };

    const playSelectSound = () => {
        selectSound.currentTime = 0; // Remet le son au début
        
        selectSound.play(); // Joue le son
    };

    document.getElementById('prev-btn').addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : dateList.length - 1;
        highlightDate(currentIndex);
        playClickSound();
    });

    document.getElementById('next-btn').addEventListener('click', () => {
        currentIndex = (currentIndex < dateList.length - 1) ? currentIndex + 1 : 0;
        highlightDate(currentIndex);
        playClickSound();
    });

    document.getElementById('select-btn').addEventListener('click', () => {
        

      

        const selectedDate = dateList[currentIndex].getAttribute('data-date');
        contentDiv.innerHTML = datesContent[selectedDate];
        popupContent.style.display = 'block';
        playSelectSound();
    });

    document.getElementById('game-btn').addEventListener('click', () => {
        // Génère de nouveaux symboles pour le bandit manchot
        generateBanditManchot(banditManchotBefore);
        generateBanditManchot(banditManchotAfter);

          // Vérifie si les symboles sont identiques dans les deux bandits
        if (banditManchotBefore.innerHTML === banditManchotAfter.innerHTML) {
            // Déclenche le son de jackpot
            const jackpotSound = new Audio('jackpotsong.mp3');
            jackpotSound.play();
            
        }
    });

    closeBtn.addEventListener('click', () => {
        popupContent.style.display = 'none';
    });



  // Initial highlight
  highlightDate(currentIndex);
});


//fond sonore formation.php


document.addEventListener("DOMContentLoaded", function() {
  // Vérifiez si l'URL de la page actuelle contient "formation.php"
  if (window.location.pathname.endsWith('formation.php')) {
      var audio = document.createElement('audio');
      audio.id = 'background-audio';
      audio.autoplay = true;
      audio.loop = true;
      audio.volume = 0.3;  // Ajustez le volume ici (0.0 à 1.0)

      var source = document.createElement('source');
      source.src = 'formationsong.mp3';
      source.type = 'audio/mp3';
      audio.appendChild(source);

      document.body.appendChild(audio);
      audio.play();
  }
});


  