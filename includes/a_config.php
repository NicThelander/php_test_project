<?php
// setting up to change tab names
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/php-template/database_work.php":
		$CURRENT_PAGE = "Database";
		$PAGE_TITLE = "Database";
		break;
	case "/php-template/XMLHttp_example.php":
		$CURRENT_PAGE = "XMLHttp_example";
		$PAGE_TITLE = "XMLHttp_example";
		break;
	case "../curl_req.php":
		$CURRENT_PAGE = "curl_req.php";
		$PAGE_TITLE = "curl_req.php";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Index";
}
