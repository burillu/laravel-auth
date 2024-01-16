import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);


const prewImage = document.getElementById('image');
prewImage.addEventListener('change', () => {
    let fileContentReader = new FileReader();
    fileContentReader.readAsDataURL(prewImage.files[0]);
    fileContentReader.onload = function (fileContentREvent) {
        document.getElementById('uploadPreview').src = fileContentREvent.target.result;

    }
})