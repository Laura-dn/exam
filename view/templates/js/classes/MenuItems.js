export class MenuItems
{
    constructor() {
        this.getMenuItem();
    }

    getMenuItem() {
        let pathName = document.location.pathname.replace(/\//g, "");
        const reg = /price/gi,
              arrPath = [
                  "home",
                  "about",
                  "price"
              ];

        if(reg.test(pathName)) {
            pathName = "price";
        }

        if(pathName === "") {
            pathName = "home";
        }

        arrPath.forEach(el => {
            if(el === pathName) {
                let item = document.querySelector(`#${pathName}`);                
                item.style.borderBottom = "2px solid #A63E51";
            }
        });
    }
}
