//js for the delete
let id = '';
let name = '';
const delBtn = document.querySelectorAll('.del-btn');
const overlay = document.querySelector('.overaly');
const mordal = document.querySelector('.delet-mordal');
const no = document.querySelector('.no');
const yes = document.querySelector('.yes');
delBtn.forEach((btn) => {
  btn.addEventListener('click', function (e) {
    e.preventDefault();
    const row = this.closest('tr');
    id = row.querySelector('.id').textContent;
    name = row.querySelector('.name').textContent;
    document.querySelector('.st-name').textContent = name;

    showMordal();
  });
});

no.addEventListener('click', function (e) {
  e.preventDefault();
  showMordal();
});
yes.addEventListener('click', function (e) {
  e.preventDefault();
  fetch(`delete-student.php?id=${id}`).catch((error) =>
    console.error('Error:', error)
  );
  location.reload();
});

//function to hide/show the mordal
function showMordal() {
  mordal.classList.toggle('show');
  overlay.classList.toggle('show');
}
