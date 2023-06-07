let notification = document.getElementById("notification");
let checdiv = document.getElementById("chec-div");
let flag3 = false;
const notificationHandler = () => {
  if (!flag3) {
    notification.classList.add("translate-x-full");
    notification.classList.remove("translate-x-0");
    setTimeout(function () {
      checdiv.classList.add("hidden");
    }, 1000);
    flag3 = true;
  } else {
    setTimeout(function () {
      notification.classList.remove("translate-x-full");
      notification.classList.add("translate-x-0");
    }, 1000);
    checdiv.classList.remove("hidden");
    flag3 = false;
  }
};