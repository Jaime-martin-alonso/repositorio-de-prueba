document.addEventListener("DOMContentLoaded", function () {

    document.querySelector(".container").style.opacity = 0;
    document.querySelector(".container").style.transition = "opacity 1.5s ease-in-out";
    setTimeout(() => {
        document.querySelector(".container").style.opacity = 1;
    }, 200);


    const sections = document.querySelectorAll(".section");

    function revealSections() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (sectionTop < windowHeight - 100) {
                section.style.opacity = 1;
                section.style.transform = "translateY(0px)";
                section.style.transition = "opacity 1s ease-out, transform 1s ease-out";
            }
        });
    }

    sections.forEach(section => {
        section.style.opacity = 0;
        section.style.transform = "translateY(50px)";
    });

    window.addEventListener("scroll", revealSections);
    revealSections();

        const profileImg = document.querySelector(".header img");
    profileImg.addEventListener("mouseenter", () => {
        profileImg.style.transform = "rotate(10deg)";
        profileImg.style.transition = "transform 0.3s ease-in-out";
    });
    profileImg.addEventListener("mouseleave", () => {
        profileImg.style.transform = "rotate(0deg)";
    });
});
