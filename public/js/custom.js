
// ########## GET SCROLL UP BUTTON ########## //

const scrollupBtn = document.querySelector('.scrollup-btn');

window.addEventListener('scroll', () => 
{          
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

