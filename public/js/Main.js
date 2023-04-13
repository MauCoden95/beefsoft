/*Users table*/
const table = document.querySelector('.table');
const createForm = document.querySelector('.create');
const deleteForm = document.querySelector('.delete');
const btnCreate = document.querySelector('.btn-create');
const btnDelete = document.querySelector('.btn-delete');
const btnCloseCreate = document.querySelector('.close-create__user');
const btnCloseDelete = document.querySelector('.close-delete__user');


if (createForm) {
    createForm.style.display = "none";
}

if (deleteForm) {
    deleteForm.style.display = "none";
}

if (btnCreate) {
    btnCreate.addEventListener('click', () => {
        createForm.style.display = "block";
    });
}

if (btnDelete) {
    btnDelete.addEventListener('click', () => {
        deleteForm.style.display = "block";
    });
}

if (btnCloseCreate) {
    btnCloseCreate.addEventListener('click', () => {
        createForm.style.display = "none";
    });
}

if (btnCloseDelete) {
    btnCloseDelete.addEventListener('click', () => {
        deleteForm.style.display = "none";
    });
}btnCloseDelete


// if (btnCloseCreateUser) {
//     btnCloseCreateUser.addEventListener('click', () =>{
//         createUsers.style.display = "none";
//     });
// };


// if (btnCreateUser) {
//     btnCreateUser.addEventListener('click', () => {
//         createUsers.style.display = "block";
//     });
// }


// if (btnDeleteUser) {
//   btnDeleteUser.addEventListener('click', () => {
//         deleteUsers.style.display = "block";
//   });
// }

// if (btnCloseDeleteUser) {
//     btnCloseDeleteUser.addEventListener('click', () =>{
//         deleteUsers.style.display = "none";
//     });
// };













/*Date*/
const textToday = document.querySelector('.today');
const today = new Date();
const days = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Junio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Deciembre"];
const monthName = months[today.getMonth()];
const dayName = days[today.getDay() - 1];
const day = today.getDate();
const year = today.getFullYear();


textToday.innerHTML = `${dayName} ${day} de ${monthName} del ${year}`;


const hour = document.querySelector('.hour');

function updateTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.querySelector('.hour').innerHTML = timeString;
}


setInterval(updateTime, 1000);
