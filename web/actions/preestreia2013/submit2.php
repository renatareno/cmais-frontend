<?php
//error_reporting(E_ALL);
//ini_set('display_errors','On');

set_time_limit(0);
ini_set("upload_max_filesize", "21M");
ini_set("post_max_size", "22M");
ini_set("memory_limit", "30M");

$allowedExts = array("jpg", "jpeg", "gif", "png");

if($_FILES["arquivo"]){
  echo "Upload: " . $_FILES["arquivo"]["name"] . "<br>";
  echo "Type: " . $_FILES["arquivo"]["type"] . "<br>";
  echo "Size: " . ($_FILES["arquivo"]["size"] / 1024) . " kB<br>";
  echo "Temp file: " . $_FILES["arquivo"]["tmp_name"] . "<br>";
  $extension = end(explode(".", $_FILES["arquivo"]["name"]));
  if((($_FILES["arquivo"]["type"] == "image/gif") || ($_FILES["arquivo"]["type"] == "image/jpeg") || ($_FILES["arquivo"]["type"] == "image/jpeg") || ($_FILES["arquivo"]["type"] == "image/png") || ($_FILES["arquivo"]["type"] == "image/pjpeg")) && ($_FILES["arquivo"]["size"] < 20554432) && in_array($extension, $allowedExts)){
    if($_FILES["arquivo"]["error"] > 0){
      die("Return Code: " . $_FILES["file"]["error"] . "<br>");
    }
    else{
      if(is_file($_FILES["arquivo"]["tmp_name"])){
        if(multi_attach_mail("preestreia2012@gmail.com", array($_FILES["arquivo, arquivo2"]["tmp_name, tmp_name2"]), $_POST, $_FILES["arquivo, arquivo2"]["name, name2"], "nao-responda@tvcultura.com.br")){
          unlink($_FILES["arquivo"]["tmp_name"]);
          header("Location: http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso");
          //echo ">>>>OK!";
          die();
        }else{
          unlink($_FILES["arquivo"]["tmp_name"]);
          header("Location: http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso");
          //echo ">>>>ERRO!";
          die();
        }
      }
    }
  }
  else{
    header("Location: http://tvratimbum.cmais.com.br/ideias-mirabolantes-erro");
    //echo "Invalid file";
    die();
  }
  die();
}else{
  header("Location: http://tvcultura.cmais.com.br/preestreia");
  die();
}

function multi_attach_mail($to, $files, $form_data, $file_name, $sendermail) {
  // email fields: to, from, subject, and so on
  $from = "Files attach <" . $sendermail . ">";
  $subject = date("d.M H:i") . " F=" . count($files);
  $headers = "From: $from";
  $message = date("Y.m.d H:i:s") . "\n" . count($files) . " attachments\n\n";
  foreach($form_data as $k=>$v){
    $message .= "\n".$k.": ".$v;
  }

  // boundary
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

  // headers for attachmentarquivo
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

  // multipart boundary
  $message = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

  // preparing attachments
  for ($i = 0; $i < count($files); $i++) {
    if (is_file($files[$i])) {
      $message .= "--{$mime_boundary}\n";
      $fp = @fopen($files[$i], "rb");
      $data = @fread($fp, filesize($files[$i]));
      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      //$message .= "Content-Type: application/octet-stream; name=\"" . basename($files[$i]) . "\"\n" . "Content-Description: " . basename($files[$i]) . "\n" . "Content-Disposition: attachment;\n" . " filename=\"" . basename($files[$i]) . "\"; size=" . filesize($files[$i]) . ";\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
      $message .= "Content-Type: application/octet-stream; name=\"" . basename($files[$i]) . "\"\n" . "Content-Description: " . basename($files[$i]) . "\n" . "Content-Disposition: attachment;\n" . " filename=\"" . basename($file_name) . "\"; size=" . filesize($files[$i]) . ";\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
  }
  $message .= "--{$mime_boundary}--";
  $returnpath = "-f" . $sendermail;
  $ok = @mail($to, $subject, $message, $headers, $returnpath);
  if ($ok) {
    return $i;
  } else {
    return 0;
  }
}

die();