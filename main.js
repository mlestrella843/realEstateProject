const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app, {
    loop:true,
    delay:75

});

typewriter
.typeString('The property of your Dreams')
.pauseFor(200)
.start();

