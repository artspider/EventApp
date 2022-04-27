let reciboInput = document.querySelector("#recibo");

var pRecibo = null;

reciboInput.addEventListener("change", function () {
    var src = URL.createObjectURL(reciboInput.files[0]);
    console.log("cambio el input");

    /* background.src = src; */
    pRecibo = bgInput.files[0];
    console.log(pRecibo);
});

export { pRecibo };
