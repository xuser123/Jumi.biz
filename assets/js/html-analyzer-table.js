const tags = new Set();
const classes = new Set();
const ids = new Set();
const allElements = document.querySelectorAll('*');
const tableContainer = document.createElement('div');
tableContainer.setAttribute('id', 'tableContainer');

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

function appendToTable(set, tableName) {
    const tableRow = document.createElement('tr');
    const tableHeader = document.createElement('th');
    tableHeader.textContent = tableName;
    tableRow.appendChild(tableHeader);

    set.forEach(item => {
        const tableData = document.createElement('td');
        tableData.textContent = item;
        tableRow.appendChild(tableData);
    });

    return tableRow;
}

const table = document.createElement('table');

table.appendChild(appendToTable(tags, 'Tags'));
table.appendChild(appendToTable(classes, 'Classes'));
table.appendChild(appendToTable(ids, 'IDs'));

tableContainer.appendChild(table);
document.body.appendChild(tableContainer);
