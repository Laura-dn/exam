export class EntrySalon
{
    constructor() {
        document.querySelector("#btnGetForm").addEventListener("click", this.getForm);
        document.querySelector("#btnCloseForm").addEventListener("click", this.closeForm);
    }

    getForm() {
        const form = document.querySelector("#entrySalonBlock");

        form.style.display = "flex";
    }

    closeForm(event) {
        event.preventDefault();
        const form = document.querySelector("#entrySalonBlock");

        form.style.display = "none";
    }
}
