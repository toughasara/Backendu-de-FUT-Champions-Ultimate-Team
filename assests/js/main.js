document.addEventListener("DOMContentLoaded", () => {
    // const modal = document.getElementById('modal');
    const positionInput = document.getElementById('player-position');

    // affiiichaaage de formuuulaaaiiiree dynaaamiiique
    function affichform() {
        const form1 = document.getElementById("form1");
        const form2 = document.getElementById("form2");

        form1.classList.add("d-none");
        form2.classList.add("d-none");

        if(positionInput.value === 'GK'){
            form2.classList.remove("d-none");
        }
        else{
            form1.classList.remove("d-none");
        }
    }
    
    
    positionInput.addEventListener('input', () => affichform());
});