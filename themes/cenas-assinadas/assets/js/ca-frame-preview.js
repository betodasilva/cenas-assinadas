document.addEventListener("DOMContentLoaded", function(){
    const d = document;
    d.querySelectorAll('input[name="attribute_moldura"]').forEach( function(e) {
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
        var image = d.querySelector('.product .images img');
        var ele = this;
        if ( ele.checked ) {
            var prefix = "moldura_";
            var classes = image.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            image.className = classes.join(" ").trim();

            image.classList.add(cssClass);
        } 
        
        
    }

});