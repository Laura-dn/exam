export class LoadMap
{
    constructor() {
        this.initMap();
    }

    initMap() {
        const myMap = {
            lat: 48.464495,
            lng: 35.047454,
        }
        
        const platform = new H.service.Platform({
            'apikey': '3xG1aah8fW_oXNlO8C1vcD-S3kmfV1qxPCgJyeR-jbA'
        });
        
        const defaultLayers = platform.createDefaultLayers();
        
        const svgMarkup = '<svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 0 25 25" width="35"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2c3.86 0 7 3.14 7 7 0 5.25-7 13-7 13S5 14.25 5 9c0-3.86 3.14-7 7-7zm-1.53 12L17 7.41 15.6 6l-5.13 5.18L8.4 9.09 7 10.5l3.47 3.5z" fill="red"/></svg>';
        
        let icon = new H.map.Icon(svgMarkup),
            coords = { lat: myMap.lat, lng: myMap.lng },
            marker = new H.map.Marker(coords, {icon: icon});
    
        let map = new H.Map(
            document.querySelector("#mapContainer"),
            defaultLayers.vector.normal.map,
            {
                zoom: 17,
            });
        
        map.addObject(marker);
        map.setCenter(coords);
    }
}
