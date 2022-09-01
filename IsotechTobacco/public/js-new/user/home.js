import { BASE_URL } from "../config/base.js";

let urlProvinsi = '/getProvinsi';

let urlKota = '/getKota';

const provinsi = [];

const kota = [];

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

let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

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

getProvinsi();

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
