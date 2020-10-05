export class EntrySalon
{
    constructor() {
        document.querySelector("#btnGetForm").addEventListener("click", this.getForm);
    }

    getForm() {
        const form = document.querySelector("#entrySalonBlock");

        form.style.display = "flex";
    }
}
