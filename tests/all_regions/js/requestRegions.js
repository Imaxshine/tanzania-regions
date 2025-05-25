document.getElementById('myForm').addEventListener('submit',(ev)=>{
    ev.preventDefault();
});
async function RequestAllRegions(){
    document.getElementById('getAllRegions').innerHTML = `<p class="alert alert-info">Please wait...</p>`;
    document.getElementById('dialog').showModal();

    let path = window.location.origin;
    let mainPath = `${path}/regions/api/allregions/API`; //All regions Endpoint

    let responses = await fetch(mainPath,{
        method:"GET",
    });
    if(responses.ok){
        let results = await responses.json();
        document.getElementById('getAllRegions').innerHTML = "";
        results.forEach(result=>{
            console.log(result.region);
            document.getElementById('getAllRegions').innerHTML += `<p class="alert alert-success">${result.region}</p>`;
            document.getElementById('dialog').showModal();
        })
    }else{
        document.getElementById('getAllRegions').innerHTML = `<p class="alert alert-danger">Error: ${results}</p>`;
        document.getElementById('dialog').showModal();
    }
    
}
document.getElementById('dialog').addEventListener('click',()=>{
    document.getElementById('dialog').close();
});