document.addEventListener("DOMContentLoaded", function() {
    const color_input = document.querySelector("#color");
    if (!color_input) {
        console.warn("#color element not found");
        return;
    }

    const submit_button = document.querySelector("#submit");    

    submit_button.addEventListener("click", function(event) {
        event.preventDefault();
        document.body.style.backgroundColor = color_input.value;
    });
});