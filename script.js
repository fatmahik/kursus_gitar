function toggleWhatsapp() {
    document.getElementById("whatsappPopup").classList.toggle("show");
}

function closeWhatsapp() {
    document.getElementById("whatsappPopup").classList.remove("show");
}

document.addEventListener("click", function(event) {
    const wrapper = document.querySelector(".whatsapp-wrapper");
    const popup = document.getElementById("whatsappPopup");
    if (wrapper && !wrapper.contains(event.target)) {
        popup.classList.remove("show");
    }
});