export class Mirror
{
    constructor() {
        document.querySelector("#mirror").addEventListener("click", this.getVideo);
    }

    getVideo() {
        if(navigator.webkitGetUserMedia != null) {
            this.createElementMirror();

            const options = {
                video: true, 
                audio: true 
            };
            
            // запрашиваем доступ к веб-камере
            navigator.webkitGetUserMedia(options, function(stream) {
                // получаем тег video
                const video = document.querySelector("video"); 
                // включаем поток в магический URL
                video.src = window.webkitURL.createObjectURL(stream); 
            }); 
        } else {
            console.log("Видео не поддерживается!");
        }
    }

    createElementMirror() {
        const video = document.createElement("video");
        video.autoplay = true;

        document.body.prepend(video);
    }
}
