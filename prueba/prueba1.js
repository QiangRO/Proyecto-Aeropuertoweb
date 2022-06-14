let accordion = document.querySelector('.accordionBox'),
    accordionItem = document.querySelectorAll('.accordionItem');
accordionItem.forEach(elem => {
    elem.addEventListener('click', function (e) {
        e.srcElement.parentElement.classList.toggle('active');
    });
});