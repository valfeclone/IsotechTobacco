import { BASE_URL } from "../../config/base.js";

let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json, text-plain, */*",
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": token,
}

async function fillUserProfile(){

    /* Fetch user information */
    const resUserInfo = await fetch(`${BASE_URL}/user-profile`, {
        headers: headers,
        method: 'get'
    });

    const userInfo = await resUserInfo.json();
    
    /* Fetch province information */
    const resProvince = await fetch(`${BASE_URL}/getProvinsi`, {
        headers: headers,
        method: 'get'
    });

    const provinces = await resProvince.json();

    let provincesSection = '';

    provinces.forEach(data => {

        let optionProvinceSetion;

        if(data.PROVINSI !== userInfo.provinsi){
            optionProvinceSetion = `
                <option value="${data.PROVINSI}">${data.PROVINSI}</option>
            `;

        }else{
            optionProvinceSetion = `
                <option value="${data.PROVINSI}" selected>${data.PROVINSI}</option>
            `;
            
        }
        
        provincesSection += optionProvinceSetion;
        
    });

    $('#provinsi').append(provincesSection);

    /* Fetch cities information */

    const resCity = await fetch(`${BASE_URL}/getKota/${userInfo.provinsi}`, {
        headers: headers,
        method: 'get'
    });

    const cities = await resCity.json();


    let citiesSection = '';

    cities.forEach(data => {

        let optionCitySetion;

        if(data.KAB_KOTA !== userInfo.kota){
            optionCitySetion = `
                <option value="${data.KAB_KOTA}">${data.KAB_KOTA}</option>
            `;

        }else{
            optionCitySetion = `
                <option value="${data.KAB_KOTA}" selected>${data.KAB_KOTA}</option>
            `;
            
        }
        
        citiesSection += optionCitySetion;
        
    });

    $('#kota').append(citiesSection);

    /* Fetch districts information */
    const resDistrict = await fetch(`${BASE_URL}/getKecamatan/${userInfo.kota}`, {
        headers: headers,
        method: 'get'
    });

    const districts = await resDistrict.json();


    let districtsSection = '';

    districts.forEach(data => {

        let optionDistrictsSetion;

        if(data.KECAMATAN !== userInfo.kelurahan){
            optionDistrictsSetion = `
                <option value="${data.KECAMATAN}">${data.KECAMATAN}</option>
            `;

        }else{
            optionDistrictsSetion = `
                <option value="${data.KECAMATAN}" selected>${data.KECAMATAN}</option>
            `;
            
        }
        
        districtsSection += optionDistrictsSetion;
        
    });

    $('#kecamatan').append(districtsSection);

    /* Fetch wards and postcode information */
    const resWard = await fetch(`${BASE_URL}/getKelurahan/${userInfo.kecamatan}`, {
        headers: headers,
        method: 'get'
    });

    const wards = await resWard.json();


    let wardsSection = '';

    let kodepostLists = [];


    wards.forEach(data => {

        let optionWardsSetion;

        if(data.KELURAHAN_DESA !== userInfo.kelurahan){
            optionWardsSetion = `
                <option value="${data.KELURAHAN_DESA}">${data.KELURAHAN_DESA}</option>
            `;

        }else{
            optionWardsSetion = `
                <option value="${data.KELURAHAN_DESA}" selected>${data.KELURAHAN_DESA}</option>
            `;
            
        }

        if(!kodepostLists.includes(data.KODE_POS)){
            kodepostLists.push(data.KODE_POS)
        }
        
        wardsSection += optionWardsSetion;
        
    });

    $('#kelurahan_desa').append(wardsSection);

    let innerKodePosSection = '';


    kodepostLists.forEach(kodepos => {

        let optionPostcodeSetion;

        if(kodepos !== userInfo.kodepos){
            optionPostcodeSetion = `
                <option value="${kodepos}">${kodepos}</option>
            `;

        }else{
            optionPostcodeSetion = `
                <option value="${kodepos}" selected>${kodepos}</option>
            `;
            
        }

        innerKodePosSection += optionPostcodeSetion;
        
    });

    $('#kodepos').append(innerKodePosSection);

}

