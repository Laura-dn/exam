export class MenuItems
{
    constructor() {
        this.getMenuItem();
    }

    getMenuItem() {
        let pathName = document.location.pathname.replace(/\//g, "");
        const item = document.querySelector(".itemHome");

        switch(pathName) {
            case "home":
                item.style.borderBottom = "2px solid #A63E51";
                break;
            default:
                item.style.borderBottom = "2px solid #A63E51";
                break;
        }
    }
}
