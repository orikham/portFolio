const btnRed = document.querySelector('.btnRed');

btnRed.addEventListener('click', function(event) {
    
    event.preventDefault();

    const verif = document.createElement('div');
    const h1 = document.createElement('h1');
    const titreArticle = document.createElement('div');
    const btnYes = document.createElement('button');
    const btnNo = document.createElement('button');

    verif.style.width = '500px';
    verif.style.height = '250px';
    verif.style.position = 'fixed';
    verif.style.boxShadow = '1px 1px 10px 1px grey';
    verif.style.textAlign = 'center';
    verif.style.marginTop ='0';
    verif.style.marginLeft = '50%';
    verif.style.backgroundColor = '#e71f73';
    verif.style.transform = 'translate(-50%, 50%)';

    h1.style.width ='500px';
    h1.style.paddingTop = '50px';

    btnYes.style.width ='100px';
    btnYes.style.height = '70px';
    btnYes.style.backgroundColor = 'green';
    btnYes.style.marginRight = '25px';
    btnYes.style.marginTop = '20px';

    btnNo.style.width ='100px';
    btnNo.style.height = '70px';
    btnNo.style.backgroundColor = 'red';
    btnNo.style.marginRight = '25px';
    btnNo.style.marginTop = '20px';

    verif.setAttribute('id', 'verif');
    h1.setAttribute('id', 'h1');
    titreArticle.setAttribute('id', 'titreArticle');
    btnYes.setAttribute('id', 'yes');
    btnNo.setAttribute('id', 'no');

    verif.classList.add('verifCl');
    h1.classList.add('h1Cl');
    titreArticle.classList.add('titre-Article');

    h1.innerText = 'Voulez-vous supprimer définitivement ?';
    btnYes.innerText = 'YES';
    btnNo.innerText = 'NO';

    verif.appendChild(h1);
    verif.appendChild(titreArticle);
    verif.appendChild(btnYes);
    verif.appendChild(btnNo);
    document.body.appendChild(verif);
});