fillUserProfile();

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function isContainUnderscore(string){
    if(string.includes("_")){
        let words = string.split("_");
        let capitalizeWords = words.map(word => capitalizeFirstLetter(word));
        const newWords = capitalizeWords.join(" / ")

        return newWords
    }

    return string;
}

const resetAllAddress = (arrId) =>{
    arrId.map((id) => {
        $(`#${id}`).html(`<option value="">Pilih ${capitalizeFirstLetter(isContainUnderscore(id))}..</option>`);
        $(`#${id}`).prop('disabled', true);
    });
}

async function getProvinsi(){
    let res = await fetch(`${BASE_URL}/getProvinsi`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
        },
        method: 'get'
    });

    let datas = await res.json();

    let htmlSection = '';

    datas.forEach(data => {
        let sectionHtml = `
            <option value="${data.PROVINSI}">${data.PROVINSI}</option>
        `;

        htmlSection += sectionHtml;

    });

    $('#provinsi').append(htmlSection);
}

$('#provinsi').on('change', async function(){
    resetAllAddress(["kecamatan", "kelurahan_desa", "kodepos"]);

    const provinsi = $('#provinsi :selected').text();
    let res = await fetch(`${BASE_URL}/getKota/${provinsi}`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'get'
    });

    const kota = await res.json();
    $('#kota').prop('disabled', false);

    let innerKotaSection = `<option value="">Pilih Kota..</option>`;
    
    kota.forEach(data => {
        let tempInner = `<option value="${data.KAB_KOTA}">${data.KAB_KOTA}</option>`
        innerKotaSection += tempInner;
    });

    $('#kota').html(innerKotaSection);

})

$('#kota').on('change', async function(){
    resetAllAddress(["kelurahan_desa", "kodepos"]);


    const kota = $('#kota :selected').text();

    let res = await fetch(`${BASE_URL}/getKecamatan/${kota}`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'get'
    });

    const kecamatan = await res.json();
    $('#kecamatan').prop('disabled', false);


    let innerKecamatanSection = `<option value="">Pilih Kecamatan..</option>`;
    
    kecamatan.forEach(data => {
        let tempInner = `<option value="${data.KECAMATAN}">${data.KECAMATAN}</option>`
        innerKecamatanSection += tempInner;
    });

    $('#kecamatan').html(innerKecamatanSection); 
});

$('#kecamatan').on('change', async function(){

    const kecamatan = $('#kecamatan :selected').text();

    let res = await fetch(`${BASE_URL}/getKelurahan/${kecamatan}`, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'get'
    });

    const kelurahan_desa = await res.json();

    $('#kelurahan_desa').prop('disabled', false);
    $('#kodepos').prop('disabled', false);


    let innerKelurahanDesaSection = `<option value="">Pilih Kelurahan / Desa..</option>`;

    let kodepostLists = [];

    let innerKodePosSection = `<option value="">Pilih Kodepos..</option>`;
    
    kelurahan_desa.forEach(data => {
        /* Kelurahan atau Desa */
        let tempInner = `<option value="${data.KELURAHAN_DESA}">${data.KELURAHAN_DESA}</option>`
        innerKelurahanDesaSection += tempInner;

        /* Kodepos */
        if(!kodepostLists.includes(data.KODE_POS)){
            kodepostLists.push(data.KODE_POS)
        }

    });

    kodepostLists.forEach(kodepos => {
        let tempInnerKodepos = `<option value="${kodepos}">${kodepos}</option>`
        innerKodePosSection += tempInnerKodepos;
    })

    $('#kelurahan_desa').html(innerKelurahanDesaSection); 
    $('#kodepos').html(innerKodePosSection); 

});
