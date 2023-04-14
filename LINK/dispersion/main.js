/*let = document.getElementsById('btn').addlistener(click, function){
    alert 'coucou' ;
}*/



const btn = document.getElementById('btn');
const slots = document.getElementById('slots');                         /* ici on recupere l'element html qui doit etre appeler via JS*/
const arrayEmoji = ["🍇", "🍈", "🍉", "🍊", "🍋", "🍄"];

btn.addEventListener('click', function(){                               /* ecouteur d'evenements sers a lancer l'action voulus */
    let slot = document.createElement('div');
    slot.classList.add('slot');
    slot.innerHTML = arrayEmoji[Math.floor(Math.random() * arrayEmoji.length)];
    slots.appendChild(slot);

}) 


 
