const scrollupBtn = document.querySelector('.scrollup-btn');

const scrollUpAction = scrollupBtn.addEventListener('click', () =>
{
    let anchorTop = document.querySelector("#scrolltop-anchor");
    anchorTop.getAttribute("#top-anchor");
    anchorTop.scrollIntoView({ behavior: 'smooth' });
    return anchorTop;
});

window.addEventListener('scroll', (e) => 
{ 
        if (e.path[1].scrollY > 0)
        {
            document.querySelector('.scrollup-btn').style.right = "20px";

        } else {
            document.querySelector('.scrollup-btn').style.right = "-70px";
        }   
})
