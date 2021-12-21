

// loader
var loading = document.getElementById("loading");
   
function loader(){
  loading.style.display = 'none';
};


function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


// scorll button js
const scrollBtn = document.querySelector("#myBtn");
scrollBtn.addEventListener("click", () => {
	document.body.scrollTop  = 0;
	document.documentElement.scrollTop = 0;
});
document.addEventListener("scroll",(e) => {
	if (document.documentElement.scrollTop <= 400) {
		scrollBtn.style.display = "none";
	}
	else
	{
    scrollBtn.style.display = "block";

	}
});





// service js

const counters =  document.querySelectorAll('.counter');
counters.forEach((counter) =>{
       // console.log(counter);
       counter.innerHTML = 0;
       const updateCounter = () =>{
         const targetCount = +counter.getAttribute('data-target');
         // console.log(typeof targetCount)
         const starting = Number(counter.innerHTML); 

         const incr = targetCount / 100;

         if(starting < targetCount){
           counter.innerHTML = `${starting + incr}`;
           setTimeout(updateCounter, 100);
         }
       }
       updateCounter();
     })

    

// sidediv navbar js
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


