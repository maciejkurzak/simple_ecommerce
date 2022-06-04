const themes = {
  light: '<i class="ri-sun-line"></i>',
  dark: '<i class="ri-moon-line"></i>',
};

const sendUpdateRequest = (toggle) => {
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      // console.log(globalTheme);
      // console.log(this.responseText);
      globalTheme = this.responseText;
      updateTheme();
    }
  };
  xmlhttp.open(
    'GET',
    `${BASE_URL}public/src/theme_switch.php?toggle=${toggle}`,
    true
  );
  xmlhttp.send();
};

document.querySelector('#theme-switch').addEventListener('click', () => {
  sendUpdateRequest(true);
});

const updateTheme = () => {
  document.body.setAttribute('data-theme', globalTheme);
  document.body.setAttribute('data-theme', globalTheme);
  document.querySelector('#theme-switch').innerHTML =
    globalTheme === 'dark' ? themes.light : themes.dark;
};

updateTheme();
