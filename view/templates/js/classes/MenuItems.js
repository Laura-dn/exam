export class MenuItems
{
    constructor() {
        this.getMenuItem();
    }

    getMenuItem() {
        let pathName = document.location.pathname.replace(/\//g, "");

        console.log(pathName);
        
        if(pathName === "") {
            pathName = "home";
        }

        const item = document.querySelector(`#${pathName}`);

        item.style.borderBottom = "2px solid #A63E51";
    }
}
