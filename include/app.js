var testimonials = [
    {name: "0Tilly Charles", review: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt mi lobortis condimentum tristique. Maecenas vitae laoreet nibh, vitae ultricies quam. Quisque at tellus non eros porta tincidunt nec eget odio."},
    {name: "1Louisa Shannon", review: "Etiam nec aliquam orci, eget commodo odio. Pellentesque posuere leo sapien, vel vulputate lorem vestibulum fermentum. Ut aliquam, nisl vitae facilisis lobortis, metus erat fringilla leo."},
    {name: "2Josiah Jefferson", review: "Suspendisse mollis erat orci, vel luctus leo finibus et. Vestibulum et odio in libero accumsan porta. Maecenas pulvinar lectus et libero consequat bibendum."},
    {name: "3Dale Mccann", review: "Proin nec ex faucibus nulla accumsan consectetur elementum sit amet erat. Nulla facilisi. Integer elementum viverra tellus, vel pulvinar tellus cursus ac. Ut sed feugiat nisi."},
    {name: "4Ebony Rocha", review: "Suspendisse mollis ligula ut orci pretium, et ornare justo euismod. Sed pharetra odio a ligula pretium, et sagittis sem molestie."},
    {name: "5Hazel Ward", review: "Integer in lacus sed lacus convallis finibus. Aenean convallis, quam id pharetra tincidunt, est sem congue erat, non luctus ligula sapien in risus. Vestibulum sit amet tempus eros."},
    {name: "6Oscar Terrell", review: "Etiam lobortis luctus odio vitae vestibulum. Ut consequat nunc ac tempus lacinia. Nam eget sapien magna. Maecenas iaculis ante ligula, a fringilla nunc tempor a."},
    {name: "7Elle Luna", review: "Vivamus sit amet nibh tellus. Curabitur scelerisque aliquet maximus. Nullam commodo risus ut iaculis tincidunt. Nulla efficitur pretium egestas. Sed non tincidunt nisl."},
    {name: "8Lukas Nguyen", review: "Vivamus et nunc dapibus, condimentum nisl hendrerit, congue felis. Pellentesque in ex ut libero hendrerit tristique. Curabitur blandit lacus in viverra euismod. Proin egestas lectus neque, ut pellentesque elit tincidunt sed. Aliquam erat volutpat."}
];

var nameDiv = document.getElementById("name");
var reviewDiv = document.getElementById("review");
var nextBtn = document.getElementById("next");
var prevBtn = document.getElementById("prev");
var count = 0;

//Fill in details. 

var fillReview = function() {
    nameDiv.innerHTML = testimonials[count].name;
    reviewDiv.innerHTML = testimonials[count].review;
}


//Cycle through details on clicks of buttons.

var nextReview = function() {
    count++;
}

var prevReview = function() {
    count--;
}

nextBtn.onclick = function() {
    if (count == testimonials.length-1) {
        count = 0;
        fillReview();
    }
    else {
        nextReview();
        fillReview();
    }
}

prevBtn.onclick = function() {

    if (count == 0) {
        count = testimonials.length;
        fillReview();
    }
    else {
        prevReview();
        fillReview();
    }
}

//Show and hide nav bars.
let openBtn = document.getElementById("openButton");
let header1 = document.getElementById("header1");
let header2 = document.getElementById("header2");
let burgerMenu = document.getElementById("burger");
let pageWrap = document.getElementById("pageWrap");
let closeBtn = document.getElementById ("closeButton")

function burgerAppear() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      openBtn.style.display = "block";
      header2.style.display = "none";
    } else {
      openBtn.style.display = "none";
      header2.style.display = "flex";
    }
  }


//Nav bar open and close functions.
var openNavDesk = function() {
    header2.style.display = "flex";
    header2.style.position = "fixed"
    openBtn.style.display = "none";
}

var openNavMob = function() {
    burgerMenu.style.width = "250px";
}

var closeNavMob = function() {
    burgerMenu.style.width = "0px";
}


//Detect window size and implement correct nav.
document.body.onload = function() {
    if (window.innerWidth < 700) {
        header1.style.display = "none";
        openBtn.style.display = "block"
        document.getElementById("mobLogo").style.display = "block";
    }

    else {
        window.onscroll = function() {burgerAppear()};
        document.getElementById("mobLogo").style.display = "none"; 
       }
}

//Implement correct nav on button press.

openBtn.onclick = function() {
    if (window.innerWidth < 700) {
        openNavMob();
    } else {
        openNavDesk();
    }
}
    
closeBtn.onclick = function() {
    closeNavMob();
}

