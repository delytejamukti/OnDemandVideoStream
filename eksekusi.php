<?php

ini_set('max_execution_time', 300);

if(isset($_POST['id']) && isset($_POST['format']) && isset($_POST['frame_size'])) {
    $id = $_POST['id'];
    $format_ = $_POST['format'];
    $frame_size = $_POST['frame_size'];
    $framerate = $_POST['framerate'];
    $unik = mt_rand(1000000, 9999999);
    $nama_file = explode('.',$id);


    // ffmpeg\bin\ffmpeg -i \upload\teknologi.mp4 -s 230x236
    $root = $_SERVER['DOCUMENT_ROOT'];
    $output_file=" converted/".$nama_file[0]."_".$unik."_converted.".$format_;
    $command = "ffmpeg\bin\\ffmpeg -i uploaded\\".$id." -vf scale=".$frame_size.$framerate.$output_file;
    
    exec($command);
    $output = $root."fpjarmul/deli/converted/".$nama_file[0]."_".$unik."_converted.".$format_;

    if(file_exists($output)){
        $data['flag'] = "sukses";
        $data['linked'] = $output_file;
        $data['output'] = $output;
        header('Content-Type: application/json');
        echo json_encode($data);
    }else{
        $data['flag'] = "gagal";
        $data['linked'] = $output_file;
        $data['output'] = $output;
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    
}










?>