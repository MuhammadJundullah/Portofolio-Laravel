// Mendeteksi item saat di viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}

function handleScroll() {
    const elements = document.querySelectorAll(".animate");
    elements.forEach((element) => {
        if (isInViewport(element)) {
            element.classList.add("visible");
        }
    });
}

window.addEventListener("scroll", handleScroll);
handleScroll();

// scroll otomatis ke atas
document.addEventListener("DOMContentLoaded", function () {
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }
    });
});

// readmode about section
function toggleText(event) {
    event.preventDefault();
    const moreText = document.querySelector(".more");
    const linkText = document.getElementById("read-more");

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "inline";
        linkText.textContent = "...Collapse";
    } else {
        moreText.style.display = "none";
        linkText.textContent = "Read More...";
    }
}
