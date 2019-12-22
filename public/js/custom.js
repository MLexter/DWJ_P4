
// ########## GET SCROLL UP BUTTON ########## //

const scrollupBtn = document.querySelector('.scrollup-btn');

window.addEventListener('scroll', () => 
{          
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = window.scrollY;    
    
    if (Math.ceil(scrolled) === 0)
    {
        document.querySelector('.scrollup-btn').style.opacity = "0";
        
    } else {
        document.querySelector('.scrollup-btn').style.opacity = "1";
    }   
});


const scrollUp = scrollupBtn.addEventListener('click', () => 
{
    let anchorTop = document.querySelector("#scrolltop-anchor");
    anchorTop.getAttribute("#top-anchor");
    anchorTop.scrollIntoView({ behavior: 'smooth' });
    return anchorTop;
});

// ########## GET SCROLL UP BUTTON ########## //

// TESTER CONDITION POUR QUE SI PLUS QUE 3 ELEMENTS DANS LE FOOTER ON PASS EN FLEX COLUMN (PAS OK)
const footerItem = document.querySelectorAll('.footer-item');
let windowWidth = window.screen.width;
const maxScreenWidth = 350;

console.log(windowWidth);

console.log(footerItem);

if (window.screen.width > maxScreenWidth) {
    document.getElementById('footer_infos').style.flexDirection = "row";
    console.log(footerItem.length);

} else if (window.screen.width < maxScreenWidth) {
    if (footerItem.length > 3) {
        document.getElementById('footer_infos').style.flexDirection = "column";
        console.log('COUCOU 2');

    }

}
