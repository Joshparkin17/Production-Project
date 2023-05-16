window.onload = function() {
    document.addEventListener('click', e => {
        if (e.target.matches('button.select-device')) {
            getDeviceByID(e.target.value);
        }
        /*if (e.target.matches('button.add-product')) {
            addNewProduct();
        }*/
    });


        
        


}


function  getDeviceByID(id) {
    window.location= "/devices/"+id;
}
function  getCaseByID(id) {
    window.location= "/cases/"+id;
}
