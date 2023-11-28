document.querySelector("#submitForm").addEventListener("click", submitForm);

function submitForm(event) {
    let form = document.querySelector("#contactForm");

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (resEvent) {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let responseJSON = JSON.parse(xhr.responseText);
                console.log(responseJSON);
                if (responseJSON.success == "true") {
                    document.querySelector("#formMessage").innerHTML = "Thank you!";
                    document.querySelector("#formMessage").style.color = "green";

                    form.remove();
                } else {
                    document.querySelector("#formMessage").innerHTML = "OOPS FAILURE";
                }
            } else {
                console.error("Error: " + xhr.status);
            }
        }
    };

    xhr.open("POST", "insert-for-contact.php");
    xhr.send(formData);
}