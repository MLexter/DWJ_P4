const scrollupBtn = document.querySelector('.scrollup-btn');


window.addEventListener('scroll', () => 
{          
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = window.scrollY;    
    
    if (Math.ceil(scrolled) === 0)
    {
        document.querySelector('.scrollup-btn').style.right = "-70px";
        
    } else {
        document.querySelector('.scrollup-btn').style.right = "20px";
    }   
});


const scrollUp = scrollupBtn.addEventListener('click', () => 
{
    let anchorTop = document.querySelector("#scrolltop-anchor");
    anchorTop.getAttribute("#top-anchor");
    anchorTop.scrollIntoView({ behavior: 'smooth' });
    return anchorTop;
});
