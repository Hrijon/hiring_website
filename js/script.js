

// Get the modal
var loginModal = document.getElementById('id01');
var registerModal = document.getElementById('id02');
var homePage = document.getElementById('id03');
var apply = document.getElementById('id04');
var upload = document.getElementById('id05');
var job = document.getElementById('id06');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }

    if (event.target == registerModal) {
        registerModal.style.display = "none";
    }
    
    if (event.target == homePage) {
        homePage.style.display = "none";
    }

    if(event.target == apply) {
        apply.style.display = "none";
    }

    if(event.target == upload) {
        upload.style.display = "none";
    }

    if(event.target == job) {
        job.style.display = "none";
    }
}

