    
    // Custom gsap
    // Elements Staggering
    
    gsap.from("button", {
        duration: 1, 
        y: -200, 
        opacity: 0, 
        scale: 0.7
    });
    gsap.from(".info", {
        duration: 0.8, 
        y: 100, 
        opacity: 0, 
        scale: 0.3
    });
    gsap.from("h1", {
        duration: 0.9, 
        y: 200, 
        opacity: 0, 
        scale: 0.6
    });
    gsap.from("h3", {
        duration: 1.0, 
        x: -1000, 
        opacity: 0, 
        scale: 0.5
    });
    gsap.from(".sub-header", {
        duration: 1.2, 
        x: 100, 
        opacity: 0, 
        scale: 0.5
    });
    gsap.from("p", {
        duration: 1.4, 
        x: 100, 
        opacity: 0, 
        scale: 0.5
    });