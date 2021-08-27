const scrollButton = document.querySelector('.scroll-up-button')

window.onscroll = () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollButton.style.display = "flex"
        scrollButton.style.animation = "slidein ease-in-out 0.2s"
    } else {
        scrollButton.style.animation = "slideout ease-in-out 0.2s"
        scrollButton.style.display = "none"
      }
}


scrollButton.addEventListener("click", () => {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})