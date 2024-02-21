let contentBlock = document.querySelectorAll('.rSContent');
let accordion = document.querySelectorAll('.timeScaleAccordion');
let arrowImg = document.querySelectorAll('.timeScaleArrow');
let accordionItem = document.querySelectorAll('.accordionItem');
let accordionItemTwo = document.querySelectorAll('.accordionItemTwo');
let dateFilter = document.querySelector('.filterSelectItem');
let filterArrowSvg = document.querySelector('.filterArrow');
let filterArrowPath = document.querySelector('.filterArrowPath');
let filterItem = document.querySelector('.filterItem');

for (let i = 0; i < contentBlock.length; i++){
    contentBlock[i].addEventListener('click',function(){
        accordion[i].classList.toggle('timeScaleAccordion--show');
        arrowImg[i].classList.toggle('timeScaleArrow--rotate');
        accordionItem[i].classList.toggle('accordionItem--show');
        accordionItemTwo[i].classList.toggle('accordionItem--show');
    })
} /// выезжающие кнопки для заданий в блоке шкала времени

dateFilter.addEventListener('click', function(){
    if (!filterItem.classList.contains('filterItem--show')){
        dateFilter.classList.toggle('filterSelectItem--active');
        filterArrowSvg.classList.toggle('filterArrow--active');
        filterArrowPath.classList.toggle('filterArrowPath--active');
        filterItem.classList.toggle("filterItem--show");
    }  
    
}) /// открытие списка фильтра для блока шкала времени

document.addEventListener('mouseup', function() {

    if (filterItem.classList.contains('filterItem--show')) {
        dateFilter.classList.toggle('filterSelectItem--active');
        filterArrowSvg.classList.toggle('filterArrow--active');
        filterArrowPath.classList.toggle('filterArrowPath--active');
        filterItem.classList.toggle("filterItem--show");
    }
}); /// закрытие списка фильтра для блока шкала времени при клике в любую область



let f1 = document.getElementById('filterItemOne').addEventListener('click',function(){
    let div = document.getElementById('filter').classList.add('hiden');        
});
let f2 = document.getElementById('filterItemTwo').addEventListener('click',function(){
    let div = document.getElementById('filter').classList.remove('hiden');
});
/// сортировка по дате в шкале времени


