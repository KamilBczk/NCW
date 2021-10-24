(() => {
    // Prevent from a redirection
    document.body.addEventListener('click', event => {event.preventDefault();})

    // All links with class 'link-js'
    let linksJs = document.getElementsByClassName("link-js")

    // Function who set opacity to 0 of all elements & set opacity to element to show
    let linkJsClicked = function () {
        let contentToShow = this.getAttribute("data-content-toshow")
        let contentItems = document.getElementsByClassName("content-item");

        for (let i = 0; i < contentItems.length; i++) {
            contentItems[i].style.opacity = 0;
        }
        document.getElementById(contentToShow).style.opacity = 1;
    }

    // Add eventlistener to all a elements with with class 'link-js'
    for (let i = 0; i < linksJs.length; i++) {
        linksJs[i].addEventListener("click", linkJsClicked, false)
    }

})();