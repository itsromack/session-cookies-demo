<?php
session_start();

echo session_destroy() 
	? "Session Destroyed!" 
	: "Session Retained";
?>