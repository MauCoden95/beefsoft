/*Users table*/
const tableUsers = document.querySelector('.table-users');
const createUsers = document.querySelector('.create-users');
const deleteUsers = document.querySelector('.delete-users');
const btnCreateUser = document.querySelector('.btn-create__user');
const btnDeleteUser = document.querySelector('.btn-delete__user');
const btnCloseCreateUser = document.querySelector('.close-create__user');
const btnCloseDeleteUser = document.querySelector('.close-delete__user');


if (createUsers) {
    createUsers.style.display = "none";
}

if (deleteUsers) {
    deleteUsers.style.display = "none";
}

if (btnCloseCreateUser) {
    btnCloseCreateUser.addEventListener('click', () =>{
        createUsers.style.display = "none";
    });
};


if (btnCreateUser) {
    btnCreateUser.addEventListener('click', () => {
        createUsers.style.display = "block";
    });
}


if (btnDeleteUser) {
  btnDeleteUser.addEventListener('click', () => {
        deleteUsers.style.display = "block";
  });
}

if (btnCloseDeleteUser) {
    btnCloseDeleteUser.addEventListener('click', () =>{
        deleteUsers.style.display = "none";
    });
};








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
