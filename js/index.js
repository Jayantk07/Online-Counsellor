toggleBtn = document.querySelector(".responsive-nav");
linksContainer = document.querySelector(".links-container");
links = document.querySelector(".links");


toggleBtn.addEventListener("click", function(){
    linksHeight = links.getBoundingClientRect().height;
    console.log(linksHeight);

    linksContainerHeight = linksContainer.getBoundingClientRect().height;
    console.log(linksContainerHeight);

    if(linksContainerHeight === 0 ){
        linksContainer.style.height = `${linksHeight + 20}px`;
    }
    else{
        linksContainer.style.height = 0;
    }
});


const navContainer = document.querySelector(".navbar");
const topBtn = document.querySelector(".top-btn"); 
window.addEventListener("scroll", function(){
    const scrollHeight = window.pageYOffset;
    const navHeight = navContainer.getBoundingClientRect().height;
    
    if( scrollHeight > navHeight){
        navContainer.classList.add("fixed-nav");
    }
    else{
        navContainer.classList.remove("fixed-nav");
    }
    if(scrollHeight > 500){
        topBtn.classList.add("show-btn");
    }
    else{
        topBtn.classList.remove("show-btn");
    }
});