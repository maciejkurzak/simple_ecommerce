<?php

if (isset($_REQUEST['signup'])) {
  $_SESSION['email'] = $_REQUEST['email'];
  $_SESSION['password'] = $_REQUEST['password'];
}
