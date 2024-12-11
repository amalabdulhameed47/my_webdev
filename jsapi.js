//assignment 3 amal 202204700
//api link
const url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?limit=20";
//fetch function
async function getData() {
    const response = await fetch(url);
    const data = await response.json();
    displayAPIinfo(data.results);

}

function displayAPIinfo(results) {
    const tableBody = document.getElementById('js-api-results');
    results.forEach(result => {
        const row = document.createElement('tr');
        row.innerHTML =
        `<td>${result.year}</td>
        <td>${result.semester}</td>
        <td>${result.the_programs}</td>
        <td>${result.nationality}</td>
        <td>${result.colleges}</td>
        <td>${result.number_of_students}</td>`;
        tableBody.appendChild(row);
    });
}

getData();