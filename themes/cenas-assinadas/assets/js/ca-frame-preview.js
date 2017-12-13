document.addEventListener("DOMContentLoaded", function(){
    const d = document;
    d.querySelectorAll('input[name="attribute_pa_moldura"]').forEach( function(e) {
        e.addEventListener('change', changePhotoPreview);
        if (e.checked) {
            const image = d.querySelector('.product .images img');
            const cssClass = e.classList[0];
            image.classList.add(cssClass);
        }
    });

    d.querySelectorAll('input[name="attribute_pa_passepartout"]').forEach( function(e) {
        e.addEventListener('change', changePhotoPreview);
        if (e.checked) {
            const image = d.querySelector('.product .images img');
            const cssClass = e.classList[0];
            image.classList.add(cssClass);
        }
    });

    d.querySelectorAll('input[name="attribute_pa_cor-do-passepartout"]').forEach( function(e) {
        e.addEventListener('change', changePhotoPreview);
        if (e.checked) {
            const image = d.querySelector('.product .images img');
            const cssClass = e.classList[0];
            image.classList.add(cssClass);
        }
    });

    function changePhotoPreview(e){
        //this == elemento
        //e == evento
        //
        var cssClass = this.classList[0];
        console.log(cssClass);
        var image = d.querySelector('.product .images img');
        var ele = this;
        if ( ele.checked ) {
            var prefix;
            if (cssClass == "sem_passepartout") {
                prefix = "passepartout_";
            }else if (cssClass == "sem_cor") {
                prefix = "corpassepartout_";
            }else if (cssClass == "sem_moldura") {
                prefix = "moldura_";
            }else {
                prefix = cssClass.substr(0, cssClass.indexOf('_') +1 );
                
            }
            var classes = image.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            image.className = classes.join(" ").trim();

            image.classList.add(cssClass);
        } 
        
        
    }

});