var imgId = document.getElementsByClassName('hero')[0];
console.log(imgId);
var imgList = ['img/1.png', 'img/2.png', 'img/3.png'];
let imgNo = 0;

let carouselId = setInterval(sliderOne, 1000);

function sliderOne() {
  if (imgNo < imgList.length) {
    imgId.setAttribute('src', imgList[imgNo]);
    imgNo++;
  } else {
    imgNo = 0;
  }
}

imgId.addEventListener("mouseover", function() {
  clearInterval(carouselId);
});

imgId.addEventListener("mouseout", function() {
  carouselId = setInterval(sliderOne, 1000);
});
