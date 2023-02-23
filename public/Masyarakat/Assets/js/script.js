const   alertBx = document.querySelectorAll('.alert-bx'),
        alertClose = document.querySelectorAll('.alert_close');


        for (let i = 0; i < alertBx.length; i++) {
        
            alertClose[i].addEventListener('click', () => {
                alertBx[i].classList.toggle('show');
            });

        }


let cardHistory = document.querySelectorAll('.card-history'),
    BtnDots = document.querySelectorAll('.BtnMenudots'),
    cardPopup = document.querySelectorAll('.card-popUp');
    
    
    for (let i = 0; i < cardHistory.length; i++) {
        const card = cardHistory[i];
    
        BtnDots[i].addEventListener('click', () => {
            cardPopup[i].classList.toggle('active');
    
        });
    }

let faqBtn = document.querySelectorAll('.faq-toggle'),
    faqContent = document.querySelectorAll('.faq-content'),
    faqIcon = document.querySelectorAll('.faq-toggle > i');

for (let i = 0; i < faqBtn.length; i++) {
    const btn = faqBtn[i];

    btn.addEventListener('click', () => {

        console.log(faqContent[i].style.height, faqContent[i].scrollHeight);
        if (parseInt(faqContent[i].style.height) != faqContent[i].scrollHeight) {
            faqContent[i].style.height = faqContent[i].scrollHeight + "px";
            faqIcon[i].classList.remove('bx-plus');
            faqIcon[i].classList.add('bx-minus');
        } else {
            faqContent[i].style.height = "0px";
            faqIcon[i].classList.remove('bx-minus');
            faqIcon[i].classList.add('bx-plus');
        }

        for (let j = 0; j < faqContent.length; j++) {

            if (j !== i) {
                faqContent[j].style.height = "0px";
                faqIcon[j].classList.remove('bx-minus');
                faqIcon[j].classList.add('bx-plus');
            }
        }
    })
}