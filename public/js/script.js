document.addEventListener("DOMContentLoaded", function () {
    const cardSlider = document.getElementById("cardSlider");
    const sliderContainer = document.getElementById("sliderContainer");

    // Clone cards for seamless loop
    const cards = document.querySelectorAll(".card");
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        cardSlider.appendChild(clone);
    });

    // Pause animation on hover
    sliderContainer.addEventListener("mouseover", function () {
        cardSlider.style.animationPlayState = "paused";
    });

    // Resume animation on hover out
    sliderContainer.addEventListener("mouseout", function () {
        cardSlider.style.animationPlayState = "running";
    });


});

function EducationCombainPart() {
    var iconElement = document.getElementById('angle-down');
    var EducationCampaign = document.getElementById('EducationProjects');
    if (iconElement.style.transform == 'rotate(180deg)') {
        iconElement.style.transform = 'rotate(0deg)';
        EducationCampaign.style.display = 'none';
    }
    else {
        iconElement.style.transform = 'rotate(180deg)';
        EducationCampaign.style.display = 'block';
    }
}


function FoodCombainPart() {
    var iconElement = document.getElementById('angle-down2');
    var EducationCampaign = document.getElementById('FoodProjects');
    if (iconElement.style.transform == 'rotate(180deg)') {
        iconElement.style.transform = 'rotate(0deg)';
        EducationCampaign.style.display = 'none';
    }
    else {
        iconElement.style.transform = 'rotate(180deg)';
        EducationCampaign.style.display = 'block';
    }
}


function Non_FoodCombainPart() {
    var iconElement = document.getElementById('angle-down3');
    var EducationCampaign = document.getElementById('Non_FoodProjects');
    if (iconElement.style.transform == 'rotate(180deg)') {
        iconElement.style.transform = 'rotate(0deg)';
        EducationCampaign.style.display = 'none';
    }
    else {
        iconElement.style.transform = 'rotate(180deg)';
        EducationCampaign.style.display = 'block';
    }
}



