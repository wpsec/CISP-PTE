<?php
header('Content-type:text/html;charset=gbk');
//黑名单验证，大小写绕过
function step1($files)
{
	$filename = $files["name"];
	$ext = substr($filename, strripos($filename, '.') + 1);
	if ($ext != "php") {
		return true;
	}
	return false;
}

//验证MIME头，修改数据包绕过
function step2($files)
{
	if ($files['type'] == "image/gif" || $files['type'] == "image/jpeg" || $files['type'] == "image/png") {
		return true;
	}
	return false;
}

//验证文件内容，不能包含eval等敏感函数名，使用其他内容，文件读写
function step3($files)
{
	$content = file_get_contents($files["tmp_name"]);



	if (strpos($content, "eval") === false && strpos($content, "assert") === false) {
		return true;
	}
	return false;
}


//验证文件头
function step4($files)
{
	$png_header = "89504e47";
	$jpg_header = "ffd8FFE0";
	$gif_header = "47494638";

	$header = bin2hex(file_get_contents($files["tmp_name"], 0, NULL, 0, 4));

	if (strcasecmp($header, $png_header) == 0 || strcasecmp($header, $jpg_header) == 0 || strcasecmp($header, $gif_header) == 0) {
		return true;
	}
	return false;
}

function judge($files)
{

	if (step1($files) && step2($files)  && step4($files)) {
		return true;
	}
	return false;
}
