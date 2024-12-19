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


    // vaaaliiidaaationnn des chaaaammmmps
    function validatform() {
        const numerosnot = document.querySelectorAll('.numerosnot');
        const numerosgk = document.querySelectorAll('.numerosgk');
        const inputinfos = document.querySelector('.infos');
        const inputurls = document.querySelectorAll('.urls');
        let toutvalid = true;

        const numerosnotValid = Array.from(numerosnot).every(input => {
            const value = parseInt(input.value.trim(), 10);
            return value >= 10 && value <= 99;
        });

        const numerosgkValid = Array.from(numerosgk).every(input => {
            const value = parseInt(input.value.trim(), 10); 
            return value >= 10 && value <= 99;
        });


        if (inputinfos) {
            const nameValue = inputinfos.value.trim();
            const namePattern = /^[A-Za-z\s]+$/;
            if (nameValue.length < 3 || nameValue.length > 50 || !namePattern.test(nameValue)) {
                toutvalid = false;
            }
        }

        inputurls.forEach(function(input) {
            const urlPattern = /^(https?:\/\/)?[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+(:\d+)?(\/[^\s]*)?$/;
            if (!urlPattern.test(input.value.trim())) {
                toutvalid = false;
            } 
        });

        toutvalid = toutvalid && (numerosnotValid || numerosgkValid);

        return toutvalid;
    }

    
    
    positionInput.addEventListener('input', () => affichform());
});