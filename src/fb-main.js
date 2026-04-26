
let btns = document.querySelectorAll('button');

let affForms = {
    'ikenna': '#ikenna',
    'uche': '#uche',
    'nonso': '#nonso',
    'soma': '#soma',
}

let params = new URLSearchParams(document.location.search);
let affID = params.get('affID')

function visitFormPage(e)
{
    e.preventDefault();

    let link = '#ikenna';

    if (affID != null && affForms[affID] != undefined) {
        link = affForms[affID]
    }

    window.location = link;
}

btns.forEach((btn) => {
    btn.onclick = (e) => {
        visitFormPage(e);
    }
});
