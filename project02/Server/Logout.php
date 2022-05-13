<?php

session_start();
session_unset();
session_destroy();
echo "<script>alert('Goodbye!');window.location.href='../index.html';</script>";
