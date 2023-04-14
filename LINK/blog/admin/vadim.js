const btnRed = document.querySelector('.btnRed');
const sqlVal = document.querySelector($req);

sqlVal.forEach(function(titre){
    console.log(titre.title);
});





































btnRed.addEventListener('click', function(event) {
    // empêcher le comportement par défaut du lien
    event.preventDefault();

    // créer les éléments à ajouter
    const verif = document.createElement('div');
    const h1 = document.createElement('h1');
    const titreArticle = document.createElement('h2');
    const btnYes = document.createElement('button');
    const btnNo = document.createElement('button');

    // ajout du style
    verif.style.width = '700px';
    verif.style.height = '350px';
    verif.style.position = 'fixed';
    verif.style.boxShadow = '1px 1px 10px 1px grey';
    verif.style.textAlign = 'center';
    verif.style.marginTop ='0';
    verif.style.marginLeft = '50%';
    verif.style.backgroundColor = '#e71f73';
    verif.style.transform = 'translate(-50%, -50%)';

    h1.style.width ='700px';
    h1.style.paddingTop = '40px';

    titreArticle.style.width ='700px';
    titreArticle.style.height ='20px';
    titreArticle.style.border ='1px solid black';
    titreArticle.style.textAlign ='center';
    titreArticle.style.marginLeft ='25%';


    btnYes.style.width ='70px';
    btnYes.style.height = '70px';
    btnYes.style.backgroundColor = 'green';
    btnYes.style.marginRight = '20px';
    btnYes.style.marginTop = '20px';

    btnNo.style.width ='70px';
    btnNo.style.height = '70px';
    btnNo.style.backgroundColor = 'red';
    btnNo.style.marginRight = '20px';
    btnNo.style.marginTop = '20px';

    titreArticle.style.width ='400px';
    titreArticle.style.color = 'blue';


    // ajouter des attributs et des classes CSS aux éléments
    verif.setAttribute('id', 'verif');
    h1.setAttribute('id', 'h1');
    titreArticle.setAttribute('id', 'titreArticle');
    btnYes.setAttribute('id', 'yes');
    btnNo.setAttribute('id', 'no');

    verif.classList.add('verifCl');
    h1.classList.add('h1Cl');
    titreArticle.classList.add('titre-Article');

    // ajouter du texte aux éléments
    h1.innerText = 'Voulez-vous supprimer définitivement ?';
    btnYes.innerText = 'YES';
    btnNo.innerText = 'NO';
    //titreArticle.innerText ='titrearticle';
    
    
    
    
    
    
    
    
    
    
    // ajouter les éléments au document
    verif.appendChild(h1);
    verif.appendChild(titreArticle);
    verif.appendChild(btnYes);
    verif.appendChild(btnNo);
    document.body.appendChild(verif);
}








);


