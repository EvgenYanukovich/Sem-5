<?php
session_start();
echo "Секретное слово: " . htmlspecialchars($_SESSION['secret']);
