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