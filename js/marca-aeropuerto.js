let map;
let markers = [];

const setListener = () => {
    document.querySelectorAll(".nombre-individual").forEach((aeropuertoNombre, index)=>{
        aeropuertoNombre.addEventListener("click", ()=>{
            google.maps.event.trigger(markers[index], "click")
        })
    })
}

const displayAeropuertoList = () => {
    let uniHTML = "";
    aeropuertos.forEach(aeropuerto => {
        uniHTML += `<h4 class="nombre-individual">${aeropuerto.name}</h4>`
    })
    document.getElementById("uni-nombre").innerHTML = uniHTML;
}

const createMarker = (coord, name, address, phone, page) => {
    let html = `
    <div class="window">
        <h2>${name}</h2>
        <div class="address">
            <h3>Direccion: ${address}</h3>
        </div>
        <div class="phone">
            <h3>Telefono: ${phone}</h3>
        </div>
    </div>
    `;
    const marker = new google.maps.Marker({
        position: coord,
        map: map,
    })
    google.maps.event.addListener(marker, "click", () => {
        infowindow.setContent(html);
        infowindow.open(map, marker)
    })
    markers.push(marker)
}


const createLocationMarkers = () => {
    let bounds = new google.maps.LatLngBounds();
    // aeropuertoes.forEach(aeropuerto => {
    //     let coord = new google.maps.LatLng(aeropuerto.lat, aeropuerto.lng);
    //     let name = aeropuerto.name;
    //     let address = aeropuerto.address;
    //     let phone = aeropuerto.phone;
    //     let page =aeropuerto.page;
    //     bounds.extend(coord)
    //     createMarker(coord, name, address, phone, page);
    //     map.fitBounds(bounds);
    // })
    aeropuertos.forEach(aeropuerto => {
        let coord = new google.maps.LatLng(aeropuerto.lat, aeropuerto.lng);
        let name = aeropuerto.name;
        let address = aeropuerto.address;
        let phone = aeropuerto.phone;
        let page =aeropuerto.page;
        bounds.extend(coord)
        createMarker(coord, name, address, phone, page);
        map.fitBounds(bounds);
    })
}



function initMap() {
    let lapaz = { lat: -16.508984257887636, lng: -68.12424660269954 }
    map = new google.maps.Map(document.getElementById("map"), {
        center: lapaz,
        zoom: 20,
        mapId:"3792af100ec9ffce",
    });
    createLocationMarkers();

    infowindow = new google.maps.InfoWindow();
    displayAeropuertoList()
    setListener()
}