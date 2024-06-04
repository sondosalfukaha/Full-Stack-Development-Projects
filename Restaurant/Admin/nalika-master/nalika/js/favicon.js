const drop_area = document.getElementById("drop-area");
const input_file = document.getElementById("input-file");
const img_view = document.getElementById("img-view");

input_file.addEventListener('change',uploadImage);

function uploadImage() {
    
    let imgLink = URL.createObjectURL(input_file.files[0]);
    img_view.style.backgroundImage = `url(${imgLink})`;
    img_view.style.backgroundSize = "250px 250px";
    img_view.style.backgroundPosition = "center center";
    img_view.style.backgroundRepeat = "no-repeat";
    img_view.textContent = "";
    img_view.style.border = none;
}
drop_area.addEventListener("dragover", function(e){
    e.preventDefault();
});
drop_area.addEventListener("drop", function(e){
    e.preventDefault();
    input_file.files = e.dataTransfer.files;
    uploadImage();
});