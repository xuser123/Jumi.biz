const tags = new Set();
const classes = new Set();
const ids = new Set();
const allElements = document.querySelectorAll('*');
const tagList = document.getElementById('tagList');
const classList = document.getElementById('classList');
const idList = document.getElementById('idList');

allElements.forEach(element => {
    const innerHTML = element.innerHTML;
    const regexTags = /<\/?(\w+)/g;
    const regexClasses = /class="([^"]+)"/g;
    const regexIds = /id="([^"]+)"/g;

    let match;
    while (match = regexTags.exec(innerHTML)) {
        tags.add(match[1]);
    }

    while (match = regexClasses.exec(innerHTML)) {
        match[1].split(' ').forEach(className => classes.add(className));
    }

    while (match = regexIds.exec(innerHTML)) {
        ids.add(match[1]);
    }
});

function appendToList(set, listElement) {
    set.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = item;
        listElement.appendChild(listItem);
    });
}

appendToList(tags, tagList);
appendToList(classes, classList);
appendToList(ids, idList);
