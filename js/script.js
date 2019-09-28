function ready() {

    function sayHi() {
        form.classList.remove("hide");
        success_message.classList.remove("show");
    }


    send_form.onclick = function() {
        form.classList.add("hide");
        success_message.classList.add("show");
        setTimeout(sayHi, 10000);
        return false;
    };


};

document.addEventListener("DOMContentLoaded", ready);