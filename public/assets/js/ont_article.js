/*
const articleShareIcons = document.querySelector('.ont-article-container');
const ontShareIcon = document.querySelector('.article-share__icon-container'); 
const articleContainer = document.querySelector('.ont-main-article-container');

function myFunction() {
const rect =  articleShareIcons.getBoundingClientRect();
console.log( rect.top.toFixed()+' offset : '+ articleShareIcons.offsetTop);
window.requestAnimationFrame(() => {
 if( window.scrollY >=  articleShareIcons.offsetTop){
    ontShareIcon.classList.add('position-fixed');
    articleContainer.classList.add('ont-article-fixed-positioned');
 }
 else{
    ontShareIcon.classList.remove('position-fixed');
    articleContainer.classList.remove('ont-article-fixed-positioned');
    
   
}
})
}

if(articleContainer !== null){
window.onscroll = function() {myFunction()};


if(  window.scrollY >=  articleShareIcons.offsetTop){
    articleShareIcons.classList.add('position-fixed');
    articleContainer.classList.add('ont-article-fixed-positioned');
 }
 else{
    articleShareIcons.classList.remove('position-fixed');
    articleContainer.classList.remove('ont-article-fixed-positioned');
    articleShareIcons.classList.remove('position-fixed-2');
}
}
*/


const articleRecommendeToggle = document.querySelector('.article-recomanded__block-1_title');
const articleRecommendedContainer = document.querySelector('.article-rec__block-1_top');
const articleRecToggleIndicator = document.querySelector('.article-recomanded__block-1_title i');

articleRecommendeToggle.addEventListener('click', function(){

     articleRecommendedContainer.classList.toggle('article-recommended-toggle');
     if( articleRecToggleIndicator.classList.contains('ri-arrow-up-double-fill')){
      articleRecToggleIndicator.classList.remove('ri-arrow-up-double-fill');
      articleRecToggleIndicator.classList.add('ri-arrow-down-double-fill');
     }
     else if(articleRecToggleIndicator.classList.contains('ri-arrow-down-double-fill')){
      articleRecToggleIndicator.classList.remove('ri-arrow-down-double-fill');
      articleRecToggleIndicator.classList.add('ri-arrow-up-double-fill');
     }
});