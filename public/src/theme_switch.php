<?php

function getTheme()
{
  return $_COOKIE['theme'] ?? 'light';
}

if (isset($_GET['toggle'])) {
  if (getTheme() === 'dark') {
    setcookie('theme', 'light', time() + 86400 * 365, '/'); // 86400 = 1 day
    echo 'light';
  } else {
    setcookie('theme', 'dark', time() + 86400 * 365, '/'); // 86400 = 1 day
    echo 'dark';
  }
} else {
  echo getTheme();
}
