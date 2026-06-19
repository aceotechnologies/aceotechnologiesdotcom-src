
function repeat(interval, className, selector = 'h2', code='')
{
    let tags = document.querySelectorAll(`${selector}`);
    let numTags = tags.length;
    let numRepeat = numTags / interval;
    let tagIdx = 0;
    let tagHTML = '';

    for (let x=1; x<=numRepeat; x++) {
        let tag,_;
        tagIdx = (x * interval) - 1;
        tag = tags[tagIdx];
        tagHTML = tag.outerHTML;
        tag.outerHTML = `<div class="${className}">${_=eval(code)}</div>\n${tagHTML}`;
    }
}

// repeat(2, 'fofo', 'h2', `
// console.log('I am here. You can't see me')
// `);
