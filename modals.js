var article = document.querySelectorAll(".article")
console.log(article)
var openTrig = document.querySelectorAll(".careers__name")
var closeModal = document.querySelectorAll(".close")
console.log(closeModal)
for(i = 0; i < openTrig.length; i++){
    openTrig[i].addEventListener("click", function(){
        if(this.textContent === "Rehabilitation Specialist"){
            article[0].style.display="block"
            console.log(this.textContent)
        } else if(this.textContent === "Clinical Supervisor"){
            article[1].style.display="block"
            console.log(this.textContent)
        } else if(this.textContent === "OMHC Therapist"){
            article[2].style.display="block"
            console.log(this.textContent)
        } else if(this.textContent === "Psychiatrist Medical Director"){
            article[3].style.display="block"
            console.log(this.textContent)
        } else if(this.textContent === "Residential Counselor"){
            article[4].style.display="block"
            console.log(this.textContent)
        }
    })
}

for (i = 0; i < closeModal.length; i++) {
    closeModal[i].addEventListener("click", function(){
        article[0].style.display="none";
        article[1].style.display="none";
        article[2].style.display="none";
        article[3].style.display="none";
        article[4].style.display="none";
    })
}