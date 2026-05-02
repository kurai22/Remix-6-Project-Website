// Handles autoscroll on click of overview and other pages.
function setupSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach((link) => {
        link.addEventListener("click", (event) => {
            const targetId = link.getAttribute("href");

            // ignore empty or invalid anchors
            if (!targetId || targetId === "#") return;

            const target = document.querySelector(targetId);
            if (!target) return;

            event.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

            if (targetId === "#data") {
                event.preventDefault();

                const target = document.querySelector(targetId);
                if (!target) return;

                // 1. reset BEFORE scroll starts
                replayDataAnimation();

                // 2. scroll
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

                return;
            }
        });
    });
}

// This is the function that allows the page to scroll to each section of the SPA application.
// It also sets an underline on the nav item for the currently viewed section.
function createScrollSpy() {
    const sections = document.querySelectorAll("section[id]");
    const links = document.querySelectorAll("[data-section]");

    // store visibility state
    const visibilityMap = new Map();

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            visibilityMap.set(entry.target.id, entry.intersectionRatio);
        });

        // find most visible section from ALL tracked sections
        let bestSectionId = null;
        let highestRatio = 0;

        visibilityMap.forEach((ratio, id) => {
            if (ratio > highestRatio) {
                highestRatio = ratio;
                bestSectionId = id;
            }
        });

        if (!bestSectionId) return;

        // update nav
        links.forEach(link => {
            link.classList.remove("pencil-underline", "active");
        });

        const activeLink = document.querySelector(
            `[data-section="${bestSectionId}"]`
        );

        if (activeLink) {
            activeLink.classList.add("pencil-underline", "active");
        }

    }, {
        threshold: [0, 0.1, 0.25, 0.5, 0.75, 1],
        rootMargin: "-80px 0px -40% 0px"
    });

    sections.forEach(section => {
        visibilityMap.set(section.id, 0); // initialize
        observer.observe(section);
    });
}

// Trigger the animation whenever you go to the data section.
function replayDataAnimation() {
    const section = document.querySelector("#data");
    if (!section) return;

    const items = section.querySelectorAll(".fade-in");

    // STEP 1: hard reset state (NO animation, no flicker)
    items.forEach(el => {
        el.style.transition = "none";
        el.style.opacity = "0";
        el.style.transform = "translateX(-40px)";
    });

    // force browser to commit reset
    void section.offsetHeight;

    // STEP 2: wait 1 frame so browser stabilizes
    requestAnimationFrame(() => {
        items.forEach((el, i) => {

            // re-enable animation
            el.style.transition = "all 1500ms ease";

            setTimeout(() => {
                el.style.opacity = "1";
                el.style.transform = "translateX(0)";
            }, i * 80);
        });
    });
}

// Animate sections
function animateOnScroll() {
    const elements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("opacity-100", "translate-x-0");
                entry.target.classList.remove("opacity-0", "-translate-x-20");
            }
        });
    }, {
        threshold: 0.2
    });

    elements.forEach((el) => {
        // initial state (important!)
        el.classList.add("opacity-0", "-translate-x-20", "transition-all", "duration-500");

        observer.observe(el);
    });
}

setupSmoothScroll();
animateOnScroll();
createScrollSpy();