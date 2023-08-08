import domready from 'domready';
import $ from 'jquery';

domready( 
    function(){
        const itens = document.querySelectorAll('.menu li');
        itens[1].classList.add('amarelo');
        console.log("oi Mundo 2");
    }
);

